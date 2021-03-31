<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ContentAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Контент';
    }

    public function getIcon()
    {
        return 'voyager-file-text';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-left',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        // show or hide the action button, in this case will show for posts model
        return $this->dataType->slug == 'posts';
    }

    public function getDefaultRoute()
    {
        // URL for action button when click
        return route('posts.content', array("id"=>$this->data->{$this->data->getKeyName()}));
    }
}
