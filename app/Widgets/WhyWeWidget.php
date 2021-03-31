<?php

namespace App\Widgets;


use Klisl\Widgets\Contract\ContractWidget;

class WhyWeWidget implements ContractWidget
{
    public $whyWe;

    public $isHome;

    public $class;

    public $hideTitle;

    public $is_old;

    public function __construct($data)
    {
        $this->whyWe = $data['whyWe'];
        $this->isHome = isset($data['isHome']) ? $data['isHome'] : false;
        $this->class = isset($data['class']) ? $data['class'] : '';
        $this->hideTitle = isset($data['hideTitle']);
        $this->is_old = isset($data['is_old']);
    }

    public function execute()
    {
        if ($this->is_old) {
            return view('Widgets::why_we.index_old')
                ->with([
                    'whyWe' => $this->whyWe,
                    'isHome' => $this->isHome,
                    'class' => $this->class,
                    'hideTitle' => $this->hideTitle,
                ]);
        } else {
            return view('Widgets::why_we.index');
        }
    }
}
