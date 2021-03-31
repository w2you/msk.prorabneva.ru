<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageRepair extends Model
{
    protected $table = 'page_repairs';
    protected $fillable = ['repair_id','page_id','sort_rel'];


    public function pageId(){
        return $this->belongsTo(Page::class,'page_id');
    }

    public function repairId1(){
        return $this->belongsTo(Repair::class,'repair_id1');
    }
    public function repairId2(){
        return $this->belongsTo(Repair::class,'repair_id2');
    }
    public function repairId3(){
        return $this->belongsTo(Repair::class,'repair_id3');
    }
    public function repairId4(){
        return $this->belongsTo(Repair::class,'repair_id4');
    }
    public function repairId5(){
        return $this->belongsTo(Repair::class,'repair_id5');
    }
    public function repairId6(){
        return $this->belongsTo(Repair::class,'repair_id6');
    }
}
