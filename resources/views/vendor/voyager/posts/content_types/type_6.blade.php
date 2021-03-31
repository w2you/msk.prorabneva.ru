@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
@endphp
<div class="panel panel-bordered">
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort" data-sort="{{'6_' . $key}}" name="contents[{{'6_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="form-group col-md-12">
        <label for="name">Заголовок h2</label>
        <input required="" type="text" class="form-control" name="contents[{{'6_' . $key}}][title]"
               value="{{$post_content['title'] ?? ''}}">
      </div>
      <div class="form-group col-md-12">
        <label for="name">Текст</label>
        <textarea name="contents[{{'6_' . $key}}][text]" cols="30" rows="10" class="form-control ckeditor22"
                  id="{{$key}}_editor">{{$post_content['text'] ?? ''}}</textarea>
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
