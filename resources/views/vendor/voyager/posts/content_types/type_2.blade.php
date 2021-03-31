@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
@endphp
<div class="panel panel-bordered">
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort" data-sort="{{'2_' . $key}}" name="contents[{{'2_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="clone-wrapper">
        <label class="content-label-for-items">Заголовок (strong) + текст</label>
        @forelse( $post_content->texts ?? [] as $k =>  $item )
          <div class="toclone form-group">
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-12">
                  <input required="" type="text" class="form-control" name="contents[{{'2_' . $key}}][texts][][title]"
                         value="{{$item['title']}}">
                </div>
                <div class="col-sm-12">
                  <textarea name="contents[{{'2_' . $key}}][texts][][text]" class="form-control ckeditor22"
                            id="{{$key}}_editor{{$k}}" cols="30" rows="3">{{$item['text']}}</textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-3 cloneya-buttons">
              <div class="clone">
                <a type="button" class="btn btn-xs btn-primary">
                  <i class="voyager-plus"></i>
                </a>
              </div>
              <div class="delete">
                <a type="button" class="btn btn-xs btn-danger">
                  <i class="voyager-trash"></i>
                </a>
              </div>
            </div>
          </div>
        @empty
          <div class="toclone form-group">
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-12">
                  <input required="" type="text" class="form-control" name="contents[{{'2_' . $key}}][texts][][title]"
                         value="">
                </div>
                <div class="col-sm-12">
                  <textarea name="contents[{{'2_' . $key}}][texts][][text]" class="form-control ckeditor22"
                            id="{{$key}}_editor" cols="30" rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-3 cloneya-buttons">
              <div class="clone">
                <a type="button" class="btn btn-xs btn-primary">
                  <i class="voyager-plus"></i>
                </a>
              </div>
              <div class="delete">
                <a type="button" class="btn btn-xs btn-danger">
                  <i class="voyager-trash"></i>
                </a>
              </div>
            </div>
          </div>
        @endforelse
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
