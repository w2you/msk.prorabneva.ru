<?php

namespace App\Widgets;


use App\Models\Review;
use App\Models\Slide;
use Klisl\Widgets\Contract\ContractWidget;

class BannerSlideWidget implements ContractWidget
{
    public $bannerId;

    public $slide_link;

    public function __construct($data)
    {
        $this->bannerId = $data['id'] ?? null;
        $this->slide_link = $data['slide_link'] ?? 'call_open_popup_button';
    }

    public function execute()
    {
        $slide = Slide::find($this->bannerId);
        if ($slide)
            return view('Widgets::banner.slide', [
                'slide' => $slide,
                'slide_link' => $this->slide_link,
            ]);
    }
}
