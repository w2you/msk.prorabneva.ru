{{--<section class='page_blog padd_sm {{$has_padding ?: ' padd_sm_t_b'}}'>--}}
{{--<div class='wrapper_blog'></div>--}}
{{--<div class='blog_items_block'>--}}
{{--<div class='wrapper_blog'>--}}
{{--<div class='title_section'>Полезное о ремонте</div>--}}
{{--<div class='under_title_section'>Нашим специалистам есть, что вам рассказать и что посоветовать</div>--}}
{{--<div class='all_blocks_blog'>--}}
{{--@foreach($materials as $material)--}}
{{--<div class='block'>--}}
{{--<div class='img'>--}}
{{--<a href="{{route('blog.material',[$material['category']['slug'],$material['slug']])}}">--}}
{{--<img src='{{$material['image']}}'>--}}
{{--</a>--}}
{{--</div>--}}
{{--<div class='text_info'>--}}
{{--<div class='info_data'>--}}
{{--<div>--}}
{{--<a href="{{route('blog.category',$material['category']['slug'])}}">{{$material['category']['name']}}</a>--}}
{{--</div>--}}
{{--<div>{{\Carbon\Carbon::parse($material['date'])->format('d/m/Y')}}</div>--}}
{{--</div>--}}
{{--<div class='name_link'>--}}
{{--<a href='{{route('blog.material',[$material['category']['slug'],$material['slug']])}}'>--}}
{{--{{$material['title']}}</a>--}}
{{--</div>--}}
{{--<p>{{$material['short_description']}}</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--<div class='show_more go_to_blog show-more-block-widget' data-category="{{$category_slug}}" data-step="0">--}}
{{--<a>ПОКАЗАТЬ ЕЩЕ</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}


<section class='useful_materials{{$has_padding ? '' : ' padd_sm_t_b'}}{{$color_white?'': ' bg_grey'}}'>
  <div class='wrapper_new-n'>
    @if($title_custom)
      <div class='title_section_g'>
          @if(request()->path() == 'dizajn-interera-kvartir')
              <div class='text_orange'>Полезные материалы</div>
              о дизайне и ремонте
          @else
              <div class='text_orange'>Полезные материалы</div>
              о ремонте
          @endif
      </div>
    @else
      <div class='title_section'>Полезное о ремонте</div>
      <div class='under_title_section'>Нашим специалистам есть, что вам рассказать и что посоветовать</div>
    @endif

    <div class='useful_materials--blocks all_materials_blocks'>
      @foreach($materials as $material)
        <div class='useful_materials--block'>
          <div class='useful_materials--block-img'>
            <a href="{{route('blog.material',[$material['category']['slug'],$material['slug']])}}">
              <img src='{{$material['image']}}'>
            </a>
          </div>
          <div class='useful_materials--block-name'>
            <a href='{{route('blog.material',[$material['category']['slug'],$material['slug']])}}'>
              {{$material['title']}}</a>
          </div>
          <p>{{$material['short_description']}}</p>
        </div>
      @endforeach
    </div>
    <div class='view_all show-more-block-widget' data-category="{{$category_slug}}" data-step="0">
      <a class='read_more btn_style_n' href='#'>Показать ещё</a>
      <a class='btn_style_n btn_style_n-blue' href="#">Показать ещё статьи</a>
    </div>
  </div>
</section>
