@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
@endphp
<div class="panel panel-bordered">
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort" data-sort="{{'7_' . $key}}" name="contents[{{'7_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="form-group col-md-12">
        <label for="name">Текст</label>
        <textarea name="contents[{{'7_' . $key}}][text]" cols="30" rows="10" class="form-control ckeditor22"
                  id="{{$key}}_editor" required="">{{$post_content['text'] ?? ''}}</textarea>
      </div>
      <div class="clone-wrapper">
        <label class="content-label-for-items">Список</label>
        @forelse( $post_content->texts ?? [] as  $item )
          <div class="toclone form-group">
            <div class="col-sm-9">
              <input type="text" class="form-control" name="contents[{{'7_' . $key}}][texts][]" value="{{$item}}"
                     required="">
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
              <input type="text" class="form-control" name="contents[{{'7_' . $key}}][texts][]" value="" required="">
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
