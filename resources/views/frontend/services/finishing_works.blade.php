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
          <a href='#'>Отделочные работы</a>
        </li>
      </ul>
    </div>
  </section>
  <section class='work_types'>
    <div class='wrapper_new'>
      <h1>Отделочные работы</h1>
      <div class='under_title_section'>Ремонт отдельных поверхностей жилых и коммерческих помещений</div>
      <div class='under_title_none'>Ремонт отдельных поверхностей жилых и коммерческих помещений</div>
      <div class='work_types_blocks'>
        <div class='block'>
          <div class='number_work_types'>1</div>
          <div class='text'>
            <div class='name_block'>Демонтажные работы</div>
            <p>Выполняем демонтаж перегородок, плитки, потолка, полов, сантехники, элементов системы
              электроснабжения и т.п.</p>
          </div>
        </div>
        <div class='block'>
          <div class='number_work_types'>2</div>
          <div class='text'>
            <div class='name_block'>Ремонтно-монтажные работы</div>
            <p>Выполняем установку сантехники и оборудования, устройство полов, монтаж перегородок, дверей,
              электроточек и т.д.</p>
          </div>
        </div>
        <div class='block'>
          <div class='number_work_types'>3</div>
          <div class='text'>
            <div class='name_block'>Ремонтно-отделочные работы</div>
            <p>Выполняем все виды внутренней отделки (черновая и финишная отделка стен, пола и потолка) в
              помещениях любого типа.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('frontend.blocks.repairs')

  {{-- @widget('repair', ['childCategory' => $categoryService])--}}

  {{--  <section class='your_portfolio your_portfolio_page_1'>
        <div class='wrapper_new'>
            <div class='title_section'>Примеры работ</div>
            <div class='under_title_section'>Посмотрите примеры выполненных нами ремонтов</div>
            <div class='your_portfolio_menu'>
                <ul>
                    <li class='active'>
                        <a href='#'>Все</a>
                    </li>
                    <li>
                        <a href='#'>Ремонт квартир</a>
                    </li>
                    <li>
                        <a href='#'>Ремонт комнат</a>
                    </li>
                    <li>
                        <a href='#'>Ремонт коммерческих помещений</a>
                    </li>
                </ul>
            </div>
            <div class='portfolio_img_blocks active'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/beby_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/bedrooms_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='portfolio_img_blocks'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_2_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_3_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_4_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_6_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='portfolio_img_blocks'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_2_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_3_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_4_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_7_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='portfolio_img_blocks'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_2_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_3_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_4_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_6_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='view_all'>
                <a href='#'>Смотреть портфолио целиком</a>
            </div>
        </div>
    </section>--}}
  <section class='kinds_works'>
    <div class='title_h2 title_section'>Виды отделочных работ</div>
    <div class='under_title_section'>Выполняем все виды отделочных и ремонтных работ – как в комплексе, так и по
      отдельности
    </div>
    <div class='wrapper_new'>
      <div class='kinds_works_all_links'>
        @foreach($categoryPriceList as $category)
          <div class='block'>
            <a href='{{ route('priceListCategory', $category->slug) }}'>{{ $category->title }}</a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class='need_repair'>
    <div class='wrapper_new clearfix'>
      <div class='title_block'>Нужна консультация по ремонту?
        <p>Оставьте заявку, и наши специалисты проконсультируют вас по всем вопросам.</p>
      </div>
      <div class='application'>
        <a href='#' class="call_open_popup_button" data-page="otdelochnyie-raboty">Заявка</a>
      </div>
    </div>
  </section>
  @include('frontend.blocks.whyWe')
  {{--<section class='why_we_page_1'>--}}
  {{--<div class='wrapper_new'>--}}
  {{--<div class='why_blocks'>--}}
  {{--<div class='block'>--}}
  {{--<div class='img'>--}}
  {{--<img src='{{ asset('frontend/images/why_icon_1.png') }}' alt="Услуги - Прораб Нева">--}}
  {{--</div>--}}
  {{--<div class='text'>--}}
  {{--<div class='name_block'>Честный подход</div>--}}
  {{--<p>Действуют твердые цены на работы, наш прайс-лист всегда в открытом доступе. Без наценок на--}}
  {{--материалы.</p>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--<div class='block'>--}}
  {{--<div class='img'>--}}
  {{--<img src='{{ asset('frontend/images/why_icon_2.png') }}' alt="Услуги - Прораб Нева">--}}
  {{--</div>--}}
  {{--<div class='text'>--}}
  {{--<div class='name_block'>24 месяца гарантии</div>--}}
  {{--<p>Работаем официально по договору. Гарантируем качество ремонтных и отделочных работ.</p>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--<div class='block'>--}}
  {{--<div class='img'>--}}
  {{--<img src='{{ asset('frontend/images/why_icon_3.png') }}' alt="Услуги - Прораб Нева">--}}
  {{--</div>--}}
  {{--<div class='text'>--}}
  {{--<div class='name_block'>Технический надзор</div>--}}
  {{--<p>Организована независимая оценка качества. Контролируем соблюдение строительных норм в--}}
  {{--процессе--}}
  {{--ремонта.</p>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</section>--}}

  @widget('partners',['class' => 'bg_grey'])
  @widget('faq', ['faq' => $categoryService->faq])

  {{--  <section class='questions'>
        <div class='wrapper_new clearfix'>
            <div class='questions_title_block'>
                <div class='icon'>
                    <img src='{{ asset('frontend/images/icon_quest.png') }}'  alt="Услуги - Прораб Нева">
                </div>
                <p>Ответы на вопросы по запросу «Отделочные работы»</p>
            </div>
            <div class='questions_block'>
                <ul>
                    <li>
                        <h3>1. Нужно ли самостоятельно вывозить мусор после ремонта?</h3>
                        <p>Для сравнения – французская компания CTN выпускает продукцию только до 2 м. в ширину.
                            Ощутимая
                            разница, не правда ли? Где потолок из КНР позволит обойтись без единого шва, французский
                            может
                            подарить сразу два.</p>
                    </li>
                    <li>
                        <h3>2. Нужно ли самостоятельно вывозить мусор после ремонта?</h3>
                        <p>Для сравнения – французская компания CTN выпускает продукцию только до 2 м. в ширину.
                            Ощутимая
                            разница, не правда ли?</p>
                    </li>
                    <li>
                        <h3>3. Как сэкономить на ремонте квартиры?</h3>
                        <p>Для сравнения – французская компания CTN выпускает продукцию только до 2 м. в ширину.
                            Ощутимая
                            разница, не правда ли? Для сравнения – французская компания CTN выпускает продукцию только
                            до 2
                            м. в ширину. Ощутимая разница, не правда ли?</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>--}}

  @widget('blog_block',['category' => 'sovety-uchenogo-proraba','region'=>$selectRegion])

  @include('frontend.repairs.partials.description', ['mainCategory' => $categoryService])
  <section class='back_to_top'></section>
  <div id='popup_portfolio_slider'>
    <div class='popup_block'>
      <div class='close'></div>
      <div class='all_slider clearfix'>
        <div class='slider_portfolio slider_portfolio_1 active_slid_popup'>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_1.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_2.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_4.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
        </div>
        <div class='slider_portfolio slider_portfolio_2'>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_1.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_2.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_4.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_5.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
        </div>
        <div class='slider_portfolio slider_portfolio_3'>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_1.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
          <div class='img_slid'>
            <img src='{{ asset('frontend/images/port_img_2.jpg') }}' alt="Услуги - Прораб Нева">
          </div>
        </div>
        <div class='slider_info_portfolio'>
          <div class='slider_popup_block'>
            <div class='foto_menu'>
              <ul>
                <li class='active'>
                  <a href='#'>Фото “После”</a>
                </li>
                <li>
                  <a href='#'>Фото “До”</a>
                </li>
                <li>
                  <a href='#'>3D тур</a>
                </li>
                <li class='passive'>
                  <a href='#'>Дизайн-проект</a>
                </li>
              </ul>
            </div>
            <div class='name_port_block'>
              Ремонт 1-комнатной квартиры
            </div>
            <div class='address'>
              <strong>Адрес:</strong>
              Измайловский пр., д. 15, корп. 1
            </div>
            <p>Была произведена черновая и чистовая отделка квартиры-студии под ключ. Была произведена
              черновая
              и чистовая отделка квартиры-студии под ключ. Была произведена черновая.</p>
            <div class='info_repairs'>
              <ul>
                <li>
                  <strong>Площадь</strong>
                  <p>
                    98 м
                    <span>2</span>
                  </p>
                </li>
                <li>
                  <strong>Бюджет</strong>
                  <p>381 030 руб.</p>
                </li>
                <li>
                  <strong>Сроки</strong>
                  <p>45 дней</p>
                </li>
              </ul>
            </div>
            <div class='want_repairs'>
              <a href='#'>Хочу такой же ремонт</a>
            </div>
            <div class='img_numbers'>
              <div class='number_1 active_number'></div>
              <div class='number_2'></div>
              <div class='number_3'></div>
            </div>
          </div>
          <div class='sliders_popup'>
            <div class='all_form_pop_block'>
              <div class='form_block'>
                <div class='title_form'>Заказать звонок</div>
                <p>Укажите Ваше имя и телефон, и наши менеджеры свяжутся с Вами и ответят на Ваши
                  вопросы</p>
                <form>
                  <input class='name_pop' placeholder='Имя ' required='' type='text'>
                  {{--<div class='fix_num'>--}}
                  {{--<span>+7</span>--}}
                  {{--<input class='input_type new_phone_maska' placeholder='(___) ___-__-__'--}}
                  {{--required='' type='text'>--}}
                  <input class='input_type maska_phone' placeholder='+_ (___) ___-__-__' required='' type='text'>
                  {{--</div>--}}
                  <div class='check'>
                    <input checked id='check_slid_popup' placeholder=' ' required=''
                           type='checkbox'>
                    <label for='check_slid_popup'>
                      Я согласен с условиями обработки
                      <a href='#'>персональных данных</a>
                    </label>
                  </div>
                  <input class='submit_pop' type='submit' value='Отправить '>
                </form>
              </div>
            </div>
            <div class='thanks_block'>
              <div class='form_block'>
                <div class='title_form'>Спасибо</div>
                <p>Благодарим Вас за обращение в нашу компанию! В ближайшее время мы с Вами
                  свяжемся.</p>
                <div class='img_thanks'>
                  <img src='{{ asset('frontend/images/img_thanks_pop.png') }}'
                       alt="Услуги - Прораб Нева">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('frontend.modals.call_order')

@endsection
