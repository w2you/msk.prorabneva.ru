<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\CategoryPriceList;
use App\Models\CategoryService;
use App\Models\Page;
use App\Models\ServicePriceList;
use App\Models\CategoryMainRepair;
use Illuminate\Http\Request;

use Meta;
use App\Models\Repair;

class CategoryServiceController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getServiceCategory(Request $request,$slug)
    {
        $repairs = Repair
            ::
            //with('category.parentCategory', 'category')->
            whereHas('category.parentCategory', function ($q) {
                return $q->where('category_main_repair.id', 2);
            })->get();
        $newRepairs = $repairs;
        $segment = $request->segment(2);
        $segment = $slug;
        $categoryService = CategoryService::where('slug', $slug)->where('region_id', $this->selectRegion->id)->with('metaTags')->first();
        //
        $mainCategory = CategoryMainRepair
            ::with(['childCategories', 'childCategories.repairs'])
            ->where('slug', CategoryMainRepair::FLAT_REPAIR)
            ->first();
        //



        if(!$categoryService) {
            abort(404);
        }
        $this->setBreadCrumbs([
            $categoryService->title
        ]);

        $categoryPriceList = CategoryPriceList::where('status', 1)->get();
        if (!is_null($categoryService->metaTags)) {
            Meta::set('title', $categoryService->metaTags->title);
            Meta::set('description', $categoryService->metaTags->description);
            Meta::set('keywords', $categoryService->metaTags->keywords);
        }

        if ($categoryService->slug == 'remont-kvartir-v-novostrojke') {
            $has_not_breadcrumbs = true;

            return $this->renderView('frontend.services.new_building', compact('categoryService','mainCategory','has_not_breadcrumbs'));
        }



        if ($categoryService->slug == 'otdelochnyie-raboty') {
//            $repairs = Page::where('slug','=',Page::HOME_PAGE)->with('repairs')->first()->repairs;
            $repairs = [];
            $has_not_breadcrumbs = true;

            return $this->renderView('frontend.services.finishing_works', compact('categoryService', 'categoryPriceList','repairs','has_not_breadcrumbs'));
        }

        if ($categoryService->slug == 'dizajn-interera-kvartir') {
            $mainCategory = CategoryMainRepair
                ::with(['childCategories', 'childCategories.repairs'])
                ->where('slug', 'dizajn-interera-kvartir')
                ->first();
            //
            // dd($mainCategory);

            $has_not_breadcrumbs = true;
            return $this->renderView('frontend.services.design_interier', compact('categoryService','mainCategory','has_not_breadcrumbs'));
        }

        if ($categoryService->slug == 'remont-v-hrushchevke') {
            $mainCategory = CategoryMainRepair
                ::with(['childCategories', 'childCategories.repairs'])
                ->where('id', 2)
                ->first();

            $has_not_breadcrumbs = true;
            return $this->renderView('frontend.services.remont_hrushchevke', compact('categoryService','mainCategory','has_not_breadcrumbs'));
        }

        if ($categoryService->slug == 'otdelka-v-novostroyke') {
            $has_not_breadcrumbs = true;
            return $this->renderView('frontend.services.finishing_buildings', compact('categoryService','has_not_breadcrumbs'));
        }
        $priceListCategories = CategoryPriceList
            ::with(['childCategories' => function ($q) {
                return $q->whereNotNull('image')->where('img_status', '>', 0)->orderBy('img_status', 'asc');
            }, 'childCategories.priceList', 'priceList'])
            ->has('childCategories', '>', 0)
            ->get();
        $priceListCategories->map(function ($category) {
            $category->setRelation('childCategories', $category->childCategories->take(4));
        });
        if ($categoryService->slug == 'priemka-kvartir') {
            return $this->renderView($this->viewPath . '/services/priemka_kvartir', [
                'categoryService' => $categoryService,
                'segment' => $segment,
                'priceListCategories' => $priceListCategories,
            ]);
        }



        return $this->renderView($this->viewPath . '/services/category', [
            'categoryService' => $categoryService,
            'segment' => $segment,
            'priceListCategories' => $priceListCategories,
        ]);
    }
}
