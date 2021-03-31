<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\CategoryChildPriceList;
use App\Models\CategoryMainRepair;
use App\Models\CategoryPriceList;
use App\Models\Page;
use Meta;

class PriceListController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::PRICE_LIST);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $priceListCategories = CategoryPriceList
            ::with(['childCategories' => function ($q) {
                return $q->whereNotNull('image')->where('img_status', '>', 0)->orderBy('img_status', 'asc');
            }, 'childCategories.priceList', 'priceList'])
            ->has('childCategories', '>', 0)
            ->get();
        $priceListCategories->map(function ($category) {
            $category->setRelation('childCategories', $category->childCategories->take(4));
        });

        $this->setBreadCrumbs([
            $this->page->title
        ]);
        return $this->renderView($this->viewPath . '.price_list.index', [
            'page' => $this->page,
            'priceListCategories' => $priceListCategories
        ]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $bid_title = "";
        $has_not_breadcrumbs = false;
        if (isset($slug)) {
            if ($slug == "remont-sten") {
                $bid_title = "Оставьте заявку на ремонт стен";
            }
            if ($slug == "remont-potolka") {
                $bid_title = "Оставьте заявку на ремонт потолка";
            }
            if ($slug == "elektromontazhnye-raboty") {
                $bid_title = "Оставьте заявку на проведение электромонтажных работ";
            }
            if ($slug == "santehnicheskie-raboty") {
                $bid_title = "Оставьте заявку на проведение сантехнических работ";
            }
            if ($slug == "mashinnaya-shtukaturka") {
                $bid_title = "Машинная штукатурка";
                $has_not_breadcrumbs = true;
            }
        }

        $categoryPriceList = CategoryPriceList
            ::where('slug', $slug)
            ->with(['childCategories', 'priceList' => function ($q) {
                return $q->orderBy('image', 'desc')->limit(3);
            }, 'priceList.unit'])
            ->first();
        $categoryMainRepairs = CategoryMainRepair::all();
        $this->setBreadCrumbs([
            route('getRepairMainCategory', ['slug' => 'otdelochnyie-raboty']) => 'Отделочные работы',
            $categoryPriceList->title
        ]);
        if (!is_null($categoryPriceList->metaTags)) {
            Meta::set('title', $categoryPriceList->metaTags->title);
            Meta::set('description', $categoryPriceList->metaTags->description);
            Meta::set('keywords', $categoryPriceList->metaTags->keywords);
        }


        if($has_not_breadcrumbs){
            return $this->renderView($this->viewPath . '.price_list.mechanized_plaster',compact('bid_title','has_not_breadcrumbs','categoryPriceList', 'categoryMainRepairs'));
        }
        return $this->renderView($this->viewPath . '.price_list.show_category', compact('categoryPriceList', 'categoryMainRepairs', 'bid_title'));


    }

    public function priceListChildCategory($slug, $child_slug)
    {

        $childCategory = CategoryChildPriceList
            ::where('slug', $child_slug)
			->where('status', 1)
            ->whereHas('parentCategory',function ($q) use ($slug){
                return $q->where('slug', $slug);
            })
            ->with(['parentCategory', 'priceList', 'priceList.unit'])
            ->first();
        if (is_null($childCategory)) {
            abort(404);
        }
        $this->setBreadCrumbs([
            route('getRepairMainCategory', ['slug' => 'otdelochnyie-raboty']) => 'Отделочные работы',
             route('priceListCategory', $childCategory->parentCategory->slug) => $childCategory->parentCategory->title,
            $childCategory->title
        ]);

        if (!is_null($childCategory->metaTags)) {
            Meta::set('title', $childCategory->metaTags->title);
            Meta::set('description', $childCategory->metaTags->description);
            Meta::set('keywords', $childCategory->metaTags->keywords);
        }

        return $this->renderView($this->viewPath . '.price_list.show_child_category', compact('childCategory'));
    }
}
