<section class='banner_top_section'>
  <div class='block_banner'>
    <div class='img_banner'>
      <img src='{{ asset('storage/'. $slide->image) }}' alt="Акция - Прораб нева">
    </div>
    <div class='text_slid_wrapper text_slid_wrapper_two'>
      <div class='text_banner'>
        <div class='title_block_banner'>
          {!! str_replace(['</p>','<p>'],'', $slide->title) !!}
        </div>
        <p>
          {{ str_replace(['</p>','<p>'],'', $slide->description) }}
        </p>
        <div class='read_more' style='width: 300px;'>
          @if($slide_link == 'call_open_popup_button')
            <a href="#" class="{{$slide_link}}">
              Узнать подробнее
            </a>
          @elseif($slide_link == 'hide')
          @else
            <a href="{{ $slide->link }}">
              Узнать подробнее
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
