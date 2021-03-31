<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function category()
    {
        return $this->belongsTo(CategoryWorker::class);
    }
}
