<?php

namespace App\Helpers;


use App\Exceptions\ExceptionNotXHR;
use App\Models\RepairInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RepairInfoHelper
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateRepairInfo(Request $request)
    {

        return Validator::make($request->all(), [
            'repairInfo.top_title' => 'required',
            'repairInfo.top_description' => 'required',
            'repairInfo.bottom_title' => 'required',
            'repairInfo.bottom_description' => 'required',
            //'repairInfo.image' => 'image',
            'repairInfo.stats' => 'array',
            'repairInfo.stats.*.count' => 'required|numeric',
            'repairInfo.stats.*.unit' => 'required',
            'repairInfo.stats.*.name' => 'required',
        ], [
            'required' => __('validation.required', ['attribute' => ':attribute']),
            'numeric' => __('validation.number', ['attribute' => ':attribute']),
        ]);
    }

    /**
     * @param array $repairInfoRequest
     * @param $pageId
     * @param Request $request
     * @throws \Exception
     */
    public static function saveRepairInfo(array $repairInfoRequest, $pageId, Request $request)
    {
        $validator = self::validateRepairInfo($request);
        if ($validator->fails($repairInfoRequest['stats'])) {
            throw new \Exception(serialize($validator->errors()->getMessages()));
        }

        $repairInfo = RepairInfo::firstOrNew(['page_id' => $pageId]);
        $repairInfo->top_title = $repairInfoRequest['top_title'];
        $repairInfo->top_description= $repairInfoRequest['top_description'];
        $repairInfo->bottom_title = $repairInfoRequest['bottom_title'];
        $repairInfo->bottom_description= $repairInfoRequest['bottom_description'];

        if (isset($repairInfoRequest['image'])) {
            try {
                $fileInfo = FileHelper::uploadFile('repair_info', $repairInfoRequest['image']);
                $repairInfo->image = $fileInfo['download_link'];
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

        $repairInfo->stats= $repairInfoRequest['stats'];
        $repairInfo->save();
    }

}