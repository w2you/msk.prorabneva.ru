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

      <div class='all_blocks_blog_one'>
        <div id="category-materials">
          @foreach($materials as $material)
            @include('frontend.blog.blocks.item_post')
          @endforeach
        </div>
        <div class='show_more show_more_category mg-bt-150' data-step="0">
          <a>Показать еще</a>
        </div>
      </div>
    </div>
  </section>
@endsection
