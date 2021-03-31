@component('mail::message')


  Название отзыва: {{ $data['title'] }}<br>
  Текст отзыва: {!!  $data['body'] !!}<br>
  Имя : {{$data['author']}}<br>
  Номер договора : {{$data['deal_number']}}<br>
  Оценка : {{$data['rating']}}<br>

  {{--Avatar :  <img src="{{ $data->embed('storage/' . $data['author_image']) }}" alt="{{$data['author']}}">--}}


  Фото автора:
  ![{{$data['author']}}][avatar]
  [avatar]: {{asset('storage/' . $data['author_image'])}} "{{$data['author']}}"

  @if($data->images)
    @foreach(json_decode($data->images) as $key => $image)
    File {{$key + 1}} url : {{asset('storage/' . $image)}}
    @endforeach
  @endif

@endcomponent
