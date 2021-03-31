<?php

namespace App\Widgets;


use App\Models\Partner;
use App\Models\Region;
use Klisl\Widgets\Contract\ContractWidget;

class RegionsWidget implements ContractWidget
{

    public $region;

    public function __construct($data)
    {
        $this->region = $data['region'];
    }

    public function execute()
    {
        $regions = Region::where(['is_enable'=>1])->get();
        return view('Widgets::regions.index', ['regions' => $regions, 'region'=>$this->region]);

    }
}
