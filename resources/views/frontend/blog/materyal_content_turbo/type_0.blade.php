<div class="blocks_all_width">
  <div class="questions_blog">
    <div class="questions_title_block">
      <div class="title_block">Содержание статьи:</div>
    </div>
    <div class="questions_block">
      <ul>
        @foreach( $post_content->texts ?? [] as $item )
          <li>
            {{$item['text']}}
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
