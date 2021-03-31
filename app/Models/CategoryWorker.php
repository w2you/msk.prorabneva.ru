<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryWorker extends Model
{
    const MANAGERS = 'managers';
    const MEASUREMENT_SPECIALISTS = 'measurement_specialists';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workers()
    {
        return $this->hasMany(Worker::class, 'category_id')->orderBy('workers.created_at','ASC');
    }
}
