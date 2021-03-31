@php
  $repair = \App\Helpers\Helper::repairs($selectRegion);
@endphp
@if($repair)
  <section class='your_portfolio your_portfolio_home_page your_portfolio_home_page_new'>
    <div class='wrapper_new'>
      <div class='title_section'>примеры работ</div>
      <div class='under_title_section'>Посмотрите примеры выполненных нами ремонтов квартир</div>
      <div class='your_portfolio_home_page_blocks'>
        @if($repair->repairId1)
          <div class='portfolio_block active'>
            <div class='left_img'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId1->id }}"
                   data-url="{{ route('getRepair') }}"></div>
              <div class='show_img'>
                <img src="{{ asset('storage/' . $repair->repairId1->imagemain) }}" title="{{$repair->repairId1->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
            <div class='right_info'>
              <div class='name_block'>
                {{$repair->repairId1->name}}
              </div>
              <div class='prices_block'>
                <span>Бюджет</span>
                <div class='price'>{{ number_format($repair->repairId1->budget, 0, '', ' ')}} руб.</div>
              </div>
              <div class='info_list'>
                <table>
                  <tr>
                    <td>Площадь</td>
                    <td>
                      {{$repair->repairId1->area}} м
                      <sup>2</sup>
                    </td>
                  </tr>
                  <tr>
                    <td>Сроки</td>
                    <td>{{$repair->repairId1->term}} дней</td>
                  </tr>
                </table>
              </div>
              <div class='button_witch'>
                <a class='show_img_popup' href='#' data-id="{{ $repair->repairId1->id }}"
                   data-url="{{ route('getRepair') }}">Посмотреть</a>
              </div>
            </div>
          </div>
        @endif
        @if($repair->repairId2)
          <div class='portfolio_block portfolio_block_right active'>
            <div class='left_img'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId2->id }}"
                   data-url="{{ route('getRepair') }}"></div>
              <div class='show_img'>
                <img src="{{ asset('storage/' . $repair->repairId2->imagemain) }}" title="{{$repair->repairId2->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
            <div class='right_info'>
              <div class='name_block'>
                {{$repair->repairId2->name}}
              </div>
              <div class='prices_block'>
                <span>Бюджет</span>
                <div class='price'>{{ number_format($repair->repairId2->budget, 0, '', ' ')}} руб.</div>
              </div>
              <div class='info_list'>
                <table>
                  <tr>
                    <td>Площадь</td>
                    <td>
                      {{$repair->repairId2->area}} м
                      <sup>2</sup>
                    </td>
                  </tr>
                  <tr>
                    <td>Сроки</td>
                    <td>{{$repair->repairId2->term}} дней</td>
                  </tr>
                </table>
              </div>
              <div class='button_witch'>
                <a class='show_img_popup' href='#' data-id="{{ $repair->repairId2->id }}"
                   data-url="{{ route('getRepair') }}">Посмотреть</a>
              </div>
            </div>
          </div>
        @endif
        @if($repair->repairId3)
          <div class='portfolio_block active'>
            <div class='left_img'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId3->id }}"
                   data-url="{{ route('getRepair') }}"></div>
              <div class='show_img'>
                <img src="{{ asset('storage/' . $repair->repairId3->imagemain) }}" title="{{$repair->repairId3->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
            <div class='right_info'>
              <div class='name_block'>
                {{$repair->repairId3->name}}
              </div>
              <div class='prices_block'>
                <span>Бюджет</span>
                <div class='price'>{{ number_format($repair->repairId3->budget, 0, '', ' ')}} руб.</div>
              </div>
              <div class='info_list'>
                <table>
                  <tr>
                    <td>Площадь</td>
                    <td>
                      {{$repair->repairId3->area}} м
                      <sup>2</sup>
                    </td>
                  </tr>
                  <tr>
                    <td>Сроки</td>
                    <td>{{$repair->repairId3->term}} дней</td>
                  </tr>
                </table>
              </div>
              <div class='button_witch'>
                <a class='show_img_popup' href='#' data-id="{{ $repair->repairId3->id }}"
                   data-url="{{ route('getRepair') }}">Посмотреть</a>
              </div>
            </div>
          </div>
        @endif
        @if($repair->repairId4)
          <div class='portfolio_block portfolio_block_right'>
            <div class='left_img'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId4->id }}"
                   data-url="{{ route('getRepair') }}"></div>
              <div class='show_img'>
                <img src="{{ asset('storage/' . $repair->repairId4->imagemain) }}" title="{{$repair->repairId4->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
            <div class='right_info'>
              <div class='name_block'>
                {{$repair->repairId4->name}}
              </div>
              <div class='prices_block'>
                <span>Бюджет</span>
                <div class='price'>{{ number_format($repair->repairId4->budget, 0, '', ' ')}} руб.</div>
              </div>
              <div class='info_list'>
                <table>
                  <tr>
                    <td>Площадь</td>
                    <td>
                      {{$repair->repairId4->area}} м
                      <sup>2</sup>
                    </td>
                  </tr>
                  <tr>
                    <td>Сроки</td>
                    <td>{{$repair->repairId4->term}} дней</td>
                  </tr>
                </table>
              </div>
              <div class='button_witch'>
                <a class='show_img_popup' href='#' data-id="{{ $repair->repairId4->id }}"
                   data-url="{{ route('getRepair') }}">Посмотреть</a>
              </div>
            </div>
          </div>
        @endif
        @if($repair->repairId5)
          <div class='portfolio_block'>
            <div class='left_img'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId5->id }}"
                   data-url="{{ route('getRepair') }}"></div>
              <div class='show_img'>
                <img src="{{ asset('storage/' . $repair->repairId5->imagemain) }}" title="{{$repair->repairId5->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
            <div class='right_info'>
              <div class='name_block'>
                {{$repair->repairId5->name}}
              </div>
              <div class='prices_block'>
                <span>Бюджет</span>
                <div class='price'>{{ number_format($repair->repairId5->budget, 0, '', ' ')}} руб.</div>
              </div>
              <div class='info_list'>
                <table>
                  <tr>
                    <td>Площадь</td>
                    <td>
                      {{$repair->repairId5->area}} м
                      <sup>2</sup>
                    </td>
                  </tr>
                  <tr>
                    <td>Сроки</td>
                    <td>{{$repair->repairId5->term}} дней</td>
                  </tr>
                </table>
              </div>
              <div class='button_witch'>
                <a class='show_img_popup' href='#' data-id="{{ $repair->repairId5->id }}"
                   data-url="{{ route('getRepair') }}">Посмотреть</a>
              </div>
            </div>
          </div>
        @endif
        @if($repair->repairId6)
          <div class='portfolio_block portfolio_block_right'>
            <div class='left_img'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId6->id }}"
                   data-url="{{ route('getRepair') }}"></div>
              <div class='show_img'>
                <img src="{{ asset('storage/' . $repair->repairId6->imagemain) }}" title="{{$repair->repairId6->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
            <div class='right_info'>
              <div class='name_block'>
                {{$repair->repairId6->name}}
              </div>
              <div class='prices_block'>
                <span>Бюджет</span>
                <div class='price'>{{ number_format($repair->repairId6->budget, 0, '', ' ')}} руб.</div>
              </div>
              <div class='info_list'>
                <table>
                  <tr>
                    <td>Площадь</td>
                    <td>
                      {{$repair->repairId6->area}} м
                      <sup>2</sup>
                    </td>
                  </tr>
                  <tr>
                    <td>Сроки</td>
                    <td>{{$repair->repairId6->term}} дней</td>
                  </tr>
                </table>
              </div>
              <div class='button_witch'>
                <a class='show_img_popup' href='#' data-id="{{ $repair->repairId6->id }}"
                   data-url="{{ route('getRepair') }}">Посмотреть</a>
              </div>
            </div>
          </div>
        @endif
      </div>
      <div class='show_all_link_a'>
        <a class='show_all' href='#'>Показать еще</a>
        <a class='link_a' href='/portfolio'>Перейти в Портфолио</a>
      </div>
    </div>
  </section>
@endif
