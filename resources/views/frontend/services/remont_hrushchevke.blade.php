@extends('frontend.layouts.master')

@section('content')
  <!-- /  home page 2020 -->
  <section class='top_banner'>
    <div class='wrapper_new-n'>
      <div class='flex_block_n'>
        <div class='banner_left'>
          <h1 class='banner_left_title'>
            Ремонт
            <div class='text_blue'>в хрущёвке</div>
          </h1>
          <p>Санкт-Петербург – город, в котором сохранилось немало домов старого образца. В частности, – домов с так
            называемыми «хрущевками». Как сделать ремонт в маленькой хрущевке правильно?</p>
          <a class='btn_style_n btn_style_n-orange call_open_popup_button--new' href='#'>Рассчитать цену</a>
        </div>
        <div class='banner_right'>
          <img src='/frontend/images_4/banner_img_1.png'>
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
  <section class='repair_info_blocks'>
    <div class='wrapper_new-n'>
      <h2 class='title_section_g'>
        Какие есть особенности
        <br>
        ремонта в хрущёвке?
      </h2>
      <div class='flex_block_n'>
        <div>
          <p>Основной особенностью ремонта такого жилья можно считать необходимость проведения множества работ,
            поскольку дома хрущёвского типа изначально не отличались высоким качеством. С течением времени
            коммуникации в таких постройках и вовсе приходят в негодность.</p>
        </div>
        <div>
          <p>Также к особенностям ремонтных работ необходимо отнести важность правильного зонирования и разграничения
            пространства. Особенности хрущёвок не всегда позволяют произвести полноценную перепланировку,
            необходимую, для того чтобы сделать квартиру более просторной и удобной. Но даже если это является
            возможным, нужно обеспечить максимальную эргономику и функциональное применение пространства. В данном
            случае без помощи профессионалов просто не обойтись.</p>
        </div>
      </div>
    </div>
  </section>
  <section class='information_section information_section--bg'>
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
            <p>Благодаря нашему многолетнему опыту работы со вторичным фондом мы знаем, как сделать ремонт в
              маленькой хрущёвке правильно</p>
          </div>
        </div>
      </div>
      <div class='information__section--overflow'>
        <div class='flex_block_n'>
          <div class='information__section--block information__section--block-sm'>
            <div class='information__section--block-icon block-icon--blue'>
              <img src='/frontend/images_4/check_icon_i.png'>
            </div>
            <div class='information__section--block-name'>
              Отделка
              <br>
              поверхностей
            </div>
            <p>Выровняем стены, сделаем стяжку или заменим лаги, отремонтируем потолки</p>
          </div>
          <div class='information__section--block information__section--block-sm'>
            <div class='information__section--block-icon block-icon--blue'>
              <img src='/frontend/images_4/check_icon_i.png'>
            </div>
            <div class='information__section--block-name'>
              Монтаж
              <br>
              электрики
            </div>
            <p>Заменим устаревшую алюминиевую электропроводку на современную медную</p>
          </div>
          <div class='information__section--block information__section--block-sm'>
            <div class='information__section--block-icon block-icon--blue'>
              <img src='/frontend/images_4/check_icon_i.png'>
            </div>
            <div class='information__section--block-name'>
              Замена труб
              <br>
              и стояков
            </div>
            <p>Выполним демонтаж старого оборудования и сборку новой системы коммуникаций</p>
          </div>
          <div class='information__section--block information__section--block-sm'>
            <div class='information__section--block-icon block-icon--blue'>
              <img src='/frontend/images_4/check_icon_i.png'>
            </div>
            <div class='information__section--block-name'>
              Демонтаж
              <br>
              и вывоз мусора
            </div>
            <p>
              Демонтируем все старое
              <br>
              и ненужное и избавим квартиру
              <br>
              от строительного мусора
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='made_repairs'>
    <div class='wrapper_new-n'>
      <div class='title_section--g-big'>
        Выполненные ремонты
        <div class='text_blue'>в хрущёвках</div>
      </div>
      <div class='made_repairs--blocks'>
        @foreach($categoryService->newRepairs as $key => $repair)
          <div class='made_repairs--block{{$key % 2 != 0 ? ' made_repairs--block-right' : ''}}{{$key < 3 ?' active' :''}}'>
            <div class='made_repairs--block-img'>
              <a>
                <div class='hover_img show_img_popup' data-id="{{ $repair->id }}"
                     data-url="{{ route('getRepair') }}"></div>
                <img src="{{ asset('storage/' . $repair->image) }}" title="{{$repair->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </a>
            </div>
            <div class='made_repairs--block-info'>
              <div class='made_repairs--block-info-name'>
                <a href='#'>
                  {{$repair['name']}}
                </a>
              </div>
              <div class='made_repairs--block-info-table'>
                <table>
                  <tbody>
                  <tr>
                    <td>
                      <span>Бюджет</span>
                    </td>
                    <td>{{ number_format($repair->budget, 0, '', ' ')}} руб.</td>
                  </tr>
                  <tr>
                    <td>
                      <span>Площадь</span>
                    </td>
                    <td>
                      {{$repair->area}} м
                      <sup>2</sup>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span>Сроки</span>
                    </td>
                    <td>{{$repair->term}} дней</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <a class='show_img_popup btn_style_n btn_style_n-blue btn_style_n-sm' href='#' data-id="{{ $repair->id }}"
                 data-url="{{ route('getRepair') }}">Посмотреть</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class='made_repairs_btn'>
        <a class='btn_style_n btn_style_n-big' href='#'>Показать ещё работы</a>
        <a class='btn_style_n portfolio_link_v' href='/portfolio' style="display: none">Перейти в портфолио</a>
      </div>
    </div>
  </section>
  <section class='calculate_n'>
    <div class='wrapper_new-n_big'>
      <div class='calculate_n--bg'>
        <form action='#' class='calc-form' id='calc-form' method='POST'>
          <div class='flex_block_n'>
            <div class='calculate_n--start'>
              <div class='title_section--g-big'>
                Калькулятор
                <div class='text_blue'>ремонта</div>
              </div>
              <div class='type_calculate'>
                <div class='block_calc--name'>Тип квартиры</div>
                <div class='block--calculate check_block--calculate'>
                  <div class='flex_block_n'>
                    <div class='check_calculete check_calculete--big'>
                      <input checked class='radio_inp' for='calc-form' id='novoctroyka' name='calc-type'
                             type='radio' value='novostroika'>
                      <label for='novoctroyka'>
                        Новостройка
                      </label>
                    </div>
                    <div class='check_calculete check_calculete--big'>
                      <input class='radio_inp' for='calc-form' id='vtorichnoe' name='calc-type' type='radio'
                             value='vtorichka'>
                      <label for='vtorichnoe'>
                        Вторичка
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class='type_calculate'>
                <div class='block_calc--name'>Площадь помещения</div>
                <div class='block_select_num calculate_plus_minus_one calc_num_area'>
                  <div class='minus'></div>
                  <input class='number_c number_c_area' data-max='200' data-min='15' for='calc-form' max='200'
                         min='15' name='square' step='1' type='number' value='45'>
                  <div class='plus'></div>
                  <div class='calc_ui_line'></div>
                </div>
              </div>
              <div class='type_calculate'>
                <div class='block--calculate'>
                  <div class='flex_block_n'>
                    <div class='calc_num_area'>
                      <div class='block_calc--name'>Комнаты</div>
                      <div class='block_select_num calculate_plus_minus_two_1'>
                        <div class='minus'></div>
                        <input class='number_c' for='calc-form' max='7' min='1' name='rooms' step='1'
                               type='number' value='1'>
                        <div class='plus'></div>
                      </div>
                    </div>
                    <div class='calc_num_area'>
                      <div class='block_calc--name'>Санузлы</div>
                      <div class='block_select_num calculate_plus_minus_two_2'>
                        <div class='minus'></div>
                        <input class='number_c' for='calc-form' max='3' min='1' name='toilets' step='1'
                               type='number' value='1'>
                        <div class='plus'></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='type_calculate'>
                <div class='block_calc--name'>Доп. работы</div>
                <div class='block--calculate check_block--calculate'>
                  <div class='flex_block_n'>
                    <div class='check_calculete' style='width:174px'>
                      <input for='calc-form' id='check_1' name='calc-service1' type='checkbox'>
                      <label for='check_1'>
                        Выровнять полы
                      </label>
                    </div>
                    <div class='check_calculete' style='width:188px'>
                      <input for='calc-form' id='check_2' name='calc-service2' type='checkbox'>
                      <label for='check_2'>
                        Выровнять стены
                      </label>
                    </div>
                    <div class='check_calculete' style='width:230px'>
                      <input for='calc-form' id='check_3' name='calc-service4' type='checkbox'>
                      <label for='check_3'>
                        Сантехнические работы
                      </label>
                    </div>
                    <div class='check_calculete' style='width:258px'>
                      <input for='calc-form' id='check_4' name='calc-service3' type='checkbox'>
                      <label for='check_4'>
                        Электромонтажные работы
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='calculate_n--end'>
              <div class='calculate_n--end--all'>
                <div class='block_calc--name'>Предварительный расчет</div>
                <div class='form_calc'>
                  <span id='hide'></span>
                  <input class='calc_count_input' disabled='disabled' id='calc_count_input' max='1500000' min='1'
                         name='calc-total' type='text' value='268 646'>
                  <span>руб.</span>
                </div>
                <p>
                  Сумма сметы является примерной. Для получения более точной информации оставьте заявку на замер и расчет сметы.
                </p>
                <a class='end_calc_link btn_style_n btn_style_n-orange call_open_popup_button--new'  href='#'>Получить точный расчет</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class='information_section'>
    <div class='wrapper_new-n'>
      <div class='section_top_two'>
        <div class='flex_block_n'>
          <div>
            <div class='title_section--g-big'>
              <div class='text_orange'>Гарантии качества</div>
              ремонта
            </div>
          </div>
          <div>
            <p>
              «Прораб НЕВА» — надёжный
              <br>
              исполнитель вашего ремонта
            </p>
          </div>
        </div>
      </div>
      <div class='information__section--overflow'>
        <div class='flex_block_n'>
          <div class='information__section--block information__section--block-big mob_bg_gray'>
            <div class='information__section--block-icon big-icon icon-blue'>
              <img src='/frontend/images_4/star_icon_i.png'>
            </div>
            <div class='information__section--block-name'>
              2 года гарантии
            </div>
            <p>Заключаем официальный договор, даём 24 месяца гарантии на все ремонтные и отделочные работы.
              Гарантийных случаев по обращениям клиентов менее 2%.</p>
          </div>
          <div class='information__section--block information__section--block-big mob_bg_gray'>
            <div class='information__section--block-icon big-icon icon-blue'>
              <img src='/frontend/images_4/comm_icon_i.png'>
            </div>
            <div class='information__section--block-name'>
              5 уровней контроля
            </div>
            <p>До 5 уровней во внутренней системе контроля качеством: начальник участка – прораб – технический
              директор – дизайнер – менеджер проекта.</p>
          </div>
          <div class='information__section--block information__section--block-big mob_bg_gray'>
            <div class='information__section--block-icon big-icon icon-blue'>
              <img src='/frontend/images_4/oval_check_icon_i.png'>
            </div>
            <div class='information__section--block-name'>
              Мы всегда на связи
            </div>
            <p>Мы используем коллективные чаты с менеджером и прорабом – для оперативного решения всех вопросов по
              ремонтным проектам.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='specialized_teams'>
    <div class='wrapper_new-n'>
      <div class='flex_block_n'>
        <div class='specialized_teams_left'>
          <div class='title_section_g'>
            Ремонт выполняют специализированные
            <br>
            бригады
          </div>
          <p>Комплексный ремонт и отделку квартир выполняют профессиональные бригады под руководством опытных
            прорабов. На разных участках работают мастера узкой специализации, имеющие необходимые допуски и
            соответствующий стаж.</p>
          <a class='btn_style_n btn_style_n-blue-hover btn_style_n-big call_open_popup_button--new' href='#'>Вызвать замерщика</a>
        </div>
        <div class='specialized_teams_right'>
          <div class='specialized_teams--images_block'>
            <div class='images_block--big'>
              <img src='/frontend/images_4/Rectangle8.png'>
            </div>
            <div class='flex_block_n'>
              <div class='images_block--sm'>
                <img src='/frontend/images_4/Rectangle6.png'>
              </div>
              <div class='images_block--av'>
                <img src='/frontend/images_4/Rectangle7.png'>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @widget('reviews',['color_white' => true])
  <section class='free_trial'>
    <div class='wrapper_new-n_big'>
      <div class='free_trial__bg'>
        <div class='left_block_trial__info'>
          <div class='title_section--g-big'>
            <span class='text_orange'>Замер, консультация</span>
            и расчет сметы за {{ env('PARRAM_TRIAL') }} ₽
          </div>
          <p>
            Оставьте заявку и получите точные обмеры помещения, профессиональную консультацию и самую выгодную цену
            <br>
            на ремонт.
          </p>
          <a class='btn_style_n btn_style_n-big btn_style_n-orange-hover call_open_popup_button--new' href='#'>Вызвать замерщика</a>
        </div>
        <div class='right_block_trial__img'>
          <img src='/frontend/images_4/free-trial 1.png'>
        </div>
      </div>
    </div>
  </section>
  <section class='information_section'>
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
              Без предоплаты
            </div>
            <p>
              Не берём авансов, оплата — по
              <br>
              подписанным Актам выполненных
              <br>
              и принятых работ
            </p>
          </div>
          <div class='information__section--block information__section--block-sm mob_bg_gray'>
            <div class='information__section--block-icon big-icon icon-orange'>
              <img src='/frontend/images_4/icon_i_2.png'>
            </div>
            <div class='information__section--block-name'>
              Прозрачная смета
            </div>
            <p>
              Ничего не скрываем
              <br>
              и не накручиваем, помогаем
              <br>
              анализировать сметы
            </p>
          </div>
          <div class='information__section--block information__section--block-sm mob_bg_gray'>
            <div class='information__section--block-icon big-icon icon-black'>
              <img src='/frontend/images_4/icon_i_3.png'>
            </div>
            <div class='information__section--block-name'>
              Твёрдые цены
            </div>
            <p>
              Цены фиксируются при
              <br>
              заключении договора, никаких
              <br>
              "сюрпризов" во время ремонта
            </p>
          </div>
          <div class='information__section--block information__section--block-sm mob_bg_gray'>
            <div class='information__section--block-icon big-icon'>
              <img src='/frontend/images_4/icon_i_4.png'>
            </div>
            <div class='information__section--block-name'>
              Рассрочка
            </div>
            <p>
              Возможно оформление
              <br>
              беспроцентной рассрочки сроком
              <br>
              до 1 года на сумму до 250 000 ₽.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class='decoration_arrows'>
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <section class='repair_info_blocks repair_info_blocks--big'>
    <div class='wrapper_new-n'>
      <div class='title_section_g'>
        Поможем с закупкой черновых
        <br>
        материалов
      </div>
      <div class='flex_block_n'>
        <div>
          <p>Поможем купить материалы у наших поставщиков на специальных условиях. Работаем с проверенными материалами
            и поставщиками, за счёт больших объёмов имеем индивидуальные условия по по ценам и условиям доставки.</p>
        </div>
        <div>
          <ul>
            <li>
              <div class='blue_bg_icon'>
                <img src='/frontend/images_4/list_icon.png'>
              </div>
              Низкие цены на материалы
            </li>
            <li>
              <div class='blue_bg_icon'>
                <img src='/frontend/images_4/star_icon_white.png'>
              </div>
              Гарантия качества всех товаров
            </li>
            <li>
              <div class='blue_bg_icon'>
                <img src='/frontend/images_4/delivery-truck_icon.png'>
              </div>
              Ускоренная доставка
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class='tur_3d_n'>
    <div class='wrapper_new-n'>
      <div class='title_section--g-big title_section--g-big-white'>3D-туры ремонтов</div>
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
  <section class='information_section'>
    <div class='wrapper_new-n'>
      <h2 class='title_section_g'>
        Основные этапы
        <br class='mob_br'>
        и отличия
        <br class='mob_br_none'>
        ремонта
        <br class='mob_br'>
        квартиры в хрущёвке
      </h2>
      <div class='under_title_section-n'>
        По нашему опыту, хрущёвки требуют полного комплекса
        <br>
        ремонтных работ. Капитальный ремонт в такой квартире
        <br>
        происходит в несколько стадий:
      </div>
      <div class='information__section--overflow information__section--overflow--block_num'>
        <div class='flex_block_n flex_block_n-wrap'>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>01</div>
            <div class='information__section--block-name'>
              Снятие старой отделки
              <br>
              и покрытий
            </div>
            <p>Демонтируем старый паркет и ПВХ-плитку, сбиваем осыпающуюся штукатурку, побелку и обои. От огромного
              объёма мусора лучше избавляться сразу.</p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>02</div>
            <div class='information__section--block-name'>
              Демонтаж элементов
              <br>
              коммуникаций
            </div>
            <p>Трубы в хрущёвках, если они не менялись, обычно забиты, и их нужно менять. Чугунную фанину в санузле,
              идущую через весь дом, лучше не трогать.</p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>03</div>
            <div class='information__section--block-name'>
              Демонтаж оконных
              <br>
              и дверных конструкций
            </div>
            <p>Старые окна со временем рассыхаются, требуется установить современные стеклопакеты и входную дверь с
              уплотнением и хорошей защитой от внешнего шума.</p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>04</div>
            <div class='information__section--block-name'>
              Перепланировка
              <br>
              квартиры
            </div>
            <p>С несущими стенами сделать ничего невозможно. Здесь повезло тем, у кого несущие балки на потолке —
              тогда есть шанс изменить планировку в квартире</p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>05</div>
            <div class='information__section--block-name'>
              Выравнивание поверхностей
              <br>
              стен и пола
            </div>
            <p>
              Все стены обычно кривые, под покраску и плитку обязательно выравнивать по маякам. Выравниваем уровень
              пола, меняем деревянные лаги или используем
              <br>
              цементно-песчаную стяжку.
            </p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>06</div>
            <div class='information__section--block-name'>
              Обустройство новых
              <br>
              коммуникаций
            </div>
            <p>
              Используем современные полипропиленовые и пластиковые трубы.
              <br>
              В комплексе со стояками меняем все радиаторы.
            </p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>07</div>
            <div class='information__section--block-name'>
              Замена
              <br>
              электропроводки
            </div>
            <p>Лучше менять полностью на медную и разводить заново. Менять локально не рекомендуем — медь и алюминий
              гальванически не совместимы, возможно возгорание.</p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>08</div>
            <div class='information__section--block-name'>
              Обустройство тепла
              <br>
              и звукоизоляции
            </div>
            <p>При высоте потолков в 2,50 м съедать дополнительные сантиметры устройством шумоизоляции не вполне
              целесообразно.</p>
          </div>
          <div class='information__section--block information__section--block-big'>
            <div class='information__section--block-number'>09</div>
            <div class='information__section--block-name'>
              Отделка
              <br>
              поверхностей
            </div>
            <p>Для потолка может быть достаточно простой побелки / штукатурки. Пол может быть любым — ламинат,
              плитка, линолеум и др. Для стен лучше подойдут обои и краска.</p>
          </div>
        </div>
      </div>
      <p>
        Очевидно, что ремонт квартиры в хрущевке потребует немалых затрат, как временных,
        <br>
        так и финансовых. Чтобы мероприятие не затянулось на несколько месяцев, а также –
        <br>
        во избежание аварийных ситуаций, рекомендуется обратиться за помощью к
        <br>
        квалифицированным специалистам. Какие они – цены на ремонт в хрущевке?
        <br>
        Читайте ниже!
      </p>
    </div>
  </section>
  <section class='colored_info_section bottom-minus'>
    <div class='wrapper_new-n_big'>
      <div class='colored_info_section--block colored_info_section--block-bg-orange'>
        <div class='wrapper_new-n'>
          <div class='flex_block_n'>
            <div>
              <div class='title_section--g-big title_section--g-big-white'>
                Дизайн-проект
                <br>
                вашей квартиры
                <br>
                в подарок!
              </div>
            </div>
            <div>
              <p>При заказе комплексного ремонта получите технический проект квартиры в подарок — индивидуально
                разработанный для вашего интерьера план расстановки мебели, размещения светильников, розеток и
                выключателей.</p>
              <a class='btn_style_n btn_style_n-orange' href='/dizajn-proekt-v-podarok'>Узнать подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='cost_repair'>
    <div class='wrapper_new-n'>
      <h2 class='title_section--g-big'>
        <span class='text_blue'>
        Сколько
        <br class='mob_br'>
        стоит
        </span>
        <br class='mob_br_none'>
        ремонт
        <br class='mob_br'>
        в хрущёвке?
      </h2>
      <div class='how_much_cost'>
        <div class='how_much_cost--block'>
          <div class='how_much_cost--block-top'>
            <div class='how_much_cost--block-number'>01</div>
            <div class='how_much_cost--block-name'>Старые блочные дома</div>
            <div class='how_much_cost--block-click'></div>
          </div>
          <div class='how_much_cost--block-content'>
            Старые блочные дома отличаются сложностью проведения работ ввиду неровности стен, возведенных из бетонных
            блоков, соединенных швами. С течением времени, связующий эти блоки раствор рассыхается. В конечном итоге,
            это приводит к возникновению значительных перепадов. Выравнивание таких стен требует большого количества
            времени и расхода материалов. Ремонт хрущевки под ключ в данном случае обойдется сравнительно дорого. К
            преимуществам построек блочного типа можно отнести возможность перепланировки, поскольку большинство
            внутренних стен не являются несущими.
          </div>
        </div>
        <div class='how_much_cost--block'>
          <div class='how_much_cost--block-top'>
            <div class='how_much_cost--block-number'>02</div>
            <div class='how_much_cost--block-name'>Панельные дома</div>
            <div class='how_much_cost--block-click'></div>
          </div>
          <div class='how_much_cost--block-content'>
            Отремонтировать малогабаритку, выполненную из такого материала, как панельные плиты, несколько легче, а
            потому – дешевле. Но стоит учесть, что возможность изменения планировки в данном случае исключена.
          </div>
        </div>
        <div class='how_much_cost--block'>
          <div class='how_much_cost--block-top'>
            <div class='how_much_cost--block-number'>03</div>
            <div class='how_much_cost--block-name'>Кирпичные дома</div>
            <div class='how_much_cost--block-click'></div>
          </div>
          <div class='how_much_cost--block-content'>
            Сравнительно небольшого бюджета потребует от обывателя ремонт в кирпичной квартире. Такие дома отличаются
            более высоким первоначальным качеством тепло- и звукоизоляции, что позволяет сэкономить на обустройстве
            таковых. Кроме того, выровнять стены и пол в данном случае гораздо легче. К преимуществам домов данного
            типа относятся широкие возможности перепланировки.
          </div>
        </div>
      </div>
      <div class='cost_repair--text_block'>
        <div class='flex_block_n'>
          <div>
            <p>
              Стоимость ремонта квартиры-хрущёвки может
              <br>
              существенно различаться в зависимости от того,
              <br>
              в каком состоянии она находится изначально.
              <br>
              Также значение имеет серия дома и год
              <br>
              строительства.
            </p>
          </div>
          <div>
            <p>Разумеется, можно выполнить бюджетный ремонт хрущёвки самому. Однако, как показывает практика, попытки
              сделать его самостоятельно в 99% случаев обходятся дороже, чем обращение к специалистам. Наша компания
              выполнит для вас:</p>
            <ul>
              <li>— недорогой ремонт хрущевки любого типа;</li>
              <li>— ремонт комнаты;</li>
              <li>— создание индивидуального дизайн-проекта;</li>
              <li>— а также – любых помещений и типов жилья по всей территории Санкт-Петербурга.</li>
            </ul>
          </div>
        </div>
        <div class='view_text_all'>
          <a href='#'>Читать далее</a>
        </div>
      </div>
      <div class='pricing_repairs'>
        <div class='title_section_g'>
          Расценки на ремонтные
          <br>
          работы в хрущёвке
        </div>
        <div class='pricing_repairs--blocks'>
          <div class='flex_block_n'>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Демонтаж лаг</div>
              <div class='pricing_repairs--block-price'>от 120 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Облицовка плиткой</div>
              <div class='pricing_repairs--block-price'>от 600 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Устройство ЦПС</div>
              <div class='pricing_repairs--block-price'>от 288 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Покраска потолка</div>
              <div class='pricing_repairs--block-price'>от 144 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Настил ламината</div>
              <div class='pricing_repairs--block-price'>от 160 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Устройство штробы</div>
              <div class='pricing_repairs--block-price'>от 240 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Обработка антигрибком</div>
              <div class='pricing_repairs--block-price'>от 63 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Прокладка кабеля</div>
              <div class='pricing_repairs--block-price'>от 56 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Выравнивание стен</div>
              <div class='pricing_repairs--block-price'>от 183 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Монтаж розетки</div>
              <div class='pricing_repairs--block-price'>от 120 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Поклейка обоев</div>
              <div class='pricing_repairs--block-price'>от 111 ₽/м2</div>
            </div>
            <div class='pricing_repairs--block'>
              <div class='pricing_repairs--block-name'>Демонтаж радиатора</div>
              <div class='pricing_repairs--block-price'>от 176 ₽/м2</div>
            </div>
          </div>
        </div>
      </div>
      <div class='cost_repair--text_block cost_repair--text_block__list'>
        <div class='flex_block_n'>
          <div>
            <p>
              Прайс с указанием стоимости основных типов работ можно увидеть на сайте. Итоговая стоимость работ
              подсчитывается в индивидуальном порядке сразу после осмотра квартиры.
            </p>
          </div>
          <div>
            <p>Выезд замерщика для составления сметы можно заказать прямо сейчас, абсолютно бесплатно. На все типы
              работ и услуг предоставляется официальная гарантия качества.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='colored_info_section top-minus'>
    <div class='wrapper_new-n_big'>
      <div class='colored_info_section--block colored_info_section--block-bg-blue'>
        <div class='wrapper_new-n'>
          <div class='flex_block_n'>
            <div>
              <div class='title_section--g-big title_section--g-big-white'>
                Рассчитаем смету
                <br>
                вашего ремонта
                <br>
                со скидкой
                <br class='mob_br'>
                до 20%
              </div>
            </div>
            <div>
              <p>
                Посчитаем стоимость ремонта!
                <br class='mob_br'>
                Звоните
                <br class='mob_br_none'>
                сейчас
                <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                  {{$selectRegion->phone}}
                </a>
                <br class='mob_br'>
                и получите скидку
                <br class='mob_br_none'>
                до 20% на все
                <br class='mob_br'>
                работы!
              </p>
              <a class='btn_style_n btn_style_n-orange call_open_popup_button--new' href='#'>Оставить заявку</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @widget('blog_block',['color_white' => true,'title_custom' => true,'region'=>$selectRegion])
  <div id='popup_portfolio_slider'>
    <div class='popup_block'>
      <div class='close'></div>
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
                 value='Отправить заявку' data-type="repairs">
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
@endsection
