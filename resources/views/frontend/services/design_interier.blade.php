@extends('frontend.layouts.master')

@section('content')
    <section class='top_banner top_banner_home'>
        <div class='wrapper_new-n'>
            <div class='flex_block_n'>
                <div class='banner_left'>
                    <h1 class='banner_left_title'>
                        <span class='text_blue'>Дизайн</span>
                        интерьера
                        <br>
                        квартир
                    </h1>
                    <p>Создание комфортного интерьера и качественный ремонт квартир. Проектирование и реализация
                        дизайн-проектов от профессионалов ремонтного рынка.</p>
                    <a class='btn_style_n btn_style_n-orange scroll__services' href='#'>Смотреть цены</a>
                </div>
                <div class='banner_right'>
                    <img src='/frontend/images_4/home__img.png'>
                </div>
            </div>
        </div>
        <div class='decoration_arrows'>
            <div class='wrapper_new-n'>
                <ul>
                    <li></li>
                    <li class='color_blue'></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li class='color_orange'></li>
                    <li></li>
                    <li></li>
                    <li class='color_blue'></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
    <section class='information_section information_section-int'>
        <div class='wrapper_new-n'>
            <div class='section_top_two'>
                <div class='flex_block_n'>
                    <div>
                        <div class='title_section--g-big'>
                            Как мы можем
                            <div class='text_orange'>вам помочь?</div>
                        </div>
                    </div>
                    <div>
                        <p>Мы – команда, состоящая из профессиональных дизайнеров и ремонтников, главная задача которых
                            –
                            реализация Ваших самых смелых идей.</p>
                    </div>
                </div>
            </div>
            <div class='information__section--overflow'>
                <div class='flex_block_n'>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon block-icon--blue'>
                            <img src='/frontend/images_4/check_icon_i.png'>
                        </div>
                        <div class='information__section--block-name'>
                            Дизайн-
                            <br>
                            проект
                        </div>
                        <p>Разработаем проект под ваш вкус, потребности и бюджет</p>
                    </div>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon block-icon--blue'>
                            <img src='/frontend/images_4/check_icon_i.png'>
                        </div>
                        <div class='information__section--block-name'>
                            Смета
                            <br>
                            и комплектация
                        </div>
                        <p>Составим подробную смету и рассчитаем бюджет ремонта</p>
                    </div>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon block-icon--blue'>
                            <img src='/frontend/images_4/check_icon_i.png'>
                        </div>
                        <div class='information__section--block-name'>
                            Ремонтные
                            <br>
                            работы
                        </div>
                        <p>Имеем большой опыт в реализации ремонтов по дизайн-проектам</p>
                    </div>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon block-icon--blue'>
                            <img src='/frontend/images_4/check_icon_i.png'>
                        </div>
                        <div class='information__section--block-name'>
                            Материалы
                            <br>
                            и декор
                        </div>
                        <p>
                            Поможем в подборе и закупке материалов, организуем доставку
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='interior_design'>
        <div class='wrapper_new-n'>
            <h2 class='title_section--g-big'>
                Дизайн интерьера
                <br>
                <span class='text_blue'>с «Прораб НЕВА»</span>
            </h2>
            <div class='under_title_section-n'>
                Работаем во всех стилях и направлениях дизайна интерьеров,
                <br>
                смотрите примеры наших проектов
            </div>
            <div class='interior_design__slider'>
                <div class='interior_design__slider-item'>
                    <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Кухня-гостиная'
                       href='/frontend/images_4/imgLightbox/1/1 Кухня-гостиная 1-4-min.jpg'>
                        <div class='interior_design__slider-item--img'>
                            <div class='hover_img'></div>
                            <img src='/frontend/images_4/imgLightbox/1/1 Кухня-гостиная 1-4-min.jpg'>
                        </div>
                        <div class='interior_design__slider-item--title'>Экосканди в ЖК Новоорловский</div>
                    </a>
                    <div class='hide_block'>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Кухня-гостиная'
                           href='/frontend/images_4/imgLightbox/1/2 Кухня-гостиная 2-3-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Кухня'
                           href='/frontend/images_4/imgLightbox/1/3 кухня-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Прихожая'
                           href='/frontend/images_4/imgLightbox/1/4 прихожая 3-3-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Прихожая'
                           href='/frontend/images_4/imgLightbox/1/5 прихожая 2-3-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Прихожая'
                           href='/frontend/images_4/imgLightbox/1/6 прихожая 1-3-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Ванная'
                           href='/frontend/images_4/imgLightbox/1/7 ванная 2-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Ванная'
                           href='/frontend/images_4/imgLightbox/1/8 ванная 1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Санузел'
                           href='/frontend/images_4/imgLightbox/1/9 санузел-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Спальня'
                           href='/frontend/images_4/imgLightbox/1/10 спальня 1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_1' title='Спальня'
                           href='/frontend/images_4/imgLightbox/1/11 спальня 2-min.jpg'></a>
                    </div>
                </div>
                <div class='interior_design__slider-item'>
                    <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Спальня' href='/frontend/images_4/imgLightbox/2/1 spalnya_6-min.jpg'>
                        <div class='interior_design__slider-item--img'>
                            <div class='hover_img'></div>
                            <img src='/frontend/images_4/imgLightbox/2/1 spalnya_6-min.jpg'>
                        </div>
                        <div class='interior_design__slider-item--title'>Контепорари в ЖК Авиатор</div>
                    </a>
                    <div class='hide_block'>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Спальня'
                           href='/frontend/images_4/imgLightbox/2/2 spalnya_5-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Санузел'
                           href='/frontend/images_4/imgLightbox/2/3 san_3-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Санузел'
                           href='/frontend/images_4/imgLightbox/2/4 san_1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Коридор'
                           href='/frontend/images_4/imgLightbox/2/5 kor_4-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Кухня'
                           href='/frontend/images_4/imgLightbox/2/6 kuhnya_1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Кухня'
                           href='/frontend/images_4/imgLightbox/2/7 kuhnya_3-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Гостиная'
                           href='/frontend/images_4/imgLightbox/2/8 gos_1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Гостиная'
                           href='/frontend/images_4/imgLightbox/2/9 gos_2-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_2' title='Кухня'
                           href='/frontend/images_4/imgLightbox/2/10 kuhnya_4-min.jpg'></a>
                    </div>
                </div>
                <div class='interior_design__slider-item'>
                    <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_3' title='' href='/frontend/images_4/imgLightbox/3/1-min.jpg'>
                        <div class='interior_design__slider-item--img'>
                            <div class='hover_img'></div>
                            <img src='/frontend/images_4/imgLightbox/3/1-min.jpg'>
                        </div>
                        <div class='interior_design__slider-item--title'>Скандинавия в Петергофе</div>
                    </a>
                    <div class='hide_block'>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_3' title='' href='/frontend/images_4/imgLightbox/3/2_1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_3' title='' href='/frontend/images_4/imgLightbox/3/3_1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_3' title='' href='/frontend/images_4/imgLightbox/3/4_1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_3' title='' href='/frontend/images_4/imgLightbox/3/5 kuhnya_2-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_3' title='' href='/frontend/images_4/imgLightbox/3/6 vannaya_1-min.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_3' title='' href='/frontend/images_4/imgLightbox/3/7 vannaya_2-min.jpg'></a>
                    </div>
                </div>
                <div class='interior_design__slider-item'>
                    <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/1-min.png'>
                        <div class='interior_design__slider-item--img'>
                            <div class='hover_img'></div>
                            <img src='/frontend/images_4/imgLightbox/4/1-min.png'>
                        </div>
                        <div class='interior_design__slider-item--title'>Эколофт в ЖК Северная Жемчужина</div>
                    </a>
                    <div class='hide_block'>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/2-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/3-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/4-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/5-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/6-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/7-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/8-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/9-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_4' title='' href='/frontend/images_4/imgLightbox/4/10-min.png'></a>
                    </div>
                </div>
                <div class='interior_design__slider-item'>
                    <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/1.jpg'>
                        <div class='interior_design__slider-item--img'>
                            <div class='hover_img'></div>
                            <img src='/frontend/images_4/imgLightbox/5/1.jpg'>
                        </div>
                        <div class='interior_design__slider-item--title'>Неоклассика в ЖК Легенда</div>
                    </a>
                    <div class='hide_block'>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/2.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/3.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/4.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/5.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/6-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/7-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/8-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/9-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/10-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/11-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/12-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/13-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/14-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/15.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/16.jpg'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_5' title='' href='/frontend/images_4/imgLightbox/5/17.jpg'></a>
                    </div>
                </div>
                <div class='interior_design__slider-item'>
                    <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/1 Гостиная-min.jpg'>
                        <div class='interior_design__slider-item--img'>
                            <div class='hover_img'></div>
                            <img src='/frontend/images_4/imgLightbox/6/1 Гостиная-min.jpg'>
                        </div>
                        <div class='interior_design__slider-item--title'>Контепорари в ЖК Пулковский</div>
                    </a>
                    <div class='hide_block'>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/2 Гостиная-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/3 Гостиная-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/4 Коридор-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/6 Коридор-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/7 Кухня-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/8 Кухня-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/9 Кухня-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/10 Кухня-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title=''
                           href='/frontend/images_4/imgLightbox/6/11 Ванная комната-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/12 Санузел-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/13 Спальня-min.png'></a>
                        <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='img_design_6' title='' href='/frontend/images_4/imgLightbox/6/14 Спальня-min.png'></a>
                    </div>
                </div>
            </div>
            <div class='view_all'>
                <a class='read_more btn_style_n' href='#'>Показать ещё</a>
            </div>
        </div>
    </section>
    <section class='our__team__info'>
        <div class='wrapper_new-n'>
            <div class='our__team__info--title'>
                <span>
                Наша команда более 10 лет выполняет комплексные работы,</span> связанные с дизайном интерьера
