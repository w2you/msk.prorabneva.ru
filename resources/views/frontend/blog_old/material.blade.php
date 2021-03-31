@extends('frontend.layouts.master')

@section('content')
  <style>
    @media only screen and (min-width: 401px){
      section.navigation {
        display: block !important;
      }
    }
  </style>
  <section class='page_blog'>
    <div class='wrapper_new'>
      <div class='blocks_all_width'>
        <h1 class='title_block_one'>{{$material['title']}}</h1>
      </div>
      {!! $material['body'] !!}

      <div class='blocks_all_width'>
        <div class='share_block'>
          <div class='img_name_info'>
            <div class='img'>
              <img src='{{$material['authorId']['image']}}'>
            </div>
            <div class='data_name'>
              <div class='data'>{{\Carbon\Carbon::parse($material['date'])->formatLocalized('%d %B %Y')}}</div>
              <div class='name_block'>{{$material['authorId']['name']}}</div>
            </div>
          </div>
          <div class='share_soc'>
            <div class='share'>Понравилось? Поделитесь с друзьями</div>
            <div class='soc'>
              <a href="https://vk.com/share.php?url={{$url}}" target="_blank">
                <img src='/frontend/images_3/soc_icon_1_1.png'>
                <img src='/frontend/images/soc_icon_hover_1.png'>
              </a>
              <a href="https://www.facebook.com/sharer/sharer.php?u={{$url}}" target="_blank">
                <img src='/frontend/images_3/soc_icon_2_1.png'>
                <img src='/frontend/images/soc_icon_hover_2.png'>
              </a>
              <a href='https://connect.ok.ru/offer?url={{$url}}' target="_blank">
                <img src='/frontend/images_3/soc_icon_3_1.png'>
                <img src='/frontend/images/soc_icon_hover_5.png'>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class='sta_blog sta_blog_4'>
        <div class='left_block'>
          <div class='title_sta'>Нужна консультация по ремонту?</div>
          <p>Оставьте заявку, и наши специалисты проконсультируют вас по всем вопросам</p>
        </div>
        <div class='right_button'>
          <div class='button_style'>
            <a class='call_open_popup_button' href='#'>Заявка</a>
          </div>
        </div>
      </div>
      @include('frontend.blog.blocks.block_item_all')
    </div>
  </section>
@endsection
