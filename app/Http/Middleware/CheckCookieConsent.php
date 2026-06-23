<?php

namespace App\Http\Middleware;

use Closure;

class CheckCookieConsent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Согласие дано, если есть кука (на год) или отметка в текущей сессии.
        $consentGiven = $request->hasCookie('cookie_consent_accepted')
            || session()->has('cookie_consent_accepted');

        // Флаг для шаблонов: по нему гейтятся счётчики (Метрика, Roistat, VK)
        // и серверные noscript-пиксели — до согласия они не отдаются.
        view()->share('cookieConsentGiven', $consentGiven);

        // Если согласия нет — показываем баннер.
        if (!$consentGiven) {
            view()->share('showCookieBanner', true);
        }

        return $next($request);
    }
}
