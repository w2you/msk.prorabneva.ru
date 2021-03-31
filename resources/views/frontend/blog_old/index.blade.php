@extends('frontend.layouts.master')

@section('content')
  <style>
    section.navigation {
      display: block !important;
    }
  </style>

  <section class='page_blog'>
    <div class='wrapper_blog'>
      <h1 class='title_block_one'>Блог</h1>
      <div class='text_top_blog'>
        <div class='title_block_blog_top'>
          Добро пожаловать в Блог компании «Прораб НЕВА»!
          <br>
          Здесь вы найдете полезные статьи, красивые интерьеры и обзоры сделанных нами ремонтов.
        </div>
        <p>Мы подобрали для вас наиболее интересные рубрики, в которых вы найдете все самое ценное и важное по
          той или иной теме, получите ответы на занимающие вопросы, свежие идеи и вдохновение в многочисленных
          фотографиях оригинальных интерьеров и ремонтов.</p>
      </div>
    </div>

    @foreach($categories as $category)
      <div class='blog_items_block'>
        <div class='wrapper_blog'>
          <div class='name_block_icon clearfix'
               onclick="document.location='{{route('blog.category',$category['slug'])}}';"
               style="cursor: pointer;">
            <div class='icon'>
              <img src='{{ asset('storage/' . $category['image']) }}'>
            </div>
            <div class='name_block_blocks'>
              <div class='name_block'>{{$category['name']}}</div>
              <p>{{$category['description']}}</p>
            </div>
          </div>
          <div class='all_blocks_blog posts-{{$category['slug']}}'>
            @foreach($category->materials3 as $material)
              <div class='block'>
                <div class='img'>
                  <a href="{{route('blog.material',[$material['category']['slug'],$material['slug']])}}">
                    <img src='{{$material['image']}}'>
                  </a>
                </div>
                <div class='text_info'>
                  <div class='info_data'>
                    <div>
                      <a href="{{route('blog.category',$material['category']['slug'])}}">{{$material['category']['name']}}</a>
                    </div>
                    <div>{{\Carbon\Carbon::parse($material['date'])->format('d/m/Y')}}</div>
                  </div>
                  <div class='name_link'>
                    <a href='{{route('blog.material',[$material['category']['slug'],$material['slug']])}}'>{{$material['title']}} </a>
                  </div>
                  <p> {{$material['short_description']}}</p>
                </div>
              </div>
            @endforeach
          </div>

          @if(count($category->materials) > 3)
            <div class='show_more show_more_block' data-category="{{$category['slug']}}" data-step="0">
              <a>Показать еще</a>
            </div>
          @endif
        </div>
      </div>
    @endforeach
  </section>
@endsection
