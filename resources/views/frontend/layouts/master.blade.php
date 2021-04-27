<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset='utf-8'>
    <meta name="yandex-verification" content="a2295da344dedca8"/>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="article"/>
    @if($_SERVER['REQUEST_URI']=='/dizajn-proekt-v-podarok')
        <title>Технический дизайн-проект квартиры в подарок</title>
        <meta name="description"
              content="Технический дизайн-проект квартиры в подарок от компании «Прораб НЕВА». Дизайн-проект даст полное представление о будущем ремонте. Подробности акции на сайте.">
    @else
        {!! Meta::tag('title') !!}
        {!! Meta::tag('description') !!}
        {!! Meta::tag('keywords') !!}
        {!! Meta::tag('site_name', config('app.name')) !!}
        {!! Meta::tag('url', Request::url()) !!}
    @endif


    @if(isset($meta_image))
        <meta property="og:image" content="{{$meta_image}}"/>
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="4fcb9b76c2151fe8" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @include('frontend.partials.styles')
    @yield('styles')
    <script type="application/ld+json">
	    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Прораб нева",
        "url": "https://www.prorabneva.ru/",
        "logo": "https://www.prorabneva.ru/frontend/images/logo.png",
        "email": "mail@prorabneva.ru",
        "telephone": "8(812)439-16-13",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "пр. Энергетиков д. 3 БЦ Лада офис 214",
                "addressLocality": "Санкт-Петербург",
                "postalCode": "195027",
                "addressCountry": "RU"
            }
    }


    </script>

@if(isset($selectRegion))
{!! $selectRegion->header_script  !!}
@endif


</head>
<body>

@if(!isset($selectRegion) || $selectRegion->is_default)
    @include('frontend.partials.header')
@else
    @include('frontend.partials.header_region')
@endif

@include('frontend.partials.breadcrumbs')

@yield('content')

@include('frontend.modals.call_order')

@include('frontend.modals.regions')

<section class='back_to_top'></section>

@if(!isset($selectRegion) || $selectRegion->is_default)
    @include('frontend.partials.footer')
@else
    @include('frontend.partials.footer_region')
@endif

@include('frontend.partials.scripts')

@yield('scripts')

</body>
</html>
