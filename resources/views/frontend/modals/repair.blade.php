<div class='all_slider clearfix' style="height: 100%">
  <div class='slider_portfolio active_slid_popup'>
    @if(count($repair->imagesAfter) > 0)
      <div class='slider_portfolio_1'>
        @foreach($repair->imagesAfter as $image)
          <div class='img_slid'>
            <img src='{{ asset('storage/' . $image['image']) }}' alt='{{ $repair->name }}'>
          </div>
        @endforeach
      </div>
      <div class='slider_portfolio_images_list scroll_content'>
        @foreach($repair->imagesAfter as $key => $image)
          <div class='img_slid_list {{$key == 0?'active':''}}'>
            <img src='{{ asset('storage/' . $image['image']) }}'>
          </div>
        @endforeach
      </div>
    @endif
  </div>
  <div class='slider_portfolio'>
    @if(count($repair->imagesBefore))
      <div class='slider_portfolio_2'>
        @foreach($repair->imagesBefore as $image)
          <div class='img_slid'>
            <img src='{{ asset('storage/' . $image['image']) }}' alt='{{ $repair->name }}'>
          </div>
        @endforeach
      </div>
      <div class='slider_portfolio_images_list scroll_content'>
        @foreach($repair->imagesBefore as $key => $image)
          <div class='img_slid_list {{$key == 0?'active':''}}'>
            <img src='{{ asset('storage/' . $image['image']) }}'>
          </div>
        @endforeach
      </div>
    @endif
  </div>

  <div class='slider_portfolio'>
    @if(count($repair->tour3d) > 0)
      <div class='slider_portfolio_3'>
        @foreach($repair->tour3d as $tour)
          <div class='img_slid'>
            <iframe src="{{ $tour->link }}" frameborder="0" style="width: 100%; height: 100%;"></iframe>
          </div>
        @endforeach
      </div>
    @endif
  </div>
  <div class='slider_portfolio'>
    @if(count($repair->imageDesignProject) > 0)
      <div class='slider_portfolio_4'>
        @foreach($repair->imageDesignProject as $image)
          <div class='img_slid'>
            <img src='{{ asset('storage/' . $image['image']) }}' alt='{{ $repair->name }}'>
          </div>
        @endforeach
      </div>
      <div class='slider_portfolio_images_list scroll_content'>
        @foreach($repair->imageDesignProject as $key => $image)
          <div class='img_slid_list {{$key == 0?'active':''}}'>
            <img src='{{ asset('storage/' . $image['image']) }}'>
          </div>
        @endforeach
      </div>
    @endif
  </div>
  <div class='slider_portfolio'></div>
  <div class='slider_portfolio'>
    @if(count($repair->imageReviews) > 0)
      <div class="slider_portfolio_6">
        @foreach($repair->imageReviews as $image)
          <div class='img_slid'>
            <img src='{{ asset('storage/' . $image['image']) }}' alt='{{ $repair->name }}'>
          </div>
        @endforeach
      </div>
      <div class='slider_portfolio_images_list scroll_content'>
        @foreach($repair->imageReviews as $key => $image)
          <div class='img_slid_list {{$key == 0?'active':''}}'>
            <img src='{{ asset('storage/' . $image['image']) }}'>
          </div>
        @endforeach
      </div>
    @endif
  </div>

  <div class='slider_portfolio active_slid_popup' style="height: 100%">
    <img src="{{ asset('storage/' . $repair->image) }}" alt="{{ $repair->title }}"
         style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: inline-block">
  </div>

  <div class='slider_info_portfolio'>
    <div class='slider_popup_block'>
      <div class='foto_menu'>
        <ul>
          <li class=' @if(count($repair->imagesAfter) === 0){{ 'passive' }}@endif'>
            <a href='#'>Фото “После”</a>
          </li>
          <li class="@if(count($repair->imagesBefore) === 0){{ 'passive' }}@endif">
            <a href='#'>Фото
              “До”</a>
          </li>
            @if(\App\Helpers\Helper::getRegion()->is_default)
              <li class="@if(count($repair->tour3d) === 0){{ 'passive' }}@endif">
                <a href='#'>3D тур</a>
              </li>
              <li class='@if(count($repair->imageDesignProject) === 0){{ 'passive' }}@endif'>
                <a href='#'>Проект</a>
              </li>
              <li class="@if(empty($repair->blog_link)){{ 'passive' }}@endif">
                <a href='{{$repair->blog_link}}' class="link_page">В Блоге</a>
                <div class='popup_menu_hover'>
                  <span>Читать обзор ремонта в Блоге</span>
                </div>
              </li>
            @endif
          <li class='@if(count($repair->imageReviews) === 0){{ 'passive' }}@endif'>
            <a href='#'>Отзыв</a>
          </li>
        </ul>
      </div>
      <div class='name_port_block'>
        {!! $repair->name !!}
      </div>
      <div class='address'>
        <strong>Адрес:</strong>
        {{ $repair->address }}
      </div>
      <p>{{ $repair->description }}</p>
      <div class='info_repairs'>
        <ul>
          <li>
            <strong>Площадь</strong>
            <p>
              {{ $repair->area }} м
              <span>2</span>
            </p>
          </li>
          <li>
            <strong>Бюджет</strong>
            <p>{{ number_format($repair->budget, 0, '.', ' ') }} руб.</p>
          </li>
          <li>
            <strong>Сроки</strong>
            <p>{{ $repair->term }} дней</p>
          </li>
        </ul>
      </div>
      <div class='want_repairs'>
        <a href='#' data-button="portfolio">Заказать расчёт сметы</a>
      </div>
      <div class='img_numbers' style="display: none">
        <div class='number_1 active_number'></div>
        <div class='number_2'></div>
        <div class='number_3'></div>
        <div class='number_4'></div>
        <div class='number_5'></div>
        <div class='number_6'></div>
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
            {{--<div class='fix_num '>--}}
            {{--<span>+7</span>--}}
            {{--<input class='input_type new_phone_maska tel_pop ' name="phone" placeholder='(___) ___-__-__' required='' type='text' >--}}
            <input class='input_type maska_phone tel_pop' placeholder='+_ (___) ___-__-__' required='' type='text'
                   name="phone">
            {{--<input class='input_type new_phone_maska tel_pop ' name="phone" placeholder='(___) ___-__-__' required='' type='text' >--}}
            {{--</div>--}}

            <div class='check'>
              <input id='check_slid_popup' placeholder=' ' required=''
                     type='checkbox' checked>
              <label for='check_slid_popup'>
                Я согласен с условиями обработки
                <a href='#'>персональных данных</a>
              </label>
            </div>
            <input
                class='submit_pop'
                type='button'
                data-action="{{ route('callOrder') }}"
                data-id="{{ $repair->id }}"
                data-title="{{ $repair->name }}"
                value='Отправить '>
          </form>
        </div>
      </div>
      <div class='thanks_block'>
        <div class='form_block'>
          <div class='title_form'>Спасибо</div>
          <p>Благодарим Вас за обращение в нашу компанию! В ближайшее время мы с Вами
            свяжемся.</p>
          <div class='img_thanks'>
            <img src='{{ asset('frontend/images/img_thanks_pop.png') }}' alt='Прораб Нева'>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    /**delete18092020
  $('.maska_phone').mask('9 (999) 999-99-99');
  */
</script>
