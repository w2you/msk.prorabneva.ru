<?php

namespace App\Helpers;


use App\Exceptions\ExceptionNotXHR;
use App\Models\CategoryMainRepair;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CategoryRepair;
use App\Models\CategoryService;

class CategoryServiceHelper
{
    /**
     * @param Request $request
     * @param null $data
     * @param null $slug
     * @throws ExceptionNotXHR
     */
    public static function saveCategoryServiceAdditionalFields(Request $request, $data = null, $slug = null)
    {
        $validatorImage = self::validateImages($request);
        if ($validatorImage->fails()) {
            throw new ExceptionNotXHR($validatorImage->errors());
        }

        try {
            self::saveBannerImage($request, $data);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateImages(Request $request)
    {
        return Validator::make($request->all(), [
            'banner.image' => 'image',
        ]);
    }

    /**
     * @param Request $request
     * @param $data
     * @throws \Exception
     */
    public static function saveBannerImage(Request $request, $data)
    {
        $banner = $request->banner;
        if (isset($request->banner['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('category-services/banner', $request->banner['image']);
                $banner['image'] = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception(serialize($e->getMessage()));
            }
        } elseif (isset($data->banner->image) && $data->exists) {
            $banner['image'] = $data->banner->image;
        }
        //checkbox удаления изображения
        if (isset($banner['image_clear'])) {
            $banner['image'] = "";
        }
        $request->merge(['banner' => $banner]);

        $banner_bottom = $request->banner_bottom;

        if (isset($request->banner_bottom['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('category-services/banner', $request->banner_bottom['image']);
                $banner_bottom['image'] = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception(serialize($e->getMessage()));
            }
        } elseif (isset($data->banner_bottom->image) && $data->exists) {
            $banner_bottom['image'] = $data->banner_bottom->image;
        }
        //checkbox удаления изображения
        if (isset($banner_bottom['image_clear'])) {
            $banner_bottom['image'] = "";
        }

        $request->merge(['banner_bottom' => $banner_bottom]);


    }



}
