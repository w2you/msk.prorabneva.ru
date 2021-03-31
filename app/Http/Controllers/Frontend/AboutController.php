<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\FileHelper;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CategoryWorker;
use App\Models\Page;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Meta;

class AboutController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::ABOUT);
    }

    public function index()
    {
        $page = $this->page;

        $this->setBreadCrumbs([
            $page->title
        ]);

        return $this->renderView($this->viewPath . '.about.index', [
            'page' => $page,
        ]);
    }

}