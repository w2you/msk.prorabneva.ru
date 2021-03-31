<?php

namespace App\Widgets;


use App\Models\Review;
use App\Models\Tour3d;
use Klisl\Widgets\Contract\ContractWidget;

class Tour3dWidget implements ContractWidget
{
    public $tours;

    public function __construct($data)
    {
        $this->tours = $data['tours'] ?? null;
    }

    public function execute()
    {
        if (!$this->tours || !count($this->tours)) {
            $this->tours = Tour3d::whereIn('id', [ 1, 2, 3, 4, 6])->orderBy('sort','DESC')->get();
        }

        return view('Widgets::tour3d.index', ['tours' => $this->tours]);

    }
}
