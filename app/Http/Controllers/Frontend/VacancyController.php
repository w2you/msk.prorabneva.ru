<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function __construct()
    {
        parent::__construct(null, null, Page::VACANCIES);
    }

    public function index()
    {
        $this->setBreadCrumbs([
            $this->page->title
        ]);

        $vacancies = Vacancy::all();
        $page = $this->page;

        return $this->renderView($this->viewPath . '.vacancies.index', compact('vacancies', 'page'));
    }
}