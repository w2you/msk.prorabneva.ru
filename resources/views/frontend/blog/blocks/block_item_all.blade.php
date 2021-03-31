<div class='wrapper_blog'>
  <div class='blog_items_block'>
    <div class='title_block'>Посмотрите другие статьи о ремонтах</div>
    <div class='all_blocks_blog'>
      @php $hasRel = false; @endphp
      @for($i = 1;$i < 4;$i ++ )
        @if($item = $material->{'relMaterial_'.$i})
          @php $hasRel = true; @endphp
          <div class='block'>
            <div class='img'>
              <a href="{{route('blog.material',[$category['slug'],$item['slug']])}}">
                <img src='{{$item['image']}}'>
              </a>
            </div>
            <div class='text_info'>
              <div class='info_data'>
                <div>
                  <a href="{{route('blog.category',$category['slug'])}}">{{$item->category->name}}</a>
                </div>
                <div>{{\Carbon\Carbon::parse($item['date'])->format('d/m/Y')}}</div>
              </div>
              <div class='name_link'>
                <a href='{{route('blog.material',[$category['slug'],$item['slug']])}}'>{{$item['title']}} </a>
              </div>
              <p> {{$item['short_description']}} </p>
            </div>
          </div>
        @endif
      @endfor
      @if(!$hasRel)
        @widget('blog_lasts', ['material' => $material['id']])
      @endif
    </div>
  </div>
</div>