частных помещений под ключ <br> в Москве

            </div>
            <div class='flex_block_n'>
                <div class='left__text'>
                    <p>Создайте уютное пространство у себя дома! Компания «Прораб НЕВА» – это   команда
специалистов, выполняющих ремонт любой сложности на территории Москвы и области. Чтобы создать по-настоящему уникальное оформление жилья, предлагаем разработать индивидуальный дизайн-проект интерьера.</p>

<p>Профессиональный дизайнер подберет для вас текстуру и цветовую гамму материалов,
светильники и фурнитуру, поможет определиться со стилем и расцветкой мебели, декора и т.д.</p>

<p>Готовый интерьер станет отражением вашей натуры, а значит неизменно будет радовать уютом и комфортом.</p>

                </div>
                <div class='right__img'>
                    <div class='flex_block_n'>
                        <div class='images_block--sm'>
                            <img src='/frontend/images_4/Rectangle 6.png'>
                        </div>
                        <div class='images_block'>
                            <div class='images_block--big'>
                                <img src='/frontend/images_4/Rectangle 8.png'>
                            </div>
                            <div class='images_block--sm'>
                                <img src='/frontend/images_4/Rectangle 80.png'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='services__prices'>
        <div class='wrapper_new-n'>
            <div class='title_section--g-big'>Наши услуги и цены</div>
            <div class='services__prices--blocks'>
                <div class='flex_block_n'>
                    <div class='services__prices--block block__grey'>
                        <div class='services__prices--block--title'>Стандарт</div>
                        <div class='services__prices--block--info'>
                            <ul>
                                <li>Планировочное решение</li>
                                <li>Все необходимые строительные чертежи</li>
                            </ul>
                        </div>
                        <div class='services__prices--block--bottom'>
                            <div class='services__prices--price'>
                                1000
                                <span>
