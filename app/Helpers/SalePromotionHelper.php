<?php

namespace App\Helpers;


use App\Exceptions\ExceptionNotXHR;
use App\Models\SalePromotion;
use App\Models\Tour3d;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalePromotionHelper
{
    /**
     * @param null $id
     * @return object
     */
    public static function getSalePromotionData($id = null)
    {
        $salePromotion = is_null($id) ? null : SalePromotion::with('tour3d')->find($id);
        $banner = is_null($id) ? null : json_decode($salePromotion->banner);
        $allTour3d = Tour3d::all();
        $tour3d = is_null($id) ? null : $salePromotion->tour3d;
        $sales = is_null($id) ? null : json_decode($salePromotion->sales);
        $conditions = is_null($id) ? null : json_decode($salePromotion->conditions);
        $whyWe = is_null($id) ? null : json_decode($salePromotion->why_we);
        $metaTags = is_null($id) ? null : $salePromotion->metaTags;

        return (object)compact('banner', 'allTour3d', 'tour3d', 'sales', 'conditions', 'whyWe', 'metaTags');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateSave(Request $request)
    {
        return Validator::make($request->all(), [
            'banner.title' => 'required',
            'banner.description' => 'required',
            'sales' => 'array',
            'sales.*.title' => 'required',
            'sales.*.description' => 'required',
            'sales.*.price' => 'required|numeric|min:1',
            'conditions' => 'required|array',
            'conditions.*' => 'required',
            'whyWe.title' => 'required',
            'whyWe.description' => 'required',
            'whyWe.feature' => 'array',
            'whyWe.feature.*.title' => 'required',
            'whyWe.feature.*.description' => 'required',
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateImage(Request $request)
    {
        return Validator::make($request->all(), [
            'banner.image' => 'image',
            'sales.*.image' => 'image',
        ], [
            'image' => __('validation.image', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * @param Request $request
     * @param $salePromotion
     * @throws ExceptionNotXHR
     */
    public static function saveData(Request $request, &$salePromotion)
    {
        $validator = self::validateSave($request);
        if ($validator->fails()) {
            throw new \Exception(serialize($validator->errors()->getMessages()));
        }

        $validatorImage = self::validateImage($request);
        if ($validatorImage->fails()) {
            throw new ExceptionNotXHR($validatorImage->errors());
        }

        $validatorWhyWeImage = self::validateWhyWeImageSave($request);
        if ($validatorWhyWeImage->fails()) {
            throw new ExceptionNotXHR($validatorWhyWeImage->errors());
        }

        try {
            self::saveBanner($request, $salePromotion);
            self::saveSales($request, $salePromotion);
            $salePromotion->conditions = json_encode($request->conditions);
            self::saveWhyWe($request, $salePromotion);
        } catch (\Exception $e) {dd($e);
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param $salePromotion
     * @throws \Exception
     */
    public static function saveBanner(Request $request, &$salePromotion)
    {
        $banner = new \stdClass();
        $banner->title = $request->banner['title'];
        $banner->description = $request->banner['description'];
        $banner->link = $request->banner['link'];
        $banner->button_text = $request->banner['button_text'];

        if (isset($request->banner['image'])) {
            if (isset($request->banner['image'])) {
                try {
                    $fileInfo = FileHelper::uploadFile('sale_promotion/banner', $request->banner['image']);
                    $banner->image = $fileInfo['download_link'];
                } catch (\Exception $e) {
                    throw new \Exception(serialize($e->getMessage()));
                }
            }
        } else {
            $banner->image = json_decode($salePromotion->banner)->image;
        }
        $banner = json_encode($banner);
        $salePromotion->banner = $banner;
    }

    /**
     * @param Request $request
     * @param $salePromotion
     * @throws \Exception
     */
    public static function saveSales(Request $request, &$salePromotion)
    {
        $arr = [];

        foreach ($request->sales as $key => $sale) {
            $obj = new \stdClass();
            $obj->title = $sale['title'];
            $obj->description = $sale['description'];
            $obj->price = $sale['price'];
            if (isset($sale['image'])) {
                try {
                    $fileInfo = FileHelper::uploadFile('sale_promotion/sales', $sale['image']);
                    $obj->image = $fileInfo['download_link'];
                } catch (\Exception $e) {
                    throw new \Exception(serialize($e->getMessage()));
                }
            } else {
                if (!is_null($salePromotion->sales)) {
                    $obj->image = json_decode($salePromotion->sales)[$key]->image;
                }
            }
            $arr[] = $obj;
        }

        $salePromotion->sales = json_encode($arr);
    }

    /**Validate whyWe image save
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateWhyWeImageSave(Request $request)
    {
        return Validator::make($request->all(), [
            'whyWe.feature.*.image' => 'image'
        ], [
            'image' => __('validation.image', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * Save Page->why_we
     * @param Request $request
     * @param $salePromotion
     * @throws \Exception
     */
    public static function saveWhyWe(Request $request, &$salePromotion)
    {
        $data = [];
        $data['title'] = $request->whyWe['title'];
        $data['description'] = $request->whyWe['description'];

        foreach ($request->whyWe['feature'] as $key => $item) {
            $feature = [];
            $feature['title'] = $item['title'];
            $feature['description'] = $item['description'];

            if (isset($item['image'])) {
                try {
                    $fileInfo = FileHelper::uploadFile('whyWe', $item['image']);
                    $feature['image'] = $fileInfo['download_link'];
                } catch (\Exception $e) {
                    throw new \Exception(serialize($e->getMessage()));
                }
            } else {
                $feature['image'] = json_decode($salePromotion->why_we)->feature[$key]->image;
            }
            $data['feature'][$key] = $feature;
        }

        $salePromotion->why_we = json_encode($data);
    }
}