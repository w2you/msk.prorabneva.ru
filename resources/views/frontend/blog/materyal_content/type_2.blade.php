<div class="blocks_all_width">
  <div class="text_area_new">
    @foreach($post_content['texts'] ?? [] as $key => $item)
      <div>
        <strong id="link_{{$post_content['id']}}">{{$item['title']}}</strong>
        {!! $item['text'] !!}
      </div>
    @endforeach
  </div>
</div>
