<?php

namespace App\Widgets;


use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;

class PriceListWidget implements ContractWidget
{


    public function __construct($data)
    {

        $this->title = $data['title'];
        if( isset($data['rub'])){
            $this->rub = $data['rub'];
        }else{
            $this->rub ='';
        }
        $this->priceListCategories = $data['priceListCategories'];
    }

    public function execute()
    {
        return view('Widgets::price_list.index', [
            'title' => $this->title,
            'rub' => $this->rub,
            'priceListCategories' =>  $this->priceListCategories,
        ]);
    }
}