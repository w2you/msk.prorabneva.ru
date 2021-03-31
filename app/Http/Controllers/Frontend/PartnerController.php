<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::PARTNERS);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setBreadCrumbs([
            $this->page->title
        ]);

        $partners = Partner::all();

        return $this->renderView($this->viewPath . '.partners.index', compact('partners'));
    }
}