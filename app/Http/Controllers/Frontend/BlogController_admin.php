<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Meta;

class BlogController_admin extends Controller
{
    public function index()
    {
        $categories = Category::getAll();

        $this->setBreadCrumbs([
            0 => 'Блог'
        ]);

        Meta::set('title', 'Блог полезных статей от профессионалов | Прораб НЕВА');
        Meta::set('description', 'статьи о ремонте, ремонт квартиры с чего начать');
        Meta::set('keywords', 'В нашем блоге вы найдете много полезных статей на темы ремонта, отделки и дизайна помещений. Заходите на сайт и читайте рекомендации профессиональных строителей и дизайнеров.');

        return $this->renderView('frontend.blog.index',compact('categories'));
    }

    public function category($slug)
    {
        $category = Category::itemBySlugOrFail($slug);

        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            0 => $category['name']
        ]);
        Meta::set('title', $category->metaTags->title);
        Meta::set('description', $category->metaTags->description);
        Meta::set('keywords', $category->metaTags->keywords);

        return $this->renderView('frontend.blog.category',compact('category'));
    }

    public function material($slug)
    {
        $category = Category::itemBySlugOrFail($slug);

        $this->setBreadCrumbs([
            0 => 'Блог',

        ]);
        Meta::set('title', $category->metaTags->title);
        Meta::set('description', $category->metaTags->description);
        Meta::set('keywords', $category->metaTags->keywords);

        return $this->renderView('frontend.blog.category',compact('category'));
    }
}
