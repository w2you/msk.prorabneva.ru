<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YandexController extends Controller
{
    public function turboBlog()
    {
        $posts = Post::query()->orderBy('date', 'DESC')->where('status', 'PUBLISHED')->with('category')->get();
        return response()->view('frontend.blog.turbo', [
            'materials' => $posts,
        ])->header('Content-Type', 'text/xml');
    }

}
