<?php

namespace App\Http\Controllers;

use App\Helpers\CookieConsentHelper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CookieConsentController extends Controller
{
    /**
     * Принять согласие с cookie: зафиксировать акт в журнале админки,
     * запомнить согласие в cookie/сессии и вернуть JSON для фронта.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function accept(Request $request): JsonResponse
    {
        // Логируем акт согласия в журнал админки — один раз (до установки cookie/сессии).
        // Сбой логирования не должен мешать пользователю принять cookie.
        if (!$request->hasCookie('cookie_consent_accepted') && !session()->has('cookie_consent_accepted')) {
            try {
                CookieConsentHelper::store($request);
            } catch (\Throwable $e) {
                Log::warning('Cookie consent logging failed: ' . $e->getMessage());
            }
        }

        // Устанавливаем куку на 1 год
        $cookie = cookie('cookie_consent_accepted', 'true', 60 * 24 * 365);

        // Сохраняем в сессию
        session()->put('cookie_consent_accepted', true);

        return response()->json(['success' => true])->withCookie($cookie);
    }
}
