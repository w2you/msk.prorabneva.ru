<?php

namespace App\Widgets;


use App\Models\Review;
use Klisl\Widgets\Contract\ContractWidget;

class RepairInfoWidget implements ContractWidget
{
    public $repairInfo;

    public function __construct($data)
    {
        $this->repairInfo = $data['repairInfo'];
    }

    public function execute()
    {
        return view('Widgets::repair_info.index', ['repairInfo' => $this->repairInfo]);
    }
}