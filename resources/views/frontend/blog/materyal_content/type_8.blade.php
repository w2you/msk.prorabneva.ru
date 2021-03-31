<div class="blocks_all_width">
  <div class="text_area_new">
    <div class="apartment_blocks">
      @foreach($post_content['texts'] ?? [] as $item)
        <div class="block">
          <div class="name_price">
            <div class="name_block">{{$item['title']}}</div>
            @if($item['parameter'])
              <div class="price">{{$item['parameter']}}</div>
            @endif
          </div>
          @if($item['subtitle'])
            <p>{{$item['subtitle']}}</p>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</div>
