<?php

namespace App\Widgets;


use App\Models\Partner;
use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;

class PartnersWidget implements ContractWidget
{
    public $partners;

    public $title;

    public $subTitle;

    public $class;

    public $region;

    public function __construct($data)
    {

        $this->title = isset($data['title']) ? $data['title'] : 'Наши партнеры';
        $this->subTitle = isset($data['subTitle']) ? $data['subTitle'] : 'Проверенные партнеры, предоставляющие дополнительный сервис и скидки для вас';
        $this->class = $data['class'] ?? '';
        //$this->region = $data['region'] ?? '';

        $this->partners = $data['partners'] ?? Partner::all();

    }

    public function execute()
    {
        return view('Widgets::partners.index', [
            'partners' => $this->partners,
            'title' => $this->title,
            'subTitle' => $this->subTitle,
            'class' => $this->class,
        ]);
    }
}
