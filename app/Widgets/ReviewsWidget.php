<?php

namespace App\Widgets;


use App\Helpers\Helper;
use App\Models\Region;
use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;

class ReviewsWidget implements ContractWidget
{
    public $isHome;

    public $title;
    
    public $avgRating;

    public $region;
	
	public $color_white;

	public $reviews;

    public function __construct($data)
    {
        $this->isHome = isset($data['isHome']) ? $data['isHome'] : false;
        $this->title = (array_key_exists('title',$data))?$data['title']:'ОТЗЫВЫ КЛИЕНТОВ О «ПРОРАБ НЕВА»';
        $this->color_white = $data['color_white'] ?? false;
        $this->avgRating = round(Review::where('status',1)->avg('rating'), 1);
        $this->region = Helper::getRegion();//(array_key_exists("region",$data))?$data['region']:Region::baseRegion();
        if(isset($data['reviews'])){
            $reviews  = $data['reviews'];
        }else{
            $reviews = Review::where('region_id', $this->region->id)->where('status', 1)->orderBy('order_show', 'desc')->orderBy('created_at', 'desc')->limit(15)->get();
        }
        $this->reviews =  $reviews;
    }

    public function execute()
    {
        //$reviews = Review::visible()->where(['region_id'=>$this->region->id])->orderBy('id', 'ASC')->take(15)->get();
        return view('Widgets::reviews.index')
            ->with([
                'avgRating' => $this->avgRating,
                'reviews' => $this->reviews,
                'title' => $this->title,
                'isHome' => $this->isHome,
                'color_white' => $this->color_white
            ]);
    }
}
