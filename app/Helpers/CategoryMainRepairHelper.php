<?php

namespace App\Helpers;


use App\Exceptions\ExceptionNotXHR;
use App\Models\CategoryMainRepair;
use App\Models\Region;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CategoryRepair;
use App\Models\CategoryService;

class CategoryMainRepairHelper
{
    /**
     * @param Request $request
     * @param null $data
     * @param null $slug
     * @throws ExceptionNotXHR
     */
    public static function saveCategoryMainRepairAdditionalFields(Request $request, $data = null, $slug = null)
    {
        $validator = self::validateTextFields($request, $slug);
        if ($validator->fails()) {
            throw new \Exception(serialize($validator->errors()->getMessages()));
        }

        $validatorImage = self::validateImages($request);
        if ($validatorImage->fails()) {
            throw new ExceptionNotXHR($validatorImage->errors());
        }

        try {
            self::saveAdvantagesImage($request, $data);
            self::saveBannerImage($request, $data);
            if (!isset($data->parentCategory->slug)) {
                self::saveWhyWeImages($request, $data);
            } elseif ($slug !== 'category-repair' || $data->parentCategory->slug === CategoryMainRepair::COMMERCIAL_ROOM_REPAIR || $data->slug == \App\Models\CategoryRepair::OFFISE_REPAIR) {
                self::saveWhyWeImages($request, $data);
            }
            self::saveDesignRepairImage($request, $data);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateTextFields(Request $request, $slug)
    {
        $whyWeRules = [
            'why_we.title' => 'required',
            'why_we.description' => 'required',
            'why_we.feature' => 'array',
            'why_we.feature.*.title' => 'required',
            'why_we.feature.*.description' => 'required',
        ];

        $rules = [
            'advantages' => 'array',
            'advantages.*.title' => 'required_unless:category_main_repair_id,4',
            'advantages.*.description' => 'required_unless:category_main_repair_id,4',

            'what_we_do.items' => 'array',
            'what_we_do.items.*.title' => 'required_if:category_main_repair_id,4',
            'what_we_do.items.*.rows' => 'array',
            'what_we_do.items.*.rows.*' => 'required_if:category_main_repair_id,4',

            'sale_promotion' => 'array',
            'sale_promotion.*' => 'required_if:category_main_repair_id,1',
            'prices' => 'array',
            'prices.*' => 'required_if:category_main_repair_id,1',
            'prices.items' => 'array',
            'prices.items.*.title' => 'required_if:category_main_repair_id,1',

            'design_repairs.feature' => 'array',
            'design_repairs.feature.*.title' => 'required',
            'design_repairs.feature.*.description' => 'required',
        ];

        $allRules = $slug === 'category-repair' && $request->category_main_repair_id != 4 ? $rules : array_merge($rules, $whyWeRules);

        return Validator::make($request->all(), $allRules);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateImages(Request $request)
    {
        return Validator::make($request->all(), [
            'advantages.*.image' => 'image',
            'banner.image' => 'image',
            'why_we.feature.*.image' => 'image',
            'design_repairs.image' => 'image'
        ]);
    }

    /**
     * @param Request $request
     * @param $data
     * @throws \Exception
     */
    public static function saveAdvantagesImage(Request $request, $data)
    {
        if (isset($request->advantages)) {
            if (count($request->advantages)) {
                $advantages = $request->advantages;
                foreach ($advantages as $key => &$advantage) {
                    if (isset($advantage['image'])) {
                        try {
                            $fileInfo = FileHelper::uploadFile('category-main-repair/advantages', $advantage['image']);
                            $advantage['image'] = $fileInfo['download_link'];
                        } catch (\Exception $e) {
                            throw new \Exception(serialize($e->getMessage()));
                        }
                    } elseif (isset($data->advantages[$key]['image']) && $data->exists) {
                        $advantage['image'] = $data->advantages[$key]['image'];
                    }
                }
                $request->merge(['advantages' => $advantages]);
            }
        }
    }

    /**
     * @param Request $request
     * @param $data
     * @throws \Exception
     */
    public static function saveWhyWeImages(Request $request, $data)
    {
        $whyWe = $request->why_we;
        if (count($whyWe['feature'])) {
            foreach ($whyWe['feature'] as $key => &$item) {
                if (isset($item['image'])) {
                    try {
                        $fileInfo = FileHelper::uploadFile('category-main-repair/why_we', $item['image']);
                        $item['image'] = $fileInfo['download_link'];
                    } catch (\Exception $e) {
                        throw new \Exception(serialize($e->getMessage()));
                    }
                } elseif (isset($data->why_we->feature) && $data->exists) {
                    if (isset($data->why_we->feature[$key]->image)) {
                        $item['image'] = $data->why_we->feature[$key]->image;
                    }
                }
            }
        }
        $request->merge(['why_we' => $whyWe]);
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
                $fileInfo = FileHelper::uploadFile('category-main-repair/banner', $request->banner['image']);
                $banner['image'] = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception(serialize($e->getMessage()));
            }
        } elseif (isset($data->banner->image) && $data->exists) {
            $banner['image'] = $data->banner->image;
        }
        $request->merge(['banner' => $banner]);
    }

    /**
     * @param Request $request
     * @param $data
     * @throws \Exception
     */
    public static function saveDesignRepairImage(Request $request, $data)
    {
        $designRepair = $request->design_repairs;
        if (isset($request->design_repairs['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('category-main-repair/design_repairs', $request->design_repairs['image']);
                $designRepair['image'] = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception(serialize($e->getMessage()));
            }
        } elseif (isset($data->design_repairs->image) && $data->exists) {
            $designRepair['image'] = $data->design_repairs->image;
        }
        $request->merge(['design_repairs' => $designRepair]);
    }

    public static function getRepairCategories()
    {
        //Добавил (region_id', Helper::getRegion()->id) что бы меняю не дублировалось
        $mainCategories = CategoryMainRepair::with(['childCategories' => function($q) {
            return $q->whereIn('id', [1, 2, 3,4,5,6,7,8,9,10,14,16,18,19,20,21]);
        }])->where('region_id', Helper::getRegion()->id)->get();

        return $mainCategories;
    }

    public static  function  getSocialMedia(){
        $socialMedia = SocialMedia::get();
        return $socialMedia;
    }

    public static function filter_category($slug)
    {
        $category = CategoryMainRepair::where('slug', $slug)->first();
        if ($category) {
            return 'category';
        } else {
            $childCategory = CategoryRepair::where('slug', $slug)->first();
            $service = CategoryService::where('slug', $slug)->first();
            if ($childCategory) {
                return 'child_category';
            }
        }

        return null;
    }

    public static function filter_services($slug)
    {
        $service = CategoryService::where('slug', $slug)->first();

        if ($service) {
            return 'service';
        }
        return null;
    }
}
