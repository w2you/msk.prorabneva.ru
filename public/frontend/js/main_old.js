$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {

    $('section.repairs_slider .slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        lazyLoad: true,
        nav: true,
        navText: false,
    });

    var owl = $('.owl-carousel');

    $(".click_slider  .block a").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        var number = $this.parent().index();
        $(".slider").data('owl-carousel').to(number, 300, true);
        $(".click_slider .block.active").removeClass("active");
        $(".click_slider ").find($this).parent().addClass("active");

    });

    var $work_example_slider = $('section.work_examples .work_slider');
    $work_example_slider.on('initialized.owl.carousel', function () {
        $work_example_slider.find('.owl-item.active').eq(1).addClass('center_active');
    });
    $work_example_slider.owlCarousel({
        loop: true,
        margin: 95,
        items: 3,
        nav: true,
        navText: false,
        autoWidth: true,
        responsive: {
            0: {
                margin: 0,
                items: 1,
                autoWidth: false,
            },
            700: {
                margin: 15,
                items: 2,
                autoWidth: false,
            },
            900: {
                margin: 15,
                items: 3,
                autoWidth: false,
            },
            1250: {
                items: 3
            }
        }
    });

    $work_example_slider.on('translated.owl.carousel', function () {
        $work_example_slider.find('.owl-item.center_active').removeClass('center_active');
        $work_example_slider.find('.owl-item.active').eq(1).addClass('center_active');
    });


    $('section.our_services .services_slider').owlCarousel({
        loop: true,
        margin: 25,
        items: 3,
        nav: true,
        navText: false,
        stagePadding: 15,
        responsive: {
            0: {
                items: 1
            },
            1030: {
                items: 2
            },
            1430: {
                items: 3
            }
        }
    });


    $('section.reviews .reviews_slider').owlCarousel({
        items: 5,
        //loop: true,
        nav: true,
        touchDrag: false,
        mouseDrag: false,
        stagePadding: 20,
        margin: 58,
        navText: false,
        // autoWidth:true,
        responsive: {
            0: {
                stagePadding: 15,
                margin: 0,
                items: 1,
                touchDrag: true,
                mouseDrag: true,
            },
            640: {
                items: 3,
                margin: 10
            },
            768: {
                items: 3,

            },
            1050: {
                items: 5
            }
        },
        onTranslated: callback_first,
        onTranslate: callback_first,
        onInitialized: callback_first,
    });

    function callback_first() {

        $("section.reviews .reviews_slider .owl-item").removeClass('zoomactive');

        if (window.innerWidth < 1050) {
            if (window.innerWidth < 640) {
                $("section.reviews .reviews_slider .owl-item.active").eq(0).addClass('zoomactive');
            } else {
                $("section.reviews .reviews_slider .owl-item.active").eq(1).addClass('zoomactive');
            }
        } else {
            $("section.reviews .reviews_slider .owl-item.active").eq(2).addClass('zoomactive');
        }

        $('.reviews  .reviews_text .name').text($(".reviews .reviews_slider .owl-item.zoomactive .img").data('name'));
        $('.reviews  .reviews_text p').text($(".reviews .reviews_slider .owl-item.zoomactive .img").data('review'));
    }

    $(window).on('resize', function () {
        callback_first();
    });


    $("section.reviews .reviews_slider .owl-item").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        if (window.innerWidth < 900) {
            $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [$this.index() - 1, 300, true]);
        } else {
            $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [$this.index() - 2, 300, true]);
        }
        callback_first();
    });

    $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [2, 300, true]);

    $('.next_prev .next').click(function () {
        $('.services_slider,.manager_block .owl-carousel').trigger('next.owl.carousel');
    });
    $('.next_prev .prev').click(function () {
        $('.services_slider,.manager_block .owl-carousel').trigger('prev.owl.carousel');
    });


    $('section.tur_3d .tur_slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: true,
        navText: false,
    });

    $('section.menagers .manager_slider').owlCarousel({
        loop: true,
        margin: 25,
        items: 3,
        nav: true,
        navText: false,
        stagePadding: 15,
        responsive: {
            0: {
                items: 1
            },
            750: {
                items: 1
            },
            1030: {
                items: 2
            },
            1430: {
                items: 3
            }
        }
    });


    if ($('input').hasClass('phone_maska')) {
        $('.phone_maska').mask("+7 (999) 999-99-99");
    }

    /*                      Map script                      */

    if ($('div').is('#map')) {
        ymaps.ready(init);
    }

    function init() {
        myMap = new ymaps.Map("map", {
            center: [59.950179, 30.309728],
            zoom: 10,
            controls: []
        });
        var myPlacemark = new ymaps.Placemark([59.932347, 30.366093], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon_center.png',
                iconImageSize: [38, 68],
                iconImageOffset: [-16.5, -46]
            });


        var myPlacemark1 = new ymaps.Placemark([59.852253, 30.217503], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });


        var myPlacemark2 = new ymaps.Placemark([59.852384, 30.313640], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark3 = new ymaps.Placemark([60.002148, 30.385506], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark4 = new ymaps.Placemark([59.906300, 30.479119], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark5 = new ymaps.Placemark([59.832059, 30.386943], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark6 = new ymaps.Placemark([60.035841, 30.415743], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark7 = new ymaps.Placemark([60.010079, 30.263173], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark8 = new ymaps.Placemark([59.834243, 30.199285], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark9 = new ymaps.Placemark([60.042110, 30.333448], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });
        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark1);
        myMap.geoObjects.add(myPlacemark2);
        myMap.geoObjects.add(myPlacemark3);
        myMap.geoObjects.add(myPlacemark4);
        myMap.geoObjects.add(myPlacemark5);
        myMap.geoObjects.add(myPlacemark6);
        myMap.geoObjects.add(myPlacemark7);
        myMap.geoObjects.add(myPlacemark8);
        myMap.geoObjects.add(myPlacemark9);
    }


    if ($('div').is('#map_center')) {
        ymaps.ready(init_map_center);
    }

    function init_map_center() {
        /**
         * Создаем мультимаршрут.
         * Первым аргументом передаем модель либо объект описания модели.
         * Вторым аргументом передаем опции отображения мультимаршрута.
         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml
         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel.xml
         */
        var multiRoute = new ymaps.multiRouter.MultiRoute({
            // Описание опорных точек мультимаршрута.
            referencePoints: [
                [60.016320, 30.402270],
                "проспект Науки, 19к1"
            ],
            // Параметры маршрутизации.
            params: {
                // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
                routingMode: 'masstransit',
                results: 1
            }
        }, {
            // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
            boundsAutoApply: true
        });

        // Создаем кнопки для управления мультимаршрутом.
        var trafficButton = new ymaps.control.Button({
            data: {content: "Учитывать пробки"},
            options: {selectOnClick: true}
        });

        // Объявляем обработчики для кнопок.
        trafficButton.events.add('select', function () {
            /**
             * Задаем параметры маршрутизации для модели мультимаршрута.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel.xml#setParams
             */
            multiRoute.model.setParams({avoidTrafficJams: true}, true);
        });

        trafficButton.events.add('deselect', function () {
            multiRoute.model.setParams({avoidTrafficJams: false}, true);
        });


        // Создаем карту с добавленными на нее кнопками.
        var myMap = new ymaps.Map('map_center', {
            center: [60.012858, 30.396245],
            zoom: 7,
            controls: [trafficButton]
        }, {
            buttonMaxWidth: 300
        });

        // Добавляем мультимаршрут на карту.
        myMap.geoObjects.add(multiRoute);
    }

    if ($('div').is('#big_map')) {
        ymaps.ready(init_big_map);
    }

    function init_big_map() {
        myMap = new ymaps.Map("big_map", {
            center: [59.950179, 30.309728],
            zoom: 9.5,
            controls: []
        }
        );
        var myPlacemark = new ymaps.Placemark([59.932347, 30.366093], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });


        var myPlacemark1 = new ymaps.Placemark([59.852253, 30.217503], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });


        var myPlacemark2 = new ymaps.Placemark([59.852384, 30.313640], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark3 = new ymaps.Placemark([60.002148, 30.385506], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark4 = new ymaps.Placemark([59.906300, 30.479119], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark5 = new ymaps.Placemark([59.832059, 30.386943], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark6 = new ymaps.Placemark([60.035841, 30.415743], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark7 = new ymaps.Placemark([60.010079, 30.263173], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark8 = new ymaps.Placemark([59.834243, 30.199285], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });

        var myPlacemark9 = new ymaps.Placemark([60.042110, 30.333448], {
                balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-пт.: с 09.00 до 19.00</p> </div>'
            },
            {
                iconLayout: 'default#image',
                iconImageHref: 'frontend/images/contact_place_icon.png',
                iconImageSize: [25, 44],
                iconImageOffset: [-16.5, -46]
            });
        myMap.geoObjects.add(myPlacemark);
        myMap.geoObjects.add(myPlacemark1);
        myMap.geoObjects.add(myPlacemark2);
        myMap.geoObjects.add(myPlacemark3);
        myMap.geoObjects.add(myPlacemark4);
        myMap.geoObjects.add(myPlacemark5);
        myMap.geoObjects.add(myPlacemark6);
        myMap.geoObjects.add(myPlacemark7);
        myMap.geoObjects.add(myPlacemark8);
        myMap.geoObjects.add(myPlacemark9);
    }


    /*                      Form styler plugin      */
    if ($('select').hasClass('styler')) {
        $('.styler').styler();
    }

    $(".check_input_tree").on("change", function () {
        var $this = $(this);
        if ($this[0].checked == true) {
            $this.parent().addClass('active');
        } else {
            $this.parent().removeClass('active');
        }
    });


    //  next step_c_two block
    $(".next_step_c_two_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.step_c_one.active').next().addClass('active');
        $this.parents('.step_c_one.active').removeClass('active');
        $('.section.step_navigation ul li').eq($this.parents('.step_c_one').next().index()).addClass('active');
    });

    //  next step_c_third block
    $(".next_step_c_third_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.step_c_two.active').next().addClass('active');
        $this.parents('.step_c_two.active').removeClass('active');
        $('.section.step_navigation ul li').eq($this.parents('.step_c_two').next().index()).addClass('active');
    });

    //  next step_c_forth block
    $(".next_step_c_forth_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.step_c_third.active').next().addClass('active');
        $this.parents('.step_c_third.active').removeClass('active');
        $('.section.step_navigation ul li').eq($this.parents('.step_c_third').next().index()).addClass('active');
    });

    //  next step_c_forth block
    $(".next_step_c_fifth_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.step_c_forth.active').next().addClass('active');
        $this.parents('.step_c_forth.active').removeClass('active');
        $('.section.step_navigation ul li').eq($this.parents('.step_c_forth').next().index()).addClass('active');
    });

    //  next step_c_forth block
    $(".next_step_c_sixth_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.step_c_fifth.active').next().addClass('active');
        $this.parents('.step_c_fifth.active').removeClass('active');
        $('.section.step_navigation ul li').eq($this.parents('.step_c_fifth').next().index()).addClass('active');
    });

    //  next step_c_seventh block
    $(".next_step_c_seventh_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.step_c_sixth.active').next().addClass('active');
        $this.parents('.step_c_sixth.active').removeClass('active');
        $('.section.step_navigation ul li').eq($this.parents('.step_c_sixth').next().index()).addClass('active');
    });


    //      Prev action
    $(".prev_page a").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $('.section.step_navigation ul li').eq($this.parents('.container_tab > div.active').index()).removeClass('active');
        $this.parents('.container_tab > div.active').prev().addClass('active');
        $this.parents('.container_tab > div.active').removeClass('active');
    });

    //      Add new room
    $(".addroom a").on("click", function (e) {
        e.preventDefault();
        var $roomName = [
            'Первая комната',
            'Вторая комната',
            'Третья комната',
            'Четвёртая комната',
            'Пятая комната',
            'Шестая комната',
            'Седьмой комната'
        ];
        if ($('select').hasClass('styler')) {
            $('.styler').styler('destroy');
        }
        var $this = $(this);
        $('.room_container_c').append("<div class='container_c_all_block'>" + $('.room_container_c .container_c_all_block').eq(0).html() + "</div>");
        if ($('select').hasClass('styler')) {
            $('.styler').styler();
        }
    });

    // home page page26//
    $(".your_portfolio_menu  ul li  a").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        var index = $this.parent().index();
        $(".your_portfolio_menu ul li").removeClass("active");
        $this.parent().addClass("active");
        $(".portfolio_img_blocks.active").removeClass("active");
        $(".portfolio_img_blocks").eq(index).addClass('active');
    });

    $("section.price_list_repairs .price_list_repairs_block .block .click_block").on("click", function () {
        var $this = $(this);
        $this.toggleClass('active');
        $this.siblings("section.price_list_repairs .price_list_repairs_block .block .all_block").stop().slideToggle(300);
    });

    $(window).on("resize scroll", function () {
        exampleSlider_repairs();
    });

    var new_slider_rapairs = $('section.design_repairs .design_repairs_blocks');
    exampleSlider_repairs();

    function exampleSlider_repairs() {
        if ($(window).innerWidth() < 830) {
            new_slider_rapairs.owlCarousel({
                loop: true,
                items: 1,
                lazyLoad: true,
                nav: true,
                navText: false,

            });
        } else {
            if ($(".design_repairs_blocks").hasClass("owl-carousel")) {
                new_slider_rapairs.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
                new_slider_rapairs.find('.owl-stage-outer').children().unwrap();
            }
        }
    }


    $('#popup_portfolio_slider .slider_portfolio_1').on('changed.owl.carousel', function (e) {

        $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_1').text('(фото ' + ++e.page.index + ' из ' + e.item.count + ')');

    });
    $('#popup_portfolio_slider .slider_portfolio_2').on('changed.owl.carousel', function (e) {

        $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_2').text('(фото ' + ++e.page.index + ' из ' + e.item.count + ')');

    });
    $('#popup_portfolio_slider .slider_portfolio_3').on('changed.owl.carousel', function (e) {

        $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_3').text('(фото ' + ++e.page.index + ' из ' + e.item.count + ')');

    });
    $("#popup_portfolio_slider .popup_block").on("click", ".all_slider .slider_info_portfolio .foto_menu ul li a", function (e) {
        e.preventDefault();
        var $this = $(this);
        var index = $this.parent().index();
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .foto_menu ul li").removeClass("active");
        $this.parent().addClass("active");
        $("#popup_portfolio_slider .popup_block .all_slider .slider_portfolio.active_slid_popup").removeClass("active_slid_popup");
        $("#popup_portfolio_slider .popup_block .all_slider .slider_portfolio").eq(index).addClass('active_slid_popup');
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers div.active_number").removeClass("active_number");
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers div").eq(index).addClass('active_number');
        window.dispatchEvent(new Event('resize'));
    });
    /*--------------------------- PopUp Script ----------------------------------------*/

    $("#popup_portfolio_slider .popup_block").on("click", function (e) {
        e.stopPropagation();
    });

    $(".show_img_popup").on("click", function (e) {
        e.preventDefault();
        var id = $(this).attr('data-id'),
            url = $(this).attr('data-url');

        $.ajax({
            url: url,
            type: 'POST',
            data: {id: id},
            success: function (html) {
                $("#popup_portfolio_slider .close").next().remove();
                $("#popup_portfolio_slider .close").after(html);

                initRepairCarousels();

                $("body").css("overflow", "hidden");
                $("#popup_portfolio_slider").fadeIn(function () {

                });
                window.dispatchEvent(new Event('resize'));
            }
        });
    });


    $("#popup_portfolio_slider .close, #popup_portfolio_slider ").on("click", function (e) {
        e.preventDefault();
        $("#popup_portfolio_slider").fadeOut(function () {
            $("body").css("overflow", "auto");
        });
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .slider_popup_block").show();
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .all_form_pop_block").hide()
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .thanks_block").hide();
    });

    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .want_repairs a").on("click", function (e) {
        e.preventDefault();
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .slider_popup_block").hide();
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .all_form_pop_block").show();
        window.dispatchEvent(new Event('resize'));
    });

    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .form_block .submit_pop").on("click", function (e) {
        e.preventDefault();
        $("body").css("overflow", "hidden");
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .all_form_pop_block").hide();
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .thanks_block").show();
        window.dispatchEvent(new Event('resize'));
    });

    $('section.repairs_slider .slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        lazyLoad: true,
        nav: true,
        navText: false,
    });

    $(".click_slider  .block a").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        var number = $this.parent().index();
        $('section.repairs_slider .slider').data('owl-carousel').to(number, 300, true);
        $(".click_slider  .block.active").removeClass("active");
        $this.parent().addClass("active");
    });

    $('section.repairs_slider .slider').on('changed.owl.carousel', function (e) {
        var $number = $(".click_slider  .block").index();
        var $number = e.page.index;
        $(".click_slider  .block.active").removeClass("active");
        $(".click_slider  .block").eq($number).addClass("active");
    });

    $(".calc_num_area .calculate_plus_minus_one .number_c").focusout(function (e) {
        e.preventDefault();
        var $this = $(this);
        $(".calc_num_area  .calc_ui_line").slider("value", $this.val());
        if ($this.val() < 15) {
            $this.val(15);
        }
        if ($this.val() > 200) {
            $this.val(200);
        }
    });

    $(".calc_num_area .calculate_plus_minus_two_1 .number_c").focusout(function (e) {
        e.preventDefault();
        var $this = $(this);
        $(".calc_num_area  .calc_ui_line").slider("value", $this.val());
        if ($this.val() < 1) {
            $this.val(1);
        }
        if ($this.val() > 7) {
            $this.val(7);
        }
    });

    $(".calc_num_area .calculate_plus_minus_two_2 .number_c").focusout(function (e) {
        e.preventDefault();
        var $this = $(this);
        $(".calc_num_area  .calc_ui_line").slider("value", $this.val());
        if ($this.val() < 1) {
            $this.val(1);
        }
        if ($this.val() > 3) {
            $this.val(3);
        }
    });

    $("body").on("click", ".calculate_plus_minus_one .minus", function () {
        var $this = $(this);
        if (+$this.siblings('.number_c').val() - 1 < 15) return false;
        $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);
        var value = $(".calc_num_area  .calc_ui_line").slider("value")
        var step = $(".calc_num_area  .calc_ui_line").slider("option", "step");
        $(".calc_num_area  .calc_ui_line").slider("value", value - step);
    });

    $("body").on("click", ".calculate_plus_minus_one .plus", function () {
        var $this = $(this);
        if (+$this.siblings('.number_c').val() + 1 > 200) return false;
        $this.siblings(' .number_c').val(+$this.siblings('.number_c').val() + 1);
        var value = $(".calc_num_area  .calc_ui_line").slider("value");
        var step = $(".calc_num_area  .calc_ui_line").slider("option", "step");
        $(".calc_num_area  .calc_ui_line").slider("value", value + step);
    });

    $("body").on("click", ".calculate_plus_minus_two_1 .minus", function () {
        var $this = $(this);
        if (+$this.siblings('.number_c').val() - 1 < 1) return false;
        $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);

    });
    $("body").on("click", ".calculate_plus_minus_two_1 .plus", function () {
        var $this = $(this);
        if (+$this.siblings('.number_c').val() + 1 > 7) return false;
        $this.siblings(' .number_c').val(+$this.siblings('.number_c').val() + 1);
    });

    $("body").on("click", ".calculate_plus_minus_two_2 .minus", function () {
        var $this = $(this);
        if (+$this.siblings('.number_c').val() - 1 < 1) return false;
        $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);
        console.log("hello");
    });
    $("body").on("click", ".calculate_plus_minus_two_2 .plus", function () {
        var $this = $(this);
        if (+$this.siblings('.number_c').val() + 1 > 3) return false;
        $this.siblings(' .number_c').val(+$this.siblings('.number_c').val() + 1);
    });


    $(".calc_num_area  .calc_ui_line").slider({
        range: "min",
        min: 15,
        max: 200,
        value: 45,
        animate: true,
        slide: function (event, ui) {
            $(".calc_num_area .number_c_area").val(ui.value);
        }
    });


    var $inter_st,
        $inter;

    $('.calculate_plus_minus_one .minus').on({
        mousedown: function (e) {
            e.preventDefault();
            var $this = $(this);
            $inter_st = setTimeout(function () {
                $inter = setInterval(function () {
                    if (+$this.siblings('.number_c').val() - 1 < 15) return false;
                    $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);
                    var value = $(".calc_num_area  .calc_ui_line").slider("value")
                    var step = $(".calc_num_area  .calc_ui_line").slider("option", "step");
                    $(".calc_num_area  .calc_ui_line").slider("value", value - step);
                }, 100);
            }, 1000);
        },
        mouseup: function () {
            clearTimeout($inter_st);
            clearTimeout($inter);
        }
    });

    $('.calculate_plus_minus_one .plus').on({
        mousedown: function (e) {
            e.preventDefault();
            var $this = $(this);
            $inter_st = setTimeout(function () {
                $inter = setInterval(function () {
                    if (+$this.siblings('.number_c').val() + 1 > 200) return false;
                    $this.siblings('.number_c').val(+$this.siblings('.number_c').val() + 1);
                    var value = $(".calc_num_area  .calc_ui_line").slider("value");
                    var step = $(".calc_num_area  .calc_ui_line").slider("option", "step");
                    $(".calc_num_area  .calc_ui_line").slider("value", value + step);
                }, 100);
            }, 1000);
        },
        mouseup: function () {
            clearTimeout($inter_st);
            clearTimeout($inter);
        }
    });

    $(".next_two_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        var active_next = $('section.repairs_calculete .step_calculate ul li.active').next();
        $this.parents('.calculate_one_page.active').next().addClass('active');
        $this.parents('.calculate_pages.active').removeClass('active');
        active_next.addClass("active");
    });

    $(".next_tree_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        var active_next = $('section.repairs_calculete .step_calculate ul li.active').next();
        $this.parents('.calculate_two_page.active').next().addClass('active');
        $this.parents('.calculate_pages.active').removeClass('active');
        active_next.addClass("active");
    });

    $(".prev_button").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        var active_prev = $('section.repairs_calculete .step_calculate ul li.active');
        $('section.repairs_calculete .step_calculate ul li').eq($this.parents('.all_calculete > div.active').index()).removeClass('active');
        $this.parents('.all_calculete > div.active').prev().addClass('active');
        $this.parents('.all_calculete > div.active').removeClass('active');
    });

    /*                      back to top                  */

    $(window).on("scroll resize", function () {
        startScroll();
    });

    function startScroll() {
        if ($(window).scrollTop() > 0) {
            $('section.back_to_top').addClass('active');
        } else {
            $('section.back_to_top').removeClass("active");
        }
    }

    $(" section.back_to_top").on("click", function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });


    // page 2 //
    $(window).on("resize scroll", function () {
        exampleSlider();
    });

    var new_slider = $('section.sample_project .sample_project_blocks');
    exampleSlider();

    function exampleSlider() {
        if ($(window).innerWidth() < 1017) {
            new_slider.owlCarousel({
                loop: true,
                margin: 20,
                items: 2,
                lazyLoad: true,
                nav: true,
                navText: false,
                stagePadding: 15,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },

                }
            });
        } else {
            if ($(".sample_project_blocks").hasClass("owl-carousel")) {
                new_slider.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
                new_slider.find('.owl-stage-outer').children().unwrap();
            }
        }
    }

    $('section.promotion_discount .promotion_discount_slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: true,
        navText: false,
    });

    $("section.all_comments .all_comments_blocks .comment_blocks .block .new_comment form .sumbit_send .send_comm").on("click", function (e) {
        e.preventDefault();
        var $self = $(this),
            $form = $self.closest('form'),
            formData = new FormData(),
            images = $form.find('input[name="images"]')[0].files,
            authorImage = $form.find('input[name="author_image"]')[0].files,
            stars = $form.find('.stars div.active'),
            $errors = $self.closest('.new_comment').find('.errors');

        $form.find('input[type="text"], textarea').each(function (item, index) {
            if ($(this).val()) {
                formData.append($(this).attr('name'), $(this).val());
            }
        });

        for (var i = 0; i < images.length; i++) {
            formData.append('images[' + i + ']', images[i]);
        }

        formData.append('author_image', authorImage[0]);
        formData.append('rating', stars.length);

        $.ajax({
            url: $form.data('action'),
            type: 'POST',
            dataType: 'json',
            processData: false,
            data: formData,
            contentType: false,
            success: function () {
                $errors.fadeOut(300);
                $errors.html('');

                $("section.all_comments .all_comments_blocks .comment_blocks .block .new_comment .thanks_comment").show();
                $("section.all_comments .all_comments_blocks .comment_blocks .block .new_comment .new_comments_block").hide();
            },
            error: function (response) {
                $errors.fadeOut(300);
                $errors.html('');

                var text = '';
                if (response.responseJSON.messages) {
                    for (var i in response.responseJSON.messages) {
                        text += '<p>' + response.responseJSON.messages[i][0] + '</p>';
                    }
                }
                $errors.html(text);
                $errors.fadeIn(300);
            }
        });
    });

    $(".new_comment .your_stars .stars > div ").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.siblings('div').removeClass('active');
        $this.removeClass('active');
        for (var $i = 0; $i <= $this.index(); $i++) {
            $this.parents('.stars').find('div').eq($i).addClass('active');
        }
    });

    lightbox.option({
        'showImageNumberLabel': true,
        'albumLabel': '%1 из  %2',
    });

    if ($(".pagination_block_new ul li.active").index() == 0) {
        $(".pagination_block_new .prev").addClass("pag_event");
    } else {
        $(".pagination_block_new .prev").removeClass("pag_event");
    }

    if ($(".pagination_block_new ul li.active").index() == $(".pagination_block_new ul li").last().index()) {
        $(".pagination_block_new .next").addClass("pag_event");
    } else {
        $(".pagination_block_new .next").removeClass("pag_event");
    }

    $('section.sliders_comparison .slider_comparison .slider_comp').owlCarousel({
        navText: false,
        items: 3,
        loop: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            539: {
                items: 2,
            },
            768: {
                items: 3
            }
        }
    });

    $("header .logo_menu_mob .logo_menu_icons .phone_gen_menu .gen_menu_icons").on("click", function (e) {
        e.preventDefault();
        $("header .logo_menu_mob .show_menu").stop().slideDown(300);

    });
    $("header .logo_menu_mob .show_menu .close_menu").on("click", function (e) {
        e.preventDefault();
        $("header .logo_menu_mob .show_menu").stop().slideUp(300);

    });

    $("header .logo_menu_mob .show_menu .all_menu > ul .arrow > a").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parent("li").find(">ul").stop().slideDown(300);
        $("header .logo_menu_mob .show_menu .close_menu").removeClass("active");
        $("header .logo_menu_mob .show_menu .prev_menu").addClass("active");

    });
    $("header .logo_menu_mob .show_menu .all_menu > ul > li > ul > li > a").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parent("li").find(">ul").stop().slideDown(300);
        $("header .logo_menu_mob .show_menu .prev_menu").addClass("active_new");

    });


    $("header .logo_menu_mob .show_menu .prev_menu").on("click", function (e) {
        e.preventDefault();
        if ($(".active_new").hasClass("active_new")) {
            var $this = $("header .logo_menu_mob .show_menu .all_menu > ul > li .menu_one > li > a");
            $this.parent("li").find(">ul").stop().slideUp(300);
            $("header .logo_menu_mob .show_menu .prev_menu").removeClass("active_new");
        } else {
            var $this = $("header .logo_menu_mob .show_menu .all_menu > ul > li > ul > li > a");
            $this.parents(".all_menu > ul >li").find(">ul").stop().slideUp(300);
            $("header .logo_menu_mob .show_menu .close_menu").addClass("active");
            $("header .logo_menu_mob .show_menu .prev_menu").removeClass("active");
        }

    });

    initRepairCarousels();

});


