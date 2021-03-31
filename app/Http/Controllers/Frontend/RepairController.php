<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Mail\CallOrdered;
use App\Models\CategoryMainRepair;
use App\Models\CategoryPriceList;
use App\Models\CategoryRepair;
use App\Models\CommercialRepair;
use App\Models\Partner;
use App\Models\Repair;
use App\Models\Slide;
use Carbon\Carbon;

use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Meta;
use App\Helpers;

class RepairController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRepairMainCategory($mainSlug)
    {

        if($mainSlug =="remont-medicinskih-ucrezdenij"){
            abort(404);

        }
        if ($mainSlug === "flat-repair") {
            abort(404);
        }

       $result = Helpers\CategoryMainRepairHelper::filter_category($mainSlug);
        if ($result === "child_category") {
            return $this->getRepairCategoryFirst($mainSlug);
        } elseif ($result == null) {
            abort(404);
        }

        $mainCategory = CategoryMainRepair
            ::with(['childCategories' => function ($q) {
            },
                'newRepairs',
                'childCategories.repairs' => function ($q) {
//                return $q->where();
                }, 'metaTags'])
            ->where('slug', $mainSlug)
            ->where('region_id',$this->selectRegion->id)
            ->first();

        if (!$mainCategory) {
            abort(404);
        }

        $mainCategory->childCategories->map(function ($category) {
            $category->setRelation('repairs', $category->repairs->take(5));
        });
        $categoey_new = 'Ремонт  комнаты';

        $repairs = Repair
            ::
            //with('category.parentCategory', 'category')->
            whereHas('category.parentCategory', function ($q) {
                return $q->where('category_main_repair.id', 2);
            })->get();
        $newRepairs = array();
        //dd($mainCategory->childCategories[0]);
        foreach ($repairs as $repair) {
            if ($repair->category->id == 6) {
                $newRepairs['bathRoom'][] = $repair;
            } elseif ($repair->category->id == 7) {
                $newRepairs['kitchen'][] = $repair;
            } else {
                $newRepairs['room'][] = $repair;
            }
        }

        if ($mainCategory->slug !== CategoryMainRepair::COMMERCIAL_ROOM_REPAIR) {
            $partners = Partner::limit(6)->orderBy('created_at', 'asc')->get();
        } else {
            $partners = $mainCategory->partners;
        }

        $commercialRepairs = CommercialRepair::orderBy('sorting','ASC')->get();

        if (!is_null($mainCategory->metaTags)) {
            Meta::set('title', $mainCategory->metaTags->title);
            Meta::set('description', $mainCategory->metaTags->description);
            Meta::set('keywords', $mainCategory->metaTags->keywords);
        }

        $this->setBreadCrumbs([
            !empty($mainCategory->menu_title) ? $mainCategory->menu_title : $mainCategory->title
        ]);
        $priceListCategories = CategoryPriceList
            ::with(['childCategories' => function ($q) {
                return $q->whereNotNull('image')->where('img_status', '>', 0)->orderBy('img_status', 'asc');
            }, 'childCategories.priceList', 'priceList'])
            ->has('childCategories', '>', 0)
            ->get();
        $priceListCategories->map(function ($category) {
            $category->setRelation('childCategories', $category->childCategories->take(4));
        });

        return $this->renderView($this->viewPath . '.repairs.repair_main_category', [
            'mainCategory' => $mainCategory,
            'slug' => $mainCategory->slug,
            'partners' => $partners,
            'commercialRepairs' => $commercialRepairs,
            'priceListCategories' => $priceListCategories,
            'newRepairs' => $newRepairs
        ]);
    }

    public function getRepairCategory($slug,$subSlug)
    {
        if($slug == "remont-kommerceskih-pomeshenij" && $subSlug=="remont-proizvodstvennyh-pomesenij"){
            abort(404);
        }
        if($slug == "remont-kommerceskih-pomeshenij" && $subSlug=="remont-salonov-krasoty"){
            abort(404);
        }
		
		//проверяем укрл подкатегории
        if(!$subCategory =  CategoryMainRepair::where(['slug'=>$slug,'region_id'=>$this->selectRegion->id])->first()){
            abort(404);
        }
		
        $category = CategoryRepair
            ::where(['slug'=>$subSlug,'region_id'=>$this->selectRegion->id])
            ->with(['repairs' => function ($q) {
                return $q->limit(5)->orderBy('created_at', 'desc');
            }, 'parentCategory', 'salePromotions', 'priceList', 'newRepairs', 'metaTags'])
            ->first();
        if (!$category) {
            abort(404);
        }

        if (!is_null($category->metaTags)) {
            Meta::set('title', $category->metaTags->title);
            Meta::set('description', $category->metaTags->description);
            Meta::set('keywords', $category->metaTags->keywords);
        }
        $partners = Partner::limit(6)->orderBy('created_at', 'asc')->get();
         $this->setBreadCrumbs([
             route('getRepairMainCategory', $slug) =>
                 !empty($category->parentCategory->menu_title) ? $category->parentCategory->menu_title : $category->parentCategory->title,
             !empty($category->menu_title) ? $category->menu_title : $category->title
         ]);
        $priceListCategories = CategoryPriceList
            ::with(['childCategories' => function ($q) {
                return $q->whereNotNull('image')->where('img_status', '>', 0)->orderBy('img_status', 'asc');
            }, 'childCategories.priceList', 'priceList'])
            ->has('childCategories', '>', 0)
            ->get();
        $priceListCategories->map(function ($category) {
            $category->setRelation('childCategories', $category->childCategories->take(4));
        });
        $commercialRepairs = CommercialRepair::orderBy('sorting','ASC')->get();
        return $this->renderView($this->viewPath . '.repairs.repair_category', [
            'category' => $category,
            'partners' => $partners,
            'slug' => $slug,
            'commercialRepairs' => $commercialRepairs,
            'priceListCategories' => $priceListCategories,
        ]);
    }

    /*RepairCategoryFirst*/
    public function getRepairCategoryFirst($subSlug)
    {

        $category = CategoryRepair
            ::where(['slug'=>$subSlug,'region_id'=>$this->selectRegion->id])
            ->with(['repairs' => function ($q) {
                return $q->limit(5)->orderBy('created_at', 'desc');
            }, 'parentCategory', 'salePromotions', 'priceList', 'newRepairs', 'metaTags'])
            ->first();
        if (!$category) {
            abort(404);
        }
        /*
          $priceListIds = $category->priceList->pluck('id')->toArray();
          $priceListCategories = CategoryPriceList
          ::with(['priceList' => function ($q) use ($priceListIds) {
              return $q->whereIn('id', $priceListIds);
          }, 'priceList.unit'])
          ->whereHas('priceList', function ($q) use ($priceListIds) {
              return $q->whereIn('id', $priceListIds);
          })
          ->get();*/
        $priceListCategories = CategoryPriceList
            ::with(['childCategories' => function ($q) {
                return $q->whereNotNull('image')->where('img_status', '>', 0)->orderBy('img_status', 'asc');
            }, 'childCategories.priceList', 'priceList'])
            ->has('childCategories', '>', 0)
            ->get();
        $priceListCategories->map(function ($category) {
            $category->setRelation('childCategories', $category->childCategories->take(4));
        });

        if (!is_null($category->metaTags)) {
            Meta::set('title', $category->metaTags->title);
            Meta::set('description', $category->metaTags->description);
            Meta::set('keywords', $category->metaTags->keywords);
        }
        $slug = $category->parentCategory->slug;
        $partners = Partner::limit(6)->orderBy('created_at', 'asc')->get();
        $this->setBreadCrumbs([
            route('getRepairMainCategory', $slug) =>
                !empty($category->parentCategory->menu_title) ? $category->parentCategory->menu_title : $category->parentCategory->title,
            !empty($category->menu_title) ? $category->menu_title : $category->title
        ]);
//       dd($slug);
        return $this->renderView($this->viewPath . '.repairs.repair_category', [
            'category' => $category,
            'slug' => $subSlug,
            'partners' => $partners,
            'priceListCategories' => $priceListCategories,
        ]);
    }
    /*End RepairCategoryFirst*/

    public function callOrder(Request $request)
    {
        $curentUrl = url()->previous();
        $time = Carbon::now();

        try {
            $data = [
                'id' => $request->id,
                'title' => $request->title,
                'phone' => $request->phone,
                'name' => $request->name,
                'time' => $time,
                'curentUrl' => $curentUrl,
            ];
            $email_array = [
                'prorabneva@mail.ru',
                'info@prorabneva.ru',
                'lavrova@prorabneva.ru',
                'zahdima1996@gmail.com'
            ];
            Mail::to($email_array)->send(new CallOrdered($data));
            $phone = $request->phone;
            $date_time = $time->format('H:i:s');
            $date = $time->format('Y.m.d');
			$roistatUrl = $_SERVER['HTTP_REFERER'];
			$roistatUrlArr = explode('?',$roistatUrl);
            $roistatData = array(
                'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
                'key' => 'NDAyNjQ6NDU2MDE6ODBhOGI0NjJjMzEyYTUwZWViZTU0YmZmMGUyZDBiNzc=', // API-ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
                'title' => 'Заявка с \'Заказать звонок\'',
                'name' => $request->name,
                'phone' => $phone,
                'fields' => array(
                    'form_name' => 'Заказать звонок',
                    'url' => $roistatUrlArr[0]
                ),
            );

            file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

            $eventData = array(
                'visit' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
                'event' => 'measure_form',
                'data' => array(
                    'url' => $_SERVER['HTTP_REFERER']
                )
            );
            file_get_contents("https://cloud.roistat.com/api/site/1.0/45601/event/register?" . http_build_query($eventData));
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }


}
