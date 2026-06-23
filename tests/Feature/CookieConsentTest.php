<?php

namespace Tests\Feature;

use App\Helpers\CookieConsentHelper;
use App\Models\CookieConsent;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Тесты эндпоинта согласия с cookie (POST /cookie-consent/accept).
 * Используется DatabaseTransactions: каждая запись откатывается после теста.
 */
class CookieConsentTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Согласие логируется в журнал и ставится cookie.
     *
     * @test
     * @return void
     */
    public function acceptLogsConsentAndSetsCookie(): void
    {
        $before = CookieConsent::count();

        $response = $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.50'])
            ->post('/cookie-consent/accept', [], [
                'Referer'    => 'https://prorabneva.ru/uslugi',
                'User-Agent' => 'PHPUnit Browser',
            ]);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);
        $response->assertCookie('cookie_consent_accepted');

        // Создана ровно одна запись акта согласия
        $this->assertSame($before + 1, CookieConsent::count());

        $consent = CookieConsent::orderBy('id', 'desc')->first();
        $this->assertSame('cookie-banner', $consent->form);
        $this->assertSame('https://prorabneva.ru/uslugi', $consent->page_url);
        $this->assertSame('https://prorabneva.ru/uslugi', $consent->referer);
        $this->assertSame(CookieConsentHelper::POLICY_VERSION, $consent->policy_version);
        $this->assertNotEmpty($consent->ip);
        $this->assertNotEmpty($consent->user_agent);
        $this->assertNotEmpty($consent->consented_at);
    }

    /**
     * Повторное согласие (уже зафиксировано в сессии) не плодит записи.
     *
     * @test
     * @return void
     */
    public function acceptDoesNotLogDuplicateWhenAlreadyConsented(): void
    {
        $before = CookieConsent::count();

        $response = $this->withSession(['cookie_consent_accepted' => true])
            ->post('/cookie-consent/accept');

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assertSame($before, CookieConsent::count());
    }

    /**
     * Эндпоинт защищён троттлингом (throttle:10,1): 11-й запрос за минуту → 429.
     *
     * @test
     * @return void
     */
    public function acceptIsRateLimited(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $this->post('/cookie-consent/accept')->assertStatus(200);
        }

        $this->post('/cookie-consent/accept')->assertStatus(429);
    }
}
