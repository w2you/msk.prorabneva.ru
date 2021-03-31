@if(count($slides) > 0)

@if(count($slides) == 1)
<section class='repairs_slider_alone repairs_slider home_page_repairs_slider {{($region->is_default)?'toppadding':''}}'>
@else
<section class='repairs_slider home_page_repairs_slider {{($region->is_default)?'toppadding':''}}'>
@endif
    <div class='slider'>
      @foreach($slides as $k => $slide)
        <div class='block_slider'>
          <div class='img_slid'>
            <img src="{{ asset('storage/'. $slide->image) }}" alt="Акция - Прораб нева">
          </div>
          <div class='slider_wrapper'>
            <div class='text_slid'>
              <div class='slid_title' style="margin-bottom:10px;">
                <div class="title_h2 ">
                  {!! str_replace(['</p>','<p>'],'', $slide->title) !!}
                </div>
              </div>
              <p>
                {{ str_replace(['</p>','<p>'],'', $slide->description) }}
              </p>
              <div class='read_more'>
                <a href='{{ $slide->link }}'>
                  Узнать больше
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
	@if(count($slides) > 1)
    <div class='click_slider'>
      @foreach($slides as $key => $slide)
          <div class='block @if($key === 0){{'active'}}@endif'>
            <div class='block_opacity'>{!! $slide['title'] !!}</div>
            <div class='img'>
              <img src="{{ asset('storage/' . $slide->thumbnail) }}" alt="Акция - Прораб нева">
            </div>
          </div>
      @endforeach
    </div>
	@endif
  </section>
@endif
<!--
<style>
    section.repairs_slider {
        position: relative;
    }
</style>-->
