<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Акт согласия посетителя с обработкой данных (cookie).
 *
 * @property int         $id
 * @property string      $consented_at   Дата и время согласия
 * @property string      $form           Идентификатор формы/баннера
 * @property string|null $page_url       Страница, на которой дано согласие
 * @property string|null $ip             IP-адрес посетителя
 * @property string|null $user_agent     User-Agent браузера
 * @property string|null $referer        Referer-страница
 * @property string|null $policy_version Версия текста политики
 * @property int|null    $region_id      Регион
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Region|null $region
 */
class CookieConsent extends Model
{
    /**
     * @var string
     */
    protected $table = 'cookie_consents';

    /**
     * @var array
     */
    protected $fillable = [
        'consented_at',
        'form',
        'page_url',
        'ip',
        'user_agent',
        'referer',
        'policy_version',
        'region_id',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'consented_at',
        'created_at',
        'updated_at',
    ];

    /**
     * Регион, в котором дано согласие.
     *
     * @return BelongsTo
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
