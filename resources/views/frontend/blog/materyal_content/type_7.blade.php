<div class="blocks_all_width">
  <div class="text_area_new">
    <div>
      {!! $post_content['text'] !!}
      <ul>
        @foreach($post_content->texts ?? [] as  $item)
          <li>{!! $item !!}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
