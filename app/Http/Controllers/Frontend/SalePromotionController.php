<?php

namespace App\Http\Controllers\Frontend;


use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Region;
use App\Models\SalePromotion;
use App\Stock;
use Meta;

class SalePromotionController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::SALE_PROMOTIONS);
    }

    public function index()
    {
        $this->setBreadCrumbs([
            $this->page->title
        ]);

        $sales = Stock::where('status',1)->where('region_id', Helper::getRegion()->id)->get();
        $page = $this->page;

        return $this->renderView($this->viewPath . '.sale_promotions.index', compact('sales', 'page'));
    }

    public function getSalePromotion($slug)
    {
        $sale = SalePromotion::where('slug', $slug)->where('region_id', Helper::getRegion()->id)->with('tour3d')->first();

        if (!$sale) {
            abort(404);
        }

        $this->setBreadCrumbs([
            route('salePromotions') => $this->page->title,
            $sale->title
        ]);

        if (!is_null($sale->metaTags)) {
            Meta::set('title', $sale->metaTags->title);
            Meta::set('description', $sale->metaTags->description);
            Meta::set('keywords', $sale->metaTags->keywords);
        }

        return $this->renderView($this->viewPath . '.sale_promotions.show', compact('sale'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getHappyNewer()
    {
        $sale = SalePromotion::where('slug', 'chistyj-dom')->where('region_id', Helper::getRegion()->id)->with('tour3d')->first();

        if (!$sale) {
            abort(404);
        }

        $this->setBreadCrumbs([
            route('salePromotions') => $this->page->title,
            $sale->title
        ]);

        if (!is_null($sale->metaTags)) {
            Meta::set('title', $sale->metaTags->title);
            Meta::set('description', $sale->metaTags->description);
            Meta::set('keywords', $sale->metaTags->keywords);
        }
        $this->setBreadCrumbs([
            route('saleHappy') => $this->page->title,
            'НОВЫЙ ГОД',
            //$sale->title
        ]);
        return $this->renderView($this->viewPath . '.sale_promotions.partials.happynewer',compact('sale'));
    }

    public function saleShow()
    {
        return $this->renderView('frontend.services.podarok',['has_not_breadcrumbs' => true,'categoryService' => [],'mainCategory' => [], 'breadCrumbs' => ['Технический дизайн-проект в подарок']]);
    }
}
