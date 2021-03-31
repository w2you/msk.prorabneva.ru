<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    protected static $_instance;
    protected $selectRegion;


    const REGION_DEFAULT = 1;

    protected $table = 'regions';

    protected $fillable = [
        'title',
        'slug',
        'sort',
        'is_default',
        'is_enable',
        'header',
        'body',
        'footer',
        'phone',
        'email',
        'crm_key',
        'rel_post_2',
        'map_point',
        'seo_title',
        'meta_description',
        'meta_keywords',
		'key_discount'
    ];

    public static function baseRegion(){
        return Region::where(['is_default'=>1])->first();
    }

    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function getRegion(){
        if(!$this->selectRegion){
            $this->selectRegion = Region::where(['is_default'=>1])->first();
            //$regionSlug = trim(str_replace(env('SESSION_DOMAIN'),'',request()->getHttpHost()),'.');
			$regionSlug = trim(str_replace('www','',str_replace(env('SESSION_DOMAIN'),'',request()->getHttpHost())),'.');
            if($regionSlug){
                $this->selectRegion = Region::where(['slug'=>$regionSlug])->first();
            }
        }
        return $this->selectRegion;
    }

}
