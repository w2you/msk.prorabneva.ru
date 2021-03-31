<?php

namespace App\Widgets;


use App\Models\Review;
use App\Models\Slide;
use Klisl\Widgets\Contract\ContractWidget;

class SliderWidget implements ContractWidget
{
    public $slides;
    public $region;

    public function __construct($data)
    {
        $this->slides = $data['slides'];
        $this->region = $data['region'];
    }

    public function execute()
    {
        $slides = Slide::where(['status'=> 1,'region_id'=>$this->region->id])->orderBy('sorting','ASC')->get();
        return view('Widgets::slider.index', ['slides' => $slides,'region'=>$this->region]);
    }
}
