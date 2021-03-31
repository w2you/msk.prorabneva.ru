<style>
    body{
        padding-top: 100px;
    }
    @media only screen and (max-width: 1000px) {
        body{
            padding-top: 88px;
        }
    }
</style>

<header class="region_header">
    <div class='wrapper_new'>
        <div class='logo_menu clearfix'>

            <div class='logo'>
                <a href='/'>
                    <img src='{{ asset('frontend/images/region_logo.png') }}' alt='Прораб Нева'>
                </a>
            </div>
            <div class='menu'>

                <ul class='clearfix regionmenu'>

                    <li class="arrow_black">
                        <a href='#'>Услуги</a>
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
                    </li>
                    <li>
                        <a href='{{ route('priceList') }}'>Цены</a>
                    </li>
                    <li>
                        <a href='{{ route('portfolio') }}'>Наши работы</a>
                    </li>
                    <li>
                        <a href='{{ route('salePromotions') }}'>Акции <span class="orange_text">%</span></a>
                    </li>

                    <li>
                        <a href='{{ route('review') }}'>Отзывы</a>
                    </li>
                    <li>
                        <a href='{{ route('about') }}'>О нас</a>
                    </li>

                    <li>
                        <a href='{{ route('contact') }}'>Контакты</a>
                    </li>
                </ul>

                @if(isset($selectRegion) && $selectRegion)
                    <div class="header_city_block">
                        <img class="locationicon" src="{{ asset('frontend/images/iconfinder_location_black.png') }}" title="Ваш город" alt="Ваш город">
                        <a href="#" class="select_city_bloc_link">{{$selectRegion->title}}</a>
                    </div>
                @endif

                <div class="ya-phone tel_number ss">
                    <a class="tel roistat-phone" href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">{{$selectRegion->phone}}</a>
                </div>

                <div class='call_block_region'>
                    <a href='#' class="call_open_popup_button">Заказать звонок</a>
                </div>
                <div class='header_phone ya-phone'>
                    <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                        {{$selectRegion->phone}}
                    </a>

                </div>
            </div>
        </div>
        <div class='logo_menu_mob'>

            <div class='logo_menu_icons'>
                <div class='logo'>
                    <a href='/'>
                        <img src='{{asset('frontend/images/region_logo.png')}}' alt='Прораб Нева'>
                    </a>
                </div>
                <div class='phone_gen_menu'>

                    <div class="ya-phone tel_number header_phone">
                        <a class='tel roistat-phone' href="tel:+{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                            {{$selectRegion->phone}}
                        </a>
                    </div>
                    <div class='close_menu active' style="display: none">

                    </div>
                    <div class='gen_menu_icons'>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class='show_menu clearfix'>



                <div class='prev_menu'></div>
                <div class='all_menu'>
                    <ul class="regionmenu">
                        <li>
                            <div class='header_phone ya-phone'>
                                <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                                    {{$selectRegion->phone}}
                                </a>
                            </div>
                            @if(isset($selectRegion) && $selectRegion)
                                <div class="header_city_block">
                                    <img class="locationicon" src="{{ asset('frontend/images/iconfinder_location_black.png') }}" title="Ваш город" alt="Ваш город">
                                    <a href="#" class="select_city_bloc_link">{{$selectRegion->title}}</a>
                                </div>
                            @endif
                        </li>
                    </ul>

                    <ul class="regionmenu">
                            <li class="mainmenuli"><a href='#'>Услуги</a></li>
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
                    <ul class="regionmenu">
                        <li>
                            <a href='{{ route('priceList') }}'>Цены</a>
                        </li>
                        <li>
                            <a href='{{ route('portfolio') }}'>Наши работы</a>
                        </li>
                        <li>
                            <a href='{{ route('salePromotions') }}'>Акции <span class="orange_text">%</span></a>
                        </li>

                        <li>
                            <a href='{{ route('review') }}'>Отзывы</a>
                        </li>
                        <li>
                            <a href='{{ route('about') }}'>О нас</a>
                        </li>

                        <li>
                            <a href='{{ route('contact') }}'>Контакты</a>
                        </li>
                    </ul>
                    <ul class="regionmenu last_menu">
                        <li></li>
                    </ul>

                </div>
            </div>
        </div>

    </div>


</header>