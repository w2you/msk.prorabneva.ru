@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
@endphp
<div class="panel panel-bordered">
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort" data-sort="{{'8_' . $key}}" name="contents[{{'8_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="clone-wrapper">
        <label class="content-label-for-items">Блоки с ценой</label>
        @forelse( $post_content->texts ?? [] as  $item )
          <div class="toclone form-group">
            <div class="col-sm-9 box-content-for-items">
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="contents[{{'8_' . $key}}][texts][][title]"
                         placeholder="Заголовок" value="{{$item['title']}}" required="">
                </div>
                <div class="col-sm-offset-2 col-sm-4">
                  <input type="text" class="form-control" name="contents[{{'8_' . $key}}][texts][][parameter]"
                         placeholder="Параметер" value="{{$item['parameter']}}">
                </div>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="contents[{{'8_' . $key}}][texts][][subtitle]"
                         placeholder="Подзаголовок" value="{{$item['subtitle']}}">
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
            <div class="col-sm-9 box-content-for-items">
              <div class="row">
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="contents[{{'8_' . $key}}][texts][][title]"
                         placeholder="Заголовок" value="" required="">
                </div>
                <div class="col-sm-offset-2 col-sm-4">
                  <input type="text" class="form-control" name="contents[{{'8_' . $key}}][texts][][parameter]"
                         placeholder="Параметер" value="">
                </div>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="contents[{{'8_' . $key}}][texts][][subtitle]"
                         placeholder="Подзаголовок" value="">
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
