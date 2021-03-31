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
          <a href='#'>Отделка квартиры в новостройке под ключ</a>
        </li>
      </ul>
    </div>
  </section>
  <section class="new_repair_studio_finishing">
    <div class="wrapper_new">
      <h1>
        ОТДЕЛКА КВАРТИРЫ
        <br/>
        В НОВОСТРОЙКЕ ПОД КЛЮЧ
      </h1>
      <div class="text_under_title">
        Вы купили квартиру в новостройке? Хотите сэкономить ваше время и деньги и получить качественный и
        профессионально выполненный ремонт?
        Отделка квартир в новостройке в Санкт-Петербурге, с материалом и без. Фиксированная смета и четкие сроки.
        Воспользуйтесь готовыми решениями под ключ от Прораб НЕВА! Полное преображение вашей новой квартиры без отделки
        или с предчистовой отделкой, сделаем быстро, профессионально и по минимальной цене.
      </div>
      <div class="blocks">
        <div class="block">
          <div class="number">
            1
          </div>
          <div class="text_block">
            <div class="name_block">
              Фиксированная цена
            </div>
            <p>
              Стоимость ремонта фиксируется в
              <br/>
              договоре и не поменяется в ходе ремонта
            </p>
          </div>
        </div>
        <div class="block">
          <div class="number">
            2
          </div>
          <div class="text_block">
            <div class="name_block">
              Твердые сроки ремонта
            </div>
            <p>
              Все учтено еще на на старте, все технологии
              <br/>
              и процессы стандартизованы
            </p>
          </div>
        </div>
        <div class="block">
          <div class="number">
            3
          </div>
          <div class="text_block">
            <div class="name_block">
              Исходя из текущего уровня отделки
            </div>
            <p>
              Капитальный ремонт квартиры без
              <br/>
              отделки или от предчистовой отделки
            </p>
          </div>
        </div>
        <div class="block">
          <div class="number">
            4
          </div>
          <div class="text_block">
            <div class="name_block">
              С материалами или без материалов
            </div>
            <p>
              Вы сами выбираете – только работы
              <br/>
              под ключ или ремонт с готовым набором
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tree_free_points tree_free_points_building">
    <div class="wrapper_new">
      <div class="title_h2 title_section_new">
        ЦЕНЫ НА ОТДЕЛКУ
        <br/>
        В НОВОСТРОЙКЕ ПОД КЛЮЧ
      </div>
      <div class="under_title_section">
        В зависимости от исходного состояния квартиры и вашего участия в
        ключевых процессах
      </div>
      <div class="complace_block">
        <div>
          <div class="text">
            Полная отделка под ключ
            <br/>
            (от 0 до финиша)
            <br/>
            без материалов
          </div>
          <div class="price_about">от<strong>4 200</strong>руб./кв.м</div>
          <a class="more_button call_open_popup_button" href="#">Подробнее</a>
        </div>
        <div>
          <div class="text">
            От предчистовой отделки
            <br/>
            до финиша под ключ
            <br/>
            с материалами
          </div>
          <div class="price_about">от<strong>9 220</strong>руб./кв.м</div>
          <a class="more_button call_open_popup_button" href="#">Подробнее</a>
        </div>
        <div>
          <div class="text">
            Полная отделка под ключ
            <br/>
            (от 0 до финиша)
            <br/>
            с материалами
          </div>
          <div class="price_about">от<strong>9 990</strong>руб./кв.м</div>
          <a class="more_button call_open_popup_button" href="#">Подробнее</a>
        </div>
      </div>
    </div>
  </section>
  <section class="contur_block contur_block_building">
    <div class="wrapper_new">
      <div class="title_h2 title_section_new">
        ЧТО ВХОДИТ В ОТДЕЛКУ квартиры в новостройке
      </div>
      <div class="under_title_section">
        Посмотрите состав работ и дополнительных опций при заказе отделки под
        ключ в новостройке
      </div>
      <br/>
      <div class="show_container_contur">
        <img alt="Map contur" src="/frontend/images/img/map_contur_1.png"/>
        <div class="point_container">
          <div class="point_1_1 active">
            <div class="num">1</div>
          </div>
          <div class="point_1_2">
            <div class="num">2</div>
          </div>
          <div class="point_1_3">
            <div class="num">3</div>
          </div>
          <div class="point_1_4">
            <div class="num">4</div>
          </div>
          <div class="point_1_5">
            <div class="num">5</div>
          </div>
          <div class="point_1_6">
            <div class="num">6</div>
          </div>
          <div class="point_1_7">
            <div class="num">7</div>
          </div>
          <div class="point_1_8">
            <div class="num">8</div>
          </div>
          <div class="point_1_9">
            <div class="num">9</div>
          </div>
        </div>
      </div>
      <div class="list_poits_map">
        <div class="active">
          <div class="name_point">1. Стены</div>
          <div class="text">
            <p>1.1. Грунтовка (2 или 3 цикла)</p>
            <p>1.2. Оштукатуривание комбинированное</p>
            <p>1.3. Шпаклевка (2 слоя – при необходимости)</p>
            <p>1.4. Ошкуривание</p>
            <p>1.5. Отделка оконных откосов ПВХ + монтаж подоконника ПВХ</p>
            <p>1.6. Формирование дверных проемов</p>
            <p>1.7. Поклейка обоев под покраску (флизелиновые фактурные)*</p>
            <p>1.8. Покраска стен в/д DULUX (цвет на выбор заказчика)</p>
            <p>1.9. В санузле укладка кафеля (на выбор заказчика)**</p>
            <p>1.10. В санузле затирка швов</p>
            <p>1.11. В санузле устройство короба ГКЛ (скрывающего трубы)</p>
            <p>* Возможно нанесение декоративной штукатурки (лофт)</p>
            <p>** Возможна укладка кафеля в жилых помещениях</p>
          </div>
        </div>
        <div>
          <div class="name_point">2. Пол</div>
          <div class="text">
            <p>2.1. Финишное выравнивание пола (при необходимости)</p>
            <p>2.2. Настил подложки (вспененная 2мм)</p>
            <p>2.3. Настил ламината</p>
            <p>2.4. Монтаж плинтуса ПВХ (цвет: в тон ламината)</p>
            <p>2.5. В санузле укладка кафеля</p>
            <p>2.6. В санузле затирка швов (цвет: в тон кафеля)</p>
          </div>
        </div>
        <div>
          <div class="name_point">3. Потолок</div>
          <div class="text">
            <p>3.1. Монтаж натяжных потолков (ПВХ) во всех помещениях</p>
          </div>
        </div>
        <div>
          <div class="name_point">4. Электрика</div>
          <div class="text">
            <p>4.1. Монтаж светильников (в штатных местах)*</p>
            <p>4.2. Устройство гнезда подрозетника (в штатных местах)</p>
            <p>4.3. Монтаж розеток и выключателей (в штатных местах)*</p>
            <p>
              * Дополнительно возможен монтаж до 7-ми точечных светильников и
              до 7 розеток
            </p>
          </div>
        </div>
        <div>
          <div class="name_point">5. Сантехника</div>
          <div class="text">
            <p>5.1. Разводка труб горячего водоснабжения (3 точки)</p>
            <p>5.2. Разводка труб холодного водоснабжения (4 точки)</p>
            <p>5.2. Разводка фановых труб</p>
            <p>5.3. Монтаж ванной*</p>
            <p>5.4. Монтаж унитаза в сборе</p>
            <p>5.5. Монтаж раковины в сборе</p>
            <p>5.6. Монтаж смесителя (2 точки)</p>
            <p>5.7. Монтаж смесителя с душевой лейкой</p>
            <p>5.8. Монтаж полотенцесушителя (М-образный)</p>
            <p>* Возможен монтаж душевой кабины</p>
          </div>
        </div>
        <div>
          <div class="name_point">6. Черновые материалы</div>
          <div class="text">
            <p>* При заказе ремонта от 0 до финиша под ключ с материалами.</p>
          </div>
        </div>
        <div>
          <div class="name_point">7. Чистовые материалы</div>
          <div class="text">
            <p>* При заказе ремонта под ключ с материалами.</p>
            <p>7.1. Плитка напольная «Керамин»</p>
            <p>7.2. Плитка настенная «Керамин» / «Атем»</p>
            <p>7.3. Обои под покраску виниловые на флизелине «Elysium»</p>
            <p>7.4. Ламинат 32 класса «Castello Сlassic»</p>
            <p>7.5. Потолки ПВХ (на выбор: матовые / глянцевые)</p>
            <p>7.6. Унитаз компакт</p>
            <p>7.7. Ванна стальная / душевая кабина с ПВХ шторками в сборе</p>
            <p>7.8. Люстра потолочная</p>
            <p>7.9. Розетки, выключатели «Makel»</p>
          </div>
        </div>
        <div>
          <div class="name_point">8. Гарантия на ремонт</div>
          <div class="text">
            <p>
              Гарантия 2 года по договору на все выполняемые нашими
              специалистами ремонтно-отделочные работы.
            </p>
          </div>
        </div>
        <div>
          <div class="name_point">9. Дополнительно</div>
          <div class="text">
            <p>* При заказе ремонта под ключ с материалами.</p>
            <p>9.1. Расходные материалы</p>
            <p>9.2. Закупка всех материалов</p>
            <p>9.3. Доставка материалов (включая подъем на этаж)</p>
            <p>9.4. Вынос мусора</p>
            <p>9.5. Вывоз мусора</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @if(isset($categoryService->banner->image) && $categoryService->banner->image)
    @widget('banner', ['banner' => $categoryService->banner, 'class' => 'object_page_4'])
  @endif


  @if($selectRegion->is_default)
    <section class="slider_logos">
      <div class="wrapper_new">
        <div class="section_title_block">
          Мы работали с квартирами 95% застройщиков Санкт-Петербурга!
        </div>
        <div class="slider_logo_block">
          <div class="block">
            <img src="/frontend/images/img/slid_logo_1.png"/>
          </div>
          <div class="block">
            <img src="/frontend/images/img/slid_logo_2.png"/>
          </div>
          <div class="block">
            <img src="/frontend/images/img/slid_logo_3.png"/>
          </div>
          <div class="block">
            <img src="/frontend/images/img/slid_logo_4.png"/>
          </div>
          <div class="block">
            <img src="/frontend/images/img/slid_logo_5.png"/>
          </div>
        </div>
      </div>
    </section>
  @endif

  <section class="photo_building">
    <div class="wrapper_new">
      <div class="title_section">ФОТО ОТДЕЛКИ В НОВОСТРОЙКЕ</div>
      <div class="under_title_section">
        Обратите внимание на качество выполненных работ при отделке
        новостройки под ключ
      </div>
      <div class="all_photo_blocks">
        <div class="this_photo">
          <div class="active">
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_1.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_1.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_2.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_2.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_3.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_3.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_4.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_4.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_5.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_5.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_6.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_6.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_7.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_7.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_8.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_8.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_9.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_9.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_10.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_10.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_11.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_11.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_12.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_12.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_121.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_121.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_122.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_122.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_123.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_123.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_124.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_124.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_125.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_125.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_126.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_126.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_127.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_127.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_128.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_128.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_129.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_129.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_130.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_130.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_131.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_131.jpg"/>
            </a>
          </div>
          <div>
            <a
                class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img"
                data-title=""
                href="/frontend/images/img/fin_sim_img_2_132.jpg"
            >
              <div class="img_hover"></div>
              <img src="/frontend/images/img/fin_sim_img_2_132.jpg"/>
            </a>
          </div>
        </div>
        <div class="all_photos">
          <div class="active">
            <img src="/frontend/images/img/fin_sim_img_2_1.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_2.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_3.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_4.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_5.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_6.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_7.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_8.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_9.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_10.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_11.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_12.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_121.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_122.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_123.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_124.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_125.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_126.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_127.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_128.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_129.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_130.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_131.jpg"/>
          </div>
          <div>
            <img src="/frontend/images/img/fin_sim_img_2_132.jpg"/>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="repair_without">
    <div class="wrapper_new">
      <div class="title_block">
        Готовое комплексное решение – это ремонт в новостройке без хлопот и
        волнений о сроках, цене и качестве, потому что:
      </div>
      <div class="blocks">
        <div class="block">
          <a href="#">Четкая, легко управляемая схема ремонта</a>
          <p>
            Весь процесс стандартизирован и разделен на понятные и
            отработанные этапы.
          </p>
        </div>
        <div class="block">
          <a href="#">Фиксированная смета и сроки</a>
          <p>
            Цена известна заранее и не поменяется в ходе ремонта – как и сроки
            выполнения работ.
          </p>
        </div>
        <div class="block">
          <a href="#">Ремонт без вашего участия</a>
          <p>
            Вы выбираете тип отделки и материалы, остальные работы мы берем на
            себя.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="video_block bg_grey video_block_building">
    <div class="wrapper_new">
      <div class="title_h2 title_section_new">
        ВИДЕО ОБ ОТДЕЛКЕ
        <br/>
        новостройки ПОД КЛЮЧ
      </div>
      <div class="under_title_section">
        Посмотрите, в чем принципиальное отличие готовых решений под ключ от
        типового ремонта в новостройке
      </div>
      <div class="block_video">
        <iframe
            allow="autoplay; encrypted-media"
            allowfullscreen
            frameborder="0"
            height="545"
            src="https://www.youtube.com/embed/LD577Y9ghwc"
            width="970"
        ></iframe>
      </div>
    </div>
  </section>
  <section class="questions">
    <div class="wrapper_new clearfix">
      <div class="questions_title_block">
        <div class="icon">
          <img src="/frontend/images/img/icon_quest.png"/>
        </div>
        <p>
          Ответы на вопросы по запросу «Отделка квартиры под ключ в
          новостройке»
        </p>
      </div>
      <div class="questions_block">
        <ul>
          <li>
            <h3>1. Сколько стоит отделка квартиры в новостройке?</h3>
            <p>
              Стоимость отделки в новостройке определяется, конечно же, тем,
              какой вы получаете квартиру (от организации-застройщика), что за
              работы запланированы (разновидности и этапы), какого класса и
              вида материалы могут понадобиться и какова их стоимость, идет ли
              речь о ремонте с привлечением профессионального дизайнера или
              более-менее типовом решении. Кроме того, на совокупной цене
              сказываются допрасходы от сторонних фирм (что касается дверей,
              потолочного пространства, выноса и вывоза мусора, а также в
              части подвоза (и, не исключено, что и закупки) материалов). Если
              вы хотите знать стоимость ремонта под ключ, когда
              подразумевается суммирование всего перечня работ,
              соответствующих материалов и сопутствующих услуг и при этом
              минимизируется ваше участие во всех процессах, то наши пакетные
              предложения - идеальный вариант для вас.
            </p>
          </li>
          <li>
            <h3>2. С чего начинается отделка квартиры в новостройке?</h3>
            <p>
              Даже без учета того, в каком виде ваша полученная квартира (от
              организации-застройщика), стартовать рекомендуем, прежде всего,
              с осмотра – для того чтобы выявить проблемные места (по полу,
              потолкам, стенам и т.п.). Чтобы установить скрытые дефекты, вы
              можете прибегнуть к помощи специалиста-приемщика от Прораб НЕВА.
              Он, в том числе, поможет сделать замеры помещений и наметить
              фронт предстоящих работ. Далее наш специалист составит детальную
              смету, чтобы у вас возникло представление о цене отделочных
              работ на каждом участке.
            </p>
          </li>
          <li>
            <h3>3. Какие бывают виды отделки в новостройках?</h3>
            <p>
              Обыкновенно речь идет о трех разновидностях отделки:
              <br/>
              - Совсем без отделки (По сути, просто коробка с отчасти
              подведенными коммуникациями. Чтобы при таком варианте квартира
              стала пригодной для проживания, нужно организовать выполнение
              всех черновых и последующих чистовых работ.)
              <br/>
              - Черновая отделка (Когда проведены работы по подготовке к
              финишной отделке. Т.е. проложены коммуникации, произведена
              разводка электрики, завершена стяжка пола и осуществлена
              штукатурка стен.)
              <br/>
              - Чистовая отделка (Это квартира, готовая к заезду новоселов, с
              законченным ремонтом по каждому участку и поверхностям – по
              стенам, полу и потолочному пространству, здесь есть
              электророзетки и выключатели-переключатели, установлены
              сантех.приборы и дверные блоки).
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  @if(isset($categoryService->banner_bottom->image) && $categoryService->banner_bottom->image)
    @widget('banner', ['banner' => $categoryService->banner_bottom, 'class' => 'object_page_4'])
  @endif
  {{--
  <section class="object object_apartaments">
    <div class="wrapper_new">
      <div class="object_title">
        Нужна помощь в приемке квартиры
        <br/>
        у застройщика?
      </div>
      <p>
        Поможем выявить недоделки и найти скрытые технические нарушения,
        <br/>
        оформить смотровой лист и сформулировать претензии по выявленным
        <br/>
        дефектам. Комплексная приемка квартиры в новостройке – от 30 руб./кв.м
      </p>
      <a class="call_open_popup_button" href="#">Подробнее</a>
    </div>
  </section>

  --}}
  
    <section class="text_area_home">
    <div class="wrapper_new">
      <div class="text_area_new">
        {!! $categoryService['description'] !!}
      </div>
    </div>
  </section>
  @include('frontend.modals.call_order')

  <div id="test-tmp">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      // document.title = "Отделка квартиры в новостройке под ключ | Прораб Нева";
      // document.getElementsByTagName('meta')["description"].content = "Описание: Качественный и недорогой ремонт и отделка квартиры в новостройке.Регулярные акции и скидки для новоселов. Цены на отделку новостройки под ключ на сайте. Звоните!";
      $('.navigation li:nth-of-type(2) a').html('Отделка квартиры в новостройке под ключ');
      $('meta[name=keywords]').remove();
      $('head').append('<meta name="keywords" content="Отделка квартиры в новостройке, отделка новостройки под ключ">');
      $('#test-tmp').remove();
    </script>
  </div>
@endsection
