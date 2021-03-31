@component('mail::message')

  Имя : {{ $data['name'] }}<br>
  Email : {!!  $data['email'] !!}<br>
  Тип обращения : {{$data['type']}}<br>
  Сообщение или вопрос : {{$data['content']}}<br>

@endcomponent
