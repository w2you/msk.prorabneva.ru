<?php

namespace App\Helpers;

use App\Models\CookieConsent;
use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CookieConsentHelper
{
    /**
     * Текущая версия текста политики обработки данных.
     * Меняйте при изменении текста согласия — чтобы подтвердить,
     * с какой редакцией согласился посетитель (152-ФЗ).
     *
     * @var string
     */
    public const POLICY_VERSION = '2026-06-21';

    /**
     * Идентификатор формы, с которой пришло согласие.
     *
     * @var string
     */
    public const FORM = 'cookie-banner';

    /**
     * Зафиксировать акт согласия с cookie.
     * Все данные берутся на сервере из запроса (фронт тело не присылает):
     * страница — из Referer, плюс ip, user_agent, регион, версия политики.
     *
     * @param Request $request HTTP-запрос с эндпоинта согласия
     * @return CookieConsent Сохранённая запись акта согласия
     */
    public static function store(Request $request): CookieConsent
    {
        $referer = $request->headers->get('referer');

        return CookieConsent::create([
            'consented_at'   => Carbon::now(),
            'form'           => self::FORM,
            'page_url'       => $referer ?: $request->fullUrl(),
            'ip'             => $request->ip(),
            'user_agent'     => $request->userAgent(),
            'referer'        => $referer,
            'policy_version' => self::POLICY_VERSION,
            'region_id'      => optional(Region::getInstance()->getRegion())->id,
        ]);
    }
}
