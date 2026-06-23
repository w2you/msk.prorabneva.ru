<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset='utf-8'>

    <!-- Cookie consent gate: трекеры грузятся только после согласия -->
    <script>
        (function () {
            // Гейт-объект на будущее (live-инициализация без перезагрузки).
            // Сейчас счётчики гейтятся на сервере по $cookieConsentGiven, а после
            // клика «Принять» страница перезагружается — трекеры подхватятся свежими.
            window.cookieConsent = {
                given: {{ !empty($cookieConsentGiven) ? 'true' : 'false' }},
                _queue: [],
                ready: function (cb) {
                    if (this.given) { try { cb(); } catch (e) {} }
                    else { this._queue.push(cb); }
                },
                accept: function () {
                    if (this.given) { return; }
                    this.given = true;
                    var q = this._queue; this._queue = [];
                    for (var i = 0; i < q.length; i++) { try { q[i](); } catch (e) {} }
                }
            };

            // Безопасные заглушки: вызовы счётчиков в разметке (onclick по телефонам —
            // yaCounter44756221.reachGoal, события roistat.event.send) не должны падать
            // до согласия, пока реальные трекеры не загружены.
            window.yaCounter44756221 = window.yaCounter44756221 || { reachGoal: function () {} };
            window.roistat = window.roistat || { event: { send: function () {} }, leadHunter: {} };
        })();
    </script>

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
    
    <meta name="google-site-verification" content="OLz9QB_iALSJQzeJqnl6BNkqT64yxQu3735Vent7nO0" />
    <meta name="yandex-verification" content="46b1e27df7a8f110" />

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

@if(isset($selectRegion) && !empty($cookieConsentGiven))
{{-- Скрипты счётчиков из БД региона (header_script) — только после согласия с cookie.
     ВАЖНО: если в это поле, помимо трекеров, попадает что-то не-трекинговое
     (верификации, мета), его тоже скроет до согласия — проверьте содержимое поля. --}}
{!! $selectRegion->header_script  !!}
@endif

    <style>
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(54, 48, 43, 0.85);
            padding: 20px 0;
            z-index: 9999;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            transform: translateY(100%);
            animation: slideUp 0.5s ease forwards;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
            }
        }

        .cookie-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .cookie-banner-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            min-height: 40px;
        }

        /* Текстовая часть */
        .cookie-banner-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cookie-banner-text {
            color: #ffffff;
            font-size: 14px;
            line-height: 1.5;
            margin-right: 100px;
            max-width: 620px;
            width: 100%;
        }

        /* Ссылка - как на SVG (белая с подчеркиванием) */
        .cookie-link {
            color: #ffffff;
            text-underline-offset: 2px;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 14px;
            text-decoration: underline;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        /* Эффект наведения для ссылки */
        @media (hover: hover) {
            .cookie-link:hover {
                color: #1890FF;
                text-decoration: underline;
            }

            .cookie-accept-btn:hover {
                background: #1890FF;
                color: #ffffff;
                border: none;
                border-radius: 8px;
                padding: 10px 32px;
                font-size: 14px;
                font-weight: 500;
                cursor: pointer;
                transition: all 0.3s ease;
                white-space: nowrap;
                flex-shrink: 0;
                width: 180px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                letter-spacing: 0.5px;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                box-shadow: none;
            }
        }

        /* Кнопка "Принять" - как на SVG (синяя #1890FF) */
        .cookie-accept-btn {
            position: relative;
            background: transparent;
            border: 1.5px solid #ffffff;
            border-radius: 8px;
            color: #ffffff;
            padding: 8px 32px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
            flex-shrink: 0;
            height: 40px;
            width: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            letter-spacing: 0.5px;
            min-width: 160px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* Эффект наведения для кнопки */
        @media (hover: hover) {
            .cookie-btn:hover {
                background: #0e7ad0;
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(24, 144, 255, 0.4);
            }
        }

        .cookie-btn:active {
            transform: translateY(0);
            box-shadow: none;
        }

        /* Мобильная адаптация */
        @media (max-width: 768px) {
            .cookie-banner-content {
                flex-wrap: wrap;
            }

            .cookie-banner-text {
                text-align: center;
                padding-left: 20px;
                padding-right: 20px;
                margin-right: 0px;
                font-size: 13px;
            }

            .cookie-accept-btn {
                margin-top: 16px;
            }
        }
    </style>

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

@include('frontend.blocks.cookie-banner')
@include('frontend.partials.scripts')

@yield('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const banner = document.getElementById('cookie-banner');
        const acceptBtn = document.getElementById('cookie-accept');

        if (!banner || !acceptBtn) return;

        acceptBtn.addEventListener('click', function () {
            fetch('/cookie-consent/accept', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Счётчики гейтятся на сервере по согласию — перезагружаем
                        // страницу, чтобы трекеры (Метрика, GA, FB, VK, Roistat) загрузились.
                        window.location.reload();
                    }
                })
                .catch(() => {
                    // Если запрос не прошёл — просто прячем баннер, без перезагрузки.
                    banner.style.transition = 'transform 0.4s ease, opacity 0.4s ease';
                    banner.style.transform = 'translateY(100%)';
                    banner.style.opacity = '0';
                    setTimeout(() => { banner.remove(); }, 400);
                });
        });
    });
</script>
</body>
</html>
