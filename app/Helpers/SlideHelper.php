<?php

namespace App\Helpers;


use App\Exceptions\ExceptionNotXHR;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SlideHelper
{

    public static $allowedImageMimeTypes = [
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/bmp',
        'image/svg+xml',
    ];

    /**
     * @param array $slideArr
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateUpdateSlide(array $slideArr)
    {
        return Validator::make($slideArr, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'image',
            'thumbnail' => 'image',
        ],  [
            'required' => __('validation.required', ['attribute' => ':attribute']),
            'image' => __('validation.image', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * @param array $slideArr
     * @param int $pageId
     * @param Request $request
     * @param int $slideId
     * @throws \Exception
     */
    public static function updateSlide(array $slideArr, int $pageId, Request $request, int $slideId)
    {
        $validator = self::validateUpdateSlide($slideArr);

        if ($validator->fails() && !$request->ajax()) {
            throw new ExceptionNotXHR($validator->errors());
        }

        $slide = Slide::find($slideId);

        if (!$slide) {
            throw new \Exception('Slide not found');
        }

        $slide->link = $slideArr['link'];
        $slide->title = $slideArr['title'];
        $slide->description = $slideArr['description'];
        $slide->link = $slideArr['link'];
        $slide->page_id = $pageId;

        if (isset($slideArr['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('slides', $slideArr['image']);
                $slide->image = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
        if (isset($slideArr['thumbnail'])) {
            if (in_array($slideArr['thumbnail']->getMimeType(), self::$allowedImageMimeTypes)) {
                try {
                    FileHelper::deleteFileIfExists($slide->thumbnail);
                    $fileInfo = FileHelper::uploadFile('slides', $slideArr['thumbnail']);
                    $slide->thumbnail = $fileInfo['download_link'];
                } catch (\Exception $e) {
                    throw new \Exception($e->getMessage());
                }
            } else {
                throw new \Exception(['thumbnail' => ['validation.image']]);
            }
        }

        $slide->save();
    }

    /**
     * @param array $slideArr
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateCreateSlide(array $slideArr)
    {
        return Validator::make($slideArr, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'thumbnail' => 'image',
            'link' => 'required',
        ], [
            'required' => __('validation.required', ['attribute' => ':attribute']),
            'image' => __('image', ['attribute' => ':attribute'])
        ]);
    }

    /**
     * @param array $slideArr
     * @param int $pageId
     * @param Request $request
     * @throws \Exception
     */
    public static function createSlide(array $slideArr, int $pageId, Request $request)
    {
        $validator = self::validateUpdateSlide($slideArr);

        if ($validator->fails()) {
            throw new ExceptionNotXHR($validator->errors());
        }

        $slide = new Slide;

        if (!$slide) {
            throw new \Exception('Slide not found');
        }

        $slide->link = $slideArr['link'];
        $slide->title = $slideArr['title'];
        $slide->description = $slideArr['description'];
        $slide->link = $slideArr['link'];
        $slide->page_id = $pageId;

        if (isset($slideArr['image'])) {
            try {
                FileHelper::deleteFileIfExists($slide->image);
                $fileInfo = FileHelper::uploadFile('slides', $slideArr['image']);
                $slide->image = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
        if (isset($slideArr['thumbnail'])) {
            try {
                FileHelper::deleteFileIfExists($slide->thumbnail);
                $fileInfo = FileHelper::uploadFile('slides', $slideArr['thumbnail']);
                $slide->thumbnail = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

        $slide->save();
    }
}