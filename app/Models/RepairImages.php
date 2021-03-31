<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepairImages extends Model
{
    protected $table = 'repair_images';

    protected $fillable = [
        'image',
        'repair_id',
        'type',
        'sort'
    ];
}
