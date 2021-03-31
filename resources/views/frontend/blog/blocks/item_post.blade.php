<div class='block' style="cursor: pointer;">
  <div class='img'>
    <a href="{{route('blog.material',[$material['category']['slug'],$material['slug']])}}">
      <img src='{{$material['image']}}'>
    </a>
  </div>
  <div class='text_info'>
    <a href='{{route('blog.material',[$material['category']['slug'],$material['slug']])}}'>
      <div class='info_data'>
        <div>
          <span>{{$material['category']['name']}}</span>
        </div>
        <div>{{\Carbon\Carbon::parse($material['date'])->format('d/m/Y')}}</div>
      </div>

      <div class='name_block'>
        {{$material['title']}}
      </div>

      <p>
        {{$material['short_description_fc']}}
      </p>
    </a>
    <div class='read_more'>
      <a href='{{route('blog.material',[$material['category']['slug'],$material['slug']])}}'>Читать далее</a>
    </div>
  </div>
</div>
