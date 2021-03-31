<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\CategoryMainRepair;
use App\Models\Page;
use App\Models\Repair;
use function foo\func;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::PORTFOLIO);
    }

    public function index(Request $request)
    {
        $this->setBreadCrumbs([
            $this->page->title
        ]);

        $filter['main_cat_id'] = $request->get('main_cat_id');
        $filter['cat'] = $request->get('cat');
        $filter['tour_3d'] = $request->get('tour_3d', 'off');
        $filter['before_after'] = $request->get('before_after', 'off');

        $repairs = Repair
            ::with(['category', 'category.parentCategory', 'tour3d'])
            ->where('region_id', $this->selectRegion->id)
            ->whereHas('category.parentCategory', function ($q) use ($filter) {
                if (!$filter['main_cat_id']) {
					return $q->whereIn('category_main_repair.id', [1, 2])->orWhereIn('category_id', [14, 16]);
                    //return $q->whereIn('category_main_repair.id', [1, 2]);
                } else {
                    return $q->where('category_main_repair.id', $filter['main_cat_id']);
                }
            })
            ->whereHas('category', function ($q) use ($filter) {
                if ($filter['main_cat_id'] == 2) {
                    switch ($filter['cat']) {
                        case 'kitchen':
                            return $q->where('category_repair.id', 7);
                            break;
                        case 'bathroom':
                            return $q->where('category_repair.id', 6);
                            break;
                        case 'room':
                            return $q->whereNotIn('category_repair.id', [6, 7]);
                            break;
                    }
                }
                return $q;
            })
            ->where(function($q) use ($filter) {
                if ($filter['main_cat_id'] == 1  && $filter['tour_3d'] === 'on') {
                    $q->has('tour3d', '>', 0);
                }
                if ($filter['main_cat_id'] == 0  && $filter['tour_3d'] === 'on') {
                    $q->has('tour3d', '>', 0);
                }
            })
            ->where(function ($q) use ($filter) {

                if($filter['before_after'] === 'on'){
                    return $q->whereNotNull('image_before')->where('image_before','<>','[]')->whereNotNull('image_after')->where('image_after','<>','[]');
                }else{
                    return $q;
                }

               // return $filter['before_after'] === 'on' && $filter['main_cat_id'] == 1 ? $q->whereNotNull('image_before')->whereNotNull('image_after') : $q;
            })
            ->orderBy('sort', 'DESC')
            ->orderBy('created_at', 'asc')
            ->get();

        $mainCategories = CategoryMainRepair
            ::whereIn('id', [1, 2])
            ->with('childCategories')
            ->get();

        if ($request->ajax()) {
            return view($this->viewPath . '.portfolio.partials.portfolio')
                ->with([
                    'mainCategories' => $mainCategories,
                    'repairs' => $repairs,
                    'filter' => $filter
                ]);
        }
		/*foreach($repairs as $rep){
			echo $rep->category_id.'<br>';
		}
		die();*/
        return $this->renderView($this->viewPath . '.portfolio.index', [
            'page' => $this->page,
            'mainCategories' => $mainCategories,
            'repairs' => $repairs,
            'filter' => $filter
        ]);
    }
}
