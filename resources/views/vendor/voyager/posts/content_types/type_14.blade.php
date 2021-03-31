@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
  $file1 = ($post_content ?? null) ? $post_content->files()->where('sort_img',0)->first() : null;
  $file2 = ($post_content ?? null) ? $post_content->files()->where('sort_img',1)->first() : null;
@endphp
<div class="panel panel-bordered">
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort"  data-sort="{{'14_' . $key}}" name="contents[{{'14_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="form-group  col-md-6">
        <input type="file" name="contents[{{'14_' . $key}}][file][0]" accept="image/*" {{$file1 ? '' : 'required'}}>
        @if($file1)
          <img src="{{ asset('storage/' . $file1->file) }}" alt="" width="300">
        @endif
      </div>
      <div class="form-group  col-md-6">
        <input type="file" name="contents[{{'14_' . $key}}][file][1]" accept="image/*" {{$file2 ? '' : 'required'}}>
        @if($file2)
          <img src="{{ asset('storage/' . $file2->file) }}" alt="" width="300">
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
