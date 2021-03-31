<?php

namespace App\Models;


class Page extends \TCG\Voyager\Models\Page
{
    protected $casts = [
        'why_we' => 'object',
        'design_repairs' => 'object',
        'faq' => 'object',
        'principles' => 'object',
        'stabanner' => 'object',
    ];

    const HOME_PAGE = 'home_page';
    const REVIEWS = 'otzivi';
    const OUR_TEAM = 'team';
    const ABOUT = 'about';
    const CONTACT = 'contact';
    const CALCULATOR = 'kalkulyator-remonta';
    const PARTNERS = 'partnery';
    const PORTFOLIO = 'portfolio';
    const SALE_PROMOTIONS = 'actsii';
    const VACANCIES = 'vacancies';
    const PRICE_LIST = 'price-list';

    public static $slugs = [
        self::HOME_PAGE,
        self::REVIEWS,
        self::OUR_TEAM,
        self::ABOUT,
        self::CONTACT,
        self::CALCULATOR,
        self::PORTFOLIO,
        self::PARTNERS,
        self::SALE_PROMOTIONS,
        self::VACANCIES,
        self::PRICE_LIST,
    ];

    /**
     * Page slides
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function slides()
    {
        return $this->hasMany(Slide::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentId()
    {
        return $this->belongsTo(self::class, 'parent_id')->where('id', '<>', $this->id);
    }

    /**
     * @return mixed
     */
    public function parentIdList()
    {
        return self::where('id', '<>', $this->id)->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function repairs()
    {
        return $this->belongsToMany(Repair::class, 'page_repairs')->withTimestamps()->withPivot('sort_rel')->orderBy('sort_rel','ASC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tour3d()
    {
        return $this->morphToMany(Tour3d::class, 'tour3dable', 'tour3dable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function services()
    {
        return $this->belongsToMany(Service::class, 'page_services');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function partners()
    {
        return $this->belongsToMany(Partner::class, 'page_partners');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function repairInfo()
    {
        return $this->hasOne(RepairInfo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
