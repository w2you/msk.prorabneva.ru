<?php

namespace App\Models;


use App\Traits\Tour3dRelation;
use Illuminate\Database\Eloquent\Model;

class CategoryMainRepair extends Model
{
    use Tour3dRelation;

    protected $table = 'category_main_repair';

    protected $casts = [
        'advantages' => 'array',
        'banner' => 'object',
        'why_we' => 'object',
        'faq' => 'object',
        'design_repairs' => 'object',
        'operations' => 'object',
        'what_we_do' => 'object',
    ];

    //If slug of Repair main categories
    //change in DB, you should change
    //it's value here too
    const FLAT_REPAIR = 'flat-repair';
    const COMMERCIAL_ROOM_REPAIR = 'remont-kommerceskih-pomeshenij';
    const PRIVATE_HOUSE_REPAIR = 'remont-domov';
    const ROOM_REPAIR = 'remont-komnat';

    public function childCategories()
    {
        return $this->hasMany(CategoryRepair::class)->where('status', '=', 1);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }
    /**
     * @return App\Models\Region
    */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partners()
    {
        return $this->hasMany(Partner::class, 'category_main_repair_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function newRepairs()
    {
        return $this->morphToMany(Repair::class, 'repairable', 'repairable');
    }

}