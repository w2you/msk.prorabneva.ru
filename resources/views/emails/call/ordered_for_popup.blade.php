@component('mail::message')
{{--
# Introduction
--}}
@if(isset($data['name']))
Имя пользователя: {{ $data['name'] }}<br>
@endif
Телефон пользователя: {{ $data['phone'] }}<br>
страница: {{$data['curentUrl']}}<br>
время: {{$data['time']}}<br>
{{--Thanks,<br>
{{ config('app.name') }}--}}
@endcomponent
