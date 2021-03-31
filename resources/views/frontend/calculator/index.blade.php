@extends('frontend.layouts.master')

@section('content')
    <section class='all_portfolio'>
        <div class='wrapper_new'>
            <h1 class='title_section'>{{$page['title']}}</h1>
            <div class='under_title_section'>Рассчитайте примерную стоимость ремонта вашей квартиры</div>
            <div class='calc'>
                <form action='#' class='calc-form' id='calc-form' method='POST'>
                    <div class='calc_type'>
                        <label class='calc_type_wrapper'>
                            <input checked class='calc_type_radio' for='calc-form' name='calc-type' type='radio' value='novostroika'>
                            <div class='calc_type_item'>
                                <img class='calc_type_item_img' src='{{asset('frontend/images/icon_calc_1.png')}}' alt='Калькулятор - Прораб Нева'>
                                <img class='calc_type_item_img_mob' src='{{asset('frontend/images/icon_calc_1_mob.png')}}'  alt='Калькулятор - Прораб Нева'>
                                <span class='calc_type_item_name'>Новостройка</span>
                            </div>
                        </label>
                        <label class='calc_type_wrapper'>
                            <input class='calc_type_radio' for='calc-form' name='calc-type' type='radio' value='vtorichka'>
                            <div class='calc_type_item'>
                                <img class='calc_type_item_img' src='{{asset('frontend/images/icon_calc_2.png')}}'  alt='Калькулятор - Прораб Нева'>
                                <img class='calc_type_item_img_mob' src='{{asset('frontend/images/icon_calc_2_mob.png')}}'  alt='Калькулятор - Прораб Нева'>
                                <span class='calc_type_item_name'>Вторичное жилье</span>
                            </div>
                        </label>
                    </div>
                    <div class='calc_square'>
                        <span class='calc_square_head'>Общая площадь (кв. м)</span>
                        <div class='calc_square_toggler'>
                            <i class='calc_square_toggler_minus btn_minus'>-</i>
                            <input class='calc_square_toggler_val' data-max='200' data-min='15' for='calc-form' id='range_01' max='200' min='15' name='square' step='1' type='number' value='45'>
                            <i class='calc_square_toggler_plus btn_plus'>+</i>
                        </div>
                    </div>
                    <div class='calc_dops'>
                        <div class='calc_square'>
                            <span class='calc_square_head'>Комнаты</span>
                            <div class='calc_square_toggler'>
                                <i class='calc_square_toggler_minus'>-</i>
                                <input class='calc_square_toggler_val calc_square_toggler_val_2' for='calc-form' max='7' min='1' name='rooms' step='1' type='number' value='1'>
                                <i class='calc_square_toggler_plus'>+</i>
                            </div>
                        </div>
                        <div class='calc_square'>
                            <span class='calc_square_head'>Санузлы</span>
                            <div class='calc_square_toggler'>
                                <i class='calc_square_toggler_minus'>-</i>
                                <input class='calc_square_toggler_val calc_square_toggler_val_3' for='calc-form' max='3' min='1' name='toilets' step='1' type='number' value='1'>
                                <i class='calc_square_toggler_plus'>+</i>
                            </div>
                        </div>
                    </div>
                    <div class='calc_service'>
                        <label class='calc_service_wrapper'>
                            <input class='calc_type_radio' for='calc-form' name='calc-service1' type='checkbox'>
                            <div class='calc_type_item'>
                                <img class='calc_type_item_img' src='{{asset('frontend/images/label_icon_1.png')}}'  alt='Калькулятор - Прораб Нева'>
                                <span class='calc_type_item_name'>Выравнивание полов</span>
                            </div>
                        </label>
                        <label class='calc_service_wrapper'>
                            <input class='calc_type_radio' for='calc-form' name='calc-service2' type='checkbox'>
                            <div class='calc_type_item'>
                                <img class='calc_type_item_img' src='{{asset('frontend/images/label_icon_2.png')}}'  alt='Калькулятор - Прораб Нева'>
                                <span class='calc_type_item_name'>Выравнивание стен</span>
                            </div>
                        </label>
                        <label class='calc_service_wrapper'>
                            <input class='calc_type_radio' for='calc-form' name='calc-service3' type='checkbox'>
                            <div class='calc_type_item'>
                                <img class='calc_type_item_img' src='{{asset('frontend/images/label_icon_3.png')}}'  alt='Калькулятор - Прораб Нева'>
                                <span class='calc_type_item_name'>Электромонтажные работы</span>
                            </div>
                        </label>
                        <label class='calc_service_wrapper'>
                            <input class='calc_type_radio' for='calc-form' name='calc-service4' type='checkbox'>
                            <div class='calc_type_item'>
                                <img class='calc_type_item_img' src='{{asset('frontend/images/label_icon_4.png')}}'  alt='Калькулятор - Прораб Нева'>
                                <span class='calc_type_item_name'>Сантехнические работы</span>
                            </div>
                        </label>
                    </div>
                    <div class='calc_count'>
                        <span class='calc_count_head'>Предварительный расчет</span>
                        <div class='calc_count_wrapper'>
                            <div class='calc_count_input_wrapper'>
                                <input class='calc_count_input' disabled='disabled' max='1500000' min='1' name='calc-total' type='text' value='133 912'>
                                <span class='calc_count_input_aft'>руб</span>
                            </div>
                            <a class='calc_submit call_open_popup_button' href='#' data-page='calculator'>
                                ПОЛУЧИТЬ ТОЧНЫЙ РАСЧЕТ СМЕТЫ
                            </a>
                        </div>
                        <span class='calc_count_undertext'>
