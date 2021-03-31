<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Facades\Voyager;

class VoyagerSettingsController extends Controller
{
    public function storeRobot(Request $request)
    {
        file_put_contents(public_path('robots.txt'), $request['robot_txt']);
        return back()->with([
            'message' => __('voyager::settings.successfully_saved'),
            'alert-type' => 'success',
        ]);
    }
}
