<?php

namespace App\Http\Controllers\Voyager;


use App\Helpers\CopierHelper;
use App\Helpers\PageHelper;
use App\Models\Page;
use Illuminate\Http\Request;

class CopierController extends VoyagerBaseController
{

    public function create(Request $request)
    {
        $class = $request->get('class');
        $id = $request->get('id');
        $return = $request->get('return');

        if($model = $class::where(['id'=>$id])->first()){
           
            $helper = new CopierHelper();
            $helper->model = $model;
            $helper->copy();
        }
     
        return redirect('admin/'.$return);
    }


}
