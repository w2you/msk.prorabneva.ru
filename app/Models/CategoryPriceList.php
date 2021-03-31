<?php

namespace App\Models;

use App\Traits\Tour3dRelation;
use Illuminate\Database\Eloquent\Model;

class CategoryPriceList extends Model
{
    use Tour3dRelation;

    protected $table = 'category_price_list';

    /**
     * @var array
     */
    protected $casts = [
        'faq' => 'object'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function priceList()
    {
        return $this->hasMany(PriceList::class, 'category_id');
    }

    /* priceListUnit - закешированый метод сократил выборку с 290 до 46 запросов */
    public function getPriceListUnitAttribute(){
        return PriceList::where(['category_id'=>$this->id])->with('unit')->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childCategories()
    {
        return $this->hasMany(CategoryChildPriceList::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }
}
