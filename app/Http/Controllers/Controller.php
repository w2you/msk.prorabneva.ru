<?php

namespace App\Http\Controllers;

use App\Helpers\PageHelper;
use App\Models\Region;
use Illuminate\Support\Facades\View;
use Meta;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $selectRegion;
    /**
     * @var string
     */
    public $viewPath;

    /**
     * @var object
     */
    public $page;

    /**
     * @var array
     */
    public $breadCrumbs;

    public function __construct($metaTaggable = null, $metaTaggableId = null, $slug = null)
    {
//        Meta::title(config('app.name'));

        $this->setViewPath('frontend');


        $this->selectRegion = Region::getInstance()->getRegion();

        if (!is_null($slug)) {
            $this->setPage($slug);
        }

       // session(['selectRegion' => $this->selectRegion]);

        View::share('breadCrumbs', $this->breadCrumbs);
        $this->setMeta();
    }

    /**
     * Render view with data, which
     * receives from actions
     * @param $view
     * @param $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function renderView($view, $data = null)
    {
        $data['breadCrumbs'] = $this->breadCrumbs;
        $data['selectRegion'] = $this->selectRegion;
        return view($view, $data);
    }

    /**
     * Set breadCrumbs
     * @param $breadCrumbs
     */
    public function setBreadCrumbs($breadCrumbs)
    {
        foreach ($breadCrumbs as $key => $breadCrumb) {
            if (is_numeric($key)) {
                $this->breadCrumbs[] = $breadCrumb;
            } else {
                $this->breadCrumbs[$key] = $breadCrumb;
            }
        }
    }

    /**
     * Set Main view folder
     * @param $path
     */
    public function setViewPath($path)
    {
        $this->viewPath = $path;
    }

    /**
     * Get Main view folder
     * @return string
     */
    public function getViewPath()
    {
        return $this->viewPath;
    }

    /**
     * Set current page from DB
     * @param $slug
     */
    public function setPage($slug)
    {
        $page = PageHelper::getPageWithData($slug,$this->selectRegion);
        $this->page = $page;
    }

    /**
     * Get page
     * @return object
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set Meta data
     */
    public function setMeta()
    {
        if (!is_null($this->getPage())) {
            $metaTags = $this->getPage()->metaTags;

            if ($metaTags) {
                Meta::set('title', $metaTags->title);
                Meta::set('description', $metaTags->description);
                Meta::set('keywords', $metaTags->keywords);
            }
        }
    }

}
