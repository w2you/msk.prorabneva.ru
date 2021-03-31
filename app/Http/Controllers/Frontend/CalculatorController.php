<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Page;

class CalculatorController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::CALCULATOR);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setBreadCrumbs([
            $this->page->title
        ]);
        $page = $this->page;

        return $this->renderView($this->viewPath . '.calculator.index',compact('page'));
    }
}
