<?php

namespace App\Widgets;


use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;

class BannerWidget implements ContractWidget
{
    public $banner;

    public $isHome;

    public $title;

    public $class;

    public function __construct($data)
    {
        $this->banner = $data['banner'];
        $this->isHome = isset($data['isHome']) ? $data['isHome'] : false;
        $this->class = isset($data['class']) ? $data['class'] : '';
        $this->title = isset($data['banner']->button_text) ? $data['banner']->button_text : (isset($data['title']) ? $data['title'] : 'Подробнее');
    }

    public function execute()
    {
        if (!is_null($this->banner)) {
            return view('Widgets::banner.index', [
                'banner' => $this->banner,
                'isHome' => $this->isHome,
                'title' => $this->title,
                'class' => $this->class
            ]);
        }
    }
}