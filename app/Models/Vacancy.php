<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $casts = [
        'requirements' => 'array',
        'responsibilities' => 'array',
        'conditions' => 'array'
    ];
}