<i class='fa fa-rub'></i>
/м2
</span>
                            </div>
                            <div class='services__prices--btn'>
                                <a href='#' class="call_open_popup_button--new">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <div class='services__prices--block block__blue'>
                        <div class='services__prices--block--title'>Комфорт</div>
                        <div class='services__prices--block--info'>
                            <ul>
                                <li>Планировочное решение</li>
                                <li>Все необходимые строительные чертежи</li>
                                <li>Стилистическое решение (коллажи интерьера)</li>
                            </ul>
                        </div>
                        <div class='services__prices--block--bottom'>
                            <div class='services__prices--price'>
                                1 400
                                <span>
<i class='fa fa-rub'></i>
/м2
</span>
                            </div>
                            <div class='services__prices--btn'>
                                <a href='#' class="call_open_popup_button--new">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <div class='services__prices--block block__orange'>
                        <div class='services__prices--block--title'>Эксклюзив</div>
                        <div class='services__prices--block--info'>
                            <ul>
                                <li>Планировочное решение</li>
                                <li>Все необходимые строительные чертежи</li>
                                <li>Стилистическое решение (коллажи интерьера)</li>
                                <li>3D-визуализация интерьера</li>
                            </ul>
                        </div>
                        <div class='services__prices--block--bottom'>
                            <div class='services__prices--price'>
                                2000
                                <span>
<i class='fa fa-rub'></i>
/м2
</span>
                            </div>
                            <div class='services__prices--btn'>
                                <a href='#' class="call_open_popup_button--new">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <div class='services__prices--block block__white'>
                        <div class='services__prices--block--title'>Выезд дизайнера</div>
                        <div class='services__prices--block--info'>
                            <ul>
                                <li>Консультирование</li>
                                <li>Подбор материалов и мебели</li>
                                <li>Авторский надзор</li>
                            </ul>
                        </div>
                        <div class='services__prices--block--bottom'>
                            <div class='services__prices--price'>
                                1 500
                                <span>
