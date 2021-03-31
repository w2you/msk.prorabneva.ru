@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
  $file = ($post_content ?? null) ? $post_content->files()->first() : null;
@endphp
<div class="panel panel-bordered">
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort" data-sort="{{'13_' . $key}}" name="contents[{{'13_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="form-group col-md-12">
        <input type="file" name="contents[{{'13_' . $key}}][file]" accept="image/*" {{$file ? '' : 'required'}}>
        @if($file)
          <img src="{{ asset('storage/' . $file->file) }}" alt="" width="300">
        @endif
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
