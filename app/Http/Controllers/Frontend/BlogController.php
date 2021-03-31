<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Meta;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::getAll();
        $materials = Post::query()->orderBy('date', 'DESC')->where('status', 'PUBLISHED')->with('category')->take(5)->get();

        $this->setBreadCrumbs([
            0 => 'Блог'
        ]);

        Meta::set('title', 'Блог полезных статей от профессионалов | Прораб НЕВА');
        Meta::set('description', 'статьи о ремонте, ремонт квартиры с чего начать');
        Meta::set('keywords', 'В нашем блоге вы найдете много полезных статей на темы ремонта, отделки и дизайна помещений. Заходите на сайт и читайте рекомендации профессиональных строителей и дизайнеров.');

        return $this->renderView('frontend.blog.index', compact('categories','materials'));
    }

    public function showMoreBlock(Request $request)
    {
        $step = $request['step'];
        $hasCount = false;
        if ($request['category']) {
            $category = Category::itemBySlugOrFail($request['category']);
            //$materials = $category->materials();
            $materials = Post::query()->orderBy('date', 'DESC')->where(['category_id'=>$category->id,'status'=>'PUBLISHED','region_id'=>$this->selectRegion->id]);
        } else {
            //$materials = Post::query()->where('status', 'PUBLISHED')->orderBy('date', 'DESC');
            $materials = Post::query()->orderBy('date', 'DESC')->where(['status'=>'PUBLISHED','region_id'=>$this->selectRegion->id]);
        }

        $all_count = $materials->count();
        $materials = $materials->offset(($step + 1) * 3)->take(3)->get();

        if ($all_count > ($step + 2) * 3) {
            $hasCount = true;
        }

        $returnHTML = view('frontend.blog.blocks.block_show_more')->with(['materials' => $materials])->render();

        return response()->json(['html' => $returnHTML, 'hasCount' => $hasCount]);
    }

    public function category($slugCategory)
    {
        $category = Category::itemBySlugOrFail($slugCategory);

        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            0 => $category['name']
        ]);

        Meta::set('title', $category->metaTags->title);
        Meta::set('description', $category->metaTags->description);
        Meta::set('keywords', $category->metaTags->keywords);

        return $this->renderView('frontend.blog.category', compact('category'));
    }

    public function showMoreCategory(Request $request)
    {
        $step = $request['step'];
        $category_slug = $request['category'];
        $hasCount = false;

        if($category_slug){
            $category = Category::itemBySlugOrFail($category_slug);
            $materials = $category->materials();
        }else{
            $materials = Post::query()->orderBy('date', 'DESC')->where('status', 'PUBLISHED')->with('category');
        }


        $all_count = $materials->count();
        $materials = $materials->offset(($step + 1) * 5)->take(5)->get();

        if ($all_count > ($step + 2) * 5) {
            $hasCount = true;
        }

        $returnHTML = view('frontend.blog.blocks.block_category_show_more')->with(['materials' => $materials])->render();

        return response()->json(['html' => $returnHTML, 'hasCount' => $hasCount]);
    }

    public function material($slugCategory, $slugMaterial)
    {
        $category = Category::itemBySlugOrFail($slugCategory);
        $material = $category->materials()->with('authorId')->where('posts.slug', $slugMaterial)->firstOrFail();

        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            route('blog.category', $category['slug']) => $category['name'],
            0 => $material['title'],
        ]);

        Meta::set('title', $material->metaTags->title);
        Meta::set('description', $material->metaTags->description);
        Meta::set('keywords', $material->metaTags->keywords);

        $meta_image = $material['image'];
        $url = route('blog.material', [$material['category']['slug'], $material['slug']]);


        return $this->renderView('frontend.blog.material', compact('material', 'meta_image', 'url', 'category'));
    }

    public function materialTest($slugCategory, $slugMaterial)
    {
        $category = Category::itemBySlugOrFail($slugCategory);
        $material = $category->materials()->with('authorId')->where('posts.slug', $slugMaterial)->firstOrFail();

        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            route('blog.category', $category['slug']) => $category['name'],
            0 => $material['title'],
        ]);

        Meta::set('title', $material->metaTags->title);
        Meta::set('description', $material->metaTags->description);
        Meta::set('keywords', $material->metaTags->keywords);

        $meta_image = $material['image'];
        $url = route('blog.material', [$material['category']['slug'], $material['slug']]);


        return $this->renderView('frontend.blog.material_test', compact('material', 'meta_image', 'url', 'category'));
    }
}
