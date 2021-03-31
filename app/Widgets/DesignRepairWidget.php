<?php

namespace App\Widgets;


use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;

class DesignRepairWidget implements ContractWidget
{
    public $designRepair;

    public $class;

    public function __construct($data)
    {
        $this->designRepair = $data['designRepair'];
        $this->class= isset($data['class']) ? $data['class'] : '';
    }

    public function execute()
    {
        if (!is_null($this->designRepair)) {
            return view('Widgets::design_repair.index', [
                'designRepair' => $this->designRepair,
                'class' => $this->class,
            ]);
        }
    }
}