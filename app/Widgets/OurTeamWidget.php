<?php

namespace App\Widgets;


use App\Models\OurTeam;
use Klisl\Widgets\Contract\ContractWidget;

class OurTeamWidget implements ContractWidget
{

    private $region;

    public function __construct($data)
    {
        $this->region = $data['region'];
    }

    public function execute()
    {
        $workers = OurTeam
            ::where(['region_id'=>$this->region->id])
            ->take(6)->with('category')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Widgets::our_team.index', ['workers' => $workers,'region'=>$this->region]);
    }
}