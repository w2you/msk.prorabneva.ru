<?php

namespace App\Widgets;

use App\Models\Category;
use App\Models\Post;
use Klisl\Widgets\Contract\ContractWidget;

class BlogLasts implements ContractWidget
{
    public $material;

    public function __construct($data)
    {
        $this->material = $data['material'];
    }

    public function execute()
    {

        $materials = Post::query()->orderBy('date', 'DESC')->where('id', '<>', $this->material)->where('status','PUBLISHED');
        $materials = $materials->with('category')->take(3)->get();
        return view('Widgets::blog.lasts')
            ->with([
                'materials' => $materials,
            ]);
    }
}
