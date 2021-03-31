<?php

namespace App\Widgets;


use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;

class FAQWidget implements ContractWidget
{
    public $faq;

    public function __construct($data)
    {
        $this->faq = $data['faq'];
    }

    public function execute()
    {
//        dd($this->faq->title);
        if (!is_null($this->faq) && !is_null($this->faq->title)) {
            return view('Widgets::faq.index', ['faq' => $this->faq]);
        }
    }
}