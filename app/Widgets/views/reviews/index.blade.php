@if(count($reviews) > 0)
  <section class='client_feedback_n{{$color_white?'': ' bg_grey'}}'>
    <div class='wrapper_new-n'>
      @if(!$title)
        <div class='title_section--g-big'>
          Отзывы
          <span class='text_blue'>клиентов</span>
        </div>
        <div class='under_title_section-n'>
          Узнайте, что клиенты думают о нашей компании
          <br>
          и как оценивают свой ремонт
        </div>
      @else
        <div class='title_section--g-big'>{{ $title }}</div>
      @endif
      <div class='client_feedback_owl'>
        @foreach($reviews as $k => $review)
          <div class='client_feedback_block'>
            <div class='client_feedback_block-top'>
              <div class='flex_block_n'>
                <div class='left_client--img_name'>
                  <div class='img_client img_client--orange-bg'>
                    @if($review->link !="")
                      <a href="{{$review->link}}" target="_blank">
                        <img alt='{{ $review->author }}' class="img_cover"
                             src="{{ asset('storage/' . $review->author_image) }}">
                      </a>
                    @else
                      <img alt='{{ $review->author }}' class="img_cover"
                           src="{{ asset('storage/' . $review->author_image) }}">
                    @endif
                  </div>
                  <div class='client--name-data'>
                    <div class='client--name'>{{ $review->author }}</div>
                    <div
                        class='client--data'>{{\App\Helpers\Helper::getDateMonth(\Carbon\Carbon::parse($review['created_at'])->formatLocalized('%d %B'))}}</div>
                  </div>
                </div>
                <div class='right_client--stars'>
                  <ul>
                    @for($i = 0; $i < $review->rating; $i ++)
                      <li class='active'></li>
                    @endfor
                    @for($i = $review->rating; $i < 5; $i ++)
                      <li></li>
                    @endfor
                  </ul>
                </div>
              </div>
            </div>
            @if(!$review['youtube_key'])
              <div class='client_feedback_block-content scroll_content_feedback'>
                <div class='block-content--text'>
                  {{$review->body}}
                </div>
              </div>
            @else
              <div class='client_feedback_block-content'>
                <div class='block-content--video'>
                  <div class='video_block'>
                    <div class='play_video-icon open_video_popup'></div>
                    <img data-video='{{ $review['youtube_key'] }}'
                         src='https://img.youtube.com/vi/{{ $review['youtube_key'] }}/hqdefault.jpg'>
                  </div>
                </div>
              </div>
            @endif
          </div>
        @endforeach
      </div>
      <div class='view_all'>
        <a class='read_more btn_style_n' href='#'>Показать ещё</a>
      </div>
    </div>
  </section>
  <div id='popup_video_block'>
    <div class='popup_block'>
      <div class='close'>
        <img src='/frontend/images_4/close_black.png'>
      </div>
      <div class='video_block'>
        <img src='/frontend/images_4/video_img.jpg'>
      </div>
    </div>
  </div>
@endif