function initRepairCarousels() {
    if ($('#popup_portfolio_slider .slider_portfolio_1 .img_slid').length) {
        $('#popup_portfolio_slider .slider_portfolio_1').owlCarousel({
            margin: 0,
            navText: false,
            items: 1,
            nav: true,
            loop: $('#popup_portfolio_slider .slider_portfolio_1 .img_slid').length > 1,
            onInitialized: function (e) {
                $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_1').text('(фото 1 из ' + this.items().length + ')')
            },
            responsive: {
                0: {
                    // autoHeight:true,
                },
                1100: {
                    autoHeight: false,
                }
            }
        });
    }

    if ($('#popup_portfolio_slider .slider_portfolio_2 .img_slid').length) {
        $('#popup_portfolio_slider .slider_portfolio_2').owlCarousel({
            margin: 0,
            navText: false,
            items: 1,
            nav: true,
            loop: $('#popup_portfolio_slider .slider_portfolio_2 .img_slid').length > 1,
            onInitialized: function (e) {
                $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_2').text('(фото 1 из ' + this.items().length + ')')
            },
            responsive: {
                0: {
                    // autoHeight:true,
                },
                1100: {
                    autoHeight: false,
                }
            }
        });
    }

    if ($('#popup_portfolio_slider .slider_portfolio_3 .img_slid').length) {
        $('#popup_portfolio_slider .slider_portfolio_3').owlCarousel({
            margin: 0,
            navText: false,
            items: 1,
            nav: true,
            loop: $('#popup_portfolio_slider .slider_portfolio_3 .img_slid').length > 1,
            onInitialized: function (e) {
                $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_3').text('(фото 1 из ' + this.items().length + ')')
            },
            responsive: {
                0: {
                    // autoHeight:true,
                },
                1100: {
                    autoHeight: false,
                }
            }
        });
    }

    if ($('#popup_portfolio_slider .slider_portfolio_4 .img_slid').length) {
        $('#popup_portfolio_slider .slider_portfolio_4').owlCarousel({
            margin: 0,
            navText: false,
            items: 1,
            nav: true,
            loop: $('#popup_portfolio_slider .slider_portfolio_4 .img_slid').length > 1,
            onInitialized: function (e) {
                $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_4').text('(фото 1 из ' + this.items().length + ')')
            },
            responsive: {
                0: {
                    // autoHeight:true,
                },
                1100: {
                    autoHeight: false,
                }
            }
        });
    }
}