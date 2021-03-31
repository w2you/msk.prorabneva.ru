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

class TeamController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::OUR_TEAM);
    }

    public function index()
    {
        $page = $this->page;
        $workersCategories = CategoryWorker
            ::with('workers')
            ->where('slug', '<>', CategoryWorker::MANAGERS)
            ->orderBy('created_at', 'asc')
            ->get();

        $this->setBreadCrumbs([
            $page->title
        ]);

        return $this->renderView($this->viewPath . '.our_team.index', [
            'page' => $page,
            'workersCategories' => $workersCategories,
        ]);
    }

}