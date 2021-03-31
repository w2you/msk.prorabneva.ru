@php
    $repairs = $item->newRepairs;
@endphp
@if($repairs)
  <section class='your_portfolio your_portfolio_home_page your_portfolio_home_page_new'>
    <div class='wrapper_new'>
      <div class='title_section'>примеры работ</div>
      <div class='under_title_section'>Посмотрите примеры выполненных нами ремонтов квартир</div>
      <div class='your_portfolio_home_page_blocks'>
        @foreach($repairs as $i=>$repair)
          @if($i % 2 == 0)
            <div class='portfolio_block active'>
              <div class='left_img'>
                <div class='hover_img show_img_popup' data-id="{{ $repair->id }}"
                     data-url="{{ route('getRepair') }}"></div>
                <div class='show_img'>
                  <img src="{{ asset('storage/' . $repair->image) }}" title="{{$repair->name}}"
                       alt='Примеры ремонта - Прораб Нева'>
                </div>
              </div>
              <div class='right_info'>
                <div class='name_block'>
                  {{$repair->name}}
                </div>
                <div class='prices_block'>
                  <span>Бюджет</span>
                  <div class='price'>{{ number_format($repair->budget, 0, '', ' ')}} руб.</div>
                </div>
                <div class='info_list'>
                  <table>
                    <tr>
                      <td>Площадь</td>
                      <td>
                        {{$repair->area}} м
                        <sup>2</sup>
                      </td>
                    </tr>
                    <tr>
                      <td>Сроки</td>
                      <td>{{$repair->term}} дней</td>
                    </tr>
                  </table>
                </div>
                <div class='button_witch'>
                  <a class='show_img_popup' href='#' data-id="{{ $repair->id }}"
                     data-url="{{ route('getRepair') }}">Посмотреть</a>
                </div>
              </div>
            </div>
          @else
            <div class='portfolio_block portfolio_block_right active'>
              <div class='left_img'>
                <div class='hover_img show_img_popup' data-id="{{ $repair->id }}"
                     data-url="{{ route('getRepair') }}"></div>
                <div class='show_img'>
                  <img src="{{ asset('storage/' . $repair->image) }}" title="{{$repair->name}}"
                       alt='Примеры ремонта - Прораб Нева'>
                </div>
              </div>
              <div class='right_info'>
                <div class='name_block'>
                  {{$repair->name}}
                </div>
                <div class='prices_block'>
                  <span>Бюджет</span>
                  <div class='price'>{{ number_format($repair->budget, 0, '', ' ')}} руб.</div>
                </div>
                <div class='info_list'>
                  <table>
                    <tr>
                      <td>Площадь</td>
                      <td>
                        {{$repair->area}} м
                        <sup>2</sup>
                      </td>
                    </tr>
                    <tr>
                      <td>Сроки</td>
                      <td>{{$repair->term}} дней</td>
                    </tr>
                  </table>
                </div>
                <div class='button_witch'>
                  <a class='show_img_popup' href='#' data-id="{{ $repair->id }}"
                     data-url="{{ route('getRepair') }}">Посмотреть</a>
                </div>
              </div>
            </div>
          @endif
          
        @endforeach
      </div>
      <div class='show_all_link_a'>
        <a class='show_all' href='#'>Показать еще</a>
        <a class='link_a' href='/portfolio'>Перейти в Портфолио</a>
      </div>
    </div>
  </section>
@endif
