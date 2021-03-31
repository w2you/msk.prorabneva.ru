<?php

namespace App\Http\Controllers\Voyager\Actions;

use TCG\Voyager\Actions\AbstractAction;

class CopyAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Копировать';
    }

    public function getIcon()
    {
        return 'voyager-list-add';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        $className = get_class($this->data);
        //$className =   basename(str_replace('\\', '/', $className));
        $request = str_replace('/admin/','',$_SERVER['REQUEST_URI']);
        return route('copier.create',['class'=>$className, 'id'=>$this->data->id,'return'=>$request]);//;'admin/'.$className.'/copy?id/'.$this->data->id;
    }
}