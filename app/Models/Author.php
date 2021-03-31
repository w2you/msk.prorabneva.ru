<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Author extends Model
{
    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' .  $value ) : '';
    }
}
