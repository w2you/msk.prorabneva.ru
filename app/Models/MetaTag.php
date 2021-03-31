<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    protected $fillable = [
        'meta_taggable_id',
        'title',
        'description',
        'keywords',
        'image'
    ];
}
