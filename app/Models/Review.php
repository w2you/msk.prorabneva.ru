<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * @package App
 * @property integer rating
 * @property string title
 * @property string body
 * @property string author
 * @property integer deal_number
 * @property array images
 * @property string author_image
 */
class Review extends Model
{
    protected $casts = [
//        'images' => 'json'
    ];

    public function scopeVisible()
    {
        return self::where('status', 1);
    }
}
