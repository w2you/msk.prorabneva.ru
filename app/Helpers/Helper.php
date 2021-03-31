<?php

namespace App\Helpers;


use App\Models\PageRepair;
use App\Models\Region;
use Illuminate\Support\Facades\Request;

class Helper
{
    public static function convertKeysDotToBracket($messages)
    {
        $messageArr = @unserialize($messages);

        if ($messageArr === FALSE) {
            return $messages;
        }

        $keys = array_keys($messageArr);
        foreach ($keys as $id => $key) {
            if (strpos($key, '.') !== FALSE) {
                $key = preg_replace('/\./', '][', $key);
                $key = substr_replace($key, '', strpos($key, ']'), 1);
                $keys[$id] = $key . ']';
            }
        }

        return array_combine($keys, $messageArr);
    }

    public static function repairs($selectRegion)
    {

        $url = Request::path();
        if ($url == '/') {
            $repairs = PageRepair::where(['url' => $url,'region_id'=>$selectRegion->id])->first();
        }elseif(strlen($url) > 1){
            $url = '/' . $url;
            $repairs = PageRepair::where(['url' => $url,'region_id'=>$selectRegion->id])->first();
            if (!$repairs) {
                $repairs = PageRepair::where(['url' => '','region_id'=>$selectRegion->id])->first();
            }
        } else {
            $repairs = PageRepair::where(['url' => '','region_id'=>$selectRegion->id])->take(5)->get();
        }
        return $repairs;
    }

    public static function reviewPaginateLink($url)
    {
        preg_match('/\?page=([\d]+)/', $url, $res);

        if (count($res) == 2 && $res[1] != 1) {
            $url = config('app.url') . '/otzivi/page' . $res[1];
        } else
            $url = config('app.url') . '/otzivi';

        return $url;
    }

    public static function getKeyForContentItem()
    {
        $keys = session('content_item_keys', []);
        $key = rand(100, 999);
        if (in_array($key, $keys))
            self::getKeyForContentItem();
        $keys[] = $key;
        session(['content_item_keys' => $keys]);

        return $key;
    }

    public static function getDateMonth($date)
    {
        $monfs = ['января' => 'Январь', 'февраля' => 'Февраль', 'марта' => 'Март', 'апреля' => 'Апрель',
            'мая' => 'Май', 'июня' => 'Июнь', 'июля' => 'Июль', 'августа' => 'Август',
            'сентября' => 'Сентябрь', 'октября' => 'Октябрь', 'ноября' => 'Ноябрь', 'декабря' => 'Декабрь'];

        foreach ($monfs as $key => $item) {
            $date = str_replace($item, $key, $date);
        }
        return $date;
    }

    public static function getPrice($price)
    {
        $region = Helper::getRegion();

        $koef1 = $region->koef1;
        $koef2 = $region->koef2;

        $price = $price * 1;
        $price1 = $price + ($price * $koef1 / 100);
        $price2 = $price1 - ($price1 * $koef2 / 100);

        return '<span>'. round($price1) . '  руб.</span> ' . round($price2) . ' руб.';
    }

    public static function getRegion(){
        $selectRegion = Region::where(['is_default'=>1])->first();
        $regionSlug = trim(str_replace('www','',str_replace(env('SESSION_DOMAIN'),'',request()->getHttpHost())),'.');
		
        if($regionSlug){
            $selectRegion = Region::where(['slug'=>$regionSlug])->first();
        }

        return $selectRegion;
    }


    public static function getRSSDate($value){
        return date(DATE_RFC822, strtotime($value));
    }
}
