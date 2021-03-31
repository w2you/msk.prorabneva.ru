<?php

namespace App\Helpers;

use App\Exceptions\ExceptionNotXHR;
use App\Models\Banner;
use App\Models\CategoryMainRepair;
use App\Models\CategoryRepair;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Region;
use App\Models\Repair;
use App\Models\RepairImages;
use App\Models\Service;
use App\Models\Slide;
use App\Models\RepairInfo;
use App\Models\Tour3d;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CopierHelper {

    protected $_model;
    protected $_region;

    public function setRegion($region) {
        $this->_region = $region;
    }

    public function getRegion() {
        return $this->_region;
    }

    public function setModel($model) {
        $this->_model = $model;
    }

    public function getModel() {
        return $this->_model;
    }

    public function copy() {

        $modelCopy = $this->model->replicate();
        $modelCopy->created_at = $this->model->created_at;
        $modelCopy->updated_at = $this->model->updated_at;


        if (isset($this->region)) {
            $modelCopy->region_id = $this->region->id;
        }
        if (get_class($modelCopy) == Region::class) {
            $modelCopy->is_default = 0;
        }

        //ищем категории для подкатегорий
        if (get_class($modelCopy) === CategoryRepair::class && isset($modelCopy->category_main_repair_id)) {
            $cat_main_region = false;
            //находим категорию основной подкатегории
            if ($cat_main = CategoryMainRepair::find($modelCopy->category_main_repair_id)) {
                //ищем эту категорию для нашего региона
                if (isset($this->region)) {
                    $cat_main_region = CategoryMainRepair::
                    where('region_id', $this->region->id)
                        ->where('slug', $cat_main->slug)
                        ->first();
                }
            }

            //если нет категории для нашей подкатегории нашего города выбираем первую категорию в списке
            if (!$cat_main_region) {
                if (isset($this->region)) {
                    $cat_main_region = CategoryMainRepair::where('region_id', $this->region->id)->first();
                } else {
                    $cat_main_region = CategoryMainRepair::where('region_id', $modelCopy->region_id)->first();
                }
            }
           
            if (!$cat_main_region)
                return false;
            $modelCopy->category_main_repair_id = $cat_main_region->id;
        }

        $modelCopy->save();

        //ищем картинки для примерров работ
        if (get_class($modelCopy) === Repair::class) {
            $repImages = RepairImages::where('repair_id', $this->model->id)->get();
            foreach ($repImages as $repImage) {
                $imgCopy = $repImage->replicate();
                $imgCopy->repair_id = $modelCopy->id;
                $imgCopy->save();
            }
        }

        /**
         * копируем metaTags и repairInfo
         */
        if ($pageData = PageHelper::getPageData($this->model->id, $this->model, $this->model->slug)) {
            if (isset($pageData->metaTags)) {
                $this->copyDataItem($pageData->metaTags, $modelCopy);
            }
            if (isset($pageData->repairInfo)) {
                $this->copyDataItem($pageData->repairInfo, $modelCopy);
            }
        }
    }

    private function copyDataItem($item, $page) {
        $itemCopy = $item->replicate();
        if (get_class($page) === Page::class && isset($item->page_id)) {
            $itemCopy->page_id = $page->id;
        }

        if (isset($item->meta_taggable_id)) {
            $itemCopy->meta_taggable_id = $page->id;
        }
        $itemCopy->save();
    }

}
