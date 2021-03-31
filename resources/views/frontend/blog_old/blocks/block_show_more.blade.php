@foreach($materials as $item)
  <div class='block'>
    <div class='img'>
      <a href="{{route('blog.material',[$item['category']['slug'],$item['slug']])}}">
        <img src='{{$item['image']}}'>
      </a>
    </div>
    <div class='text_info'>
      <div class='info_data'>
        <div>
          <a href="{{route('blog.category',$item['category']['slug'])}}">{{$item->category->name}}</a>
        </div>
        <div>{{\Carbon\Carbon::parse($item['date'])->format('d/m/Y')}}</div>
      </div>
      <div class='name_link'>
        <a href='{{route('blog.material',[$item['category']['slug'],$item['slug']])}}'>{{$item['title']}} </a>
      </div>
      <p> {{$item['short_description']}} </p>
    </div>
  </div>
@endforeach