<i>*</i>
Сумма сметы является примерной. Для получения более точной информации оставьте заявку на бесплатный расчет сметы.
</span>
                    </div>
                </form>
                <div class='calc_links'>
                    <a class='calc_lnk calling_button1' href='#'>
<span class='calc_lnk_wrapper'>
<img src='{{asset('frontend/images/calc_icon_1.png')}}'  alt='Калькулятор - Прораб Нева'>
</span>
                        <span class='calc_lnk_name call_open_popup_button'>Узнать цену с материалами</span>
                    </a>
                    <a class='calc_lnk calling_button1' href='#'>
<span class='calc_lnk_wrapper'>
<img src='{{asset('frontend/images/calc_icon_2.png')}}'  alt='Калькулятор - Прораб Нева'>
</span>
                        <span class='calc_lnk_name call_open_popup_button'>Получить расчет по комнатам</span>
                    </a>
                    <a class='calc_lnk calling_button1' href='#'>
<span class='calc_lnk_wrapper'>
<img src='{{asset('frontend/images/calc_icon_3.png')}}'  alt='Калькулятор - Прораб Нева'>
</span>
                        <span class='calc_lnk_name call_open_popup_button'>Узнать цену с дизайн-проектом</span>
                    </a>
                </div>
            </div>
            <link rel="stylesheet" href="<?php echo asset('css/style_trial.css')?>" type="text/css"> 
            <section class="trial no-bg">
                <div class="wide-wrapper">
                    <div class="title_h2 title">Или запишитесь <span class="l">на замер</span> и получите точную смету ремонта</div>
                    <div class="list-info">
                        <div class="image">
                            <img src="/frontend/images/free-trial.png">
                        </div>
                        <div class="h mh">Опытные специалисты</div>
                        <div class="t mh">Замеры производят профессиональные эксперты с глубокими знаниями в ремонте и более чем 10-летним опытом работы.</div>
                        <div class="h mh">Профессиональный подход</div>
                        <div class="t mh">По итогам вы получите точные обмеры и параметры помещения, техническую консультацию, а затем подробную смету ремонта.</div>
                        <div class="h mh">Точный расчет за {{ env('PARRAM_TRIAL') }} руб.</div>
						<div class="t mh">Выезд замерщика в любой район Москвы в удобное для вас время, консультация на объекте, замер и составление сметы.</div>
						<div class="t wh">Выезд замерщика в любой район Москвы в удобное для вас время, консультация на объекте, замер и составление сметы <br> за 500 руб.</div>
        
                        <a class="call_open_popup_button" href="#" data-tag="СТА_Замер">Записаться на замер</a>
                    </div>
                </div>
            </section>

            <section class='description_main'>
                <div class='text_area_content'>
                    <div class='text_area_new'>
                       {!! $page['body'] !!}
                    </div>
                </div>
            </section>
         {{--   <script src='js/jquery-2.1.4.min.js'></script>
            <script src='js/owl.carousel.min.js'></script>
            <script src='js/maska.js'></script>
            <script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU'></script>
            <script src='js/jquery.formstyler.min.js'></script>
            <script src='js/lightbox.js'></script>
            <script src='js/jquery-ui.min.js'></script>
            <script src='js/ion.rangeSlider.min.js'></script>
            <script src='js/main.js'></script>
--}}
        </div>
    </section>

   {{-- @include('frontend.calculator.partials.steps_tabs')
    <div class='section container_tab_section'>
        <div class='container_tab'>

            @include('frontend.calculator.partials.step1')
            @include('frontend.calculator.partials.step2')
            @include('frontend.calculator.partials.step3')
            @include('frontend.calculator.partials.step4')
            @include('frontend.calculator.partials.step5')
            @include('frontend.calculator.partials.step6')
        </div>
    </div>--}}
@endsection
