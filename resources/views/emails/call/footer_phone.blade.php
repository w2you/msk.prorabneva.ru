@component('mail::message')
{{--
# Introduction
--}}
{{$data['text']}} {{ $data['phone'] }} <br>
страница: {{$data['curentUrl']}}<br>
время: {{$data['time']}}<br>
{{--
Thanks,<br>
{{ config('app.name') }}--}}
@endcomponent
