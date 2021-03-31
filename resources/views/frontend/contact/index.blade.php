@extends('frontend.layouts.master')

@section('content')

    @include('frontend.contact.contact')
    @include('frontend.contact.managers')

    <section class='general_map'>
        <div class='title_map'>Дополнительные офисы для приёма заказов</div>
        <div id='big_map'></div>
{{--
    @include('frontend.contact.partials.map2')
--}}
    </section>
@endsection

