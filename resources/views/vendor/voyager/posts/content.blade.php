@extends('voyager::master')

@section('css')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', 'Контент: ' . $post->title)

@section('page_header')
  <h1 class="page-title">
    <i class="voyager-news"></i>
    Контент: {{$post->title}}
  </h1>
  @include('voyager::multilingual.language-selector')
@stop

@section('content')

  <div class="page-content edit-add container-fluid">
    <div class="row">
      <div class="col-md-12">
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="panel panel-bordered">
          <div class="panel-body">
            <form class="form-inline">
              <div class="form-group">
                <select name="type" class="form-control type_select">
                  <option value="">Выберите тип контента</option>
                  @foreach($types as $key => $type)
                    <option value="{{ $key }}">{{ $type }}</option>
                  @endforeach
                </select>
              </div>
              <button type="button" class="btn btn-default add-content">Добавить контент</button>
            </form>
          </div>
        </div>

        <!-- form start -->
        <form role="form"
              id="content-form"
              class=""
              action="{{route('posts.content.store',$post->id)}}"
              method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="panel-footer">
            <button type="button" class="btn btn-primary submit-content">{{ __('voyager::generic.save') }}</button>
          </div>
          <div id="post-content">
            @foreach($post->contents as $post_content)
              @include('vendor.voyager.posts.content_types.type_' . $post_content['type'])
            @endforeach
          </div>
          <input type="hidden" name="sorts" value="" id="content-sorts">
          <div class="panel-footer">
            <button type="button" class="btn btn-primary submit-content">{{ __('voyager::generic.save') }}</button>
          </div>
        </form>
      </div>
    </div>

    <div class="panel panel-bordered">
      <div class="panel-body">
        <form class="form-inline">
          <div class="form-group">
            <select name="type" class="form-control type_select">
              <option value="">Выберите тип контента</option>
              @foreach($types as $key => $type)
                <option value="{{ $key }}">{{ $type }}</option>
              @endforeach
            </select>
          </div>
          <button type="button" class="btn btn-default add-content">Добавить контент</button>
        </form>
      </div>
    </div>
    <div class="modal fade modal-danger" id="confirm_item_delete_modal">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">&times;
            </button>
            <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
            <button type="button" class="btn btn-danger"
                    id="confirm_delete_item">{{ __('voyager::generic.delete_confirm') }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@push('javascript_dinamic')
  <script src="{{ voyager_asset('js/cloneya/jquery-cloneya.js') }}"></script>
  <script src="{{ voyager_asset('js/ckeditor/ckeditor.js') }}"></script>
  <script>
    $('.add-content').on('click', function (e) {
      e.preventDefault();
      let key = $(this).parent().find('.type_select').val();
      if ($.isNumeric(key)) {

        params = {
          key: key,
          _token: '{{ csrf_token() }}'
        };

        $.post('{{ route('get_new_content') }}', params, function (response) {
          $('#post-content').append(response);
          initContentJs();
        });
      }
    });

    var param_item, $this_item;
    $('#post-content').on('click', '.delete-item-content', function (e) {
      e.preventDefault();
      $this_item = $(this);
      param_item = {
        id: $this_item.data('id'),
        _token: '{{ csrf_token() }}'
      };

      $('#confirm_item_delete_modal').modal('show');
    });

    $('#confirm_delete_item').on('click', function () {
      if (param_item['id'] > 0) {
        $.post('{{ route('remove_item_content') }}', param_item, function (response) {
          $this_item.parent().fadeOut(300, function () {
            $(this).remove();
          });
        });
      } else {
        $this_item.parent().fadeOut(300, function () {
          $(this).remove();
        });
      }

      $('#confirm_item_delete_modal').modal('hide');
    });
    initContentJs();

    function initContentJs() {
      var $cloneya = $('.clone-wrapper').cloneya({
        cloneButton: '.cloneya-buttons .clone',
        deleteButton: '.cloneya-buttons .delete'
      });

      $cloneya.on('after_append.cloneya', function () {
        $(document).find('.ckeditor22').each(function (e) {
          let id = $(this).attr('id');
          $('#cke_' + id).remove();
          if (CKEDITOR.instances[id]) {
            CKEDITOR.instances[id].destroy();
            CKEDITOR.replace(id);
          } else {
            CKEDITOR.replace(id);
          }
        });
      });

      $(document).find('.ckeditor22').each(function (e) {
        let id = $(this).attr('id');
        $('#cke_' + id).remove();
        if (CKEDITOR.instances[id]) {
          CKEDITOR.instances[id].destroy();
          CKEDITOR.replace(id);
        } else {
          CKEDITOR.replace(id);
        }
        console.log('000');
      });
    }

    $(document).on('click', '.down-item-content', function () {
      let $thisElement = $(this).parent();
      let $nextElement = $thisElement.next();
      $thisElement.insertAfter($nextElement);
      initContentJs();
    });

    $(document).on('click', '.up-item-content', function () {
      let $thisElement = $(this).parent();
      let $prevElement = $thisElement.prev();
      $thisElement.insertBefore($prevElement);
      initContentJs();
    });


    $(document).on('click', '.submit-content', function (e) {
      e.preventDefault();
      let sorts = [];
      $("#content-form .content-sort").each(function (key) {
        sorts.push($(this).data('sort'));
      });
      $('#content-sorts').val(sorts);
      $("#content-form").submit();
    });

  </script>
@endpush

@section('javascript')
  @stack('javascript_dinamic')
@stop
