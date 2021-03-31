@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
@endphp
<div class="panel panel-bordered">
  <b>СТА форма</b>
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort"  data-sort="{{'16_' . $key}}" name="contents[{{'16_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">

    <div class="row">
      <div class="form-group col-md-12">
        <label for="name">Заголовок</label>
        <input required="" type="text" class="form-control" name="contents[{{'16_' . $key}}][title]"
               value="{{ $post_content['title'] ?? '' }}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-12">
        <label for="name">Текст описания</label>
        <textarea name="contents[{{'16_' . $key}}][text]" id="{{$key}}_editor" cols="30" rows="2"
                  class="form-control ckeditor22" required="">{{ $post_content['text'] ?? '' }}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-12">
        <label for="name">Кнопка</label>
        <input required="" type="text" class="form-control" name="contents[{{'16_' . $key}}][subtitle]"
               value="{{ $post_content['subtitle'] ?? '' }}">
      </div>
    </div>


  </div>

  <div class="delete-item-content" data-id="{{$post_content['id'] ?? 0}}">
    <a type="button" class="btn btn-xs btn-danger">
      <i class="voyager-trash"></i>
    </a>
  </div>
  <div class="up-item-content">
    <a type="button" class="btn btn-xs btn-primary">
      <i class="voyager-double-up"></i>
    </a>
  </div>
  <div class="down-item-content">
    <a type="button" class="btn btn-xs btn-primary">
      <i class="voyager-double-down"></i>
    </a>
  </div>
</div>




