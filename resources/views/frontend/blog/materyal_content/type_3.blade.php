<div class="blocks_all_width">
  <div class="text_area_new">
    <h3 id="link_{{$post_content['id']}}">{{$post_content['title']}}</h3>
    @foreach($post_content->texts ?? [] as  $item)
      {!! $item !!}
    @endforeach
  </div>
</div>
