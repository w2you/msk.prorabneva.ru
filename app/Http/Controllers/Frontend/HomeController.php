<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\CallOrdered;
use App\Mail\FooterPhone;
use Carbon\Carbon;

use App\Models\CategoryMainRepair;
use App\Models\Page;
use App\Models\Repair;
use App\Models\Slide;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\CategoryPriceList;

use Meta;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::HOME_PAGE);
    }

    /**
     * Render Homepage
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setMeta();
        $mainCategory = CategoryMainRepair
            ::with(['childCategories', 'childCategories.repairs'])
            ->where('slug', CategoryMainRepair::FLAT_REPAIR)
            ->where('region_id', $this->selectRegion->id)
            ->first();
        if (isset($mainCategory->childCategories)){
            $mainCategory->childCategories->map(function ($category) {
                $category->setRelation('repairs', $category->repairs->take(5));
            });
        }

        $reviews = Review::where('region_id', $this->selectRegion->id)->where('status', 1)->orderBy('order_show', 'desc')->orderBy('created_at', 'desc')->limit(15)->get();
		
		
        // dd($reviews);
        $avgRating = round(Review::where('status', 1)->where('region_id', $this->selectRegion->id)->avg('rating'), 1);
        //dd($avgRating);
        $priceListCategories = CategoryPriceList
            ::with(['childCategories' => function ($q) {
                return $q->whereNotNull('image')->where('img_status', '>', 0)->orderBy('img_status', 'asc');
            }, 'childCategories.priceList', 'priceList'])//->where('region_id', $this->selectRegion->id)
            ->has('childCategories', '>', 0)
            ->get();
        //dd($priceListCategories);
        $priceListCategories->map(function ($category) {
            $category->setRelation('childCategories', $category->childCategories->take(4));
        });

        return $this->renderView($this->viewPath . '.homepage.index', [
            'repairs' => [],
            'page' => $this->page,
            'mainCategory' => $mainCategory,
            'priceListCategories' => $priceListCategories,
            'reviews' => $reviews,
            'avgRating' => $avgRating,
        ]);
    }


    public function getRepair(Request $request)
    {
        $repair = Repair::where('id', $request->id)->first();
        return view($this->viewPath . '.modals.repair', compact('repair'))->render();
    }

    public function callOrderPopup(Request $request)
    {
        $curentUrl = url()->previous();
        $time = Carbon::now();

        try {
            $data = [
                'phone' => $request->phone,
                'name' => $request->name,
                'for_popup' => $request->for_popup,
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
            /* foreach ($email_array as $email) {

                 Mail::to($email)->send(new CallOrdered($data));

             }*/
            $phone =  $request->phone;
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

    public function emailFooter(Request $request)
    {
        $curentUrl = url()->previous();
        $time = Carbon::now();

        try {
            $data = [
                'phone' => $request->phone,
                'text' => 'Телефон пользователя: ',
                'time' => $time,
                'curentUrl' => $curentUrl,
            ];
            $email_array = [
                'prorabneva@mail.ru',
                'info@prorabneva.ru',
                'lavrova@prorabneva.ru',
                'zahdima1996@gmail.com'
            ];
            Mail::to($email_array)->send(new FooterPhone($data));

            /*  foreach ($email_array as $email) {
                  Mail::to($email)->send(new FooterPhone($data));
              }*/

            $date_time = $time->format('H:i:s');
            $date = $time->format('Y.m.d');

            $phone = $request->phone;
			$roistatUrl = $_SERVER['HTTP_REFERER'];
			$roistatUrlArr = explode('?',$roistatUrl);
            $roistatData = array(
                'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
                'key' => 'NDAyNjQ6NDU2MDE6ODBhOGI0NjJjMzEyYTUwZWViZTU0YmZmMGUyZDBiNzc=', // API-ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
                'title' => 'Заявка с \'Форма из футера\'',
                'name' => 'no name',
                'phone' => $phone,
                'fields' => array(
                    'form_name' => 'Форма из футера',
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
