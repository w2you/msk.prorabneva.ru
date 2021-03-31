@component('mail::message')
{{--
# Introduction
--}}

Имя пользователя: {{ $data['name'] }}<br>
Телефон пользователя:{{ $data['phone'] }}<br>
страница: {{$data['curentUrl']}}<br>
время: {{$data['time']}}<br>
{{--ID ремонта: {{ $data['id'] }}<br>
Название ремонта: {{ $data['title'] }}<br>

Thanks,<br>
{{ config('app.name') }}--}}
@endcomponent
