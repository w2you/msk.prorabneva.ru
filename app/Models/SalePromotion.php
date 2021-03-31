<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalePromotion extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tour3d()
    {
        return $this->morphToMany(Tour3d::class, 'tour3dable', 'tour3dable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }
}
