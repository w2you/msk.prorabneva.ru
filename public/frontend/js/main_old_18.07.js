$.ajaxSetup({
  headers: {
    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
  }
});


$(document).ready(function () {

  /*            price list           */
  $('section.price_list .all_price_list .price_list_block .info_price table tbody').each(function () {
    $(this).children().slice(5).hide();
  });

  $("section.price_list .all_price_list .price_list_block .info_price .read_more a").on("click", function (e) {
    e.preventDefault();
    var $this = $(this);
    $this.parents("section.price_list .all_price_list .price_list_block .info_price").toggleClass('active');
    if ($this.parents("section.price_list .all_price_list .price_list_block .info_price").hasClass("active")) {
      $this.parents("section.price_list .all_price_list .price_list_block .info_price ").find("table tbody").each(function () {
        $(this).children().slice(5).show();
      });
      $this.html(" - ПОКАЗАТЬ МЕНЬШЕ");

    } else {
      $('section.price_list .all_price_list .price_list_block .info_price table tbody').each(function () {
        $(this).children().slice(5).hide();
      });
      $this.html(" + ПОКАЗАТЬ БОЛЬШЕ");
    }
  });
  /* end  price list   */
  ///Home slider
  $('section.repairs_slider .slider').owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    lazyLoad: true,
    nav: true,
    navText: false,
    mouseDrag: false,
    touchDrag: false,
    responsive: {
      0: {
        mouseDrag: true,
        touchDrag: true
      },
      820: {
        mouseDrag: false,
        touchDrag: false,
      }

    }
  });


  $('section.repairs_slider .click_slider').children().each(function (index) {
    $(this).attr('data-position', index); // NB: .attr() instead of .data()
  });

  $('section.repairs_slider .click_slider').owlCarousel({
    center: true,
    loop: true,
    items: 3,
    margin: 20,
    lazyLoad: true,
    nav: true,
    navText: false,
    mouseDrag: false,
  });

  $(".click_slider  .block").on("click", function (e) {
    e.preventDefault();
    var $this = $(this);
    var number = $this.index();
    $('section.repairs_slider .click_slider').trigger('to.owl.carousel', $this.data('position'));
    $('section.repairs_slider .slider').trigger('to.owl.carousel', $this.data('position'));

  });

  $("body").on('click', '.click_slider  .block', function (e) {
    e.preventDefault();
    var $this = $(this);
    var number = $this.index();
    $('section.repairs_slider .click_slider').trigger('to.owl.carousel', $this.data('position'));
    $('section.repairs_slider .slider').trigger('to.owl.carousel', $this.data('position'));

  });


  $('section.repairs_slider .slider .owl-prev').click(function () {
    $('section.repairs_slider .click_slider ').trigger('prev.owl.carousel', [300]);
  });
  $('section.repairs_slider .slider .owl-next').click(function () {
    $('section.repairs_slider .click_slider ').trigger('next.owl.carousel', [300]);
  });
  ///End Home slider
  /* $('section.repairs_slider .slider').owlCarousel({
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
*/

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

  $('section.reviews .reviews_slider_mob').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    stagePadding: 20,
    margin: 58,
    navText: false,
  });
  /*Slider  Client  Comment*/
  /*Config owlCarousel*/
  $('section.reviews .reviews_slider').owlCarousel({
    items: 5,
    loop: true,
    nav: $('section.reviews .reviews_slider .block').length > 5,
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
  /*End Config owlCarousel*/

  /*Old   Slider  Client  Comment*/
  /*   function callback_first() {

       $ ( "section.reviews .reviews_slider .owl-item" ).removeClass('zoomactive');

       if (window.innerWidth < 1050){
           if (window.innerWidth < 640){
               $ ( "section.reviews .reviews_slider .owl-item.active" ).eq(0).addClass('zoomactive');
           }else{
               $ ( "section.reviews .reviews_slider .owl-item.active" ).eq(1).addClass('zoomactive');
           }
       }else{
           $ ( "section.reviews .reviews_slider .owl-item.active" ).eq(2).addClass('zoomactive');
       }

       $('.reviews .all_slider  .reviews_text .name').text($ ( ".reviews .reviews_slider .owl-item.zoomactive .img" ).data('name'));
       $('.reviews .all_slider .reviews_text p').text($ ( ".reviews .reviews_slider .owl-item.zoomactive .img" ).data('review'));
   }

   $(window).on('resize', function () {
       callback_first();
   });



   $ ( "section.reviews .reviews_slider .owl-item" ).on ( "click" , function (e) {
       e.preventDefault();
       var $this = $ ( this );
       if (window.innerWidth < 900){
           $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [$this.index () - 1, 300, true]);
       }else{
           $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [$this.index ()  -2, 300, true]);
       }
       callback_first();
   } );

   $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [2, 300, true]);

   $('.next_prev .next').click(function () {
       $('.services_slider,.manager_block .owl-carousel').trigger('next.owl.carousel');
   });
   $('.next_prev .prev').click(function () {
       $('.services_slider,.manager_block .owl-carousel').trigger('prev.owl.carousel');
   });*/

  /*Old  End Slider  Client  Comment*/

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

    $('.reviews .all_slider  .reviews_text .name').text($(".reviews .reviews_slider .owl-item.zoomactive .img").data('name'));
    $('.reviews .all_slider .reviews_text p').text($(".reviews .reviews_slider .owl-item.zoomactive .img").data('review'));
  }

  $(window).on('resize', function () {
    callback_first();
  });


  /* $ ( "section.reviews .reviews_slider .owl-item" ).on ( "click" , function (e) {
       e.preventDefault();
       var $this = $ ( this );
       if (window.innerWidth < 900){
           $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [$this.index () - 1, 300, true]);
       }else{
           $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [$this.index ()  -2, 300, true]);
       }
       callback_first();
   } );*/

  $("section.reviews .reviews_slider ").trigger("to.owl.carousel", [2, 300, true]);

  $('.next_prev .next').click(function () {
    $('.services_slider,.manager_block .owl-carousel').trigger('next.owl.carousel');
  });
  $('.next_prev .prev').click(function () {
    $('.services_slider,.manager_block .owl-carousel').trigger('prev.owl.carousel');
  });
  /*End Slider  Client  Comment*/

  $('section.tur_3d .tur_slider').owlCarousel({
    loop: $('section.tur_3d .tur_slider .block').length > 1,
    margin: 0,
    items: 1,
    nav: $('section.tur_3d .tur_slider .block').length > 1,
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
  //Footer Phone Email
  $('.submit_call').click(function () {
    var phone = $('#footer_phone').val();
    console.log(url);
    var url = $(this).data('url');
    $(this).addClass('email_disable');
    $.ajax({
      url: url,
      type: 'POST',
      data: {
        phone: phone
      },
      success: function (response) {
        $('.submit_call').removeClass('email_disable');
        $("body").css("overflow", "hidden");
        $("#popup_call_thank_you").fadeIn(function () {
          $(this).fadeOut(2000);
        });
        $("#popup_call").fadeOut(function () {

          $("body").css("overflow", "auto");
        });
        yaCounter44756221.reachGoal('Футер_заявка');
        ga('send', 'event', 'Heder', 'Футер_заявка');

      },
      error: function (error) {
        console.log(response.responseJSON.message);
      }
    });

  });
  //End  Footer Phone Email
  if ($('input').hasClass('phone_maska')) {
    $('.phone_maska').mask("+7 (999) 999-99-99");
  }
  if ($('input').hasClass('new_phone_maska')) {
    $('.new_phone_maska').simpleMask({
      'mask': ['(###) ###-##-##', '(###) ###-##-##']
    });
  }
  /*                      Map script                      */
  var myMap;

  if ($('div').is('#map')) {
    ymaps.ready(init);
  }

  function init() {
    myMap = new ymaps.Map("map", {
      center: [59.950179, 30.309728],
      zoom: 10,
      controls: []
    });
    /*
            var myPlacemark = new ymaps.Placemark([59.931012, 30.437680], {
                    //balloonContent: '<div class="map_content"><p><span>м. Технологический институт</span></p> <div class="line"></div><p>Санкт-Петербург, Измайловский пр., 4, оф. 242</p><p><a href="tel:+78124261015"><span>+7 812 439-16-17</span></a></p><div class="line"></div><p>пн-пт 9.00-20.00 <br> сб-вс 10.00-19.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images//marker/marker_red.png',
                    iconImageSize: [38, 68],
                    iconImageOffset: [-16.5, -46]
                });

    */
    /*        var myPlacemark1 = new ymaps.Placemark([59.852253, 30.217503], {
                  //  balloonContent: '<div class="map_content"> <p><span>м. Ленинский проспект</span></p> <div class="line"></div><p>Санкт-Петербург, Ленинский проспект, д. 97</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p></div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });


            var myPlacemark2 = new ymaps.Placemark([59.852384, 30.313640], {
                  //  balloonContent: '<div class="map_content"> <p><span>м. Московская</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Варшавская, д. 59</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });

            var myPlacemark3 = new ymaps.Placemark([60.002148, 30.385506], {
                 //   balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, Гражданский пр., д. 18</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });

            var myPlacemark4 = new ymaps.Placemark([59.906300, 30.479119], {
                   // balloonContent: '<div class="map_content"> <p><span>м. Дыбенко</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Дыбенко, д. 24</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });

            var myPlacemark5 = new ymaps.Placemark([59.832059, 30.386943], {
                  //  balloonContent: '<div class="map_content"> <p><span>м. Купчино</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Ярослава Гашека, д. 4</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });

            var myPlacemark6 = new ymaps.Placemark([60.035841, 30.415743], {
                   // balloonContent: '<div class="map_content"> <p><span>м. Гражданский  проспект</span></p> <div class="line"></div><p>Санкт-Петербург, пр. Просвещения, д. 87</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });

            var myPlacemark7 = new ymaps.Placemark([60.010079, 30.263173], {
                 //   balloonContent: '<div class="map_content"> <p><span>м. Комендантский  проспект</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Уточкина, д. 3, кор.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });

            var myPlacemark8 = new ymaps.Placemark([59.834243, 30.199285], {
                   // balloonContent: '<div class="map_content"> <p><span>м. Проспект  Ветеранов</span></p> <div class="line"></div><p>Санкт-Петербург, пр. Ветеранов, д. 109</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p></div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });

            var myPlacemark9 = new ymaps.Placemark([60.042110, 30.333448], {
                  //  balloonContent: '<div class="map_content"> <p><span>м. Проспект  Просвещения </span></p> <div class="line"></div><p>Санкт-Петербург, пр. Луначарского, д. 15, корп. 1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'frontend/images/marker.png',
                    iconImageSize: [25, 44],
                    iconImageOffset: [-16.5, -46]
                });*/

    var myPlacemark_array = [];

    function getRandomArbitrary(min, max) {
      return Math.random() * (max - min) + min;
    }

    for (var i = 1; i < 100; i++) {
      var lat = getRandomArbitrary(59.832059, 60.042110);
      var lng = getRandomArbitrary(30.199285, 30.479119);
      myPlacemark_array[i] = new ymaps.Placemark([lat, lng], {
          //  balloonContent: '<div class="map_content"> <p><span>м. Проспект  Просвещения </span></p> <div class="line"></div><p>Санкт-Петербург, пр. Луначарского, д. 15, корп. 1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
        },
        {
          iconLayout: 'default#image',
          iconImageHref: 'frontend/images/marker/marker.png',
          iconImageSize: [25, 44],
          iconImageOffset: [-16.5, -46]
        });
    }
    //А_М
    for (var j = 1; j < 100; j++) {
      myMap.geoObjects.add(myPlacemark_array[j]);
    }
    //End A_M
    myMap.geoObjects.add(myPlacemark);
    /* myMap.geoObjects.add(myPlacemark1);
     myMap.geoObjects.add(myPlacemark2);
     myMap.geoObjects.add(myPlacemark3);
     myMap.geoObjects.add(myPlacemark4);
     myMap.geoObjects.add(myPlacemark5);
     myMap.geoObjects.add(myPlacemark6);
     myMap.geoObjects.add(myPlacemark7);
     myMap.geoObjects.add(myPlacemark8);
     myMap.geoObjects.add(myPlacemark9);*/
    myMap.behaviors.disable('scrollZoom');
    /*  myMap.events.add('click', function () {
          myMap.behaviors.enable('scrollZoom');
      })*/
  }

  /*New script */
  if ($('div').is('#map_center')) {
    ymaps.ready(init_map_center);
  }


  function init_map_center() {
    myMap = new ymaps.Map("map_center", {
      center: [59.931012, 30.437680],
      zoom: 16,
      controls: []
    });
    var myPlacemark = new ymaps.Placemark([59.931012, 30.437680], {
        //      balloonContent: '<div class="map_content"> <p><span>м. Площадь  Восстания </span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 812 439-16-17</span></a></p><div class="line"></div><p>пн-пт 9.00-20.00 <br> сб-вс 10.00-19.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker_red.png',
        iconImageSize: [38, 68],
        iconImageOffset: [-16.5, -46]
      });
    myMap.geoObjects.add(myPlacemark);
    myMap.behaviors.disable('scrollZoom');
    myMap.events.add('click', function () {
      myMap.behaviors.enable('scrollZoom');
    });
  }

  showItemPortfolio();

  /*New script */
  /*                      Map script       2               */
  /*var myMap;

  if ($('div').is('#map_2')) {
      ymaps.ready(init);
  }

  function init() {
      myMap = new ymaps.Map("map_2", {
          center: [59.950179, 30.309728],
          zoom: 10,
          controls: []
      });
      var myPlacemark = new ymaps.Placemark([59.932347, 30.366093], {
              balloonContent: '<div class="map_content"> <p><span>м. Площадь  Восстания </span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 812 439-16-17</span></a></p><div class="line"></div><p>пн-пт 9.00-20.00 <br> сб-вс 10.00-19.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/contact_place_icon_center.png',
              iconImageSize: [38, 68],
              iconImageOffset: [-16.5, -46]
          });


      var myPlacemark1 = new ymaps.Placemark([59.852253, 30.217503], {
              balloonContent: '<div class="map_content"> <p><span>м. Ленинский проспект</span></p> <div class="line"></div><p>Санкт-Петербург, Ленинский проспект, д. 97</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p></div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });


      var myPlacemark2 = new ymaps.Placemark([59.852384, 30.313640], {
              balloonContent: '<div class="map_content"> <p><span>м. Московская</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Варшавская, д. 59</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });

      var myPlacemark3 = new ymaps.Placemark([60.002148, 30.385506], {
              balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, Гражданский пр., д. 18</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });

      var myPlacemark4 = new ymaps.Placemark([59.906300, 30.479119], {
              balloonContent: '<div class="map_content"> <p><span>м. Дыбенко</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Дыбенко, д. 24</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });

      var myPlacemark5 = new ymaps.Placemark([59.832059, 30.386943], {
              balloonContent: '<div class="map_content"> <p><span>м. Купчино</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Ярослава Гашека, д. 4</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });

      var myPlacemark6 = new ymaps.Placemark([60.035841, 30.415743], {
              balloonContent: '<div class="map_content"> <p><span>м. Гражданский  проспект</span></p> <div class="line"></div><p>Санкт-Петербург, пр. Просвещения, д. 87</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });

      var myPlacemark7 = new ymaps.Placemark([60.010079, 30.263173], {
              balloonContent: '<div class="map_content"> <p><span>м. Комендантский  проспект</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Уточкина, д. 3, кор.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });

      var myPlacemark8 = new ymaps.Placemark([59.834243, 30.199285], {
              balloonContent: '<div class="map_content"> <p><span>м. Проспект  Ветеранов</span></p> <div class="line"></div><p>Санкт-Петербург, пр. Ветеранов, д. 109</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p></div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
              iconImageSize: [25, 44],
              iconImageOffset: [-16.5, -46]
          });

      var myPlacemark9 = new ymaps.Placemark([60.042110, 30.333448], {
              balloonContent: '<div class="map_content"> <p><span>м. Проспект  Просвещения </span></p> <div class="line"></div><p>Санкт-Петербург, пр. Луначарского, д. 15, корп. 1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
          },
          {
              iconLayout: 'default#image',
              iconImageHref: 'frontend/images/marker.png',
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
      myMap.behaviors.disable('scrollZoom')
      myMap.events.add('click', function () {
          myMap.behaviors.enable('scrollZoom');
      })
  }*/
  /*Енд мап сцприпт 2*/

  /*if ($('div').is('#map_center')) {
      ymaps.ready ( init_map_center );
  }

  function init_map_center() {
      /!**
       * Создаем мультимаршрут.
       * Первым аргументом передаем модель либо объект описания модели.
       * Вторым аргументом передаем опции отображения мультимаршрута.
       * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml
       * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel.xml
       *!/
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
          /!**
           * Задаем параметры маршрутизации для модели мультимаршрута.
           * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel.xml#setParams
           *!/
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
  }*/

  if ($('div').is('#big_map')) {
    ymaps.ready(init_big_map);
  }

  function init_big_map() {
    myMap = new ymaps.Map("big_map", {

      center: [59.950179, 30.309728],
      zoom: 10,
      controls: []
    });
    /* var myPlacemark = new ymaps.Placemark([59.932347, 30.366093], {
             balloonContent: '<div class="map_content"> <p><span>м. Площадь  Восстания </span></p> <div class="line"></div><p>Санкт-Петербург, ул. 2-я Советская д. 7</p><p><a href="tel:+78124261015"><span>+7 812 439-16-17</span></a></p><div class="line"></div><p>пн-пт 9.00-20.00 <br> сб-вс 10.00-19.00</p> </div>'
         },
         {
             iconLayout: 'default#image',
             iconImageHref: 'frontend/images/contact_place_icon_center.png',
             iconImageSize: [38, 68],
             iconImageOffset: [-16.5, -46]
         });

*/
    var myPlacemark = new ymaps.Placemark([59.931012, 30.437680], {
        balloonContent: '<div class="map_content"><p><span>м. Ладожская</span></p> <div class="line"></div><p>Санкт-Петербург,  пр. Энергетиков д. 3 БЦ Лада офис 214</p><p><a href="tel:+78124261015"><span>+7 812 439-16-17</span></a></p><div class="line"></div><p>пн-пт 9.00-19.00 <br> сб-вс 10.00-19.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker_red.png',
        iconImageSize: [38, 68],
        iconImageOffset: [-16.5, -46]
      });
    var myPlacemark1 = new ymaps.Placemark([59.852253, 30.217503], {
        balloonContent: '<div class="map_content"> <p><span>м. Ленинский проспект</span></p> <div class="line"></div><p>Санкт-Петербург, Ленинский проспект, д. 97 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p></div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });


    var myPlacemark2 = new ymaps.Placemark([59.852384, 30.313640], {
        balloonContent: '<div class="map_content"> <p><span>м. Московская</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Варшавская, д. 59 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });

    var myPlacemark3 = new ymaps.Placemark([60.002148, 30.385506], {
        balloonContent: '<div class="map_content"> <p><span>м. Академическая</span></p> <div class="line"></div><p>Санкт-Петербург, Гражданский пр., д. 18 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });

    var myPlacemark4 = new ymaps.Placemark([59.906300, 30.479119], {
        balloonContent: '<div class="map_content"> <p><span>м. Дыбенко</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Дыбенко, д. 24 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });

    var myPlacemark5 = new ymaps.Placemark([59.832059, 30.386943], {
        balloonContent: '<div class="map_content"> <p><span>м. Купчино</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Ярослава Гашека, д. 4 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });

    var myPlacemark6 = new ymaps.Placemark([60.035841, 30.415743], {
        balloonContent: '<div class="map_content"> <p><span>м. Гражданский  проспект</span></p> <div class="line"></div><p>Санкт-Петербург, пр. Просвещения, д. 87 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });

    var myPlacemark7 = new ymaps.Placemark([60.010079, 30.263173], {
        balloonContent: '<div class="map_content"> <p><span>м. Комендантский  проспект</span></p> <div class="line"></div><p>Санкт-Петербург, ул. Уточкина, д. 3, кор.1 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });

    var myPlacemark8 = new ymaps.Placemark([59.834243, 30.199285], {
        balloonContent: '<div class="map_content"> <p><span>м. Проспект  Ветеранов</span></p> <div class="line"></div><p>Санкт-Петербург, пр. Ветеранов, д. 109 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p></div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
        iconImageSize: [25, 44],
        iconImageOffset: [-16.5, -46]
      });

    var myPlacemark9 = new ymaps.Placemark([60.042110, 30.333448], {
        balloonContent: '<div class="map_content"> <p><span>м. Проспект  Просвещения </span></p> <div class="line"></div><p>Санкт-Петербург, пр. Луначарского, д. 15, корп. 1 пом.1</p><p><a href="tel:+78124261015"><span>+7 (812) 426-10-15</span></a></p><div class="line"></div><p>пн-сб 10.00-21.00<br> воскресенье 10.00-18.00</p> </div>'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: 'frontend/images/marker/marker.png',
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
    myMap.behaviors.disable('scrollZoom');
    myMap.events.add('click', function () {
      myMap.behaviors.enable('scrollZoom');
    });
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

  $(window).on("resize scroll", function () {
    exampleSliderTable();
  });

  var slider_table = $('section.services_prices .all_services_table');
  exampleSliderTable();

  function exampleSliderTable() {
    if ($(window).innerWidth() < 920) {
      slider_table.owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        lazyLoad: true,
        nav: true,
        navText: false,
        responsive: {
          0: {
            items: 1
          },
          640: {
            items: 2
          },
          800: {
            items: 3
          },

        }
      });
    } else {
      if ($(".all_services_table").hasClass("owl-carousel")) {
        slider_table.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
        slider_table.find('.owl-stage-outer').children().unwrap();
      }
    }
  }

  /*//  next step_c_two block
  $ ( ".next_step_c_two_button" ).on ( "click" , function (e) {
      e.preventDefault();
      var $this = $ ( this );
      $this.parents('.step_c_one.active').next().addClass('active');
      $this.parents('.step_c_one.active').removeClass('active');
      $('.section.step_navigation ul li').eq($this.parents('.step_c_one').next().index()).addClass('active');
  } );

  //  next step_c_third block
  $ ( ".next_step_c_third_button" ).on ( "click" , function (e) {
      e.preventDefault();
      var $this = $ ( this );
      $this.parents('.step_c_two.active').next().addClass('active');
      $this.parents('.step_c_two.active').removeClass('active');
      $('.section.step_navigation ul li').eq($this.parents('.step_c_two').next().index()).addClass('active');
  } );

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
  } );*/

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

  initPortfolioNumberChange();

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
    window.dispatchEvent(new CustomEvent('resize'));


    $('#popup_portfolio_slider .img_numbers').show();
  });
  /*--------------------------- PopUp Script ----------------------------------------*/

  $("#popup_portfolio_slider .popup_block").on("click", function (e) {
    e.stopPropagation();
  });

  $(document).on("click", ".show_img_popup", function (e) {
    // ROISTAT BEGIN
    roistat.event.send('portfolio_click', {'url': location.href});
    // ROISTAT END
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
        initPortfolioNumberChange();
        console.log($("#popup_portfolio_slider .foto_menu ul li"));
        if ($("#popup_portfolio_slider .foto_menu ul li:not(.passive)").length) {
          $("#popup_portfolio_slider .foto_menu ul li:not(.passive)").first().find("a").click();
        }

        $("body").css("overflow", "hidden");
        $("#popup_portfolio_slider").fadeIn(function () {

        });
        window.dispatchEvent(new CustomEvent('resize'));


      }
    });
  });


  $("#popup_portfolio_slider .close, #popup_portfolio_slider ").on("click", function (e) {
    e.preventDefault();
    $("#popup_portfolio_slider").fadeOut(function () {
      $("body").css("overflow", "auto");
    });
    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .slider_popup_block").show();
    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .all_form_pop_block").hide();
    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .thanks_block").hide();
  });

  $("#popup_portfolio_slider .popup_block").on("click", ".all_slider .slider_info_portfolio .want_repairs a", function (e) {
    var portfolio_button_yandex_metrica = $(this).html();
    $('.new_phone_maska').simpleMask({
      'mask': ['(###) ###-##-##', '(###) ###-##-##']
    });
    e.preventDefault();
    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .slider_popup_block").hide();

    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .all_form_pop_block").show();
    $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .all_form_pop_block .form_block form .submit_pop").attr('data-portfolio-button-yandex-metrica', portfolio_button_yandex_metrica);
    if ($('input').hasClass('phone_maska')) {
      $('.phone_maska').mask("+7 (999) 999-99-99");
    }
    window.dispatchEvent(new CustomEvent('resize'));
  });
  /*
  * Portfolio
  * */
  $("#popup_portfolio_slider .popup_block").on("click", ".all_slider .slider_info_portfolio .sliders_popup .form_block .submit_pop", function (e) {
    title = $(this).attr('data-portfolio-button-yandex-metrica').trim().toLowerCase();
    title = yandexMetric(title);
    /*  popap = $(this).closest('div').attr('popup_portfolio_slider');
      popap.attr('data-title',title)
      console.log($(this).closest('div').attr('id','popup_portfolio_slider'))*/
    e.preventDefault();
    var $form = $(this).closest('form'),
      url = $(this).attr('data-action'),
      $name = $form.find('.name_pop'),
      id = $(this).data('id'),
      title = $(this).data('title'),
      $phone = $form.find('.tel_pop');
    if (!$name.val() || !$phone.val() || !$('#check_slid_popup').prop('checked')) {
      return;
    }
    $(this).addClass('email_disable');
    $.ajax({
      url: url,
      type: 'post',
      data: {
        name: $name.val(),
        phone: $phone.val(),
        id: id,
        title: title
      },
      success: function (response) {
        $(".submit_pop").removeClass("email_disable");
        $("body").css("overflow", "hidden");
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .all_form_pop_block").hide();
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .thanks_block").show();

        window.dispatchEvent(new CustomEvent('resize'));
        $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .sliders_popup .thanks_block").fadeOut(2000, function () {
          // Animation complete.
          $("#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .slider_popup_block").show();
          $("body").css("overflow", "auto");
        });
        //if ( typeof title=='undefined') title='Футер_заявка';
        yaCounter44756221.reachGoal(title);
        ga('send', 'event', 'Heder', title);
        return true;
      },
      error: function (error) {
        console.log(error.message);
      }
    });

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
    $('.calc_count_input').val(calc());
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
    $('.calc_count_input').val(calc());
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
    $('.calc_count_input').val(calc());
  });

  $("body").on("click", ".calculate_plus_minus_one .minus", function () {
    var $this = $(this);
    if (+$this.siblings('.number_c').val() - 1 < 15) return false;
    $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);
    var value = $(".calc_num_area  .calc_ui_line").slider("value");
    var step = $(".calc_num_area  .calc_ui_line").slider("option", "step");
    $(".calc_num_area  .calc_ui_line").slider("value", value - step);
    $('.calc_count_input').val(calc());
  });

  $("body").on("click", ".calculate_plus_minus_one .plus", function () {
    var $this = $(this);
    if (+$this.siblings('.number_c').val() + 1 > 200) return false;
    $this.siblings(' .number_c').val(+$this.siblings('.number_c').val() + 1);
    var value = $(".calc_num_area  .calc_ui_line").slider("value");
    var step = $(".calc_num_area  .calc_ui_line").slider("option", "step");
    $(".calc_num_area  .calc_ui_line").slider("value", value + step);
    $('.calc_count_input').val(calc());
  });

  $("body").on("click", ".calculate_plus_minus_two_1 .minus", function () {
    var $this = $(this);
    if (+$this.siblings('.number_c').val() - 1 < 1) return false;
    $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);
    $('.calc_count_input').val(calc());
  });
  $("body").on("click", ".calculate_plus_minus_two_1 .plus", function () {
    var $this = $(this);
    if (+$this.siblings('.number_c').val() + 1 > 7) return false;
    $this.siblings(' .number_c').val(+$this.siblings('.number_c').val() + 1);
    $('.calc_count_input').val(calc());
  });

  $("body").on("click", ".calculate_plus_minus_two_2 .minus", function () {
    var $this = $(this);
    if (+$this.siblings('.number_c').val() - 1 < 1) return false;
    $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);
    $('.calc_count_input').val(calc());
  });
  $("body").on("click", ".calculate_plus_minus_two_2 .plus", function () {
    var $this = $(this);
    if (+$this.siblings('.number_c').val() + 1 > 3) return false;
    $this.siblings(' .number_c').val(+$this.siblings('.number_c').val() + 1);
    $('.calc_count_input').val(calc());
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
          var value = $(".calc_num_area  .calc_ui_line").slider("value");
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


  /*      Добавить отзыв      click  */

  new_comentsToggle();

  function new_comentsToggle() {
    if ($(window).innerWidth() < 820) {
      $("section.all_comments .all_comments_blocks .comment_blocks .block .block_title").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.stop().toggleClass("active");
        $("section.all_comments .all_comments_blocks .comment_blocks .block .new_comments_block").stop().slideToggle(300);
      });
    }
  }

  // page 2 //
  $(window).on("resize scroll", function () {
    exampleSlider();

  });

  var new_slider = $('section.sample_project .sample_project_blocks');
  var new_slider_block = $('section.sample_project .sample_project_blocks .block').length;
  exampleSlider();


  function exampleSlider() {
    if (new_slider_block > 3) {
      new_slider.owlCarousel({
        loop: false,
        margin: 20,
        items: 3,
        lazyLoad: true,
        nav: true,
        navText: false,
        stagePadding: 12,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          },
        }
      });
    } else if ($(window).innerWidth() < 1017) {
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
    loop: $('section.promotion_discount .promotion_discount_slider .block').length > 1,
    margin: 0,
    items: 1,
    nav: $('section.promotion_discount .promotion_discount_slider .block').length > 1,
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
        setTimeout(initMasonry);
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
        setTimeout(initMasonry);
        // test();
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

  $(window).on("scroll resize", function () {
    exampleSlider_team();
  });

  var new_slider_team = $('section.sliders_comparison_none_slid .slider_comparison .slider_comp');
  exampleSlider_team();

  function exampleSlider_team() {
    if ($(window).innerWidth() < 768) {
      new_slider_team.owlCarousel({
        navText: false,
        items: 2,
        loop: true,
        nav: true,
        responsive: {
          0: {
            items: 1
          },
          539: {
            items: 2,
          },
        }
      });
    } else {
      if ($("section.sliders_comparison_none_slid .slider_comparison .slider_comp").hasClass("owl-carousel")) {
        new_slider_team.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
        new_slider_team.find('.owl-stage-outer').children().unwrap();
      }
    }
  }

  $('section.sliders_comparison_slid .slider_comparison .slider_comp').each(function () {
    $(this).owlCarousel({
      navText: false,
      items: 3,
      loop: $(this).find('.block').length > 3,
      nav: $(this).find('.block').length > 3,
      responsive: {
        0: {
          items: 1,
          nav: $(this).find('.block').length > 1,
          loop: $(this).find('.block').length > 1,
        },
        539: {
          items: 2,
          nav: $(this).find('.block').length > 2,
          loop: $(this).find('.block').length > 2,
        },
        768: {
          items: 3,
          nav: $(this).find('.block').length > 3,
          loop: $(this).find('.block').length > 3,
        }
      }
    });
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
  /*Vache*/
  $("header .logo_menu_mob .show_menu .all_menu > ul > li > ul > li > .menu_2").on("click", function () {
    var $this = $(this);
    $this.parent("li").addClass("menu_li_pos");
    $this.parent("li").find(">ul").stop().slideDown(300);
    $("header .logo_menu_mob .show_menu .prev_menu").addClass("active_new");

  });


  $("header .logo_menu_mob .show_menu .prev_menu").on("click", function (e) {
    e.preventDefault();
    if ($(".active_new").hasClass("active_new")) {
      var $this = $("header .logo_menu_mob .show_menu .all_menu > ul > li .menu_one > li > a");
      $("header .logo_menu_mob .show_menu .all_menu > ul > li > ul > li.menu_li_pos").removeClass("menu_li_pos");
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

  $(window).on("resize scroll", function () {
    exampleSlider_finishing();
  });

  var new_slider_finishing = $('section.slider_logos .slider_logo_block');
  exampleSlider_finishing();

  function exampleSlider_finishing() {
    if ($(window).innerWidth() > 640) {
      new_slider_finishing.owlCarousel({
        navText: false,
        items: 5,
        loop: true,
        nav: true,
        responsive: {
          600: {
            items: 3,
          },
          900: {
            items: 4,
          },
          1100: {
            items: 5
          }
        }
      });
    } else {
      if ($(".slider_logo_block").hasClass("owl-carousel")) {
        new_slider_finishing.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
        new_slider_finishing.find('.owl-stage-outer').children().unwrap();
      }
    }
  }

  $('section.slider_logos .slider_logo_block ').owlCarousel({
    navText: false,
    items: 5,
    loop: true,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      400: {
        items: 2,
      },
      600: {
        items: 3,
      },
      900: {
        items: 4,
      },
      1100: {
        items: 5
      }
    }
  });

  $("section.price_all .blocks .block .name_click_block").on("click", function () {
    var $this = $(this);
    $this.toggleClass('active');
    $this.siblings("section.price_all .blocks .block .open_all_block").stop().slideToggle(300);
  });

  $('section.what_we .blocks .block .click_block ul ').each(function () {
    $(this).children().slice(3).hide();
  });

  $("section.what_we .blocks .block .name_click_block").on("click", function () {
    var $this = $(this);
    $this.parents("section.what_we .blocks .block ").toggleClass('active');
    if ($this.parents("section.what_we .blocks .block ").hasClass("active")) {
      $this.parents("section.what_we .blocks .block ").find("ul").each(function () {
        $(this).children().slice(3).show();
      });
    } else {
      $('section.what_we .blocks .block .click_block ul ').each(function () {
        $(this).children().slice(3).hide();
      });
    }
  });

  $("section.example_project .example_project_slider").owlCarousel({
    // loop: true,
    margin: 20,
    items: 3,
    lazyLoad: true,
    nav: true,
    navText: false,
    stagePadding: 12,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1020: {
        items: 3
      },
    }
  });


  $("section.careers .careers_blocks .block .click_block").on("click", function () {
    var $this = $(this);
    $this.toggleClass('active');
    $this.siblings("section.careers .careers_blocks .block .all_block").stop().slideToggle(300);
  });
  $('#agree_call').on("change", function () {
    var $this = $(this);
    if ($this.is(":checked")) {
      $this.parents('form').find('.button_type').addClass('active');
    } else {
      $this.parents('form').find('.button_type').removeClass('active');
    }
  });


  /* calculyator new */
  //      Calculate numbers inputs
  $("body").on("click", ".calculate_plus_minus .minus", function () {
    var $this = $(this);
    if (+$this.siblings('.number_c').val() - 1 < 0) return false;
    $this.siblings('.number_c').val(+$this.siblings('.number_c').val() - 1);
  });
  $("body").on("click", ".calculate_plus_minus .plus", function () {
    var $this = $(this);
    $this.siblings(' .number_c').val(+$this.siblings('.number_c').val() + 1);
  });

  $(".number_c").keypress(function (event) {
    event = event || window.event;
    if (event.charCode && event.charCode != 0 && event.charCode != 46 && (event.charCode < 48 || event.charCode > 57))
      return false;
  });

  //  next step_c_two block
  $(".next_step_c_two_button").on("click", function (e) {
    e.preventDefault();
    var $room_num = $('.room_number').val();
    $room_num = +$room_num;
    var $room_calc = $('.step_c_two .room_container_c > div').length;
    if ($room_num > $room_calc) {
      for (var $i = 0; $i < $room_num - $room_calc; $i++) {
        $(".step_c_two .addroom a").click();
      }
    } else {
      if ($room_num == $room_calc) {

      } else {
        for (var $i = 0; $i < ($room_calc - $room_num); $i++) {
          $('.step_c_two .room_container_c .container_c_all_block:last-child').remove();
        }
      }
    }
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
    if ($('select').hasClass('styler')) {
      $('.styler').styler('destroy');
    }
    var $this = $(this);
    if ($this.hasClass('add_toilet')) {
      $this.parent().siblings('.room_container_c').append("<div class='container_c_all_block'>" + $this.parent().siblings('.room_container_c').find('.container_c_all_block').eq(1).html() + "</div>");
      var text_replace = $this.parent().siblings('.room_container_c').find('.container_c_all_block:last-child').find('.name_title_c');

      if (text_replace.parents('.container_c_all_block').index() + 1 == 3) {
        text_replace.text(text_replace.text().replace("Туалет", "2-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 4) {
        text_replace.text(text_replace.text().replace("Туалет", "3-ий туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 5) {
        text_replace.text(text_replace.text().replace("Туалет", "4-ый туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 6) {
        text_replace.text(text_replace.text().replace("Туалет", "5-ый туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 7) {
        text_replace.text(text_replace.text().replace("Туалет", "6-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 8) {
        text_replace.text(text_replace.text().replace("Туалет", "7-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 9) {
        text_replace.text(text_replace.text().replace("Туалет", "8-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 10) {
        text_replace.text(text_replace.text().replace("Туалет", "9-ый туалет"));
      }
    } else if ($this.hasClass('coridor_adding')) {

      $this.parent().siblings('.room_container_c').append("<div class='container_c_all_block'>" + $this.parent().siblings('.room_container_c').find('.container_c_all_block').eq(0).html() + "</div>");
      var text_replace = $this.parent().siblings('.room_container_c').find('.container_c_all_block:last-child').find('.name_title_c');


      if (text_replace.parents('.container_c_all_block').index() + 1 == 2) {
        text_replace.text(text_replace.text().replace("1-ая комната", "2-ой коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 3) {
        text_replace.text(text_replace.text().replace("1-ая комната", "3-ий коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 4) {
        text_replace.text(text_replace.text().replace("1-ая комната", "4-ый коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 5) {
        text_replace.text(text_replace.text().replace("1-ая комната", "5-ый коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 6) {
        text_replace.text(text_replace.text().replace("1-ая комната", "6-ой коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 7) {
        text_replace.text(text_replace.text().replace("1-ая комната", "7-ой коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 8) {
        text_replace.text(text_replace.text().replace("1-ая комната", "8-ой коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 9) {
        text_replace.text(text_replace.text().replace("1-ая комната", "9-ый коридор"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 10) {
        text_replace.text(text_replace.text().replace("1-ая комната", "10-ый коридор"));
      }
    } else if ($this.hasClass('add_toilet_with_name')) {

      $this.parent().siblings('.room_container_c').append("<div class='container_c_all_block'>" + $this.parent().siblings('.room_container_c').find('.container_c_all_block').eq(0).html() + "</div>");
      var text_replace = $this.parent().siblings('.room_container_c').find('.container_c_all_block:last-child').find('.name_title_c');

      console.log(text_replace.parents('.container_c_all_block').index() + 1);

      if (text_replace.parents('.container_c_all_block').index() + 1 == 2) {
        text_replace.text(text_replace.text().replace("", "2-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 3) {
        text_replace.text(text_replace.text().replace("", "3-ий туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 4) {
        text_replace.text(text_replace.text().replace("", "4-ый туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 5) {
        text_replace.text(text_replace.text().replace("", "5-ый туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 6) {
        text_replace.text(text_replace.text().replace("", "6-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 7) {
        text_replace.text(text_replace.text().replace("", "7-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 8) {
        text_replace.text(text_replace.text().replace("", "8-ой туалет"));
      } else if (text_replace.parents('.container_c_all_block').index() + 1 == 9) {
        text_replace.text(text_replace.text().replace("", "9-ый туалет"));
      }

      // text_replace.text ( text_replace.text ().replace ( "" , text_replace.parents ( '.container_c_all_block' ).index () + 1 ) );
    } else {
      $this.parent().siblings('.room_container_c').append("<div class='container_c_all_block'>" + $this.parent().siblings('.room_container_c').find('.container_c_all_block').eq(0).html() + "</div>");
      var text_replace = $this.parent().siblings('.room_container_c').find('.container_c_all_block:last-child').find('.name_title_c');
      text_replace.text(text_replace.text().replace("1", text_replace.parents('.container_c_all_block').index() + 1));
    }
    if ($('select').hasClass('styler')) {
      $('.styler').styler();
    }
  });

  //      check actions
  $("body").on("click", ".check_js_type label", function () {
    var $this = $(this);
    $this.parents('.check_js_type').find('input').click();
  });

  $(".check_input_tree").on("change", function () {
    var $this = $(this);
    if ($this[0].checked == true) {
      $this.parent().addClass('active');
    } else {
      $this.parent().removeClass('active');
    }
    if ($this.hasClass('change_last_block')) {
      if ($this.parent().hasClass('active')) {
        $('.step_c_seventh.active  .all_block_c > div.active').removeClass('active');
        $('.step_c_seventh.active  .all_block_c > div:first-child').addClass('active');
      } else {
        $('.step_c_seventh.active  .all_block_c > div.active').removeClass('active');
        $('.step_c_seventh.active  .all_block_c > div:last-child').addClass('active');
      }
    }
    if ($this.hasClass('all_type_seperate')) {
      if ($this.parent().hasClass('active')) {
        $('.all_room_container_c.active').removeClass('active');
        $('.discrete_fifth_container_c').addClass('active');
      } else {
        $('.all_room_container_c').addClass('active');
        $('.discrete_fifth_container_c.active').removeClass('active');
      }
    }
  });


  /*                          calculator 2 js                    */

  $("#range_01").on("click", function () {
    $('.calc_square_toggler_val').attr('readonly', false);
  });

  var $btn_minus = $('.btn_minus'),
    $btn_plus = $('.btn_plus'),
    $range = $("#range_01"),
    min = 15,
    max = 200,
    step = 1,
    from = 45;

  $range.ionRangeSlider({
    min: min,
    max: max,
    step: step,
    from: 45,
    onFinish: function (data) {
      from = data.from;
    }
  });


  $btn_minus.on("click", function () {
    from = Number($('#range_01').val()) + 1;
    updateRange(-1);
  });


  var $inter_st_1,
    $inter_1;
  $btn_plus.on('mousedown', function (e) {
    var $this = $(this);

    $inter_st_1 = setTimeout(function () {
      $inter_1 = setInterval(function () {
        if ($this.prev().val() < Number($this.prev().attr('max'))) {
          updateRange(1);
        }
      }, 100);
    }, 1000);
  });

  $(".calc_square_toggler_plus").on('mouseup', function (e) {
    clearTimeout($inter_st_1);
    clearTimeout($inter_1);
  });


  $btn_plus.on("click", function () {
    from = Number($('#range_01').val()) - 1;
    updateRange(1);
  });

  var range_instance = $range.data("ionRangeSlider");

  var updateRange = function (direction) {
    from += step * direction;
    if (from < min) {
      from = min;
    } else if (from > max) {
      from = max;
    }

    range_instance.update({
      from: from
    });
  };

  $("#range_01").focusout(function (e) {
    e.preventDefault();


    var new_val = $("#range_01").val();
    if (new_val < min) {
      from = min;
    } else if (new_val > max) {
      from = max;
    }

    range_instance.update({
      from: new_val
    });

  });

  $(".calc_square_toggler_val_2").focusout(function (e) {
    e.preventDefault();
    var new_val_2 = $(".calc_square_toggler_val_2").val();
    if (new_val_2 < 1) {
      $(".calc_square_toggler_val_2").val(1);
    } else if (new_val_2 > 7) {
      $(".calc_square_toggler_val_2").val(7);
    }

  });

  $(".calc_square_toggler_val_3").focusout(function (e) {
    e.preventDefault();
    var new_val_3 = $(".calc_square_toggler_val_3").val();
    if (new_val_3 < 1) {
      $(".calc_square_toggler_val_3").val(1);
    } else if (new_val_3 > 3) {
      $(".calc_square_toggler_val_3").val(3);
    }

  });

  var calc = function () {
    var form = $('.calc-form').serializeArray();
    var type = (form[0].value == 'novostroika') ? 1370 : 1980;
    var square = Number(form[1].value) * type;
    var rooms = square + (Number(form[2].value) * 0.5 * square);
    var toilets = Number(form[3].value) * 41437;
    var floors = 0;
    var walls = 0;
    var electro = 0;
    var other = 0;
    for (var i = 4; i < form.length; i++) {
      switch (form[i].name) {
        case "calc-service1" :
          floors = 264 * Number(form[1].value);
          break;
        case "calc-service2" :
          walls = (type + 544) * (Number(form[2].value) + Number(form[3].value));
          break;
        case "calc-service3" :
          electro = 3500 * (Number(form[2].value) + Number(form[3].value));
          break;
        case "calc-service4" :
          other = 8900 * Number(form[3].value);
          break;
      }
    }
    return (XFormatPrice(rooms + toilets + floors + walls + electro + other));
  };

  $("section.photo_building .all_photo_blocks .all_photos > div, .blocks_all_width .all_photo_blocks .all_photos > div").on("click", function () {
    var $this = $(this);
    $this.parents(".all_photo_blocks").find(".all_photos > div").removeClass("active");
    $this.addClass("active");
    $this.parents(".all_photo_blocks").find(".this_photo > div").removeClass("active");
    $this.parents(".all_photo_blocks").find(".this_photo > div").eq($this.index()).addClass("active");
    console.log($this.index());
  });


  $('section.page_blog .questions_block a[href^="#"]').click(function () {
    var target = $(this).attr('href');
    if ($(window).width() > 1000) {
      $('html, body').animate({
        scrollTop: ($(target).offset().top - 170)
      }, 500);
    } else {
      $('html, body').animate({
        scrollTop: ($(target).offset().top - 75)
      }, 500);
    }
    return false;
  });


  $('.calc-form input').on('change', function (event) {
    event.preventDefault();
    $('.calc_count_input').val(calc());
  });

  function XFormatPrice(_number) {
    var decimal = 0;
    var separator = ' ';
    var decpoint = '.';
    var format_string = '#';

    var r = parseFloat(_number);

    var exp10 = Math.pow(10, decimal);// приводим к правильному множителю
    r = Math.round(r * exp10) / exp10;// округляем до необходимого числа знаков после запятой

    rr = Number(r).toFixed(decimal).toString().split('.');

    b = rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "\$1" + separator);

    r = (rr[1] ? b + decpoint + rr[1] : b);
    return format_string.replace('#', r);
  }


  //      plus calculate

  var $inter_st,
    $inter;
  $(".calc_square_toggler_plus").on('mousedown', function (e) {
    var $this = $(this);
    console.log($this.index());

    if ($this.prev().is('input')) {
      if ($this.prev().val() < Number($this.prev().attr('max'))) {
        $this.prev().val(Number($this.prev().val()) + 1);
        $('.calc_count_input').val(calc());
      }
    }

    $inter_st = setTimeout(function () {
      $inter = setInterval(function () {
        if ($this.prev().val() < Number($this.prev().attr('max'))) {
          $this.prev().val(Number($this.prev().val()) + 1);
          $('.calc_count_input').val(calc());
        }
      }, 100);
    }, 1000);
  });

  $(".calc_square_toggler_plus").on('mouseup', function (e) {
    clearTimeout($inter_st);
    clearTimeout($inter);
  });


  //              Minus calculate

  var $inter_st2,
    $inter2;
  $(".calc_square_toggler_minus").on('mousedown', function (e) {
    var $this = $(this);
    if ($this.next().is('input')) {
      if ($this.next().val() > Number($this.next().attr('min'))) {
        $this.next().val(Number($this.next().val()) - 1);
        $('.calc_count_input').val(calc());
      }
    } else {
      if ($this.next().next().val() > Number($this.next().next().attr('min'))) {
        $this.next().next().val(Number($this.next().next().val()) - 1);
        $('.calc_count_input').val(calc());
      }
    }


    $inter_st2 = setTimeout(function () {
      $inter2 = setInterval(function () {
        if ($this.next().is('input')) {
          if ($this.next().val() > Number($this.next().attr('min'))) {
            $this.next().val(Number($this.next().val()) - 1);
            $('.calc_count_input').val(calc());
          }
        } else {
          if ($this.next().next().val() > Number($this.next().next().attr('min'))) {
            $this.next().next().val(Number($this.next().next().val()) - 1);
            $('.calc_count_input').val(calc());
            updateRange(-1);
          }
        }
      }, 100);
    }, 1000);
  });
  $(".calc_square_toggler_minus").on('mouseup', function (e) {
    clearTimeout($inter_st2);
    clearTimeout($inter2);
  });

  $("body").on("keyup", ".input_type", function () {
    $('table').removeClass('parent_searsh');
    var value = $(this).val().toLowerCase();
    var parent = $(this).closest('div.info_price');
    parent = parent.first('table');
    parent.addClass('parent_searsh');

    $('.parent_searsh tr').filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
  /*                      know section slider                             */

  $('section.work_area  .slider_images').owlCarousel({
    margin: 60,
    navText: false,
    items: 5,
    nav: true,
    loop: true,
    responsive: {
      0: {
        items: 1,
        margin: 0
      },
      400: {
        items: 2,
        margin: 20,
      },
      500: {
        items: 3,
        margin: 20,
      },
      700: {
        items: 4
      },
      1000: {
        items: 5
      }
    }
  });
  /*             End         know section slider                             */
  /*                      Click accardeon                 */
  $(".list_poits_map > div").on("click", function (e) {
    e.preventDefault();
    var $this = $(this);
    $(".list_poits_map > div.active .text").stop().slideUp(function () {
      $(".list_poits_map > div.active").removeClass('active');
      $this.find('.text').slideDown(function () {
        $this.addClass('active');
        $('.point_container > div.active').removeClass('active');
        $('.point_container > div').eq($this.index()).addClass('active');
      });
    });

  });

  $(".point_container > div").on("click", function (e) {
    e.preventDefault();
    var $this = $(this);
    $('.point_container > div.active').removeClass('active');
    $this.addClass('active');
    $('.list_poits_map > div.active .text').stop().slideUp(function () {
      $('.list_poits_map > div.active').removeClass('active');
      $('.list_poits_map > div').eq($this.index()).find('.text').slideDown(function () {
        $('.list_poits_map > div').eq($this.index()).addClass('active');
      });
      $('html, body').animate({
        scrollTop: ($('.list_poits_map > div').eq($this.index()).position().top - $('header').outerHeight())
      }, 500);
    });
  });
  /*End  Click accardeon       */
  /*End Search Portfolio select 2*/
  initSelect2();
  /*Search Portfolio select 2*/
  /*            price list           */


  $('section.price_list .partition ul li a[href^="#"]').click(function () {
    var target = $(this).attr('href');
    if (window.innerWidth > 1000) {
      $('html, body').animate({
        scrollTop: ($(target).offset().top - 200)
      }, 800);
    } else if (window.innerWidth < 820) {
      $('html, body').animate({
        scrollTop: ($(target).offset().top - 75)
      }, 800);
    } else {
      $('html, body').animate({
        scrollTop: ($(target).offset().top - 100)
      }, 800);
    }
    return false;
  });
});

$(window).load(function () {
  $(".tur_3d.tur_3d_stock.tur_3d_home_page").show();
  window.dispatchEvent(new Event("resize"));
});

/*Search Portfolio select 2*/
function initSelect2() {
  $('.select2').on('change', function (e) {
    if ($(this).hasClass('styler_new')) {
      console.log($(this).val());
    }
    applyFilter();
  });

  if ($('select').hasClass('select2')) {
    $('.select2').select2();

  }
}

/*End Search Portfolio select 2*/


function initRepairCarousels() {
  if ($('#popup_portfolio_slider .slider_portfolio_1 .img_slid').length) {
    $('#popup_portfolio_slider .slider_portfolio_1').owlCarousel({
      margin: 0,
      navText: false,
      items: 1,
      nav: true,
      loop: $('#popup_portfolio_slider .slider_portfolio_1 .img_slid').length > 1,
      onInitialized: function (e) {
        $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_1').text('(фото 1 из ' + this.items().length + ')');
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
        $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_2').text('(фото 1 из ' + this.items().length + ')');
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
        $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_3').text('(фото 1 из ' + this.items().length + ')');
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
        $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_4').text('(фото 1 из ' + this.items().length + ')');
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

  /*popup call*/
  $("#popup_call .popup_block").on("click", function (e) {
    e.stopPropagation();
  });

  $(".call_open_popup_button").on("click", function (e) {
    var title;
    var pageData = $(this).attr('data-page');
    if (pageData == "calculator") {
      title = $(this).html();
      if (title) {
        title = title.trim().toLowerCase();
      }
    } else if (pageData == "services-disain") {
      if (title) {
        title = title.trim().toLowerCase();
      }
    } else if (pageData == "disain-2") {
      title = "получите консультацию дизайнера бесплатно!";
    } else if (pageData == "priemka-kvartir") {
      title = "кнопки подробнее, где 30";
    } else if (pageData == "priemka-kvartir-2") {
      title = "запишитесь на приемку в удобное для вас время";
    } else if (pageData == "otdelochnyie-raboty") {
      title = "нужна консультация по ремонту?";
    } else {
      title = $(this).siblings(".yandex_metrica").html();
      if (title) {
        title = title.trim().toLowerCase();
      }
    }
    title = yandexMetric(title);
    //console.log(title);
    e.preventDefault();
    $("body").css("overflow", "hidden");
    $("#popup_call").fadeIn(function () {
      $(this).attr('data-title', title);
    });
  });

  $("#popup_call .close, #popup_call").on("click", function (e) {
    e.preventDefault();
    $("#popup_call").fadeOut(function () {
      $("body").css("overflow", "auto");
    });
    $("#popup_call_thank_you").fadeOut(function () {
      $("body").css("overflow", "auto");
    });
  });

  $("#popup_call_thank_you .popup_block").on("click", function (e) {
    e.stopPropagation();
  });
  /*
    * Url Page Yandex Metrica
    * /
    * remont-komnat
    * remont-domov
    *
   */
  $("#popup_call .button_type").on("click", function (e) {
    e.preventDefault();
    var yandexMetrica = $("#popup_call").attr('data-title');
    var $form = $(this).closest('form'),
      url = $form.attr('data-action'),
      $name = $form.find('[name="name"]'),
      $phone = $form.find('[name="phone"]');


    if (!$name.val() || !$name.val().trim()) {
      redBorder($name);
      return false;
    }

    if ($phone.val().length !== 15) {
      redBorder($phone);
      return false;
    }

    $(this).addClass('email_disable');
    $.ajax({
      url: url,
      type: 'post',
      data: {
        name: $name.val(),
        phone: $phone.val(),
        for_popup: true
      },
      success: function (response) {
        $('.button_type').removeClass('email_disable');
        $("body").css("overflow", "hidden");
        $("#popup_call_thank_you").fadeIn(function () {

        }).fadeOut(2000);
        $("#popup_call").fadeOut(function () {

          $("body").css("overflow", "auto");
        });
        if (typeof yandexMetrica == 'undefined') yandexMetrica = 'Хедер_заявка';
        yaCounter44756221.reachGoal(yandexMetrica);
        ga('send', 'event', 'Heder', yandexMetrica);
        return true;
      },
      error: function (error) {
        console.log(error.message);
      }
    });
  });

  function redBorder(elem) {
    elem.css({border: '1px solid red'});
    setTimeout(() => {
      elem.attr('style', '');
    }, 5000);
  }

  /*Popap phone*/
  $(".open_text").on('click', function (e) {
    e.preventDefault();
    $(".all_text_scrolling").show();
    $("#popup_call .all_popup").addClass("show_popup_text");
  });


  $('#agree_call').on('click', function () {
    if ($('#agree_call').is(':checked')) {
      $(".text_checked").hide();

    } else {
      $(".text_checked").show();
    }
  });

  $("#popup_footer .popup_block").on("click", function (e) {
    e.stopPropagation();
  });

  $(".open_popup_privacy").on("click", function (e) {
    e.preventDefault();
    $("body").css("overflow", "hidden");
    $("#popup_footer").fadeIn(function () {

    });
  });

  $("#popup_footer .close, #popup_footer").on("click", function (e) {
    e.preventDefault();
    $("#popup_footer").fadeOut(function () {
      $("body").css("overflow", "auto");
    });
  });

  $("#popup_footer_read_more .popup_block").on("click", function (e) {
    e.stopPropagation();
  });

  $(".popup_read_more").on("click", function (e) {
    e.preventDefault();
    $("body").css("overflow", "hidden");
    $("#popup_footer_read_more").fadeIn(function () {

    });
  });

  $("#popup_footer_read_more .close, #popup_footer_read_more").on("click", function (e) {
    e.preventDefault();
    $("#popup_footer_read_more").fadeOut(function () {
      $("body").css("overflow", "auto");
    });
  });


  /*End popap phone*/
  $("#popup_call_thank_you .close, #popup_call_thank_you").on("click", function (e) {
    e.preventDefault();
    $("#popup_call").fadeOut(function () {
      $("body").css("overflow", "auto");
    });
    $("#popup_call_thank_you").fadeOut(function () {
      $("body").css("overflow", "auto");
    });
  });

  $('#agree_call').on("change", function () {
    /*var $this = $ ( this );
    if ($this.is(":checked")){
        $this.parents('form').find('.button_type').addClass('active');
    }else{
        $this.parents('form').find('.button_type').removeClass('active');
    }*/
    if (checkValidation()) {
      $('#popup_call form .button_type').addClass('active');
    } else {
      $('#popup_call form .button_type').removeClass('active');
    }
  });

  $('#popup_call form input[type="text"]').on('keyup', function () {
    if (checkValidation()) {
      $('#popup_call form .button_type').addClass('active');
    } else {
      $('#popup_call form .button_type').removeClass('active');
    }
  });


}

function checkValidation() {
  var $name = $('#popup_call').find('input[name="name"]'),
    $phone = $('#popup_call').find('input[name="phone"]'),
    $agreeCall = $('#agree_call');
  console.log($name.val(), $phone.val(), $agreeCall.prop('checked'));
  return $name.val() && $phone.val() && $agreeCall.prop('checked');
}


function initPortfolioNumberChange() {
  $('#popup_portfolio_slider .slider_portfolio_1').on('changed.owl.carousel', function (e) {

    $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_1').text('(фото ' + ++e.page.index + ' из ' + e.item.count + ')');

  });
  $('#popup_portfolio_slider .slider_portfolio_2').on('changed.owl.carousel', function (e) {

    $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_2').text('(фото ' + ++e.page.index + ' из ' + e.item.count + ')');

  });
  $('#popup_portfolio_slider .slider_portfolio_3').on('changed.owl.carousel', function (e) {

    $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_3').text('(фото ' + ++e.page.index + ' из ' + e.item.count + ')');

  });
  $('#popup_portfolio_slider .slider_portfolio_4').on('changed.owl.carousel', function (e) {

    $('#popup_portfolio_slider .popup_block .all_slider .slider_info_portfolio .img_numbers .number_4').text('(фото ' + ++e.page.index + ' из ' + e.item.count + ')');

  });
}

function showItemPortfolio() {
  var portfolio_item = $("section.all_portfolio .portfolio_block .block").size();
  var show_item = 16;
  $('section.all_portfolio .portfolio_block .block:lt(' + show_item + ')').addClass("active");
  if (portfolio_item < 16) {
    $("section.all_portfolio .show_more a").hide();
  }
  console.log(portfolio_item);
  $("body").on("click", "section.all_portfolio .show_more a", function (e) {
    e.preventDefault();
    var portfolio_item_active = $('section.all_portfolio .portfolio_block .block:lt(' + show_item + ')').length;
    show_item = (show_item + 16 <= portfolio_item) ? show_item + 16 : portfolio_item;
    $('section.all_portfolio .portfolio_block .block:lt(' + show_item + ')').addClass("active");

    if (portfolio_item_active >= portfolio_item - 16) {
      $("section.all_portfolio .show_more a").hide();
    }
  });
}

$("body").on("click", "a.show__more", function (e) {
  e.preventDefault();
  let step = $(this).data('step');
  $(this).data('step', step + 1);
  $.ajax({
    url: '/review/show-more',
    data: {
      step: step
    },
    type: 'POST',
    dataType: "json",
    success: function (response) {
      $('#mob_review_block').append(response.html);
      if (!response.hasCount) {
        $('a.show__more').remove();
      }
    },
    error: function (error) {
      console.log(error);
    }
  });
});

function applyFilter() {

  var $form = $('#portfolio_filter');
  console.log($form);
  $.ajax({
    url: $form.attr('action'),
    data: $form.serialize(),
    success: function (response) {
      $('.portfolio').html(response);
      showItemPortfolio();
      if (history.pushState) {
        var search = location.search.substring(1);
        var oldUrl = search ? JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g, '":"') + '"}') : {};
        var serialized = JSON.parse('{"' + decodeURI($form.serialize()).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g, '":"') + '"}');

        Object.keys(oldUrl).forEach(function (key) {
          if (!serialized.hasOwnProperty(key)) {
            delete oldUrl[key];
          }
        });

        var url = Object.assign(oldUrl, serialized);
        url = jQuery.param(url);
        var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + url;
        window.history.pushState({path: newUrl}, '', newUrl);
      }
      /*Search Portfolio select 2*/
      initSelect2();
      /*End Search Portfolio select 2*/
    },
    error: function (error) {
      console.log(error);
    }
  });
}

(function () {
  if (typeof window.CustomEvent === "function") return false; //If not IE

  function CustomEvent(event, params) {
    params = params || {bubbles: false, cancelable: false, detail: undefined};
    var evt = document.createEvent('CustomEvent');
    evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
    return evt;
  }

  CustomEvent.prototype = window.Event.prototype;

  window.CustomEvent = CustomEvent;
})();

function yandexMetric(key) {
  var yandexTable =
    {
      "гарантия низкой цены": "CTA_Гарантия",
      "так просто": "CTA_Расчет сметы",
      "ремонт и дизайн": "CTA_Дизайн",
      "так просто…": "CTA_Расчет сметы",
      "рассрочка 0%": "CTA_Рассрочка",
      "узнайте стоимость вашего ремонта": "CTA_Расчет сметы",
      "нужен ремонт <br> с дизайн-проектом?": "CTA_Дизайн",
      "ремонт по вашему <br> дизайн-проекту?": "CTA_Дизайн",
      "хочу такой же ремонт": "Портфолио_заявка",
      "получить точный расчет сметы": "CTA_Расчет сметы",
      "узнать цену с материалами": "CTA_Прочее",
      "получить расчет по комнатам": "CTA_Расчет сметы",
      "узнать цену с дизайн-проектом": "CTA_Дизайн",
      "нужна помощь в приемке квартиры<br>у застройщика?": "CTA_Прочее",
      "выбрать": "CTA_Выбрать",
      "консультация дизайнера<br>на объекте – от 3 000 руб.": "CTA_Дизайн",
      "получите консультацию дизайнера бесплатно!": "CTA_Заявка",
      "кнопки подробнее, где 30": "CTA_Выбрать",
      "узнайте, как получить комплексную<br> приемку квартиры бесплатно": "CTA_Прочее",
      "запишитесь на приемку в удобное для вас время": "CTA_Заявка",
      "нужна консультация по ремонту?": "CTA_Заявка",


    };
  return yandexTable[key];
}

$("section.photo_building .all_photo_blocks .all_photos > div").on("click", function () {
  var $this = $(this);
  $("section.photo_building .all_photo_blocks .all_photos > div").removeClass("active");
  $this.addClass("active");
  $("section.photo_building .all_photo_blocks .this_photo > div").removeClass("active");
  $("section.photo_building .all_photo_blocks .this_photo > div").eq($this.index()).addClass("active");
});

$("section.repairs_calculete .calculate_pages .calc_end_page .block .end_calc_link").addClass("call_open_popup_button");

$(".next_two_button").on("click", function () {

  if (window.innerWidth > 1000) {
    $('html, body').animate({
      scrollTop: ($("section.repairs_calculete .under_title_section").offset().top - 150)
    }, 800);
  } else {
    $('html, body').animate({
      scrollTop: ($("section.repairs_calculete .under_title_section").offset().top - 75)
    }, 800);
  }
  return false;
});

$(".prev_button").on("click", function () {

  if (window.innerWidth > 1000) {
    $('html, body').animate({
      scrollTop: ($("section.repairs_calculete .under_title_section").offset().top - 150)
    }, 800);
  } else {
    $('html, body').animate({
      scrollTop: ($("section.repairs_calculete .under_title_section").offset().top - 75)
    }, 800);
  }
  return false;
});

$(".next_tree_button").on("click", function () {

  if (window.innerWidth > 1000) {
    $('html, body').animate({
      scrollTop: ($("section.repairs_calculete .under_title_section").offset().top - 150)
    }, 800);
  } else {
    $('html, body').animate({
      scrollTop: ($("section.repairs_calculete .under_title_section").offset().top - 75)
    }, 800);
  }
  return false;
});

/*price list new page*/

$('section.price_list_new_page .partition ul li a[href^="#"]').click(function () {
  var target = $(this).attr('href');
  if (window.innerWidth > 1000) {
    $('html, body').animate({
      scrollTop: ($(target).offset().top - 200)
    }, 800);
  } else if (window.innerWidth < 820) {
    $('html, body').animate({
      scrollTop: ($(target).offset().top - 75)
    }, 800);
  } else {
    $('html, body').animate({
      scrollTop: ($(target).offset().top - 100)
    }, 800);
  }
  return false;


});

for (var z = 0; z < $("#category_price_list_interer").index(); z++) {
  for (var i = 0; i < $("section.price_list_new_page .all_price_list .price_list_block").eq(z).find(".name_with_block .info_price .all_table table tbody > tr").length; i++) {

    var x = $("section.price_list_new_page .all_price_list .price_list_block").eq(z).find(".name_with_block .info_price .all_table table tbody > tr").eq(i).find(" > td table tr td:first-child").text();
    var new_x = Math.ceil((x.replace(/[^0-9]/g, '')) * 1.1 * 1.086);

    $("section.price_list_new_page .all_price_list .price_list_block").eq(z).find(".name_with_block .info_price .all_table table tbody > tr").eq(i).find(" > td table tr td:first-child").html("<span>" + Math.ceil(new_x) + "  руб.</span> " + Math.ceil(new_x * 0.95) + "руб.");
    $("section.price_list_new_page .all_price_list .price_list_block").eq(z).find(".name_with_block .info_price .all_table table tbody > tr").eq(i).find(" > td table tr td:first-child").addClass("new_price");

  }
}

for (var k = 0; k < $("section.price_list_repairs").size(); k++) {
  for (var n = 0; n < $("section.price_list_repairs").eq(k).find(" .price_list_repairs_block .block").size(); n++) {
    for (var x = 0; x < $("section.price_list_repairs").eq(k).find(" .price_list_repairs_block .block").eq(n).find(" .all_block table tr").length; x++) {

      var val_th = $("section.price_list_repairs").eq(k).find(" .price_list_repairs_block .block").eq(n).find(" .all_block table tr").eq(x).find(" th").eq(0).text();
      var new_val_th = Math.ceil((val_th.replace(/[^0-9]/g, '')) * 1.1 * 1.086 * 0.95);

      $("section.price_list_repairs").eq(k).find(" .price_list_repairs_block .block").eq(n).find(" .all_block table tr").eq(x).find(" th").eq(0).html(+new_val_th + "  руб.");

    }
  }
}

for (var j = 0; j < $("section.porcelain").size(); j++) {
  for (var q = 0; q < $("section.porcelain").eq(j).find(" .reice_list_blocks table tr").length; q++) {
    var val_th = $("section.porcelain").eq(j).find(" .reice_list_blocks table tr").eq(q).find(" th").eq(0).text();
    var new_val_th = Math.ceil((val_th.replace(/[^0-9]/g, '')) * 1.1 * 1.086 * 0.95);
    $("section.porcelain").eq(j).find(" .reice_list_blocks table tr").eq(q).find(" th").eq(0).html(+new_val_th + "  руб.");
  }
}
