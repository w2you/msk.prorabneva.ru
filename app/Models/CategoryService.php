<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    protected $casts=[
        'faq'=>'object',
        'banner' => 'object',
        'banner_bottom' => 'object',
        ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function newRepairs()
    {
        return $this->morphToMany(Repair::class, 'repairable', 'repairable');
    }


}
