<div class='wrapper_new'>
  <div class='logo_menu clearfix'>

    <div class='logo'>
      <a href='/'>
        <img src='{{ asset('frontend/images/logo.png') }}' alt='Прораб Нева'>
      </a>
    </div>
    <div class='menu'>
      <ul class='clearfix'>
        <li class='arrow'>
          <a href='#'>Виды ремонта</a>
          <ul class='sub_menu'>
            @foreach($repairMainCategories as $repairMainCategory)
              <li>
                <a href='@if($repairMainCategory->slug === \App\Models\CategoryMainRepair::FLAT_REPAIR)
                {{'/'}}@else{{ route('getRepairMainCategory', $repairMainCategory->slug) }}@endif'>{{ $repairMainCategory->title }}</a>
                @if($repairMainCategory->childCategories && count($repairMainCategory->childCategories)>0)
                  <ul class="sub_menu_1">
          
                    @foreach($repairMainCategory->childCategories as $category)
                      @if( $category->category_main_repair_id !=1 )
                        <li>
                          <a href='{{ route('getRepairCategory', ['slug'=>$repairMainCategory->slug,'sub_slug' => $category->slug]) }}'>
                            {{ !empty($category->menu_title) ? $category->menu_title : $category->title }}
                          </a>
                        </li>
                      @else
                        <li>
                          <a href='{{ route('getRepairMainCategory', ['sub_slug' => $category->slug]) }}'>
                            {{ !empty($category->menu_title) ? $category->menu_title : $category->title }}
                          </a>
                        </li>
                      @endif
                    @endforeach
                  </ul>
                @endif
              </li>
            @endforeach
          </ul>
        </li>
        <li>
          <a href='{{ route('portfolio') }}'>Портфолио</a>
        </li>
        <li>
          <a href='{{ route('priceList') }}'>Прайс</a>
        </li>
        <li class='arrow'>
          <a href='#'>Услуги</a>
          <ul class='sub_menu'>
          @php
            $arr=array();
           foreach ($serviceCategories as $key => $value){
           if($key==0){
              $arr[0] = $value;
           }
           elseif($key==3){
                 $arr[1] = $value;
           }elseif ($key==9){
               $arr[2] = $value;

           }elseif ($key==1){
               $arr[3] = $value;

           }elseif ($key==4){
               $arr[4] = $value;

           }elseif ($key==2){
               $arr[5] = $value;

           }elseif ($key == 5){
               $arr[6] = $value;

           }elseif ($key == 6){
               $arr[7] = $value;

           }elseif ($key == 7){
               $arr[8] = $value;

           }
           }
           ksort($arr);

          @endphp
          @foreach($arr as $category)
            <!--<li>
                                <a href='{{ route('getRepairMainCategory', $category->slug) }}'>{{ $category->title }}</a>                             
                            </li> -->
            @endforeach
            <li>
              <a href="/remont-v-hrushchevke" class="bn">Ремонт в хрущевке</a>
            </li>
            <li>
              <a href="/kapitalnyiy-remont" class="bn">Капитальный ремонт</a>
            </li>
            <li>
              <a href="/kosmeticheskiy-remont" class="bn">Косметический ремонт</a>
            </li>
            <li>
              <a href="/dizaynerskiy-remont" class="bn">Дизайнерский ремонт</a>
            </li>
            {{--<li>--}}
              {{--<a href="/remont-pod-kluch" class="bn">Ремонт под ключ</a>--}}
            {{--</li>--}}

            <li>
              <a href="/otdelochnyie-raboty">Отделочные работы</a>
              <ul class="sub_menu_1">
                <li>
                  <a href='{{ route('priceListCategory', 'steny') }}'>Ремонт стен</a>
                </li>
                <li>
                  <a href='{{ route('priceListCategory', 'pol') }}'>Ремонт пола</a>
                </li>
                <li>
                  <a href='{{ route('priceListCategory', 'potolok') }}'>Ремонт потолка</a>
                </li>
                <li>
                  <a href='{{ route('priceListCategory', 'santehnika') }}'>Сантехнические работы</a>
                </li>
                <li>
                  <a href='{{ route('priceListCategory', 'elektrika') }}'>Электромонтажные работы</a>
                </li>
              </ul>
            </li>


            {{--<li>--}}
              {{--<a href="/remont-kvartir-v-novostrojke" class="bn">Ремонт в новостройке</a>--}}
            {{--</li>--}}

            <li>
              <a href="/priemka-kvartir" class="bn">Приемка квартир</a>
            </li>
            {{--<li>--}}
              {{--<a href="/otdelka-kvartir" class="bn">Отделка квартир</a>--}}
            {{--</li>--}}
            <li>
              <a href="/dizajn-interera-kvartir" class="bn">Дизайн интерьера</a>
            </li>

          </ul>
        </li>
        <li>
          <a href='{{ route('contact') }}'>контакты</a>
        </li>
      </ul>
      <div class='call_block'>
        <a href='#' class="call_open_popup_button">Заказать звонок</a>
      </div>
      <div class='header_phone ya-phone'>
	   @if(isset($selectRegion) && $selectRegion)
        <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
        </a>
		@endif

      </div>
    </div>
  </div>

  <div class='logo_menu_mob'>
    <div class='logo_menu_icons'>
      <div class='logo'>
        <a href='/'>
          <img src='{{asset('frontend/images/logo_mob.png')}}' alt='Прораб Нева'>
        </a>
      </div>
      <div class='phone_gen_menu'>
        {{--<div class='header_phone ya-phone сс'>--}}
          {{--<a href="tel:+78124391614" onclick="yaCounter44756221.reachGoal('tel'); return true;"></a>--}}
        {{--</div>--}}
        @if(isset($selectRegion) && $selectRegion)
          <div class="header_city_block">
            <img class="locationicon" src="{{ asset('frontend/images/iconfinder_location_black.png') }}" title="Ваш город" alt="Ваш город">
            <a href="#" class="select_city_bloc_link">{{$selectRegion->title}}</a>
          </div>
        @endif

        <div class="ya-phone tel_number header_phone">
		@if(isset($selectRegion) && $selectRegion)
          <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;"></a>
		@endif
        </div>
        <div class='gen_menu_icons_base'>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
    <div class='show_menu clearfix'>
      <div class='close_menu_base active'></div>
      <div class='prev_menu'></div>
      <div class='all_menu'>
        <ul>
          <li class='arrow'>
          <!--<a href='{{ route('getRepairMainCategory', $repairMainCategory->title) }}'>Виды ремонта1</a>-->
            <a href='#'>Виды ремонта</a>
            <ul class='menu_one'>
              @foreach($repairMainCategories as $repairMainCategory)
                <li>

                  <a href='@if($repairMainCategory->slug === \App\Models\CategoryMainRepair::FLAT_REPAIR)
                  {{'/'}}@else{{ route('getRepairMainCategory', $repairMainCategory->slug) }}@endif'>{{ !empty($repairMainCategory->menu_title) ? $repairMainCategory->menu_title : $repairMainCategory->title }}</a>
                  <div class='menu_2'></div>
                  <ul>
                    @foreach($repairMainCategory->childCategories as $category)
                      @if( $category->category_main_repair_id !=1 )
                        <li>
                          <a href='{{ route('getRepairCategory', ['slug'=>$repairMainCategory->slug,'sub_slug' => $category->slug]) }}'>
                            {{ !empty($category->menu_title) ? $category->menu_title : $category->title }}
                          </a>
                        </li>
                      @else
                        <li>
                          <a href='{{ route('getRepairMainCategory', ['sub_slug' => $category->slug]) }}'>
                            {{ !empty($category->menu_title) ? $category->menu_title : $category->title }}
                          </a>
                        </li>
                      @endif
                    @endforeach
                  </ul>
                </li>
              @endforeach
            </ul>
            {{-- <ul class='menu_one'>
                 <li>
                     <a href='#'>Ремонт квартир</a>
                     <div class='menu_2'></div>
                     <ul>
                         <li>
                             <a href='#'>Квартира-студия</a>
                         </li>
                         <li>
                             <a href='#'>1-комнатная квартира</a>
                         </li>
                         <li>
                             <a href='#'>2-комнатная квартира</a>
                         </li>
                         <li>
                             <a href='#'>3-комнатная квартира</a>
                         </li>
                         <li>
                             <a href='#'>4-комнатная квартира</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href='#'>Ремонт комнат</a>
                     <div class='menu_2'></div>
                     <ul>
                         <li>
                             <a href='#'>Ванная и туалет</a>
                         </li>
                         <li>
                             <a href='#'>Кухня</a>
                         </li>
                         <li>
                             <a href='#'>Гостиная</a>
                         </li>
                         <li>
                             <a href='#'>Спальня</a>
                         </li>
                         <li>
                             <a href='#'>Детская</a>
                         </li>
                         <li>
                             <a href='#'>Прихожая</a>
                         </li>
                         <li>
                             <a href='#'>Коридор</a>
                         </li>
                         <li>
                             <a href='#'>Балкон / лоджия</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href='#'>Ремонт частных домов</a>
                     <div class='menu_2'></div>
                     <ul>
                         <li>
                             <a href='#'>Коттедж</a>
                         </li>
                         <li>
                             <a href='#'>Загородный дом</a>
                         </li>
                         <li>
                             <a href='#'>Таунхаус</a>
                         </li>
                         <li>
                             <a href='#'>Дача</a>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <a href='#'>Ремонт коммерческих помещений</a>
                     <div class='menu_2'></div>
                     <ul>
                         <li>
                             <a href='#'>Офис</a>
                         </li>
                         <li>
                             <a href='#'>Гостиница / хостел</a>
                         </li>
                         <li>
                             <a href='#'>Ресторан / кафе</a>
                         </li>
                         <li>
                             <a href='#'>Магазин</a>
                         </li>
                         <li>
                             <a href='#'>Производственное помещение</a>
                         </li>
                         <li>
                             <a href='#'>Спортивный / развлекательный комплекс</a>
                         </li>
                         <li>
                             <a href='#'>Салон красоты</a>
                         </li>
                         <li>
                             <a href='#'>Медицинское учреждение</a>
                         </li>
                         <li>
                             <a href='#'>Школа, детский сад</a>
                         </li>
                     </ul>
                 </li>
             </ul>--}}
          </li>
          <li>
            <a href='{{ route('portfolio') }}'>Портфолио</a>
          </li>
          <li>
            <a href='{{ route('priceList') }}'>Прайс</a>
          </li>
          <li class='arrow'>
            <a href='#'>Услуги</a>
            <ul class='menu_one'>

              <li>
                <a href="/kapitalnyiy-remont">Капитальный ремонт</a>
              </li>
              <li>
                <a href="/kosmeticheskiy-remont">Косметический ремонт</a>
              </li>
              <li>
                <a href="/dizaynerskiy-remont">Дизайнерский ремонт</a>
              </li>
              {{--<li>--}}
                {{--<a href="/remont-pod-kluch">Ремонт под ключ</a>--}}
              {{--</li>--}}

              <li>
                <a href="/otdelochnyie-raboty">Отделочные работы</a>
                <div class="menu_2"></div>
                <ul class="sub_menu_1">
                  <li>
                    <a href="/otdelochnyie-raboty/steny">
                      Ремонт стен
                    </a>
                  </li>
                  <li>
                    <a href="/otdelochnyie-raboty/pol">
                      Ремонт пола
                    </a>
                  </li>
                  <li>
                    <a href="/otdelochnyie-raboty/potolok">
                      Ремонт потолка
                    </a>
                  </li>
                  <li>
                    <a href="/otdelochnyie-raboty/santehnika">
                      Сантехнические работы
                    </a>
                  </li>
                  <li>
                    <a href="/otdelochnyie-raboty/elektrika">
                      Электромонтажные работы
                    </a>
                  </li>
                </ul>
              </li>


              {{--<li>--}}
                {{--<a href="/remont-kvartir-v-novostrojke">Ремонт в новостройке</a>--}}
              {{--</li>--}}

              <li>
                <a href="/priemka-kvartir">Приемка квартир</a>
              </li>
              {{--<li>--}}
                {{--<a href="/otdelka-kvartir">Отделка квартир</a>--}}
              {{--</li>--}}
              <li>
                <a href="/dizajn-interera-kvartir">Дизайн интерьера</a>
              </li>


            @foreach($serviceCategories as $category)
              <!-- <li>
                                        <a href='{{ route('getRepairMainCategory', $category->slug) }}'>{{ $category->title }}</a>
                                    </li>-->
              @endforeach
            </ul>
          </li>
          <li>
            <a href='{{ route('contact') }}'>Контакты</a>
          </li>
          <li>
            <a href='{{ route('about') }}'>О компании</a>
          </li>
          <li>
            <a href='{{ route('salePromotions') }}'>Акции</a>
          </li>
          <li>
            <a href='{{ route('review') }}'>Отзывы</a>
          </li>
          <li>
            <a href='{{ route('blog.home') }}'>Блог</a>
          </li>
          <li>
            <a href='{{ route('calculator') }}'>Калькулятор</a>
          </li>
          {{--  <li>
                <a href='#'>Портфолио</a>
            </li>
            <li>
                <a href='#'>Прайс</a>
            </li>
            <li class='arrow'>
                <a href='#'>Услуги</a>
                <ul class='menu_two'>
                    <li>
                        <a href='#'>Капитальный ремонт</a>
                    </li>
                    <li>
                        <a href='#'>Косметический ремонт</a>
                    </li>
                    <li>
                        <a href='#'>Ремонт под ключ</a>
                    </li>
                    <li>
                        <a href='#'>Дизайнерский ремонт</a>
                    </li>
                    <li>
                        <a href='#'>Ремонт в новостройке</a>
                    </li>
                    <li>
                        <a href='#'>Отделочные работы</a>
                    </li>
                    <li>
                        <a href='#'>Дизайн интерьера</a>
                    </li>
                    <li>
                        <a href='#'>Приемка квартир</a>
                    </li>
                    <li>
                        <a href='#'>Отделка квартир</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href='#'>Контакты</a>
            </li>
            <li>
                <a href='#'>О компании</a>
            </li>
            <li>
                <a href='#'>Акции</a>
            </li>
            <li>
                <a href='#'>Отзывы</a>
            </li>
            <li>
                <a href='#'>Калькулятор ремонта</a>
            </li>--}}
        </ul>
        <div class='menu_bottom'>

          <div class="ya-phone tel_number tel_info">
		  @if(isset($selectRegion) && $selectRegion)
            <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}"
               onclick="yaCounter44756221.reachGoal('tel'); return true;">{{$selectRegion->phone}}</a>
			   @endif
            <p>
			
              Москва, Ленинградский проспект, <br>
              д.36, стр.11, "Рыбаков тауэр"
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>