<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepairInfo
 * @package App
 * @property int page_id
 * @property string top_title
 * @property string top_description
 * @property string bottom_title
 * @property string bottom_description
 * @property array stats
 */
class RepairInfo extends Model
{
    protected $table = 'repair_info';

    protected $casts = [
        'stats' => 'array'
    ];

    protected $fillable = [
        'page_id',
        'top_title',
        'top_description',
        'bottom_title',
        'bottom_description',
        'stats',
        ];
}
