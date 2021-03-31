<div class="blocks_all_width">
  <div class="text_area_new">
    <h2>{{$post_content['title']}}</h2>
    {!! $post_content['text'] !!}
    <div>
      <ul>
        @foreach($post_content->texts ?? [] as  $item)
          <li>{!! $item !!}</li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
