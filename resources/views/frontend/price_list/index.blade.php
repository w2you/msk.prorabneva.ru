@extends('frontend.layouts.master')

@section('content')
  {{-- <section class='price_list'>
        <div class='wrapper_new'>
            <h1 class='title_section'>{{ $page->title }}</h1>
            <div class='under_title_section'>{{ strip_tags($page->top_description) }}</div>
            <div class='partition'>
                <ul>
                    @foreach($priceListCategories as $category)
                        <li>
                            <a href='#category_price_list_{{ $category->slug }}'>{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class='all_price_list'>
                    @foreach($priceListCategories as $key => $category)
                        <div class='price_list_block' id="category_price_list_{{ $category->slug }}">
                            <div class='title_block'>{{ $key + 1 }}. {{ $category->title }}</div>
                            <div class='blocks'>
                                @foreach($category->childCategories as $childCategory)
                                    <div class='block'>
                                        <div class='icon'>
                                            <img src='{{ asset('storage/' . $childCategory->image) }}'  alt='Прайс лист - Прораб Нева'>
                                        </div>
                                        <div class='name'>{{ $childCategory->title }}</div>
                                        <div class='info'>
                                            @php
                                            //echo "<pre>";
                                            //print_r($childCategory->priceList);
                                           // echo "</pre>";
                                            @endphp

                                            @if (floor(0.9202 * $childCategory->priceList->min('price'))==0)
                                            от {{ floor(0.9202 * 119) }} р./м
                                            @else
                                            от {{ floor(0.9202 * $childCategory->priceList->min('price')) }}  р./м
                                            @endif
                                            <span>2</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class='info_price'>
                                <div class='name_with_block'>
                                    <div class='title_block_inner'>{{ $key + 1 }}. {{ $category->title }}</div>
                                    <div class='search_form'>
                                        <form action='#'>
                                            <input class='input_type'
                                                   placeholder='Быстрый поиск по разделу'
                                                   type='text'>
                                            <span class='search_number'>15</span>
                                            <input class='send_button' type='button'>
                                        </form>
                                    </div>
                                </div>
                                <div class='all_table'>

                                    <table>
                                        @foreach($category->priceList as $index => $price)
                                            @if(!$price->image)
                                                <tr class='clearfix'>
                                                    <th class='denomination'>{{ $price->title }}</th>
                                                    <td class='price'>{{floor(0.9202 * $price->price )}} руб.</td>
                                                    <td class='square'>{{ $price->unit->value }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </table>
                                </div>

                                <div class='read_more'>
                                    <a href='#'>+ Показать больше</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
            </div>
            <div class='new_text_price'>
                <p>* Цены указаны для стен высотой до 3 метров.</p>
                <p>** Цены по дизайн-проекту рассчитываются индивидуально.</p>
                <p>*** Цены указаны по акции</p>
            </div>
        </div>
    </section> --}}
  @widget('banner_slide',['id'=> $page['banner_slide_id'],'slide_link' => $page['banner_slide_link']])

  {{--<section class='banner_top_section'>--}}
  {{--<div class='block_banner'>--}}
  {{--<div class='img_banner'>--}}
  {{--<img src='/frontend/images_3/banner_top_img_1.jpg'>--}}
  {{--</div>--}}
  {{--<div class='text_slid_wrapper'>--}}
  {{--<div class='text_banner'>--}}
  {{--<div class='title_block_banner'>--}}
  {{--74% клиентов выбирают--}}
  {{--<br>--}}
  {{--наши цены на ремонт--}}
  {{--</div>--}}
  {{--<p>--}}
  {{--Когда сравнивают нашу смету с ценами других ремонтных компаний.--}}
  {{--</p>--}}
  {{--<div class='read_more'>--}}
  {{--<a class='call_open_popup_button' href='#'>Заказать расчёт сметы</a>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</section>--}}
  <section class='navigation'>
    <div class='wrapper_new'>
      <ul class='clearfix'>
        <li>
          <a href='#'>
            <img src='/frontend/images/home_icon.png'>
          </a>
        </li>
        <li>
          <a href='#'>Прайс-лист</a>
        </li>
      </ul>
    </div>
  </section>
  <section class='price_list_new_page'>
    <div class='wrapper_new'>
      <h1 class='title_section'>ПРАЙС-ЛИСТ</h1>
      <div class='under_title_section'>Предлагаем выгодные цены на отделку квартир под ключ и частичный ремонт</div>
      <div class='partition'>
        <ul>
          <li>
            <a href='#category_price_list_steny'>
              <em>Ремонт Стен</em>
              <span>Стены</span>
            </a>
          </li>
          <li>
            <a href='#category_price_list_pol'>
              <em>Ремонт пола</em>
              <span>полы</span>
            </a>
          </li>
          <li>
            <a href='#category_price_list_potolok'>
              <em>Ремонт потолка</em>
              <span>потолки</span>
            </a>
          </li>
          <li>
            <a href='#category_price_list_santehnika'>
              <em>сантехнические работы</em>
              <span>сантехника</span>
            </a>
          </li>
          <li>
            <a href='#category_price_list_elektrika'>
              <em>электромонтажные работы</em>
              <span>электрика</span>
            </a>
          </li>
          <li>
            <a href='#category_price_list_interer'>
              <em>Дизайн интерьера</em>
              <span>Дизайн</span>
            </a>
          </li>
        </ul>
      </div>
      <div class='all_price_list'>
        <div class='price_list_block' id='category_price_list_steny'>
          <div class='name_with_block'>
            <div class='title_block'>
              1.
              <span>Прайс-лист на</span>
              Ремонт стен
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <thead>
                  <tr>
                    <th>Виды работ</th>
                    <th>
                      <table>
                        <thead>
                        <tr>
                          <th>Цены</th>
                          <th>Ед. измер.</th>
                        </tr>
                        </thead>
                      </table>
                    </th>
                  </tr>
                  </thead>
                </table>
                <div class='name_table'>1.1. Демонтажные работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Очистка стен от старых обоев (до 2-х слоёв)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price"> {!! \App\Helpers\Helper::getPrice(85) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Очистка стен от масляной краски, шпатлевки или олифы</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(230) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Очистка стен от штукатурки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(260) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж перегородки деревянной</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(280) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж перегородки (доска, дранка, штукатурка)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(790) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж старой кафельной плитки (без сохранения материала)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(155) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж стеновых панелей с обрешеткой (МДФ, пластик)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(130) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж ГКЛ обшивки </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(130) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж рейки со стен</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(130) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж шкафа</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(950) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж наличников</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                         <td>
                            <span class='komplect'>комплект</span>
                            <span class='k_t'>к-т</span>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж дверного блока</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(550) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж балконного блока</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1000) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж вент короба </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(450) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж антресоли</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(950) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Снос пазогребниевой перегородки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(330) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Снос легких перегородок</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(180) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Снос стен кирпичных</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(410) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Снос стен Жб (толщиной до 5 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(880) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Снос стен Жб (толщиной 5-10 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1260) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Снос стен Жб (толщиной 10-20 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1980) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.2. Предчистовые работы: обработка стен</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Устройство шумоизоляции (пеноплекс)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(210) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Визуальное выравнивание под правило (слой толщиной до 0,6 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(390) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Визуальное выравнивание под правило (слой толщиной до 2 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(430) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж штукатурных маяков</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(110) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Оштукатуривание под маяк</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(435) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж малярной сетки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(120) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Шпатлёвка (в 2 слоя)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(350) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Мелкозернистая шпатлёвка под покраску</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(350) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Ошкуривание</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(90) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Шлифовка стен под покраску</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(90) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка в 1 цикл</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(45) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка в 2 цикла</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(80) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка в 3 цикла</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(120) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка в 4 цикла</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(160) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка стен бетаконтактом</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(75) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Обработка стен антигрибком</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.3. Предчистовые работы: двери</div>
                <table>
                  <tbody>
				   <tr>
                    <td>Отделка откосов дверного проема (комплекс: штукатурка, шпатлёвка 2 слоя,
                      ошкуривание, грунтовка 3 слоя и покраска)
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2680) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  <tr>
                    <td>Отделка откосов дверного проема (комплекс: ГКЛ, шпатлёвка 2 слоя,
                      ошкуривание, грунтовка 2 слоя и покраска)
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2360) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  <tr>
                    <td>Заделка дверного проема ГКЛ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1940) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
					<td>Перенос дверного проема в ГКЛ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1940) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Перенос дверного проема</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1940) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                  <tr>
                    <td>Расширение дверного проема</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3700) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Уменьшение дверного проема</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(650) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Формирование проёма двери</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1150) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Формирование проёма двери в газобетоне (пенобетоне)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2260) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Выруб дверного проёма</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(8000) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.4. Предчистовые работы: окна и балкон</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Монтаж подоконника</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1000) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Формирование откоса окна</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2150) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2850) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов сендвич</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2360) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов окна (демонтаж, монтаж уголков)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1000) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов окна (комплекс: ГКЛ, шпатлёвка 2 слоя, ошкуривание, 
грунтовка 2 слоя и покраска) до 40 см
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2900) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов окна (комплекс: штукатурка, шпатлёвка 2 слоя, ошкуривание,
грунтовка 3 слоя и покраска) до 40 см
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3530) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>"Отделка откосов малярка (комплекс: шпатлёвка 2 слоя,  ошкуривание
грунтовка 2 слоя и покраска) до 40 см"
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2460) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов балконного блока (комплекс: ГКЛ, шпатлёвка 2 слоя,  ошкуривание, грунтовка 2 слоя и покраска) до 40см
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3310) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов балконного блока (комплекс: штукатурка, шпатлёвка 2 слоя, ошкуривание, грунтовка 3 слоя и покраска) до 40 см
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(5430) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.5. Предчистовые работы: монтаж перегородок</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Устройство ГКЛ перегородки в один слой</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(650) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж пазогребниевой перегородки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1230) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство перегородки (пенобетон, газобетон)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(980) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство пенала в перегородке</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3560) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.6. Предчистовые работы с ГКЛ</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Устройство арки ГКЛ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство ГКЛ на каркас в один слой</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(610) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство ГКЛ на каркас в два слоя</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(760) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  <tr>
                    <td>Демонтаж короба ГКЛ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(360) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство короба ГКЛ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2300) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  <tr>
                    <td>Устройство короба ГКЛ по инд.проекту</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(3900) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство короба под инсталляцию</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(4100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж закладной</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(360) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Укладка минваты</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(55) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство каркаса</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(310) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.7. Предчистовые работы: прочее</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Монтаж решетки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(520) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка откосов ниши радиатора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2130) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка ниши радиатора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3860) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Отделка ниши радиатора (грунтовка, покраска)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(930) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                  <tr>
                    <td>Устройство люка ревизии пластик</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(580) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство скрытого люка ревизии</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(1960) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  <td>Устройство короба ПВХ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2900) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.8. Чистовые работы: обои</div>

                <table>
                  <tbody>
                  <tr>
                    <td>Поклейка обоев под покраску</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(200) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев без подгонки рисунка (бумаж., винил., флизел.) до 1500 руб./рулон (ширина рулона 106 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(250) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев без подгонки рисунка (бумаж., винил., флизел.) 1500-3500 руб. (ширина рулона 106 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(430) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев без подгонки рисунка (бумаж., винил., флизел.) от 3500 руб. (ширина рулона 106 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(560) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев с подгонкой рисунка (бумаж., винил., флизел.) до 1500 руб. (ширина рулона 106 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(290) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев с подгонкой рисунка (бумаж., винил., флизел.) 1500-3500 руб. (ширина рулона 106 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(470) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев с подгонкой рисунка (бумаж., винил., флизел.) от 3500 руб. (ширина рулона 106 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(610) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка фотообоев (кроме бумажных) (ширина рулона 106 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(490) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев без подгонки рисунка (бумаж., винил., флизел.) до 1500 руб./рулон (ширина рулона 53 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(430) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев без подгонки рисунка (бумаж., винил., флизел.) 1500-3500 руб. (ширина рулона 53 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(730) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев без подгонки рисунка (бумаж., винил., флизел.) от 3500 руб. (ширина рулона 53 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1050) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев с подгонкой рисунка (бумаж., винил., флизел.) до 1500 руб. (ширина рулона 53 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(570) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев с подгонкой рисунка (бумаж., винил., флизел.) 1500-3500 руб. (ширина рулона 53 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(830) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка обоев с подгонкой рисунка (бумаж., винил., флизел.) от 3500 руб. (ширина рулона 53 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка фотообоев (кроме бумажных) (ширина рулона 53 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(700) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Нанесение жидких обоев</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(840) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка стеклообоев на стены</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(420) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка флизелинового холста на ГКЛ конструкции и короба под покраску на стены</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(180) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
				
                <div class='name_table'>1.9. Чистовые работы: покраска</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Покраска стен в/д краской в 2 слоя (по обоям, по шпатлёвке)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(210) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Покраска стен валиком (фактурная покраска)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(300) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж малярного уголка</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(110) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.10. Чистовые работы: плитка</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (30*40, 20*30,
                      30*30, 35*35)
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(980) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (35*15, 50*40, 50*20)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1350) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (20*20)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1400) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (10*10)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1550) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (30*90)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1650) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (30*60)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1320) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				 <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (60*60)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1650) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  {{--<tr>--}}
                  {{--<td>Облицовка стен кафельной плиткой одного рисунка (40*60)</td>--}}
                  {{--<td>--}}
                  {{--<table>--}}
                  {{--<tr>--}}
                  {{--<td class="new_price">{!! \App\Helpers\Helper::getPrice(1360) !!}</td>--}}
                  {{--<td>м2</td>--}}
                  {{--</tr>--}}
                  {{--</table>--}}
                  {{--</td>--}}
                  {{--</tr>--}}
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (120*60)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1850) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (80*160)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(4000) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка стен кафельной плиткой одного рисунка (80*13)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1800) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tr>
                  <tr>
                    <td>Укладка плитки по коробам в одной плоскости</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(690) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж кафельного бордюра</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(490) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <td>Устройство кафельного фартука</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1300) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  <tr>
                    <td>Затирка швов</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Подрезка кафеля для облицовки коробов</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(750) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>1.11. Чистовые работы: прочее</div>
                <table>
                  <tbody>
                    <td>Нанесение декоративной штукатурки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(1650) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Обшивка стен ПВХ панелью</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(450) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж ПВХ на клей</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(340) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                  <tr>
                    <td>Монтаж двери (без установки фурнитуры)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(2900) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж наличников</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(450) !!}</td>
                          <td>
                            <span class='komplect'>комплект</span>
                            <span class='k_t'>к-т</span>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class='price_list_block' id='category_price_list_pol'>
          <div class='name_with_block'>
            <div class='title_block'>
              2.
              <span>Прайс-лист на</span>
              Ремонт пола
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <thead>
                  <tr>
                    <th>Виды работ</th>
                    <th>
                      <table>
                        <thead>
                        <tr>
                          <th>Цены</th>
                          <th>Ед. измер.</th>
                        </tr>
                        </thead>
                      </table>
                    </th>
                  </tr>
                  </thead>
                </table>
                <div class='name_table'>2.1. Демонтажные работы</div>
                <table>
                  <tbody>
					<tr>
                    <td>Демонтаж плинтуса</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(30) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж линолеума, ковролина, ламината, плиток ПВХ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(125) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж оргалита</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж паркета штучный</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(160) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж лаг</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(220) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж черновых досок</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(130) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж старой стяжки до 50 мм</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(280) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж старой плитки (без сохранения материала)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(180) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Сбивка бетонного порога</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(510) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>2.2. Предчистовые работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Устройство лаг</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(230) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство черновых досок</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(240) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил ГВЛ</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(330) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил фанеры</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(170) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка (в 1 цикл)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(40) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Выставление маяков</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(80) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил пленки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(55) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Укладка армирующей сетки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Засыпка керамзитом</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(90) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Сухой пол Кнауфф</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(820) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство стяжки песчано-цементной смесью толщиной до 5 см</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(465) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство стяжки финишной</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(350) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Гидроизоляция пола</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(220) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>2.3. Чистовые работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Настил линолеума</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(220) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил ковролина</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(210) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил подложки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(40) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил ламината</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(280) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил ламината по диагонали</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(380) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Настил паркетной доски</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(400) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (30*40, 20*30, 30*30, 35*35)
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1050) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (35*15, 60*40, 50*40, 50*20)
                    </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1450) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (20*20)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1450) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (10*10)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1600) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (30*90)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1850) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (30*60)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1460) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (60*60)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1750) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (40*60)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1460) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (120*60)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1900) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (80*160)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(4100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка пола кафельной плиткой одного рисунка (80*13)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1900) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <td>Затирка швов</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж порога (кафель)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(890) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж порога (керамогранит )</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1100) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Облицовка порога кафельной плиткой</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1920) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж плинтуса деревянного</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(220) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж плинтуса пластикового</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(110) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class='price_list_block' id='category_price_list_potolok'>
          <div class='name_with_block'>
            <div class='title_block'>
              3.
              <span>Прайс-лист на</span>
              Ремонт потолка
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <thead>
                  <tr>
                    <th>Виды работ</th>
                    <th>
                      <table>
                        <thead>
                        <tr>
                          <th>Цены</th>
                          <th>Ед. измер.</th>
                        </tr>
                        </thead>
                      </table>
                    </th>
                  </tr>
                  </thead>
                </table>
                <div class='name_table'>3.1. Демонтажные работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Снятие старых обоев</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Размывка мела, водоэмульсионки, олифы, извести</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(180) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Очистка потолка от краски или шпатлёвки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(290) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж реечного потолка</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж подвесного потолка Армстронг</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж подвесных потолков</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж полистироловой (пенопластовой) плитки с потолка</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж потолков из ГКЛ (без сохранения материала)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(190) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>3.2. Предчистовые работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Монтаж закладной</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство теплоизоляции (пеноплекс)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(380) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство потолка ГКЛ в один слой в один уровень на каркас</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(900) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Визуальное выравнивание под правило (толщиной до 0,6 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(360) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Визуальное выравнивание под правило (толщиной до 2 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(480) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж штукатурных маяков на потолок</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(210) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Оштукатуривание потолка под маяк</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(650) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Штукатурка рустов на потолке</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(220) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж малярной сетки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(130) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж малярного уголка</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(70) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Шпатлёвка (в 2 слоя)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(380) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Мелкозернистая шпатлёвка под покраску</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(250) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Ошкуривание</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Шлифовка потолка под покраску</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(90) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка потолка (в 1 цикл)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(45) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка потолка (в 2 цикла)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(90) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка потолка (в 3 цикла)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(135) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Грунтовка потолка (в 4 цикла)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(180) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Обработка потолка антигрибком</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(110) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>3.3. Чистовые работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Покраска потолка (в 2 слоя)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(260) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка стеклообоев на потолок</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(330) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Поклейка потолочных обоев (при высоте потолков до 3 м)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(300) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  <tr>
                    <td>Поклейка на потолок полистироловой (пенопластовой) плитки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(260) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tr>
                  <tr>
                    <td>Устройство каркаса для реечного потолка</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(350) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство реечного потолка</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(850) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство каркаса</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(480) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Обшивка потолка ПВХ панелью</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(210) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство декоративных коробов по периметру помещений (прямолинейных)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(800) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство декоративных коробов по периметру помещений (прямолинейных) со световым карнизом </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(890) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  
				  <tr>
                    <td>Малярные работы по коробу (комплекс: шпатлёвка 2 слоя, шлифовка, поклейка флизелина, грунтовка 3 слоя и покраска) </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(720) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  
				  
				    <tr>
                    <td>Поклейка флизелинового холста на ГКЛ конструкции и короба под покраску</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(320) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
		
                  <tr>
                    <td>Монтаж карниза европласт</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(400) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Покраска карниза (грунт, шпатлевка, покраска)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(300) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж потолочного плинтуса</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Покраска потолочного плинтуса (грунт, шпатлевка, покраска)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(150) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <td>Монтаж потолка Армстронг (с каркасом)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(322) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж потолка Армстронг (с каркасом)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(610) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        <div class='price_list_block' id='category_price_list_mech'>
          <div class='name_with_block'>
            <div class='title_block'>
              4.
              <span>Прайс-лист на Сантехнические работы</span>
              <em>Сантехнические работы</em>
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <thead>
                  <tr>
                    <th>Виды работ</th>
                    <th>
                      <table>
                        <thead>
                        <tr>
                          <th>Цены</th>
                          <th>Ед. измер.</th>
                        </tr>
                        </thead>
                      </table>
                    </th>
                  </tr>
                  </thead>
                </table>
				
                <table>
				<div class='name_table'>4.1. Демонтажные работы</div>
                  <tbody>
                  <tr>
                    <td>Демонтаж труб</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1300) !!}</td>
                          <td>
						    <span class='komplect'>комплект</span>
                            <span class='k_t'>к-т</span>
						  </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж фильтра тон. и груб. очистки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(300) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж ванны</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(900) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж ванны (чугун)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <td>Демонтаж раковины</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(400) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж раковины с тумбой </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(450) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <td>Демонтаж унитаза</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(400) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж смесителя</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(400) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <td>Демонтаж радиатора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(450) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж счётчика учёта воды</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(210) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж коллектора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(260) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  </tbody>
                </table>
				
			 <table>
				<div class='name_table'>4.2. Инженерная разводка</div>
                  <tbody>
                  <tr>
                    <td>Разводка труб гор. водоснабжения</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1900) !!}</td>
                          <td>точка</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Разводка труб хол. водоснабжения</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1900) !!}</td>
                          <td>точка</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Разводка фановых труб</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3000) !!}</td>
                          <td>
						    <span class='komplect'>комплект</span>
                            <span class='k_t'>к-т</span>
						  </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Врезка в стояк ГВС, ХВС</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж стояка водоснабжения</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство штробы под сан тех трубы</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2800) !!}</td>
                          <td>
						    <span class='komplect'>комплект</span>
                            <span class='k_t'>к-т</span>
						  </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж сливного трапа </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
					 </tr>
					 </table>
				 <table>
				<div class='name_table'>4.3. Чистовые работы</div>
                  <tbody>
                  <tr>
                    <td>Монтаж ванной (стальной/акриловой)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
				  <tr>
                    <td>Монтаж ванной (чугун)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2800) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Монтаж душ кабины</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(5320) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Монтаж душевого поддона</td>
					<td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1710) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Изготовление душевого поддона</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(4300) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Облицовка душевого поддона кафельной плиткой</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3000) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td> Облицовка душевого поддона керамогранитом </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Облицовка душевого поддона мозайкой (с затиркой)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(4200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Устройство подиума для душ кабины (90*90 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td> Монтаж экрана ГКЛ с облицовкой кафелем </td>
					<td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(5600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Монтаж душевого экрана</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1730) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
                    <td>Монтаж душевой стойки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1630) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж душевых створок</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1780) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж душевой панели</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1680) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж унитаза</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1680) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж инсталляции</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3500) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж раковины</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1430) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж раковины с тумбой </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2400) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж смесителя</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(550) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж смесителя с душ лейкой</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(900) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж счётчика учёта воды</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(560) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж бойлера</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1500) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж подводки для гигиенического душа</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(4150) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж гигиенического душа на готовую подводку</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(620) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж фанового насоса</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(4100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж коллектора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2210) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж обратного клапана</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(560) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж крана отсечки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(560) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж крана запорного</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(560) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж фильтра тонкой очистки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(950) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж фильтра грубой очистки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(850) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж/подключение стиральной машины</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Демонтаж, монтаж полотенцесушителя</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2700) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж радиатора отопления</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2080) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж радиатора с байпасом</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3120) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Демонтаж, монтаж радиатора (снять, поставить)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1400) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Покраска радиатора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(890) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Шумоизоляция труб</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(80) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Покраска труб</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж зеркала </td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(890) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Сверление отверстия по кафелю</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
				<tr>
					<td>Монтаж мелкой сантехнической фурнитуры</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(250) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
				</tr>
                      </table>
                    </td>
                  </tr>
				  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>






        <div class='price_list_block' id='category_price_list_santehnika'>
          <div class='name_with_block'>
            <div class='title_block'>
              5.
              <span>Прайс-лист на</span>
              Электромонтажные работы
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <thead>
                  <tr>
                    <th>Виды работ</th>
                    <th>
                      <table>
                        <thead>
                        <tr>
                          <th>Цены</th>
                          <th>Ед. измер.</th>
                        </tr>
                        </thead>
                      </table>
                    </th>
                  </tr>
                  </thead>
                </table>
                <div class='name_table'>5.1. Демонтажные работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Демонтаж бра</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж точечного светильника</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(95) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж люстры</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(240) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж эл.точки (розетка,выключатель)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж электро-автомата</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(500) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>5.2. Инженерная разводка</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Устройство штробы (2*2 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(300) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство штробы (2*4 см)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(500) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство штробы (2*6 см и более)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(700) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Прокладка кабеля</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(70) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Заделка штробы</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Прокладка кабеля в гофре</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(100) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство гнезда подрозетника</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(400) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Перенос электро-счетчика</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <div class='name_table'>5.3. Чистовые работы</div>
                <table>
                  <tbody>
                  <tr>
                    <td>Монтаж розетки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж выключателя</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж сетевой розетки на эл.плиту</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(800) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж силовой розетки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(800) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж телефонной/ТВ-розетки/Интернет</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Подключение и установка вытяжного вентилятора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(800) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж бра</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж люстры  в сборке (до 3000 ₽)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(750) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж светодиодной ленты</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(200) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство точечного светильника</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(250) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж реостата тёплого пола</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Укладка нагревательного элемента тёплого пола (до 5 м2)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2500) !!}</td>
                          <td>
						    <span class='komplect'>комплект</span>
                            <span class='k_t'>к-т</span>
						  </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж электро-автомата</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(500) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж, монтаж электро-счетчика</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2600) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство гнезда под эл.щиток (в кирпичной стене)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(800) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Устройство гнезда под эл.щиток (в жб стене)</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(1200) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Демонтаж, монтаж эл.щитка</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(3500) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж распределительной коробки</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(500) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Подключение трансформатора</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(400) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Монтаж электрического полотенцесушителя</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1800) !!}</td>
                          <td>шт</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Прокладка малоточки Телефон</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(70) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Прокладка малоточки TV Internet</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(70) !!}</td>
                          <td>мп</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class='price_list_block' id='category_price_list_elektrika'>
          <div class='name_with_block'>
            <div class='title_block'>
              6.
              <span>Прайс-лист на</span>
			  Дизайн интерьера
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <thead>
                  <tr>
                    <th>Виды работ</th>
                    <th>
                      <table>
                        <thead>
                        <tr>
                          <th>Цены</th>
                          <th>Ед. измер.</th>
                        </tr>
                        </thead>
                      </table>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Разработка дизайн-проекта с планировками и чертежами</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1000) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Разработка дизайн-проекта с чертежами и коллажами интерьера</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(1400) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Разработка дизайн-проекта с чертежами, подбором стилистики и 3d-визуализацией</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(2000) !!}</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Консультация дизайнера с выездом</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">от {!! \App\Helpers\Helper::getPrice(3000) !!}</td>
                          <td>выезд</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Расчет сметы по дизайн-проекту</td>
                    <td>
                      <table>
                        <tr>
                          <td class="new_price">{!! \App\Helpers\Helper::getPrice(0) !!}</td>
                          <td>час</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class='price_list_block' id='category_price_list_interer'>
          <div class='name_with_block'>
            <div class='title_block'>
              7.
              <span>Прайс-лист на</span>
              Приемку в новостройке
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <thead>
                  <tr>
                    <th>Виды работ</th>
                    <th>
                      <table>
                        <thead>
                        <tr>
                          <th>Цены</th>
                          <th>Ед. измер.</th>
                        </tr>
                        </thead>
                      </table>
                    </th>
                  </tr>
                  </thead>
                </table>
                <table>
                  <tbody>
                  <tr>
                    <td>Комплексная приемка квартиры в новостройке с черновой отделкой</td>
                    <td>
                      <table>
                        <tr>
                          <td>30 руб.</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>Комплексная приемка квартиры в новостройке с предчистовой отделкой</td>
                    <td>
                      <table>
                        <tr>
                          <td>40 руб.</td>
                          <td>м2</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class='price_list_block'>
          <div class='name_with_block'>
            <div class='title_block'>
              8. Примечание
            </div>
            <div class='info_price'>
              <div class='all_table'>
                <table>
                  <tbody>
                  <tr>
                    <td>Цены указаны для стен высотой до 3 метров.</td>
                  </tr>
                  <tr>
                    <td>Цены указаны для стен высотой до 3 метров.		
Минимальная стоимость заказа в Москве - 50 000 руб. </td>
                  </tr>
                  <tr>
                    <td>В стоимость работ не включены расходные материалы.</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--<section class='object object_page_4'>
        <div class='wrapper_new'>
            <div class='object_title'>
                Так просто…
            </div>
            <p>
                Оставьте заявку, и мы сделаем расчет сметы вашего ремонта за сутки и абсолютно бесплатно. Рассчитаем все
                виды работ, объемы и стоимость, проконсультируем по технологиям и этапам ремонтных работ.
            </p>
            <a class='call_open_popup_button' href='#'>Заказать расчет сметы</a>
        </div>
    </section>--}}

  @include('frontend.blocks.trial')

  @widget('faq', ['faq' => $page->faq])

  @widget('blog_block',['category' => 'istoriya-odnogo-remonta', 'region'=>$selectRegion])

  @include('frontend.price_list.partials.maindescription',['page'=>$page,'has_padd_40' => true])
@endsection
