@extends('frontend.layouts.master')

@section('content')
    <section class='partners_page'>
        <div class='wrapper_new'>
            <h1 class='title_section'>Партнеры</h1>
            <div class='under_title_section'>Партнеры нашей компании, который предоставляют скидк и дополнительный сервис для вас</div>
            <div class='partners_block'>
                @foreach($partners as $partner)
                    <div class='block clearfix'>
                        <div class='logo_partners'>
                            <a
                               @if($partner->id == 1 || $partner->id == 2)
                               href="#{{!! $partner->link }}" target="_blank"


                            @endif
                                     >
                                <img
                                        src='{{ asset('storage/' . $partner->big_image) }}'
                                        alt="{{ $partner->title }}"  alt='Партнеры - Прораб Нева'>
                                <img src='{{ asset('storage/' . $partner->mobile_image) }}'  alt='Партнеры - Прораб Нева'>

                            </a>
                        </div>
                        <div class='text_partners'>
                            <div class='name_partners'><a  @if($partner->id == 1 || $partner->id == 2)
                                                           href="#{{!! $partner->link }}" target="_blank"


                                        @endif>{{ $partner->title }}</a></div>
                            <p>{{ $partner->description }}</p>
                            @if(!is_null($partner->hint))
                                <span>* {{ $partner->hint }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection