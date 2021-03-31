@php
  $key = \App\Helpers\Helper::getKeyForContentItem();
@endphp
<div class="panel panel-bordered">
  @if($post_content['id'] ?? false)
    <span style="position: absolute;display: contents;"> Link : {{$post_content['id']}}</span>
  @endif
  <input type="hidden" class="content-sort" data-sort="{{'15_' . $key}}" name="contents[{{'15_' . $key}}][id]" value="{{$post_content['id'] ?? 0}}">
  <div class="panel-body">
    <div class="row">
      <div class="form-group  col-md-12">
        <label for="name">Галерея</label>
        <button class="btn btn-primary save-after-sorting"> Save Sorting</button>
        <div class="sortable">
          <br draggable="true">
          @foreach($post_content->files ?? [] as $image)
            <div class="img_settings_container class_image2"
                 style="float:left;padding-right:15px;" data-image="{{ $image->id }}">
              <img src="{{ asset('storage/' . $image->file) }}"
                   data-id="{{ $image->id }}"
                   style="max-width:200px;max-height: 150px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:5px;">
              <a href="#" class="voyager-x remove-multi-image"></a>
            </div>
          @endforeach
        </div>
        <div class="clearfix"></div>
        <input type="file" name="contents[{{'15_' . $key}}][files][]" multiple="multiple" accept="image/*">
      </div>
    </div>
  </div>
  <div class="modal fade modal-danger" id="confirm_delete_modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"
                  aria-hidden="true">&times;
          </button>
          <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
        </div>

        <div class="modal-body">
          <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default"
                  data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
          <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}
          </button>
        </div>
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

@push('javascript_dinamic')
  <script src="{{ asset('js/sortable/jquery.sortable.js') }}"></script>
  <script>
    var params, $image;
    $(document).ready(function () {
      $('.sortable').sortable();
    });
    $(document).on('click', '.save-after-sorting', function (e) {
      e.preventDefault();
      let url = '{{ route('update_image_gallery') }}';
      let images = [];
      $(".sortable .class_image2").each(function () {
        images.push($(this).data('image'));
      });
      $.ajax({
        url: url,
        method: 'post',
        data: {_method: 'PUT', images: images},
        success: function (res) {

        }
      });
    });

    $('.form-group').on('click', '.remove-multi-image', function (e) {
      e.preventDefault();
      $image = $(this).siblings('img');

      params = {
        slug: '',
        id: $image.data('id'),
        _token: '{{ csrf_token() }}'
      };

      $('.confirm_delete_name').text($image.data('image'));
      $('#confirm_delete_modal').modal('show');
    });
    $('#confirm_delete').on('click', function () {
      $.post('{{ route('remove_gallery_image') }}', params, function (response) {
        if (response
          && response.data
          && response.data.status
          && response.data.status == 200) {

          // toastr.success(response.data.message);
          $image.parent().fadeOut(300, function () {
            $(this).remove();
          });
        } else {
          toastr.error("Error removing image.");
        }
      });

      $('#confirm_delete_modal').modal('hide');
    });
  </script>
@endpush
