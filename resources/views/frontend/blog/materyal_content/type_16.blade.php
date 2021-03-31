<div class="sta_blog_1 sta_blog">
  <div class="left_block">
    <div class="icon">
      <img src="/frontend/images_3/sta_icon_1.png">
    </div>
  </div>
  <div class="right_text">
    <div class="title_sta">{{ $post_content['title'] ?? '' }}</div>
    {!! $post_content['text'] ?? '' !!}
    <div class="button_style">
      <a class="call_open_blog_popup_button" href="#">{{ $post_content['subtitle'] ?? '' }}</a>
    </div>
  </div>
</div>
