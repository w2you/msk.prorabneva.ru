@extends('frontend.layouts.master')

@section('content')
  <style>
    section.navigation {
      display: block !important;
    }
  </style>
  <section class='page_blog'>
    <div class='wrapper_blog'>
      <div class='name_block_icon clearfix'>
        <div class='icon'>
          <img src='{{ asset('storage/' . $category['image']) }}'>
        </div>
        <div class='name_block_blocks'>
          <h1 class='name_block'>{{$category['name']}}</h1>
          <p>{{$category['description']}}</p>
        </div>
      </div>

      <div class='all_blocks_blog_one'>
        <div id="category-materials">
          @foreach($category->materials5 as $material)
            @include('frontend.blog.blocks.item_post')
          @endforeach
        </div>
        @if(count($category->materials) > 5)
          <div class='show_more show_more_category' data-category="{{$category['slug']}}" data-step="0">
            <a>Показать еще</a>
          </div>
        @endif
      </div>

    </div>
  </section>
  <section class="text_area_home" style="padding:0 0 72px">
    <div class="wrapper_new">
      <div class="text_area_new">
        {!! $category['seo_text'] !!}
      </div>
    </div>
  </section>
@endsection
