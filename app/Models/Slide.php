<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property  string title
 * @property  string description
 * @property  string image
 * @property  string thumbnail
 * @property  string link
 * @property  boolean status
 * @property  integer page_id
 */
class Slide extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
    /**
     * @return App\Models\Region
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
