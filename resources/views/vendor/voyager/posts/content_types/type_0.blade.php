@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
@endphp
<div class="panel panel-bordered">
  <input type="hidden" class="content-sort" data-sort="{{'0_' . $key}}" name="contents[{{'0_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="clone-wrapper">
        <label class="content-label-for-items">Содержание статьи</label>
        @forelse( $post_content->texts ?? [] as  $item )
          <div class="toclone form-group">
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="contents[{{'0_' . $key}}][texts][][text]" value="{{$item['text']}}" placeholder="Название">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="contents[{{'0_' . $key}}][texts][][link]" value="{{$item['link']}}" placeholder="link number">
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
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="contents[{{'0_' . $key}}][texts][][text]" value="" placeholder="Название">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="contents[{{'0_' . $key}}][texts][][link]" value="" placeholder="link number">
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