<i class='fa fa-rub'></i>
</span>
                            </div>
                            <p>или 20000 ₽/месяц (до 8 выездов)</p>
                            <div class='services__prices--btn'>
                                <a href='#' class="call_open_popup_button--new">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='services__prices--all-show'>
                    <a class='open__table_popup' href='#'>Сравнить пакеты</a>
                </div>
            </div>
        </div>
    </section>
    <section class='information_section information_section-int-two'>
        <div class='wrapper_new-n'>
            <div class='title_section--g-big'>
                Почему с нами
                <br>
                выгодно
            </div>
            <div class='information__section--overflow'>
                <div class='flex_block_n'>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon big-icon icon-blue'>
                            <img src='/frontend/images_4/icon_i_1.png'>
                        </div>
                        <div class='information__section--block-name'>
                            От проекта
                            <br>
                            до сдачи ремонта
                        </div>
                        <p>
                            Работаем по принципу «одного окна»: дизайн, ремонт, надзор и сопровождение в одном месте
                        </p>
                    </div>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon big-icon icon-orange'>
                            <img src='/frontend/images_4/icon_i_2.png'>
                        </div>
                        <div class='information__section--block-name'>
                            Демократичные
                            <br>
                            цены
                        </div>
                        <p>
                            Современный и продуманный дизайн, выполненный индивидуально для вас от 1000 руб./кв.м
                        </p>
                    </div>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon big-icon icon-black'>
                            <img src='/frontend/images_4/icon_i_3.png'>
                        </div>
                        <div class='information__section--block-name'>
                            Дизайн интерьера
                            <br>
                            для жизни
                        </div>
                        <p>
                            Создаем не только модные, но удобные для жизни интерьеры, адаптируем дизайн под задачи
                            клиента
                        </p>
                    </div>
                    <div class='information__section--block information__section--block-sm mob_bg_gray'>
                        <div class='information__section--block-icon big-icon'>
                            <img src='/frontend/images_4/icon_i_4.png'>
                        </div>
                        <div class='information__section--block-name'>
                            Знаем о ремонте
                            <br>
                            изнутри
                        </div>
                        <p>
                            Качественно отрабатываем техническую сторону проектов, минимизируя доработки на стадии
                            ремонта
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='free_trial free_trial--int'>
        <div class='wrapper_new-n_big'>
            <div class='free_trial__bg'>
                <div class='left_block_trial__info'>
                    <div class='title_section--g-big'>
                        <span class='text_orange'>Закажите консультацию</span>
                        профессионального дизайнера
                    </div>
                    <p>
                        Оставьте заявку и получите точные обмеры помещения, профессиональную консультацию и самую
                        выгодную
                        цену
                        <br>
                        на дизайн и ремонт
                    </p>
                    <a class='btn_style_n btn_style_n-big btn_style_n-orange-hover call_open_popup_button--new'
                       href='#'>Оставить заявку</a>
                </div>
                <div class='right_block_trial__img'>
                    <img src='/frontend/images_4/Rectangle 15.png'>
                </div>
            </div>
        </div>
    </section>
    <section class='information_section information_section-int-tree'>
        <div class='wrapper_new-n'>
            <h2 class='title_section_g'>
                Схема работы над
                <br>
                дизайн-проектом
            </h2>
            <div class='information__section--overflow information__section--overflow--block_num'>
                <div class='flex_block_n flex_block_n-wrap'>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-number'>01</div>
                        <div class='information__section--block-name'>
                            Обсуждение проекта
                        </div>
                        <p>Для начала обговорим вместе с Вами все нюансы будущего дизайн-проекта</p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-number'>02</div>
                        <div class='information__section--block-name'>
                            Концепт и планировка
                        </div>
                        <p>Затем мы займемся разработкой концепции и нескольких вариантов планировки</p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-number'>03</div>
                        <div class='information__section--block-name'>
                            Выбор стиля
                        </div>
                        <p>Совместно с вами выберем подходящее решение по дизайну</p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-number'>04</div>
                        <div class='information__section--block-name'>
                            Заключение контракта
                        </div>
                        <p>В котором будет поэтапно расписан весь объем работ, указаны сроки выполнения и окончательная
                            стоимость проекта</p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-number'>05</div>
                        <div class='information__section--block-name'>
                            Разработка проекта
                        </div>
                        <p>
                            Произведем подготовку пакета чертежей, которые понадобятся для грамотного осуществления
                            строительных работ
                        </p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-number'>06</div>
                        <div class='information__section--block-name'>
                            Надзор за ремонтом
                        </div>
                        <p>Авторский надзор, то есть будем следить за ходом развития проекта (на ваше усмотрение)*</p>
                    </div>
                </div>
            </div>
            <p>
                * К тому же авторский надзор предполагает подбор всех необходимых материалов для отделки
                <br>
                жилья, предметов обстановки, осветительных приборов и пр.
            </p>
        </div>
    </section>
    <section class='tur_3d_n'>
        <div class='wrapper_new-n'>
            <div class='title_section--g-big title_section--g-big-white'>
                3D-туры квартир после
                <br>
                дизайнерского ремонта
            </div>
            <div class='under_title_section-n text_white'>
                Панорамные туры по квартирам после
                <br>
                ремонта – погружение на 360º во все детали
                <br>
                и тонкости наших работ
            </div>
            <div class='tur_3d_n-owl'>
                <div class='block'>
                    <div class='owl_slid'></div>
                    <iframe allow='vr' allowfullscreen='' frameborder='0' height='480'
                            src='https://my.matterport.com/show/?m=K3bXnbmTzL2' width='1200'></iframe>
                </div>
                <div class='block'>
                    <div class='owl_slid'></div>
                    <iframe allow='vr' allowfullscreen='' frameborder='0' height='480'
                            src='https://my.matterport.com/show/?m=6KnPaYWnNHZ' width='1200'></iframe>
                </div>

                <div class='block'>
                    <div class='owl_slid'></div>
                    <iframe allow='vr' allowfullscreen='' frameborder='0' height='480'
                            src='https://my.matterport.com/show/?m=juV4G9jXPQi' width='1200'></iframe>
                </div>

                <div class='block'>
                    <div class='owl_slid'></div>
                    <iframe allow='vr' allowfullscreen='' frameborder='0' height='480'
                            src='https://my.matterport.com/show/?m=9GAYFAn4fJ8' width='1200'></iframe>
                </div>

                <div class='block'>
                    <div class='owl_slid'></div>
                    <iframe allow='vr' allowfullscreen='' frameborder='0' height='480'
                            src='https://my.matterport.com/show/?m=14NqnuQnZPK' width='1200'></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class='really_designer'>
        <div class='wrapper_new-n'>
            <h2 class='title_section_g'>
                Действительно ли нужен
                <br>
                дизайнер?
            </h2>
            <div class='flex_block_n really_designer--blocks'>
                <div class='left_block w_50'>
                    <p>Интернет, личные сайты дизайнеров, модные журналы и телепередачи о ремонте – все это
