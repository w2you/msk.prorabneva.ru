<div class="blocks_all_width">
  <div class="text_area_new">
    <h2>{{$post_content['title']}}</h2>
    @foreach($post_content['text'] ?? [] as $item)
      {!! $item !!}
    @endforeach
  </div>
</div>
