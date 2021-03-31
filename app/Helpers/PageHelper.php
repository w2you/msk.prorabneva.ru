<?php

namespace App\Helpers;


use App\Exceptions\ExceptionNotXHR;
use App\Models\Banner;
use App\Models\CategoryMainRepair;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Repair;
use App\Models\Service;
use App\Models\Slide;
use App\Models\RepairInfo;
use App\Models\Tour3d;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageHelper
{

    /**
     * Get page data
     * @param int $id
     * @param null $slug
     * @return object
     */
    public static function getPageData(int $id, $page, $slug = null)
    {
        switch ($slug) {
            case Page::HOME_PAGE:
                $restSlides = Slide::whereNull('page_id')->get();
                $slides = Slide::where('page_id', $id)->get();
                $repairInfo = RepairInfo::where('page_id', $id)->first();
//                $repairs = $page->repairs()->orderBy('page_repairs.id', 'asc')->get();
                $repairs = [];
                $allRepairs = Repair::get()->keyBy('id')->toArray();
                $banner = Banner::where('page_id', $id)->first();
                $whyWe = $page->why_we;
                $designRepairs = $page->design_repairs;
                $faq = $page->faq;
                $tour3d = $page->tour3d;
                $allTour3d = Tour3d::all();
                $services = $page->services;
                $allServices = Service::all();
                $metaTags = $page->metaTags;

                $arr = [];
                foreach ($repairs as $repair) {
                    if (array_key_exists($repair->id, $allRepairs)) {
                        $arr[$repair->id] = $allRepairs[$repair->id];
                        unset($allRepairs[$repair->id]);
                    }
                }
                $allRepairs = array_merge($allRepairs, $arr);
//                dd(count($allRepairs));

//                foreach ($repairList as $item) {
//                    if ($)
//                }

                return (object)compact(
                    'slides',
                    'restSlides',
                    'repairInfo',
                    'repairs',
                    'allRepairs',
                    'banner',
                    'whyWe',
                    'designRepairs',
                    'faq',
                    'tour3d',
                    'allTour3d',
                    'services',
                    'allServices',
                    'metaTags'
                );
                break;
            case Page::REVIEWS:
                $metaTags = $page->metaTags;

                return (object)compact(
                    'metaTags'
                );
                break;
            case Page::OUR_TEAM:
                $metaTags = $page->metaTags;

                return (object)compact(
                    'metaTags'
                );
                break;
            case Page::ABOUT:
                $metaTags = $page->metaTags;
                $whyWe = $page->why_we;
                $tour3d = $page->tour3d;
                $allTour3d = Tour3d::all();
                $principles = $page->principles;
                $partners = $page->partners;
                $allPartners = Partner::all();

                return (object)compact(
                    'metaTags',
                    'whyWe',
                    'tour3d',
                    'allTour3d',
                    'principles',
                    'partners',
                    'allPartners'
                );
                break;
            case Page::PRICE_LIST:
                $metaTags = $page->metaTags;
                $faq = $page->faq;

                return (object)compact(
                    'faq',
                    'metaTags'
                );
                break;
            default:
                $metaTags = $page->metaTags;

                return (object)compact(
                    'metaTags'
                );
                break;
        }

    }

    /**
     * Get current page data
     * @param $slug
     * @return mixed
     */
    public static function getPageWithData($slug, $region)
    {
        switch ($slug) {
            case Page::HOME_PAGE:
                $relations = [
                    'slides',
                    'repairInfo',
                    'banner'
//                    'repairs'
                    /*=> function($q) {
                    return $q->orderBy('created_at', 'desc');
                    }*/,
                    'tour3d',
                    'services',
                    'metaTags',
                ];
                break;
            case Page::REVIEWS:
                $relations = [
                    'metaTags'
                ];
                break;
            case Page::ABOUT:
                $relations = [
                    'metaTags',
                    'tour3d',
                    'partners'
                ];
                break;
            default:
                $relations = [
                    'metaTags'
                ];
        }

        return Page::where(['slug' => $slug,'region_id'=>$region->id])->with($relations)->first();
    }

    /**
     * Validate banner save
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateBanner(Request $request)
    {
        return Validator::make($request->all(), [
            'banner.title' => 'required',
            'banner.description' => 'required',
            'banner.link' => 'required',
        ], [
            'required' => __('validation.required', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * Validate banner image for non ajax
     * request, because of Voyager doesn't
     * send image as file through ajax
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateImageBanner(Request $request)
    {
        return Validator::make($request->all(), [
            'banner.image' => 'image'
        ], [
            'image' => __('validation.image', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * Save banner
     * @param Request $request
     * @param $pageId
     * @throws \Exception
     */
    public static function saveBanner(Request $request, $pageId)
    {
        $validator = self::validateBanner($request);
        if ($validator->fails()) {
            throw new \Exception(serialize($validator->errors()->getMessages()));
        }

        $validatorImage = self::validateImageBanner($request);
        if ($validatorImage->fails()) {
            throw new ExceptionNotXHR($validatorImage->errors());
        }

        $banner = Banner::firstOrNew(['page_id' => $pageId]);
        $banner->title = $request->banner['title'];
        $banner->description = $request->banner['description'];
        $banner->link = $request->banner['link'];
        $banner->title = $request->banner['title'];

        if (isset($request->banner['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('banner', $request->banner['image']);
                $banner->image = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception(serialize($e->getMessage()));
            }
        }

        $banner->save();
    }

    /**
     * Validate whyWe save
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateWhyWeSave(Request $request)
    {
        return Validator::make($request->all(), [
            'whyWe.title' => 'required',
            'whyWe.description' => 'required',
            'whyWe.feature' => 'array',
            'whyWe.feature.*.title' => 'required',
            'whyWe.feature.*.description' => 'required',
        ], [
            'required' => __('validation.required', ['attribute' => ':attribute']),
        ]);
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
     * @param $page
     * @throws \Exception
     */
    public static function saveWhyWe(Request $request, &$page)
    {
        $validator = self::validateWhyWeSave($request);
        if ($validator->fails()) {
            throw new \Exception(serialize($validator->errors()->getMessages()));
        }

        $validatorImage = self::validateWhyWeImageSave($request);
        if ($validatorImage->fails()) {
            throw new ExceptionNotXHR($validatorImage->errors());
        }

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
                $feature['image'] = $page->why_we->feature[$key]->image;
            }
            $data['feature'][$key] = $feature;
        }

        $page->why_we = $data;
    }

    /**
     * Validate Design repairs save
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateDesignRepairsSave(Request $request)
    {
        return Validator::make($request->all(), [
            'designRepairs.feature' => 'array',
            'designRepairs.feature.*.title' => 'required',
            'designRepairs.feature.*.description' => 'required',
        ], [
            'required' => __('validation.required', ['attribute' => ':attribute']),
        ]);
    }

    /**Validate Design repairs image save
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateDesignRepairsImageSave(Request $request)
    {
        return Validator::make($request->all(), [
            'designRepairs.image' => 'image'
        ], [
            'image' => __('validation.image', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * Save Page->design_repairs
     * @param Request $request
     * @param $page
     * @throws \Exception
     */
    public static function saveDesignRepairs(Request $request, &$page)
    {
        $validator = self::validateDesignRepairsSave($request);
        if ($validator->fails()) {
            throw new \Exception(serialize($validator->errors()->getMessages()));
        }

        $validatorImage = self::validateDesignRepairsImageSave($request);
        if ($validatorImage->fails()) {
            throw new ExceptionNotXHR($validatorImage->errors());
        }

        $clone = $request->designRepairs;
        if (isset($request->designRepairs['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('designRepairs', $request->designRepairs['image']);
                $clone['image'] = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception(serialize($e->getMessage()));
            }
        } else {
            $clone['image'] = $page->design_repairs->image;
        }

        $page->design_repairs = $clone;
    }

    /**
     * Validate FAQ save
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateFaqSave(Request $request)
    {
        return Validator::make($request->all(), [
            'faq.title' => 'required',
            'faq' => 'array',
            'faq.items.*.question' => 'required',
            'faq.items.*.answer' => 'required',
        ], [
            'required' => __('validation.required', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * FAQ save
     * @param Request $request
     * @param $page
     * @throws \Exception
     */
    public static function saveFaq(Request $request, &$page)
    {
        $validator = self::validateFaqSave($request);
        if ($validator->fails()) {
            throw new \Exception(serialize($validator->errors()->getMessages()));
        }

        $page->faq = $request->faq;
    }

    /**
     * @param Request $request
     * @param $page
     */
    public static function saveMeta(Request $request, $page)
    {
        $page->metaTags()->updateOrCreate([
            'meta_taggable_id' => $page->id
        ], [
            'title' => $request->meta['title'],
            'description' => $request->meta['description'],
            'keywords' => $request->meta['keywords'],
        ]);
    }

    /**
     * @param Request $request
     * @param null $data
     * @param null $slug
     * @throws ExceptionNotXHR
     */
    public static function savePagesAdditionalFields(Request $request, $data = null, $slug = null)
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
        $banner = $request->stabanner;
        if (isset($request->stabanner['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('pages/banner', $request->stabanner['image']);
                $banner['image'] = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception(serialize($e->getMessage()));
            }
        } elseif (isset($data->stabanner->image) && $data->exists) {
            $banner['image'] = $data->stabanner->image;
        }
        $request->merge(['stabanner' => $banner]);
    }

}
