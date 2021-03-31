<?php

namespace App\Traits;

use App\Models\Tour3d;

trait Tour3dRelation
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tour3d()
    {
        return $this->morphToMany(Tour3d::class, 'tour3dable', 'tour3dable');
    }
}