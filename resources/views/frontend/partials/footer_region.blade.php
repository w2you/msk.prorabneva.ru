<footer class="region_footer">
  <div class='wrapper_new'>
    <div class='clearfix'>
      <div class='footer_left_block' itemscope itemtype="http://schema.org/Organization">

        <div class='footer_menu footer_desctop' >
          <div class='block'>
            <div class='footer_title_menu'>Услуги</div>
              <ul class='sub_menu_1'>
                @foreach($repairMainCategories as $category)
                  <li>
                    {{-- первый пункт в меню на главную--}}
                    @if($category->slug == 'flat-repair')
                      <a href='/'>
                        {{ $category->title }}
                      </a>
                    @else
                      <a href='{{ route('getRepairMainCategory', ['sub_slug' => $category->slug]) }}'>
                        {{ $category->title }}
                      </a>
                    @endif
                  </li>
                @endforeach
                @foreach($categoryRepair as $category)
                  <li>
                    <a href='{{ route('getRepairCategory', ['slug'=>$category->parentCategory->slug,'sub_slug' => $category->slug]) }}'>
                      {{ $category->title }}
                    </a>
                  </li>
                @endforeach
                @foreach ($serviceCategories as $key => $value)
                  <li>
                    <a href='{{ route('getRepairMainCategory', $value->slug) }}'>{{ $value->title }}</a>
                  </li>
                @endforeach
              </ul>
          </div>
          <div class='block'>
            <div class='footer_title_menu'>Компания</div>
            <ul>
              <li>
                <a href='{{ route('about') }}'>О нас</a>
              </li>
              <li>
                <a href='{{ route('priceList') }}'> Прайс-лист</a>
              </li>
              <li>
                <a href='{{ route('portfolio') }}'>Наши работы</a>
              </li>
              <li>
                <a href='{{ route('salePromotions') }}'>Акции и скидки</a>
              </li>

              <li>
                <a href='{{ route('review') }}'>Отзывы</a>
              </li>
              <li>
                <a href='{{ route('contact') }}'>Контакты</a>
              </li>
            </ul>
          </div>
          <div class='block'>
            <div class='footer_title_menu'>
			<a class="tel roistat-phone" href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">		{{$selectRegion->phone}}
			</a>
			</div>
            {!! $selectRegion->footer !!}
          </div>
        </div>


          <div class='footer_menu footer_mobile'>

              <div class='block'>
                  <div class='footer_title_menu'>{{ $selectRegion->phone }}</div>
                  {!! $selectRegion->footer !!}
              </div>
              <div class='block'>
                  <div class='footer_title_menu'>Услуги</div>
                  <ul class='sub_menu_1'>
                      @foreach($repairMainCategories as $category)
                          <li>
                              {{-- первый пункт в меню на главную--}}
                              @if($category->slug == 'flat-repair')
                                  <a href='/'>
                                      {{ $category->title }}
                                  </a>
                              @else
                                  <a href='{{ route('getRepairMainCategory', ['sub_slug' => $category->slug]) }}'>
                                      {{ $category->title }}
                                  </a>
                              @endif
                          </li>
                      @endforeach
                      @foreach($categoryRepair as $category)
                          <li>
                              <a href='{{ route('getRepairCategory', ['slug'=>$category->parentCategory->slug,'sub_slug' => $category->slug]) }}'>
                                  {{ $category->title }}
                              </a>
                          </li>
                      @endforeach
                      @foreach ($serviceCategories as $key => $value)
                          <li>
                              <a href='{{ route('getRepairMainCategory', $value->slug) }}'>{{ $value->title }}</a>
                          </li>
                      @endforeach
                  </ul>
              </div>
              <div class='block'>
                  <div class='footer_title_menu'>Компания</div>
                  <ul>
                      <li>
                          <a href='{{ route('about') }}'>О нас</a>
                      </li>
                      <li>
                          <a href='{{ route('priceList') }}'> Прайс-лист</a>
                      </li>
                      <li>
                          <a href='{{ route('portfolio') }}'>Наши работы</a>
                      </li>
                      <li>
                          <a href='{{ route('salePromotions') }}'>Акции и скидки</a>
                      </li>

                      <li>
                          <a href='{{ route('review') }}'>Отзывы</a>
                      </li>
                      <li>
                          <a href='{{ route('contact') }}'>Контакты</a>
                      </li>
                  </ul>
              </div>
          </div>


      </div>
      <div class='footer_right_block'>
        <div class='title_form_block'>Заказать замер</div>
        <form>

          <!--<input class='phone_maska phone_number' id="footer_phone" placeholder='Телефон ' required='' type='text'>-->
          {{--<div class='fix_num'>--}}
          {{--<span>+7</span>--}}
          {{--<input class='phone_number' id="footer_phone"  placeholder='(___) ___-__-__' required='' type='text' >--}}
          {{--<input class='phone_number maska_phone' placeholder='+_ (___) ___-__-__' required='' type='text'>--}}
          <input class='phone_number maska_phone' placeholder='+_ (___) ___-__-__' required='' type='text' name="phone" id="footer_phone">
          {{--</div>--}}
          {{--<div class='check'>
            <input checked id='check_footer' type='checkbox'>
            <label for='check_footer'>Я согласен с условиями обработки персональных данных</label>
          </div>--}}
          <input class='submit_call' type='button' data-url="{{route('emailFooter')}}" value='Оставить заявку '>
            <p class="info">Нажимая на кнопку «Оставить заявку», вы соглашаетесь на обработку <a class="open_popup_privacy" href="#">персональных данных</a></p>
        </form>
      </div>
    </div>
    <div class='footer_end_block clearfix'>
      <div class='end_text'>
        <p>
          Прораб НЕВЫ © 2000-{{date('Y')}} Все материалы сайта (включая дизайн) являются объектами авторского права.
          <a href='#' class="popup_read_more">Подробнее</a>
        </p>
        <p>
          Представленная на сайте информация не является публичной офертой.
          <a href='#' class="open_popup_privacy">Политика конфиденциальности</a>
        </p>
      </div>
      <div class='end_icons'>
      <!--   <img src='{{ asset('frontend/images/mastercard.png') }}'  alt='Прораб Нева'>
                <img src='{{ asset('frontend/images/visa.png') }}'  alt='Прораб Нева'>
                <img src='{{ asset('frontend/images/mir.png') }}'  alt='Прораб Нева'>-->
      </div>
    </div>
  </div>
  <div id='popup_footer_read_more'>
    <div class='all_popup'>
      <div class='close'>
        <img src='{{asset('frontend/images/close_icon.png')}}' alt='Прораб Нева'>
      </div>
      <div class='popup_block'>
        <div class='text'>Запрещается копирование (в том числе путем распространения на других сайтах и ресурсах в
          Интернете) или любое иное использование информации и объектов без предварительного согласия правообладателя.
          Нарушение авторских прав влечет гражданско-правовую, административную и/или уголовную ответственность.
        </div>
      </div>
    </div>
  </div>
  <div id='popup_footer'>
    <div class='all_popup'>
      <div class='close'>
        <img src='{{asset('frontend/images/close_icon.png')}}' alt='Прораб Нева'>
      </div>
      <div class='popup_block'>
        <div class='all_text_scrolling'>
          <div class='text_area_popup'>
            <span style="font-size: 14px;font-weight:bold;">ПОЛИТИКА ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
            <p>
              Дата размещения на Сайте «30» июня 2016 года
              <br>
              Настоящее Пользовательское соглашение является публичным документом администратора сайта prorabneva.ru
              (далее – Администратор) и определяет порядок использования посетителями (далее - Посетитель) сайта
              prorabneva.ru, принадлежащего Администратору, и обработки, хранения и иного использования информации,
              получаемой Администратором от Посетителя на сайте Администратора. Администратор сайта может изменить в
              любой момент данное Пользовательское соглашение без уведомления Посетителя сайта.
            </p>
            <span style="font-size: 14px;font-weight:bold;">ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</span>
            <ul>
              <li>a) Данные – иные данные о Пользователе (не входящие в понятие персональных данных).</li>
              <li>
                b) Законодательство – действующее законодательство Российской Федерации.
                <br>
                Оператор (Администратор сайта) – Прораб НЕВА, самостоятельно или совместно с другими лицами организующее
                и (или) осуществляющее обработку персональных данных, а также определяющее цели обработки персональных
                данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с
                персональными данными.
              </li>
              <li>
                c) Персональные данные – любая информация, относящаяся к прямо или косвенно определённому или
                определяемому физическому лицу (Пользователю).
                <br>
                Пользователь (Посетитель) сайта – лицо, имеющее доступ к Сайту посредством сети Интернет и использующее
                сайт.
              </li>
              <li>d) Предоставление персональных данных – действия, направленные на раскрытие Персональных данных
                определённому лицу или определённому кругу лиц.
              </li>
              <li>e) Сайт – сайт, расположенный в сети Интернет, где пользователь оставляет персональные данные.</li>
              <li>f) Субъект персональных данных – Пользователь (физическое лицо), к которому относятся Персональные
                данные.
              </li>
            </ul>
            <ol>
              <li>
                <span style="font-size: 14px;font-weight:bold;">ОБЩИЕ ПОЛОЖЕНИЯ</span>
                <ul>
                  <li>1.1. Настоящая Политика в отношении обработки персональных данных разработана в соответствии с
                    положениями Федерального закона от 27.07.2006 №152-ФЗ «О персональных данных» (с изменениями и
                    дополнениями), другими законодательными и нормативными правовыми актами и определяет порядок работы
                    с Персональными данными Пользователей и (или) передаваемых Пользователями и требования к обеспечению
                    их безопасности.
                  </li>
                </ul>
              </li>
              <li>
                <span style="font-size: 14px;font-weight:bold;">УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                <ul>
                  <li>2.1. Обработка Персональных данных Администратором сайта допускается при наличии согласия
                    Пользователя на обработку его Персональных данных. Посетитель сайта, оставляя какую-либо информацию,
                    относящуюся прямо или косвенно к определенному или определяемому физическому лицу (далее -
                    Персональные данные), подтверждает, что ознакомился с данным Пользовательским соглашением и согласен
                    с ним.
                  </li>
                  <li>2.2. Администратор сайта не раскрывает третьим лицам и не распространяет Персональные данные без
                    согласия Пользователя, если иное не предусмотрено Законодательством.
                  </li>
                  <li>2.3. Посетитель сайта понимает и соглашается с тем, что предоставление Администратору какой-либо
                    информации, не имеющей никакого отношения к целям сайта, запрещено. Такой информацией может являться
                    информация, касающаяся состояния здоровья, интимной жизни, национальности, религии, политических,
                    философских и иных убеждений Посетителя, а равно и информация, которая является коммерческой,
                    банковской и иной тайной Посетителя сайта.
                  </li>
                </ul>
              </li>
              <li>
                <span
                    style="font-size: 14px;font-weight:bold;">СБОР И ОБРАБОТКА ПЕРСОНАЛЬНЫХ ДАННЫХ И ИНЫХ ДАННЫХ</span>
                <ul>
                  <li>3.1. В отношении всех сообщаемых Персональных данных Посетитель дает Администратору полное
                    согласие на их обработку. При этом сбор Персональных данных может осуществляться как посредством
                    Сайта, так и в офисе Администратора сайта.
                  </li>
                  <li>3.2. Оператор обрабатывает Персональные данные в следующих целях:</li>
                  <li>4.2.1. осуществления деятельности, предусмотренной̆ действующим законодательством РФ</li>
                  <li>3.2.2. выполнения обязательств Оператора перед Пользователем по оказанию услуг;</li>
                  <li>3.2.3. для связи с Пользователями в случае необходимости, в том числе для направления
                    уведомлений, информации и запросов, связанных с оказанием услуг, а также обработки заявлений,
                    запросов и заявок Пользователей;
                  </li>
                  <li>3.2.4. для улучшение качества услуг, оказываемых Оператором;</li>
                  <li>4.2.5. для продвижения услуг на рынке путем осуществления прямых контактов с Пользователями;</li>
                  <li>3.2.6. для проведения статистических и иных исследований на основе обезличенных персональных
                    данных.
                  </li>
                  <li>3.3. Посетитель в соответствии с ч. 1 ст. 18 Федерального закона «О рекламе» дает Администратору
                    свое согласие на получение сообщений рекламного характера по указанным контактным данным.
                  </li>
                  <li>3.4. Посетитель самостоятельно несёт ответственность за нарушение законодательства при
                    использовании сайта Администратора.
                  </li>
                  <li>3.5. Администратор не несет никакой ответственности в случае нарушения законодательства
                    Посетителем, в том числе, не гарантирует, что содержимое сайта соответствует целям Посетителя сайта.
                  </li>
                  <li>3.6. Посетитель сайта несет самостоятельно ответственность в случае, если были нарушены права и
                    законные интересы третьих лиц, при использовании сайта Администратора, Посетителем.
                  </li>
                  <li>3.7. Администратор вправе запретить использование сайта Посетителю, если на то есть законные
                    основания.
                  </li>
                </ul>
              </li>
              <li>
                <span style="font-size: 14px;font-weight:bold;">ПРАВА СУБЪЕКТОВ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                <ul>
                  <li>4.1. Пользователь имеет право на получение информации, касающейся обработки его Персональных
                    данных/Данных. Пользователь вправе требовать от Оператора уточнения его Персональных данных, их
                    блокирования или уничтожения в случае, если Персональные данные являются неполными, устаревшими,
                    неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также
                    принимать предусмотренные законом меры по защите своих прав.
                  </li>
                </ul>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">!function () {
      var t = document.createElement("script");
      t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?162", t.onload = function () {
        VK.Retargeting.Init("VK-RTRG-407921-8zoI5"), VK.Retargeting.Hit();
      }, document.head.appendChild(t);
    }();</script>
  <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-407921-8zoI5" style="position:fixed; left:-999px;" alt=""/>
  </noscript>
</footer>
<!-- Vk10441 -->
