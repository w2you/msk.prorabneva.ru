<?php

namespace App\Widgets;


use Klisl\Widgets\Contract\ContractWidget;

class RepairWidget implements ContractWidget
{
    public $childCategory;

    public function __construct($data)
    {
        $this->childCategory = $data['childCategory'];
    }

    public function execute()
    {
        if (!is_null($this->childCategory) ) {
            return view('Widgets::repair.index', ['childCategory' => $this->childCategory]);
        }
    }
}