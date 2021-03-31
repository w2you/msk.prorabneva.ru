@extends('frontend.layouts.master')

@section('content')
    @widget('banner_slide',['id'=> $categoryService['banner_slide_id'],'slide_link' => $categoryService['banner_slide_link']])
    <section class='navigation'>
        <div class='wrapper_new'>
            <ul class='clearfix'>
                <li>
                    <a href='#'>
                        <img src='/frontend/images/home_icon.png'>
                    </a>
                </li>
                <li>
                    <a href='#'>Ремонт в новостройке</a>
                </li>
            </ul>
        </div>
    </section>
    <section class='repair_studio repair_studio_repairs_rooms'>
        <div class='wrapper_new'>
            <h1>Ремонт квартир <br>в новостройке</h1>
            <div class='text_under_title' style="margin: 50px auto 0;font-size: 18px;
    text-align: center;font-family:'OpenSans';line-height: 30px;">Специальные предложения по ремонту в новостройке «под ключ» </div>
            <div class='blocks'>
                <div class='block'>
                    <div class='icon'>
                        <img src='{{ asset('frontend/images/studio_icon_1.png') }}'  alt="Услуги - Прораб Нева">
                    </div>
                    <div class='name_block'>
                        Большой опыт
                        <br>
                        в ремонте квартир
                    </div>
                    <p>
                        За 19 лет сдали более
                        <br>
                        2000 объектов
                    </p>
                </div>
                <div class='block'>
                    <div class='icon'>
                        <img src='{{ asset('frontend/images/studio_icon_5.png') }}'  alt="Услуги - Прораб Нева">
                    </div>
                    <div class='name_block'>
                        Соблюдение
                        <br>
                        сроков
                    </div>
                    <p>
                        Соблюдаем технологии
                        <br>
                        и сроки проведения ремонта
                    </p>
                </div>
                <div class='block'>
                    <div class='icon'>
                        <img src='{{asset('frontend/images/studio_icon_2.png')}}'  alt="Услуги - Прораб Нева">
                    </div>
                    <div class='name_block'>
                        Гарантия
                        <br>
                        качества ремонта
                    </div>
                    <p>
                        Даем 2 года гарантии
                        <br>
                        по договору на работы
                    </p>
                </div>
                <div class='block'>
                    <div class='icon'>
                        <img src='{{asset('frontend/images/studio_icon_4.png')}}'  alt="Услуги - Прораб Нева">
                    </div>
                    <div class='name_block'>
                        Пакетные
                        <br>
                        предложения
                    </div>
                    <p>
                        С материалами, цена
                        <br>
                        и сроки фиксированы
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{--@widget('repair', ['childCategory' => $categoryService])--}}
    @include('frontend.blocks.repairs')
 {{--   <section class='your_portfolio your_portfolio_page_1 bg_white'>
        <div class='wrapper_new'>
            <h2 class='title_section'>Примеры работ</h2>
            <div class='under_title_section'>Посмотрите примеры выполненных нами ремонтов квартир</div>
            <div class='portfolio_img_blocks active'>
                <div class='blocks_1'>
                    @foreach($mainCategory->childCategories as $key => $category)
                        @if($key === 4) @continue @endif
                        <div class='block'>
                            <div class='hover_img show_img_popup' data-id="{{ $category->repairs[0]->id }}"
                                 data-url="{{ route('getRepair') }}"></div>
                            <div class='show_block'>
                                <img src="{{ asset('storage/' . $category->repairs[0]->image) }}"  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                    @endforeach
                </div>
                @if(isset($mainCategory->childCategories[4]->repairs[0]))
                    <div class='blocks_2'>
                        <div class='block'>
                            <div class='hover_img show_img_popup'
                                 data-id="{{ $mainCategory->childCategories[4]->repairs[0]->id }}"
                                 data-url="{{ route('getRepair') }}"></div>
                            <div class='show_block'>
                                <img src='{{ asset('storage/' . $mainCategory->childCategories[4]->repairs[0]->image) }}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class='view_all'>
                <a href='#'>Смотреть портфолио целиком</a>
            </div>
        </div>
    </section>--}}
    <section class='repairs_calculete'>
        <div class='wrapper_new'>
            <div class='title_h2 title_section'>Калькулятор ремонта</div>
            <div class='under_title_section'>Рассчитайте онлайн стоимость ремонта вашей квартиры</div>
            <div class='step_calculate'>
                <ul class='clearfix'>
                    <li class='active'>
                        <div class='name_step_c'>шаг 1</div>
                        <div class='icon_step'></div>
                    </li>
                    <li>
                        <div class='name_step_c'>шаг 2</div>
                        <div class='icon_step'></div>
                    </li>
                    <li>
                        <div class='name_step_c'>Итог</div>
                        <div class='icon_step'></div>
                    </li>
                </ul>
            </div>
            <div class='all_calculete'>
                <div class='calculate_one_page calculate_pages active'>
                    <div class='type_calc'>
                        <div class='block active'>
                            <div class='check_radio'>
                                <input checked class='radio_inp' id='novoctroyka' name='calc_type' placeholder=' '
                                       required='' type='radio'>
                                <label for='novoctroyka'>
                                    <div class='img_calc_type'>
                                        <img src='{{asset('frontend/images/icon_calc_1.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <div class='img_calc_type_mob'>
                                        <img src='{{asset('frontend/images/icon_calc_1_mob.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <p>Новостройка</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check_radio'>
                                <input class='radio_inp' id='vtorichnoe' name='calc_type' placeholder=' ' required=''
                                       type='radio'>
                                <label for='vtorichnoe'>
                                    <div class='img_calc_type'>
                                        <img src='{{asset('frontend/images/icon_calc_2.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <div class='img_calc_type_mob'>
                                        <img src='{{asset('frontend/images/icon_calc_2_mob.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <p>Вторичное жилье</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class='calc_num_area'>
                        <div class='name_num_area'>Общая площадь (кв. м)</div>
                        <div class='block_select_num calculate_plus_minus_one'>
                            <form>
                                <div class='minus'>-</div>
                                <input class='number_c number_c_area' data-from='45' data-max='200' data-min='15'
                                       max='200' min='15' type='number' value='45'>
                                <div class='plus'>+</div>
                                <div class='calc_ui_line'></div>
                            </form>
                        </div>
                    </div>
                    <div class='next_calc'>
                        <a class='next next_two_button' href='#'>далее</a>
                    </div>
                </div>
                <div class='calculate_two_page calculate_pages'>
                    <div class='type_calc'>
                        <div class='block'>
                            <div class='calc_num_area'>
                                <div class='name_num_area'>Комнаты</div>
                                <div class='block_select_num calculate_plus_minus_two_1'>
                                    <form>
                                        <div class='minus'>-</div>
                                        <input class='number_c' max='50' min='5' type='number' value='1'>
                                        <div class='plus'>+</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='calc_num_area'>
                                <div class='name_num_area'>Санузлы</div>
                                <div class='block_select_num calculate_plus_minus_two_2'>
                                    <form>
                                        <div class='minus'>-</div>
                                        <input class='number_c' max='50' min='5' type='number' value='1'>
                                        <div class='plus'>+</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='blocks_label_calc'>
                        <div class='block'>
                            <div class='check'>
                                <input id='check_1' placeholder=' ' required='' type='checkbox'>
                                <label for='check_1'>
                                    <div class='icon'>
                                        <img src='{{asset('frontend/images/label_icon_1.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <p>Выравнивание полов</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check'>
                                <input id='check_2' placeholder=' ' required='' type='checkbox'>
                                <label for='check_2'>
                                    <div class='icon'>
                                        <img src='{{asset('frontend/images/label_icon_2.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <p>Выравнивание стен</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check'>
                                <input id='check_3' placeholder=' ' required='' type='checkbox'>
                                <label for='check_3'>
                                    <div class='icon'>
                                        <img src='{{asset('frontend/images/label_icon_3.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <p>Электромонтажные работы</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check'>
                                <input id='check_4' placeholder=' ' required='' type='checkbox'>
                                <label for='check_4'>
                                    <div class='icon'>
                                        <img src='{{asset('frontend/images/label_icon_4.png')}}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <p>Сантехнические работы</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class='next_calc'>
                        <a class='prev prev_button' href='#'>Назад</a>
                        <a class='next next_tree_button' href='#'>далее</a>
                    </div>
                </div>
                <div class='calculate_three_page calculate_pages'>
                    <div class='calc_end_page'>
                        <div class='block'>
                            <div class='title_page_c'>Предварительный расчет</div>
                            <div class='form_calc'>
                                <form>
                                    <input disabled required='' type='text' value='123 662'>
                                    <div class='rub'>руб</div>
                                </form>
                            </div>
                            <p>
                                <span>*</span>
                                Сумма сметы является примерной. Для получения более точной информации оставьте заявку на
                                бесплатный расчет сметы.
                            </p>
                            <a class='end_calc_link' href='#'>получить точный расчет сметы</a>
                        </div>
                    </div>
                    <div class='calc_icons_link clearfix'>
                        <div class='block'>
                            <a class='clearfix' href='#'>
                                <div class='icon'>
                                    <img src='{{asset('frontend/images/calc_icon_1.png')}}'  alt="Услуги - Прораб Нева">
                                </div>
                                <div class='calc_link'>
                                    <p>Узнать цену с материалами</p>
                                </div>
                            </a>
                        </div>
                        <div class='block'>
                            <a class='clearfix' href='#'>
                                <div class='icon'>
                                    <img src='{{asset('frontend/images/calc_icon_2.png')}}'  alt="Услуги - Прораб Нева">
                                </div>
                                <div class='calc_link'>
                                    <p>Получить расчет по комнатам</p>
                                </div>
                            </a>
                        </div>
                        <div class='block'>
                            <a class='clearfix' href='#'>
                                <div class='icon'>
                                    <img src='{{asset('frontend/images/calc_icon_3.png')}}'  alt="Услуги - Прораб Нева">
                                </div>
                                <div class='calc_link'>
                                    <p>Узнать цену с дизайн-проектом</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class='next_calc'>
                        <a class='prev prev_button' href='#'>Назад</a>
                        <a class='end_calc call_open_popup_button' href='#'>получить точный расчет сметы</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.blocks.trial')

    <section class='slider_logos'>
        <div class='wrapper_new'>
            <div class='section_title_block'>Мы работали с квартирами 95% застройщиков Санкт-Петербурга!</div>
            <div class='slider_logo_block'>
                <div class='block'>
                    <img src='{{asset('frontend/images/slid_logo_1.png')}}'  alt="Услуги - Прораб Нева">
                </div>
                <div class='block'>
                    <img src='{{asset('frontend/images/slid_logo_2.png')}}'  alt="Услуги - Прораб Нева">
                </div>
                <div class='block'>
                    <img src='{{asset('frontend/images/slid_logo_3.png')}}'  alt="Услуги - Прораб Нева">
                </div>
                <div class='block'>
                    <img src='{{asset('frontend/images/slid_logo_4.png')}}'  alt="Услуги - Прораб Нева">
                </div>
                <div class='block'>
                    <img src='{{asset('frontend/images/slid_logo_5.png')}}'  alt="Услуги - Прораб Нева">
                </div>
            </div>
        </div>
    </section>
{{--
    <section class='reviews reviews_home_page'>
        <div class='wrapper_new'>
            <div class='reviews_title'>НАС БЛАГОДАРЯТ И РЕКОМЕНДУЮТ КЛИЕНТЫ</div>
            <div class='all_review_text_img'>
                <div class='all_slider'>
                    <div class='reviews_slider'>
                        <div class='block'>
                            <div class='img' data-name='Александр'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен . . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_1.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Татьяна'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен 1. . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_2.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Александр'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен2 . . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_1.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Татьяна'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен3 . . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_2.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Александр'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен4 . . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_1.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Татьяна'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен 5. . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_2.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Александр'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен 6. . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_1.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Татьяна'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен7 . . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_2.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                        <div class='block'>
                            <div class='img' data-name='Александр'
                                 data-review='Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен. Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно. Работой доволен 8. . .'>
                                <img alt='title image' src='{{asset('frontend/images/reviews_img_1.png')}}'  alt="Услуги - Прораб Нева">
                            </div>
                        </div>
                    </div>
                    <div class='reviews_text'>
                        <div class='name'>Татьяна</div>
                        <p>Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен.
                            Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен один
                            приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё безупречно.
                            Работой доволен . . .</p>
                    </div>
                </div>
                <div class='reviews_slider_mob'>
                    <div class='block'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/reviews_img_1.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='reviews_text'>
                            <div class='name'>Татьяна</div>
                            <p>1Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен.
                                Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен
                                один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё
                                безупречно. Работой доволен . . . 2</p>
                        </div>
                    </div>
                    <div class='block'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/reviews_img_2.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='reviews_text'>
                            <div class='name'>Татьяна</div>
                            <p>Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен.
                                Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен
                                один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё
                                безупречно. Работой доволен . . . 3</p>
                        </div>
                    </div>
                    <div class='block'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/reviews_img_1.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='reviews_text'>
                            <div class='name'>Татьяна</div>
                            <p>Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен.
                                Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен
                                один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё
                                безупречно. Работой доволен . . . 4</p>
                        </div>
                    </div>
                    <div class='block'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/reviews_img_2.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='reviews_text'>
                            <div class='name'>Татьяна</div>
                            <p>Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен.
                                Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен
                                один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё
                                безупречно. Работой доволен . . . 5</p>
                        </div>
                    </div>
                    <div class='block'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/reviews_img_2.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='reviews_text'>
                            <div class='name'>Татьяна</div>
                            <p>Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен.
                                Обратившись в вашу компанию, один приезд бригады - и всё безупречно. Работой доволен
                                один приезд бригады - и всё безупречно. Работой доволенодин приезд бригады - и всё
                                безупречно. Работой доволен . . . 6</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}
    @widget('reviews', ['title' => 'НАС БЛАГОДАРЯТ И РЕКОМЕНДУЮТ КЛИЕНТЫ'])
    <section class='price_all'>
        <div class='wrapper_new'>
            <div class='title_h2 title_section'>ЦЕНЫ НА РЕМОНТ В новостройке</div>
            <div class="under_title_section">Специальные предложения по ремонту в новостройке под ключ</div>
            <div class='blocks'>
                <div class='block'>
                    <div class='name_click_block'>
                        <div class='name_block'>
                            Отделка «под ключ» - от 4200
                            <strong>
                                руб./м
                                <span>2</span>
                            </strong>
                        </div>
                        <p>Отделка по принципу полного цикла. Предполагает объемный комплекс работ
по черновой и всю финишную отделку, доработку коммуникаций. </p>
                        <div class='name_link'>
                            + что входит
                        </div>
                    </div>
                    <div class='open_all_block'>
                        <ol>
                            <li>
                                1. Стены
                                <ul>
<li>1.1. Грунтовка (3 цикла)</li>
<li>1.2. Оштукатуривание комбинированное</li>
<li>1.3. Шпаклевка (2 слоя)</li>
<li>1.4. Ошкуривание</li>
<li>1.5. Отделка оконных откосов ПВХ + монтаж подоконника ПВХ</li>
<li>1.6. Формирование дверных проемов</li>
<li>1.7. Поклейка обоев (флизелиновые)*</li>
<li>1.8. Покраска стен в/д DULUX (цвет на выбор заказчика)</li>
<li>1.9. В санузле укладка кафеля (на выбор заказчика)</li>
<li>1.10. В санузле затирка швов</li>
<li>1.11. В санузле устройство короба ГКЛ (скрывающего трубы, 2 шт.)</li>
                                </ul>
                                <br />* 2 вариант: Декоративная штукатурка (лофт) + 500 руб./м2
                            </li>


                            <li>
                                2. Пол
                                <ul>
<li>2.1. Настил подложки</li>
<li>2.2. Настил ламината </li>
<li>2.3. Монтаж плинтуса ПВХ (цвет: в тон ламината)</li>
<li>2.4. В санузле укладка кафеля</li>
<li>2.5. В санузле затирка швов (цвет: в тон кафеля)</li>
                                </ul>
                            </li>



                            <li>
                                3. Потолок
                                <ul>
                                    <li>3.1. Монтаж натяжных потолков (ПВХ) во всех помещениях
                                    </li>
                                </ul>
                            </li>
                            <li>

                                4. Электрика
                                <ul>
<li>4.1. Монтаж светильников (в штатных местах)</li>
<li>4.2. Дополнительно до 7-ми точечных светильников (на усмотрение заказчика)</li>
<li>4.3. Устройство гнезда подрозетника (в штатных местах)</li>
<li>4.4. Монтаж розеток и выключателей (в штатных местах)</li>
<li>4.5. Дополнительно до 7 розеток (на усмотрение заказчика)</li>

                                </ul>
                            </li>
                            <li>
                                5. Сантехника
                                <ul>
<li>5.1. Разводка труб водоснабжения (до 10 точек)</li>
<li>5.2. Разводка фановых труб</li>
<li>5.3. Монтаж ванной </li>
<li>5.4. Монтаж унитаза в сборе</li>
<li>5.5. Монтаж раковины в сборе</li>
<li>5.6. Монтаж смесителя (2 точки)</li>
<li>5.7. Монтаж смесителя с душевой лейкой</li>
<li>5.8. Монтаж полотенцесушителя (М-образный)</li>
 </ul>

                            </li>
                            <li>
                                6. Дополнительно*:
                                 <ul>
<li>6.1. Комплекс работ по выравниванию пола</li>
<li>6.2. Комплекс работ по дополнительной электрике </li>
<li>6.3. Укладка кафеля в жилых помещениях</li>
</ul><br /><br />
* После осмотра помещения.


                            </li>
                        </ol>
                    </div>
                </div>
                <div class='block'>
                      <div class='name_click_block'>
                        <div class='name_block'>
                            Отделка «под ключ» с материалами - от 9200
                            <strong>
                                руб./м
                                <span>2</span>
                            </strong>
                        </div>
                        <p>Ремонт по принципу минимального участия заказчика. Предполагает объемный комплекс работ
                         по черновой и всю финишную отделку,  доработку коммуникаций, включает все материалы (черновые и чистовые)
                         и решение доп. вопросов и забот.</p>
                        <div class='name_link'>
                            + что входит
                        </div>
                    </div>
                    <div class='open_all_block'>
                        <ol>
                            <li>
                                1. Стены
                                <ul>
                                    <li>1.1. Грунтовка (3 цикла)</li>
                                    <li>1.2. Оштукатуривание</li>
                                    <li>1.3. Шпаклевка (2 слоя)</li>
                                    <li>1.4. Ошкуривание</li>
                                    <li>1.5. Отделка оконных откосов ПВХ + монтаж подоконника ПВХ</li>
                                    <li>1.6. Формирование дверных проемов</li>
                                    <li>1.7. Поклейка обоев под покраску (флизелиновые фактурные)</li>
                                    <li>1.8. Покраска стен в/д DULUX (цвет на выбор заказчика)</li>
                                    <li>1.9. В санузле укладка кафеля (на выбор заказчика: светлый / темный тон)</li>
                                    <li>1.10. В санузле затирка швов</li>
                                    <li>1.11. В санузле устройство короба ГКЛ (скрывающего трубы)</li>
                                </ul>
                            </li>
                            <li>
                                2. Пол
                                <ul>
                                    <li>2.1. Настил подложки (вспененная 2 мм)</li>
                                    <li>2.2. Настил ламината (32 класс, на выбор заказчика: светлый / темный тон)</li>
                                    <li>2.3. Монтаж плинтуса ПВХ (цвет: в тон ламината)</li>
                                    <li>2.4. В санузле укладка кафеля</li>
                                    <li>2.5. В санузле затирка швов (цвет: в тон кафеля)</li>
                                </ul>
                            </li>
                            <li>
                                3. Потолок
                                <ul>
                                    <li>3.1. Монтаж натяжных потолков (ПВХ) во всех помещениях (на выбор заказчика:
                                        матовые / глянцевые)
                                    </li>
                                </ul>
                            </li>
                            <li>
                                4. Электрика
                                <ul>
                                    <li>4.1. Монтаж светильника (плафон)</li>
                                    <li>4.2. Устройство гнезда подрозетника (в штатных местах)</li>
                                    <li>4.3. Монтаж розеток и выключателей (в штатных местах)</li>
                                </ul>
                            </li>
                            <li>
                                5. Сантехника
                                <ul>
                                    <li>5.1. Разводка труб горячего водоснабжения (3 точки)</li>
                                    <li>5.2. Разводка труб холодного водоснабжения (4 точки)</li>
                                    <li>5.3. Разводка фановых труб</li>
                                    <li>5.4. Монтаж ванной (стальной) или душевой кабины (с ПВХ-шторками в сборе)</li>
                                    <li>5.5. Монтаж унитаза в сборе</li>
                                    <li>5.6. Монтаж раковины в сборе</li>
                                    <li>5.7. Монтаж смесителя (2 точки)</li>
                                    <li>5.8. Монтаж смесителя с душевой лейкой</li>
                                    <li>5.9. Демонтаж / монтаж полотенцесушителя (М-образный)</li>
                                </ul>
                            </li>
                            <li>
                                6. Черновые материалы
                            </li>
                            <li>
                                7. Чистовые материалы
                            </li>
                            <li>
                                8. Расходные материалы
                            </li>
                            <li>9. Закупка и доставка материалов (включая подъем на этаж)</li>
                            <li>10. Вынос мусора</li>
                            <li>11. Вывоз мусора</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='object object_page_4'>
        <div class='wrapper_new'>
            <div class='object_title yandex_metrica'>
                Так просто…
            </div>
            <p>Оставьте заявку, и мы сделаем расчет сметы вашего ремонта. Выполним замер, рассчитаем все виды работ, объемы и стоимость,
                проконсультируем по технологиям и этапам ремонтных работ — всё это за {{ env('PARRAM_TRIAL') }} руб.. </p>
            <a href='#' class="call_open_popup_button">Заказать расчет сметы</a>
        </div>
    </section>
    @include('frontend.blocks.whyWe')

    {{--<section class='tur_3d    tur_3d_repairs_rooms tur_3d_home_page'>--}}
        {{--<div class='wrapper_new'>--}}
            {{--<h2 class='title_section'>3D-ТУРЫ РЕМОНТОВ</h2>--}}
            {{--<div class='under_title_section'>Посмотрите максимально реалистичные интерактивные туры по нашим объектам--}}
                {{--после ремонта--}}
            {{--</div>--}}
            {{--<div class='tur_slider'>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen=''  height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=juV4G9jXPQi' width='853'></iframe>--}}
                {{--</div>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen=''  height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=9GAYFAn4fJ8' width='853'></iframe>--}}
                {{--</div>--}}
                {{----}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen=''  height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=14NqnuQnZPK' width='853'></iframe>--}}
                {{--</div>--}}
                {{----}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    @widget('tour3d')
    <section class='design_repairs'>
        <div class='wrapper_new'>
            <div class='design_repairs_blocks'>
                <div class='block block_1'>
                    <div class='title_h2 title_section yandex_metrica'>Рассрочка 0%</div>
                    <p>Узнайте о специальных комфортных условиях по ремонту квартир от нашей компании</p>
                    <a href='#' class="call_open_popup_button">Узнать подробнее</a>
                </div>
                <div class='block block_3'>
                    <div class='title_h2 title_section yandex_metrica'>Ремонт и дизайн</div>
                    <p>Услуги дизайнера интерьера – от планировки до декора, запишитесь на бесплатную консультацию</p>
                    <a href='#' class="call_open_popup_button">Записаться на консультацию</a>
                </div>
            </div>
        </div>
    </section>
    <section class='our_services our_services_home_page clearfix @if($categoryService->slug == "remont-v-novostrojke") our_services_new_building @endif'>
        <div class='text_arrow'>
            <div class='title_services'>Виды ремонта</div>
            <p>Все виды ремонта в зависимости от объема работ и количества сопутствующих услуг. Делаем качественно и
                профессионально.</p>
            <div class='next_prev clearfix'>
                <div class='prev'></div>
                <div class='next'></div>
            </div>
        </div>
        <div class='services'>
            <div class='bg_block'></div>
            <div class='services_slider'>
                <div class='block'>
                    <a href='/kosmeticheskiy-remont'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/services_icon_1.png')}}'  alt="Услуги - Прораб Нева">
                            <img src='{{asset('frontend/images/services_icon_hover_1.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='name_block'>Косметический ремонт</div>
                        <p>Выполняем все виды работ по обновлению отделки и интерьера</p>
                        <div class='arrow_block'></div>
                    </a>
                </div>
                <div class='block'>
                    <a href='/kapitalnyiy-remont'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/services_icon_2.png')}}'  alt="Услуги - Прораб Нева">
                            <img src='{{asset('frontend/images/services_icon_hover_2.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='name_block'>Капитальный ремонт</div>
                        <p>Реализуем проекты по кардинальному изменению облика квартир</p>
                        <div class='arrow_block'></div>
                    </a>
                </div>
                <div class='block'>
                    <a href='/dizaynerskiy-remont'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/services_icon_3.png')}}'  alt="Услуги - Прораб Нева">
                            <img src='{{asset('frontend/images/services_icon_hover_3.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='name_block'>Дизайнерский ремонт</div>
                        <p>Помогаем создать комфортное, уникальное и статусное пространство</p>
                        <div class='arrow_block'></div>
                    </a>
                </div>
                <div class='block'>
                    <a href='/remont-pod-kluch'>
                        <div class='img'>
                            <img src='{{asset('frontend/images/services_icon_4.png')}}'  alt="Услуги - Прораб Нева">
                            <img src='{{asset('frontend/images/services_icon_hover_4.png')}}'  alt="Услуги - Прораб Нева">
                        </div>
                        <div class='name_block'>Ремонт «под ключ»</div>
                        <p>Осуществляем комплексный ремонт «с нуля» и берем на себя все заботы</p>
                        <div class='arrow_block'></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class='object object_home_page object_new_building'>
        <div class='wrapper_new'>
            <div class='object_title yandex_metrica'>Нужна помощь в приемке квартиры<br>у застройщика?</div>
            <p>Поможем выявить недоделки и найти скрытые технические нарушения, оформить смотровой лист и сформулировать
                претензии по выявленным дефектам. Комплексная приемка квартиры в новостройке – от 30 руб./кв.м</p>
            <a href='#' class="call_open_popup_button">Подробнее</a>
        </div>
    </section>
    <section class='questions'>
        <div class='wrapper_new clearfix'>
            <div class='questions_title_block'>
                <div class='icon'>
                    <img src='{{asset('frontend/images/icon_quest.png')}}'  alt="Услуги - Прораб Нева">
                </div>
                <p>ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ «Ремонт в новостройке»</p>
            </div>
            <div class='questions_block'>
                <ul>
                    <li>
                        <h3>1.С чего начинается ремонт в новостройке?</h3>
                        <p>
                            Первое, что надо проделать – это осмотра и выявления скрытых дефектов. Чтобы установить
                            скрытые дефекты, вы обратиться к помощи приемщика от Прораб НЕВА. Он, кроме прочего, поможет
                            сделать замеры и наметить фронт предстоящих дел. Потом будет составлена подробная смета обо
                            всех необходимых и желательных работах в вашей новостройке. </p>
                    </li>
                    <li>
                        <h3>2.На какие этапы делится ремонт в новостройке?</h3>
                        <p>

                            Если наиболее кратко:<br>
                        <ul>
                            <li>Замеры и смета;</li>
                            <li>Черновые работы;</li>
                            <li>Чистовые работы;</li>
                            <li>Приёмка.</li>
                        </ul>

                        <br>
                        </p>
                        <p>
                            Довольно часто черновые работы уже предоставлены компанией застройщиком, тогда нужно только
                            скорректировать имеющиеся недочёты и выполнить косметическую часть. Хотя в некоторых случая
                            квартира сдаётся даже без стен – неясно, где будут границы спальни или гостиной и будут ли
                            вовсе. Нужно рассматривать каждый конкретный случай отдельно.

                        </p>
                    </li>
                    <li>
                        <h3>3.Как долго будет идти ремонт однокомнатной квартиры в новостройке?</h3>
                        <p>
                            Трудно оперировать цифрами, если неизвестно, речь идет о сложном ремонте с дизайном или,
                            например, итоговом ремонте после готовой предчистовой отделки. Следует ориентироваться на
                            промежуток от 30 до 40 дней и осознавать, что чем оригинальнее есть идеи, тем дольше будет
                            ремонт. Не стоит спешить, в некоторых ситуациях (например, когда сохнет стяжка пола)
                            торопливость может потом вылиться в проблемность или недолговечность результата.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div id='popup_portfolio_slider'>
        <div class='popup_block'>
            <div class='close'></div>
        </div>
    </div>
    @widget('blog_block')
    @include('frontend.repairs.partials.description', ['mainCategory' => $categoryService,'has_padd_40' => true])

    @include('frontend.modals.call_order')

@endsection
