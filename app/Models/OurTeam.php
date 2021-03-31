<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $table = 'our_team';

    public function category()
    {
        return $this->belongsTo(CategoryOurTeam::class, 'category_id');
    }
}
