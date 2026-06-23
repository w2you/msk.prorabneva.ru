<?php

namespace Tests\Feature;

use App\Helpers\CookieConsentHelper;
use App\Models\CookieConsent;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Tests\TestCase;

/**
 * Тест доменной логики логирования согласия (CookieConsentHelper::store).
 * Данные берутся на сервере из запроса: page_url из Referer, ip, user_agent.
 */
class CookieConsentHelperTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * store() сохраняет поля акта согласия из запроса.
     *
     * @test
     * @return void
     */
    public function storePersistsConsentFieldsFromRequest(): void
    {
        $request = Request::create('/cookie-consent/accept', 'POST', [], [], [], [
            'REMOTE_ADDR'     => '198.51.100.10',
            'HTTP_USER_AGENT' => 'Helper Test UA',
            'HTTP_REFERER'    => 'https://prorabneva.ru/price',
        ]);

        $consent = CookieConsentHelper::store($request);

        $this->assertInstanceOf(CookieConsent::class, $consent);
        $this->assertTrue($consent->exists);
        $this->assertSame('cookie-banner', $consent->form);
        $this->assertSame('https://prorabneva.ru/price', $consent->page_url);
        $this->assertSame('https://prorabneva.ru/price', $consent->referer);
        $this->assertSame('198.51.100.10', $consent->ip);
        $this->assertSame('Helper Test UA', $consent->user_agent);
        $this->assertSame(CookieConsentHelper::POLICY_VERSION, $consent->policy_version);
        $this->assertNotNull($consent->consented_at);
    }

    /**
     * Без Referer page_url берётся из полного URL запроса.
     *
     * @test
     * @return void
     */
    public function storeFallsBackToFullUrlWhenNoReferer(): void
    {
        $request = Request::create('https://prorabneva.ru/some-page', 'POST');

        $consent = CookieConsentHelper::store($request);

        $this->assertSame('https://prorabneva.ru/some-page', $consent->page_url);
        $this->assertNull($consent->referer);
    }

    /**
     * Длинный URL (> 255 символов) сохраняется без обрезки — колонка TEXT.
     *
     * @test
     * @return void
     */
    public function storeKeepsLongUrlWithoutTruncation(): void
    {
        $longUrl = 'https://prorabneva.ru/search?' . str_repeat('q[]=value&', 60);
        $this->assertGreaterThan(255, strlen($longUrl));

        $request = Request::create('/', 'POST', [], [], [], ['HTTP_REFERER' => $longUrl]);

        $consent = CookieConsentHelper::store($request);

        // Читаем из БД, чтобы убедиться, что значение не обрезалось при сохранении
        $this->assertSame($longUrl, $consent->fresh()->page_url);
    }
}
