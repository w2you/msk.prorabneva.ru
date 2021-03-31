<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $table = 'repairs';

//    protected $with=['page'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(CategoryRepair::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tour3d()
    {
        return $this->morphToMany(Tour3d::class, 'tour3dable', 'tour3dable');
    }
	
	public function getImagemainAttribute()
    {
		$src = '';
		if(!$this->image){
			$images = $this->imagesAfter;
			if($images && isset($images[0])) {
				$src = $images[0]['image'];
			}    
		}else{
			$src = $this->image;
		}
        
        return $src;
    }
    /*public function getImageAttribute()
    {
        $images = $this->imagesAfter;
        if($images && isset($images[0])) {
            $src = $images[0]['image'];
        } else {
            $src = '';
        }
        return $src;
    }*/

    public function imagesBefore()
    {
        return $this->hasMany(RepairImages::class, 'repair_id')->where('type',1)->orderBy('sort','ASC');
    }

    public function imagesAfter()
    {
        return $this->hasMany(RepairImages::class, 'repair_id')->where('type',2)->orderBy('sort','ASC');
    }

    public function imageDesignProject()
    {
        return $this->hasMany(RepairImages::class, 'repair_id')->where('type',3)->orderBy('sort','ASC');
    }

    public function imageReviews()
    {
        return $this->hasMany(RepairImages::class, 'repair_id')->where('type',4)->orderBy('sort','ASC');
    }

    public function pages()
    {
        return $this->belongsToMany(Page::class, 'page_repairs','repair_id','page_id');
    }

}
