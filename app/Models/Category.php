<?php

namespace App\Models;

use App\Traits\Tour3dRelation;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';


    use Tour3dRelation;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }


    /**
     * get all categories with order
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getAll()
    {
        return self::query()->orderBy('order', 'ASC')->get();
    }

    /**
     * get item by slug or FAIL
     *
     * @param $slug
     * @return \Illuminate\Database\Eloquent\Builder|Model
     */
    public static function itemBySlugOrFail($slug)
    {
        return self::query()->where('slug', $slug)->firstOrFail();
    }

    public function materials()
    {
        return $this->hasMany(Post::class, 'category_id')->orderBy('date', 'DESC')->where('status','PUBLISHED');
    }

    public function materials5()
    {
        return $this->materials()->take(5);
    }

    public function materials3()
    {
        return $this->materials()->take(3);
    }
}
