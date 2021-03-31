<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Artisan::call('view:clear');
//http://moscow.prorabneva.loc/
//http://prorabneva.loc/

Route::group(['domain' => '{region}.'.env('SESSION_DOMAIN')], function () {

    Route::get('/contact', ['uses' => 'Frontend\\ContactController@index', 'as' => 'contact']);

});

Route::get('/', ['uses' => 'Frontend\\HomeController@index', 'as' => 'homepage']);
Route::post('/email-footer', ['uses' => 'Frontend\\HomeController@emailFooter', 'as' => 'emailFooter']);

Route::get('/turbopages.xml', ['uses' => 'Frontend\\YandexController@turboBlog']);

Route::get('/otzivi', ['uses' => 'Frontend\\ReviewController@index', 'as' => 'review'])->where('page', 'page[0-9]+');

Route::post('/reviews', ['uses' => 'Frontend\\ReviewController@create', 'as' => 'review.create']);
Route::post('/review-store', 'Frontend\\ReviewController@createStore');

Route::get('/team', ['uses' => 'Frontend\\TeamController@index', 'as' => 'our_team']);

Route::get('/about', ['uses' => 'Frontend\\AboutController@index', 'as' => 'about']);

Route::get('/contact', ['uses' => 'Frontend\\ContactController@index', 'as' => 'contact']);

Route::post('/get-repair', ['uses' => 'Frontend\\HomeController@getRepair', 'as' => 'getRepair']);

Route::get('/kalkulyator-remonta', ['uses' => 'Frontend\\CalculatorController@index', 'as' => 'calculator']);

Route::get('/partnery', ['uses' => 'Frontend\\PartnerController@index', 'as' => 'partners']);

Route::get('/actsii', ['uses' => 'Frontend\\SalePromotionController@index', 'as' => 'salePromotions']);
Route::get('/actsii/novyj-god-novyj-remont', ['uses' => 'Frontend\\SalePromotionController@getHappyNewer', 'as' => 'saleHappy']);
//Route::get('/actsii/remont-po-cenam-2017', ['uses' => 'Frontend\\SalePromotionController@getHappyNewer', 'as' => 'saleHappy']);
/*Route::get('/actsii/novyj-god-novyj-remont/', function (){
    return view('frontend.sale_promotions.partials.happynewer');
});*/

Route::post('remove-image', ['uses' => 'Voyager\\RepairController@removeImage', 'as' => 'remove_image']);
Route::put('update-sort-images', ['uses' => 'Voyager\\RepairController@updateImage', 'as' => 'update_image']);


Route::get('/actsii/{slug}', ['uses' => 'Frontend\\SalePromotionController@getSalePromotion', 'as' => 'getSalePromotion']);

Route::get('/vacancies', ['uses' => 'Frontend\\VacancyController@index', 'as' => 'vacancies']);

Route::get('/portfolio', ['uses' => 'Frontend\\PortfolioController@index', 'as' => 'portfolio']);

Route::post('/call-order', ['uses' => 'Frontend\\RepairController@callOrder', 'as' => 'callOrder']);
Route::post('/call-order-popup', ['uses' => 'Frontend\\HomeController@callOrderPopup', 'as' => 'callOrderPopup']);


Route::post('/review/show-more', 'Frontend\\ReviewController@showMore');
Route::get('/letter-director', 'Frontend\\ContactController@letterDirector')->name('letter-director');
Route::post('/letter-director', 'Frontend\\ContactController@letterDirectorPost');

Route::get('/price', ['uses' => 'Frontend\\PriceListController@index', 'as' => 'priceList']);
/*price change otdelochnyie-raboty*/
Route::get('/otdelochnyie-raboty/{slug}', ['uses' => 'Frontend\\PriceListController@show', 'as' => 'priceListCategory']);
Route::get('/otdelochnyie-raboty/{slug}/{child_slug}', ['uses' => 'Frontend\\PriceListController@priceListChildCategory', 'as' => 'priceListChildCategory']);
/*end price change otdelochnyie-raboty*/

//Route::get('/services/{category}', ['uses' => 'Frontend\\CategoryServiceController@getServiceCategory', 'as' => 'getServiceCategory']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::post('/single-slide', ['uses' => 'Voyager\\PageController@getSlide', 'as' => 'getSlide']);
    Route::delete('/page-slide/{id}', ['uses' => 'Voyager\\PageController@deleteSlide', 'as' => 'deletePageSlide']);

    Route::get('/posts/{id}/content', 'Voyager\\BlogPostContentController@content')->name('posts.content')->middleware('admin.user');

    Route::get('/copier', 'Voyager\\CopierController@create')->name('copier.create');

    Route::get('/regions/copypages/{region_id}', 'Voyager\\RegionController@copypages')->name('admin.regions.copypages');
    Route::get('/regions/deletepages/{region_id}', 'Voyager\\RegionController@deletepages')->name('admin.regions.deletepages');

    Route::post('/posts/{id}/content', 'Voyager\\BlogPostContentController@contentStore')->name('posts.content.store')->middleware('admin.user');
    Route::post('/posts/content/remove-image', ['uses' => 'Voyager\\BlogPostContentController@removeImage', 'as' => 'remove_gallery_image']);
    Route::post('/posts/content/get_new', ['uses' => 'Voyager\\BlogPostContentController@getNewContent', 'as' => 'get_new_content']);
    Route::post('/posts/content/delete', ['uses' => 'Voyager\\BlogPostContentController@deleteContent', 'as' => 'remove_item_content']);
    Route::put('/posts/content/update-sort-images', ['uses' => 'Voyager\\BlogPostContentController@updateImage', 'as' => 'update_image_gallery']);

    Route::put('/admin/settings/robot', ['uses' => 'Voyager\\VoyagerSettingsController@storeRobot', 'as' => 'voyager.settings.robot.update']);
});

Route::get('dizajn-proekt-v-podarok', 'Frontend\SalePromotionController@saleShow')->name('saleShow');
/*--- Important!!! This route always should be at the end of list ---*/
Route::get('/{slug}', function ($router) {
    if (App\Helpers\CategoryMainRepairHelper::filter_services($router)) {
        $controller = new App\Http\Controllers\Frontend\CategoryServiceController();
        return $controller->getServiceCategory(new \Illuminate\Http\Request, $router);
    } else {
        $controller = new App\Http\Controllers\Frontend\RepairController();
        return $controller->getRepairMainCategory($router);
    }
})->name('getRepairMainCategory');

//Route::get('/{slug}', ['uses' => 'Frontend\\RepairController@getRepairMainCategory', 'as' => 'getRepairMainCategory']);

Route::get('/{slug}/{sub_slug}', ['uses' => 'Frontend\\RepairController@getRepairCategory', 'as' => 'getRepairCategory']);



