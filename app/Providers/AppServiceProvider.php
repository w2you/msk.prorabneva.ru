<?php

namespace App\Providers;

use App\Actions\ContentAction;
use App\Helpers\CategoryMainRepairHelper;
use App\Helpers\Helper;
use App\Http\Controllers\Voyager\Actions\CopyAction;
use App\Models\CategoryMainRepair;
use App\Models\CategoryRepair;
use App\Models\CategoryService;
use App\Models\Region;
use App\Models\SocialMedia;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Schema::defaultStringLength(191);
        setlocale(LC_ALL, 'ru_RU.UTF-8');

        Voyager::addAction(CopyAction::class);

        if (Helper::getRegion()->is_default) {
            $repairMainCategories = CategoryMainRepairHelper::getRepairCategories();
            $serviceCategories = CategoryService::all();
        } else {
            $selectRegion = Region::getInstance()->getRegion();
            view()->share('$selectRegion', $selectRegion);

            //услуги
            $serviceCategories = CategoryService::where('region_id', Helper::getRegion()->id)->get();

            //категории работа для меню
            $repairMainCategories = CategoryMainRepair::where('region_id', Helper::getRegion()->id)->get();

            //под категории
            $categoryRepair = CategoryRepair::where('region_id', Helper::getRegion()->id)->get();
            view()->share('categoryRepair', $categoryRepair);

        }


        $socialMedia = CategoryMainRepairHelper::getSocialMedia();
        view()->share('socialMedia', $socialMedia);

        view()->share('serviceCategories', $serviceCategories);
        view()->share('repairMainCategories', $repairMainCategories);


        Voyager::addAction(ContentAction::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
