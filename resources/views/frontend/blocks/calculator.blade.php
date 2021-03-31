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
        <form action='#' class='calc-form' id='calc-form' method='POST'>
            <div class='all_calculete'>
                <div class='calculate_one_page calculate_pages active'>
                    <div class='type_calc'>
                        <div class='block active'>
                            <div class='check_radio'>
                                <input checked class='radio_inp' for='calc-form' id='novoctroyka' name='calc-type' type='radio' value='novostroika'>
                                <label for='novoctroyka'>
                                    <div class='img_calc_type'>
                                        <img src="{{ asset('frontend/images/icon_calc_1.png') }}" alt="Калькулятор - Прораб Нева">
                                    </div>
                                    <div class='img_calc_type_mob'>
                                        <img src="{{ asset('frontend/images/icon_calc_1_mob.png') }}"  alt="Калькулятор - Прораб Нева">
                                    </div>
                                    <p>Новостройка</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check_radio'>
                                <input class='radio_inp' for='calc-form' id='vtorichnoe' name='calc-type' type='radio' value='vtorichka'>
                                <label for='vtorichnoe'>
                                    <div class='img_calc_type'>
                                        <img src="{{ asset('frontend/images/icon_calc_2.png') }}"  alt="Калькулятор - Прораб Нева">
                                    </div>
                                    <div class='img_calc_type_mob'>
                                        <img src="{{ asset('frontend/images/icon_calc_2_mob.png') }}"  alt="Калькулятор - Прораб Нева">
                                    </div>
                                    <p>Вторичное жилье</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class='calc_num_area'>
                        <div class='name_num_area'>Общая площадь (кв. м)</div>
                        <div class='block_select_num calculate_plus_minus_one'>
                            <div class='minus'>-</div>
                            <input class='number_c number_c_area' data-max='200' data-min='15' for='calc-form' max='200' min='15' name='square' step='1' type='number' value='45'>
                            <div class='plus'>+</div>
                            <div class='calc_ui_line'></div>
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
                                    <div class='minus'>-</div>
                                    <input class='number_c' for='calc-form' max='7' min='1' name='rooms' step='1' type='number' value='1'>
                                    <div class='plus'>+</div>
                                </div>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='calc_num_area'>
                                <div class='name_num_area'>Санузлы</div>
                                <div class='block_select_num calculate_plus_minus_two_2'>
                                    <div class='minus'>-</div>
                                    <input class='number_c' for='calc-form' max='3' min='1' name='toilets' step='1' type='number' value='1'>
                                    <div class='plus'>+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='blocks_label_calc'>
                        <div class='block'>
                            <div class='check'>
                                <input for='calc-form' id='check_1' name='calc-service1' type='checkbox'>
                                <label for='check_1'>
                                    <div class='icon'>
                                        <img src="{{ asset('frontend/images/label_icon_1.png') }}" alt="Калькулятор - Прораб Нева">
                                    </div>
                                    <p>Выравнивание полов</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check'>
                                <input for='calc-form' id='check_2' name='calc-service2' type='checkbox'>
                                <label for='check_2'>
                                    <div class='icon'>
                                        <img src="{{ asset('frontend/images/label_icon_2.png') }}" alt="Калькулятор - Прораб Нева">
                                    </div>
                                    <p>Выравнивание стен</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check'>
                                <input for='calc-form' id='check_3' name='calc-service3' type='checkbox'>
                                <label for='check_3'>
                                    <div class='icon'>
                                        <img src="{{ asset('frontend/images/label_icon_3.png') }}" alt="Калькулятор - Прораб Нева">
                                    </div>
                                    <p>Электромонтажные работы</p>
                                </label>
                            </div>
                        </div>
                        <div class='block'>
                            <div class='check'>
                                <input for='calc-form' id='check_4' name='calc-service4' type='checkbox'>
                                <label for='check_4'>
                                    <div class='icon'>
                                        <img src="{{ asset('frontend/images/label_icon_4.png') }}" alt="Калькулятор - Прораб Нева">
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
                                <input class='calc_count_input' disabled='disabled' max='1500000' min='1' name='calc-total' type='text' value='133 912'>
                                <div class='rub'>руб</div>
                            </div>
                            <p>
                                <span>*</span>
                                Сумма сметы является примерной. Для получения более точной информации оставьте заявку на расчет сметы.
                            </p>
                            <a class='end_calc_link' href='#'>получить точный расчет сметы</a>
                        </div>
                    </div>
                    <div class='calc_icons_link clearfix'>
                        <div class='block'>
                            <a class='clearfix call_open_popup_button' href='#'>
                                <div class='icon'>
                                    <img src="{{ asset('frontend/images/calc_icon_1.png') }}" alt="Калькулятор - Прораб Нева">
                                </div>
                                <div class='calc_link'>
                                    <p>Узнать цену с материалами</p>
                                </div>
                            </a>
                        </div>
                        <div class='block'>
                            <a class='clearfix call_open_popup_button' href='#'>
                                <div class='icon'>
                                    <img src="{{ asset('frontend/images/calc_icon_2.png') }}" alt="Калькулятор - Прораб Нева">
                                </div>
                                <div class='calc_link'>
                                    <p>Получить расчет по комнатам</p>
                                </div>
                            </a>
                        </div>
                        <div class='block'>
                            <a class='clearfix call_open_popup_button' href='#'>
                                <div class='icon'>
                                    <img src="{{ asset('frontend/images/calc_icon_3.png') }}" alt="Калькулятор - Прораб Нева">
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
        </form>
    </div>
</section>
