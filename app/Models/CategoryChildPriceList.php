<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryChildPriceList extends Model
{
    protected $table = 'category_child_price_list';

    protected $casts = [
        'why_we' => 'object'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategory()
    {
        return $this->belongsTo(CategoryPriceList::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function priceList()
    {
        return $this->hasMany(PriceList::class, 'child_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }
}
