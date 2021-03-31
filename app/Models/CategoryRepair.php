<?php

namespace App\Models;

use App\Traits\Tour3dRelation;
use Illuminate\Database\Eloquent\Model;

class CategoryRepair extends Model
{
    use Tour3dRelation;

    protected $table = 'category_repair';

    protected $casts = [
        'advantages' => 'array',
        'banner' => 'object',
        'why_we' => 'object',
        'faq' => 'object',
        'design_repairs' => 'object',
        'prices' => 'object',
        'sale_promotion' => 'object',
        'operations' => 'object',
        'what_we_do' => 'object',
    ];

    const OFFISE_REPAIR = 'remont-ofisov';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategory()
    {
        return $this->belongsTo(CategoryMainRepair::class, 'category_main_repair_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function repairs()
    {
        return $this->hasMany(Repair::class, 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function newRepairs()
    {
        return $this->morphToMany(Repair::class, 'repairable', 'repairable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Query\Builder
     */
    public function repairsLimited()
    {
        return $this->hasMany(Repair::class, 'category_id')->orderBy('created_at', 'desc')->take(8);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function salePromotions()
    {
        return $this->belongsToMany(SalePromotion::class, 'category_repair_sale_promotion', 'category_repair_id', 'sale_promotion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function priceList()
    {
        return $this->hasMany(PriceList::class, 'repair_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }
}
