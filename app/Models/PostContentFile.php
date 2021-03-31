<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use App\Traits\Tour3dRelation;

class PostContentFile extends Model
{
    protected $table = 'posts_contents_files';

    protected $fillable = ['post_content_id', 'file', 'sort_img'];
}
