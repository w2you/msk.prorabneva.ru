<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use App\Traits\Tour3dRelation;

class Post extends Model
{
    protected $fillable = ['author_id', 'category_id', 'title',
        'short_description', 'body', 'slug',
        'short_description_fc',
        'image', 'status', 'date', 'rel_post_1',
        'rel_post_2', 'rel_post_3'
    ];

    const PUBLISHED = 'PUBLISHED';
    use Tour3dRelation;

    public function authorId()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function metaTags()
    {
        return $this->morphOne(MetaTag::class, 'meta_taggable');
    }

    /**
     * Scope a query to only published scopes.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished(Builder $query)
    {
//        return $query->where('status', '=', self::PUBLISHED);
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function relMaterial_1()
    {
        return $this->belongsTo(Post::class, 'rel_post_1');
    }

    public function relMaterial_2()
    {
        return $this->belongsTo(Post::class, 'rel_post_2');
    }

    public function relMaterial_3()
    {
        return $this->belongsTo(Post::class, 'rel_post_3');
    }

//    public function getDateAttribute($value)
//    {
//        return Carbon::parse($value)->format('d/m/Y');
//    }

    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : '';
    }

    public function contents()
    {
        return $this->hasMany(PostContent::class, 'post_id')->orderBy('sort','ASC');
    }
}
