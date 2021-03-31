<?php

namespace App\Widgets;

use App\Helpers\Helper;
use App\Models\Category;
use App\Models\Post;
use App\Models\Region;
use Klisl\Widgets\Contract\ContractWidget;

class BlogBlock implements ContractWidget
{
    public $category;
    public $has_padding;
    public $padd_sm_not;
    public $color_white;
    public $title_custom;
    public $region;

    public function __construct($data = [])
    {
        $this->category = $data['category'] ?? false;
        $this->has_padding = $data['has_padding'] ?? false;
        $this->region = $data['region'] ?? false;
        $this->color_white = $data['color_white'] ?? false;
        $this->title_custom = $data['title_custom'] ?? false;
    }

    public function execute()
    {
		return;
        if ($this->category) {
            $category = Category::itemBySlugOrFail($this->category);
            //$materials = $category->materials();
            $materials = Post::query()->orderBy('date', 'DESC')->where(['category_id'=>$category->id,'status'=>'PUBLISHED','region_id'=>$this->region->id]);
        } else {
            if($this->region)
                $materials = Post::query()->orderBy('date', 'DESC')->where(['status'=>'PUBLISHED','region_id'=>$this->region->id]);
            else
                $materials = Post::query()->orderBy('date', 'DESC')->where(['status'=>'PUBLISHED','region_id'=>Region::baseRegion()->id]);
        }
        $materials = $materials->with('category')->take(3)->get();


        return view('Widgets::blog.index')
            ->with([
                'materials' => $materials,
                'has_padding' => $this->has_padding,
                'category_slug' => $this->category,
                'color_white' => $this->color_white,
                'title_custom' => $this->title_custom
            ]);
    }
}