способно дать представление о красивом пространстве и его проектировании. На основе
общедоступных источников можно придумать простой дизайн интерьера и своими силами
подготовить проект для ремонтной бригады. НО!
</p>
                    <a class='btn_style_n btn_style_n-orange call_open_popup_button--new' href='#'>Оставить заявку</a>
                </div>
                <div class='right_block w_50'>
                    <div class='flex_block_n'>
                        <div class='w_50'>
                            <div class='icon_check'>
                                <img src='/frontend/images_4/icon_check_blue.png'>
                            </div>
                            <p>
                               Если вы хотите создать в своей квартире по-настоящему уникальное дизайнерское пространство;

                            </p>
                        </div>
                        <div class='w_50'>
                            <div class='icon_check'>
                                <img src='/frontend/images_4/icon_check_blue.png'>
                            </div>
                            <p>
                                Если вам важно правильное сочетание оттенков и хочется уйти от перенасыщенности декоративными элементами (частая ошибка новичков дизайна);

                            </p>
                        </div>
                        <div class='w_50'>
                            <div class='icon_check'>
                                <img src='/frontend/images_4/icon_check_blue.png'>
                            </div>
                            <p>
                                Если вы хотите, чтобы квартира была не только местом отдыха, но и отражением вашего статуса;
                            </p>
                        </div>
                        <div class='w_50'>
                            <div class='icon_check'>
                                <img src='/frontend/images_4/icon_check_blue.png'>
                            </div>
                            <p>
                                Если вам сложно определиться среди богатства цветовых решений, рекомендуем воспользоваться профессиональной помощью.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='information_section information_section--bg-one'>
        <div class='wrapper_new-n'>
            <h2 class='title_section_g'>
                Опытный дизайнер интерьеров <br>  от «Прораб НЕВА»
            </h2>
            <div class='information__section--overflow information__section--overflow--block_num'>
                <div class='flex_block_n flex_block_n-wrap'>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-star'>
                            <img src='/frontend/images_4/Star_white.png'>
                        </div>
                        <p>Подберет оптимальную цветовую гамму в соответствии с вашими стилевыми предпочтениями и особенностями освещения комнат.</p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-star'>
                            <img src='/frontend/images_4/Star_white.png'>
                        </div>
                        <p>Поможет определиться с текстурой отделочных материалов в зависимости от назначения комнат и выбранного стиля.</p>
						</div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-star'>
                            <img src='/frontend/images_4/Star_white.png'>
                        </div>
                        <p>Определит основные функциональные зоны, чтобы использовать жилую площадь с максимальной пользой.</p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-star'>
                            <img src='/frontend/images_4/Star_white.png'>
                        </div>
                        <p>Наметит места расположения светильников и выключателей, предложит идеи многоуровневого освещения, сложных световых переходов – все, что вы хотели бы выразить при помощи света.</p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-star'>
                            <img src='/frontend/images_4/Star_white.png'>
                        </div>
                        <p>
                            Проработает текстильное оформление квартиры, поможет выбрать цвета и текстуру мебели при помощи средств визуализации.
                        </p>
                    </div>
                    <div class='information__section--block information__section--block-big'>
                        <div class='information__section--block-star'>
                            <img src='/frontend/images_4/Star_white.png'>
                        </div>
                        <p>Составит подробный план расположения основных элементов интерьера, а также точек размещения аксессуаров.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='our__team__info--int'>
        <div class='wrapper_new-n'>
            <div class='our__team__info--title'>
                <span>Но даже это не главное.</span>
               Главное заключается в том, что в новом дизайне квартиры специалист профессионально создаст для вас уникальное уютное пространство «под ключ», в котором вам будет комфортно.
            </div>
            <div class='flex_block_n'>
                <div class='left__text'>
                    <p>Решая, стоит ли воспользоваться услугами дизайнера интерьеров, подумайте о том, что ремонт – это серьезное мероприятие, которое требует немалых усилий и финансовых вложений.</p>
                    <p>Грамотный подход даст положительный результат, который будет радовать долгие годы, тогда как ошибка обойдется дорого и в денежном, и в моральном выражении. К тому же опытный специалист поможет справиться с творческими сомнениями.</p>
                </div>
                <div class='right__img'>
                    <div class='img__block_one'>
                        <img src='/frontend/images_4/Rectangle 81.png'>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='colored_info_section top-minus colored_info_section--int'>
        <div class='wrapper_new-n_big'>
            <div class='colored_info_section--block colored_info_section--block-bg-blue'>
                <div class='wrapper_new-n'>
                    <div class='flex_block_n'>
                        <div>
                            <div class='title_section--g-big title_section--g-big-white'>
                                Получите бесплатную консультацию дизайнера!
                            </div>
                        </div>
                        <div>
                            <p>
                                Консультация с дизайнером интерьера!
                                <br>
                                Звоните
                                сейчас
                                <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                                    {{$selectRegion->phone}}
                                </a>
                            </p>
                            <a class='btn_style_n btn_style_n-orange call_open_popup_button--new' href='#'>Оставить
                                заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='technical_design'>
        <div class='wrapper_new-n'>
            <div class='flex_block_n'>
                <div class='left_block'>
                    <h2 class='title_section_g'>
                        Сделаем технический дизайн-проект квартиры
                        <span class='text_blue'>в подарок!</span>
                    </h2>
                    <div class='info__block'>
                        <p>А теперь приятная новость для всех, кто всерьез задумывается о создании красивого интерьера по выгодной цене. Компания «Прораб НЕВА» дарит разработку технического дизайн-проекта квартиры при заказе ремонта помещений «под ключ».</p>
                    </div>
                    <a class='btn_style_n btn_style_n-orange' href='/dizajn-proekt-v-podarok'>Узнать подробнее</a>
                </div>
                <div class='right_block'>
                    <div class='info__block'>
                        <div class='info__block--img'>
                            <img src='/frontend/images_4/Rectangle 76.png'>
                        </div>
                        <p><b>Проект включает в себя:</b>					</p>
						
                        <ul>
                            <li>- план квартиры;</li>
                            <li>- схему расположения мебели, основных функциональных зон;</li>
                            <li>- план размещения светильников и выключателей;</li>
							<li>- разводку розеток под электроприборы.</li>
                        </ul>
                    </div>
                    <div class='info__block'>
                        <div class='info__block--img'>
                            <img src='/frontend/images_4/Rectangle 77.png'>
                        </div>
                        <p>
                            Чтобы заказать технический дизайн квартиры, свяжитесь с нами по телефону или через форму обратной связи и оставьте заявку на ремонт квартиры «под ключ».

                        </p>
                    </div>
                    <div class='info__block'>
                        <div class='info__block--img'>
                            <img src='/frontend/images_4/Rectangle 78.png'>
                        </div>
                        <p>
                            Дизайнер компании «Прораб НЕВА» бесплатно подготовит технический дизайн-проект, а рабочие выполнят переделку в соответствии с намеченным планом. Стоимость ремонта «под ключ» подскажет наш консультант.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @widget('blog_block',['color_white' => true,'title_custom' => true,'region'=>$selectRegion])
    <div id='popup_services_table'>
        <div class='popup_block'>
            <div class='close'></div>
            <div class='popup__title'>Подберите пакет услуг</div>
            <div class='popup__tables'>
                <div class='popup__table--head'>
                    <div class='table__tr'>
                        <div class='table__td'></div>
                        <div class='table__td'>
                            <div class='table__tariff text_grey'>Стандарт</div>
                        </div>
                        <div class='table__td'>
                            <div class='table__tariff text_blue'>Комфорт</div>
                        </div>
                        <div class='table__td'>
                            <div class='table__tariff text_orange'>Экслюзив</div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'></div>
                        <div class='table__td'>
                            <div class='table__list--price'>
                                1000 p/м
                                <sup>2</sup>
                            </div>
                        </div>
                        <div class='table__td'>
                            <div class='table__list--price'>
                                1 400 p/м
                                <sup>2</sup>
                            </div>
                        </div>
                        <div class='table__td'>
                            <div class='table__list--price'>
                                2000 p/м
                                <sup>2</sup>
                            </div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>Сроки выполнения работ</div>
                        <div class='table__td'>от 30 дней</div>
                        <div class='table__td'>от 45 дней</div>
                        <div class='table__td'>от 60 дней</div>
                    </div>
                </div>
                <div class='popup__table--body scroll_content_int'>
                    <div class='table__tr'>
                        <div class='table__td'>Обмерный план существующих стен и перегородок</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План возводимых конструкций, стен и перегородок</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План демонтажа перегородок и инженерных коммуникаций</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План помещения после перепланировки с размерами и экспликация помещений
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План мебели и оборудования (с экспликацией помещений и расположением
                            мебели и
                            оборудования в масштабе)
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>Концептуальная подборка (цветовое художественное представление)</div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План расположения напольных покрытий</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План расположения теплых полов</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План потолков с указанием типа используемого материала</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План размещения осветительных приборов и групп их включения (с указанием
                            типов оборудования)
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План розеток и выключателей теплого пола</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План-схема отделочных материалов</div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План расположения проемов и дверей</div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>План расположения разверток и экспликация помещений</div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>Развертки санузлов с раскладкой плитки, с указанием размеров, площадей,
                            декоративных элементов и материалов
                        </div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>Развертка стен основных помещений (санузлы и кухня)</div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>Ведомость мебели и оборудования</div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>Ведомость отделочных материалов</div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                    <div class='table__tr'>
                        <div class='table__td'>3D визуализация всех помещений</div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td'></div>
                        </div>
                        <div class='table__td'>
                            <div class='active__td--check'></div>
                        </div>
                    </div>
                </div>
                <div class='popup__table--foot'>
                    <div class='table__tr'>
                        <div class='table__td'>Консультация, звоните <a class='tel roistat-phone'  href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                                    {{$selectRegion->phone}}
                                </a></div>
                        <div class='table__td'>
                            <a class='btn_table bg__grey call_open_popup_button--new' href='#'>Заказать</a>
                        </div>
                        <div class='table__td'>
                            <a class='btn_table bg__blue call_open_popup_button--new' href='#'>Заказать</a>
                        </div>
                        <div class='table__td'>
                            <a class='btn_table bg__orange call_open_popup_button--new' href='#'>Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='popup_call--new'>
        <div class='popup_block'>
            <div class='close'>
                <img src='/frontend/images_4/close_black.png'>
            </div>
            <div class='popup_block_scroll'>
                <div class='title_section_g'>
                    <div class='text_blue'>Оставьте заявку,</div>
                    мы вам перезвоним
                </div>
                <form  data-action="{{ route('callOrderPopup') }}">
                    <input class='input_type' placeholder='Ваше имя' required='' type='text' name="name">
                    <input class='input_type maska_phone' placeholder='+_ (___) ___-__-__' required='' type='text' name="phone">
                    <input class='btn_style_n btn_style_n-blue-hover btn_style_n-big active button_type' type='submit'
                           value='Отправить заявку' data-type="design">
                </form>
                <p>
                    Нажимая на кнопку "Отправить заявку",
                    <a class='open_text_popup_call' href='#'>я даю согласие на обработку своих персональных данных.</a>
                </p>
                <div class='all_text_scrolling'>
                    <div class='text_area_popup'>
                        <span>ПОЛИТИКА ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                        <p>
                            Дата размещения на Сайте «30» июня 2016 года
                            <br>
                            Настоящее Пользовательское соглашение является публичным документом администратора сайта prorabneva.ru
                            (далее – Администратор) и определяет порядок использования посетителями (далее - Посетитель) сайта
                            prorabneva.ru, принадлежащего Администратору, и обработки, хранения и иного использования информации,
                            получаемой Администратором от Посетителя на сайте Администратора. Администратор сайта может изменить в
                            любой момент данное Пользовательское соглашение без уведомления Посетителя сайта.
                        </p>
                        <span>ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</span>
                        <ul>
                            <li>a) Данные – иные данные о Пользователе (не входящие в понятие персональных данных).</li>
                            <li>
                                b) Законодательство – действующее законодательство Российской Федерации.
                                <br>
                                Оператор (Администратор сайта) – Прораб НЕВА, самостоятельно или совместно с другими лицами
                                организующее и (или) осуществляющее обработку персональных данных, а также определяющее цели
                                обработки персональных данных, состав персональных данных, подлежащих обработке, действия
                                (операции), совершаемые с персональными данными.
                            </li>
                            <li>
                                c) Персональные данные – любая информация, относящаяся к прямо или косвенно определённому или
                                определяемому физическому лицу (Пользователю).
                                <br>
                                Пользователь (Посетитель) сайта – лицо, имеющее доступ к Сайту посредством сети Интернет и
                                использующее сайт.
                            </li>
                            <li>d) Предоставление персональных данных – действия, направленные на раскрытие Персональных данных
                                определённому лицу или определённому кругу лиц.
                            </li>
                            <li>e) Сайт – сайт, расположенный в сети Интернет, где пользователь оставляет персональные данные.
                            </li>
                            <li>f) Субъект персональных данных – Пользователь (физическое лицо), к которому относятся Персональные
                                данные.
                            </li>
                        </ul>
                        <ol>
                            <li>
                                <span>ОБЩИЕ ПОЛОЖЕНИЯ</span>
                                <ul>
                                    <li>1.1. Настоящая Политика в отношении обработки персональных данных разработана в соответствии
                                        с положениями Федерального закона от 27.07.2006 №152-ФЗ «О персональных данных» (с
                                        изменениями и дополнениями), другими законодательными и нормативными правовыми актами и
                                        определяет порядок работы с Персональными данными Пользователей и (или) передаваемых
                                        Пользователями и требования к обеспечению их безопасности.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                                <ul>
                                    <li>2.1. Обработка Персональных данных Администратором сайта допускается при наличии согласия
                                        Пользователя на обработку его Персональных данных. Посетитель сайта, оставляя какую-либо
                                        информацию, относящуюся прямо или косвенно к определенному или определяемому физическому лицу
                                        (далее - Персональные данные), подтверждает, что ознакомился с данным Пользовательским
                                        соглашением и согласен с ним.
                                    </li>
                                    <li>2.2. Администратор сайта не раскрывает третьим лицам и не распространяет Персональные данные
                                        без согласия Пользователя, если иное не предусмотрено Законодательством.
                                    </li>
                                    <li>2.3. Посетитель сайта понимает и соглашается с тем, что предоставление Администратору
                                        какой-либо информации, не имеющей никакого отношения к целям сайта, запрещено. Такой
                                        информацией может являться информация, касающаяся состояния здоровья, интимной жизни,
                                        национальности, религии, политических, философских и иных убеждений Посетителя, а равно и
                                        информация, которая является коммерческой, банковской и иной тайной Посетителя сайта.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>СБОР И ОБРАБОТКА ПЕРСОНАЛЬНЫХ ДАННЫХ И ИНЫХ ДАННЫХ</span>
                                <ul>
                                    <li>3.1. В отношении всех сообщаемых Персональных данных Посетитель дает Администратору полное
                                        согласие на их обработку. При этом сбор Персональных данных может осуществляться как
                                        посредством Сайта, так и в офисе Администратора сайта.
                                    </li>
                                    <li>3.2. Оператор обрабатывает Персональные данные в следующих целях:</li>
                                    <li>4.2.1. осуществления деятельности, предусмотренной̆ действующим законодательством РФ</li>
                                    <li>3.2.2. выполнения обязательств Оператора перед Пользователем по оказанию услуг;</li>
                                    <li>3.2.3. для связи с Пользователями в случае необходимости, в том числе для направления
                                        уведомлений, информации и запросов, связанных с оказанием услуг, а также обработки
                                        заявлений, запросов и заявок Пользователей;
                                    </li>
                                    <li>3.2.4. для улучшение качества услуг, оказываемых Оператором;</li>
                                    <li>4.2.5. для продвижения услуг на рынке путем осуществления прямых контактов с
                                        Пользователями;
                                    </li>
                                    <li>3.2.6. для проведения статистических и иных исследований на основе обезличенных
                                        персональных данных.
                                    </li>
                                    <li>3.3. Посетитель в соответствии с ч. 1 ст. 18 Федерального закона «О рекламе» дает
                                        Администратору свое согласие на получение сообщений рекламного характера по указанным
                                        контактным данным.
                                    </li>
                                    <li>3.4. Посетитель самостоятельно несёт ответственность за нарушение законодательства при
                                        использовании сайта Администратора.
                                    </li>
                                    <li>3.5. Администратор не несет никакой ответственности в случае нарушения законодательства
                                        Посетителем, в том числе, не гарантирует, что содержимое сайта соответствует целям Посетителя
                                        сайта.
                                    </li>
                                    <li>3.6. Посетитель сайта несет самостоятельно ответственность в случае, если были нарушены
                                        права и законные интересы третьих лиц, при использовании сайта Администратора, Посетителем.
                                    </li>
                                    <li>3.7. Администратор вправе запретить использование сайта Посетителю, если на то есть законные
                                        основания.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>ПРАВА СУБЪЕКТОВ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                                <ul>
                                    <li>4.1. Пользователь имеет право на получение информации, касающейся обработки его Персональных
                                        данных/Данных. Пользователь вправе требовать от Оператора уточнения его Персональных данных,
                                        их блокирования или уничтожения в случае, если Персональные данные являются неполными,
                                        устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной
                                        цели обработки, а также принимать предусмотренные законом меры по защите своих прав.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='popup_call_thank_you'>
        <div class='all_popup'>
            <div class='close'>
                <img src='{{ asset('frontend/images/close_icon.png') }}' alt='Прораб Нева'>
            </div>
            <div class='popup_block'>
                <div class='title_popup'>Спасибо</div>
                <div class='text'>Благодарим Вас за обращение в нашу компанию! В ближайшее время мы с Вами свяжемся.</div>
                <div class='img'>
                    <img src='{{ asset('frontend/images/popup_img_1.png') }}' alt='Прораб Нева'>
                </div>
            </div>
        </div>
    </div>
    <!-- / -------------------- -->
    <section class='back_to_top'></section>

@endsection
