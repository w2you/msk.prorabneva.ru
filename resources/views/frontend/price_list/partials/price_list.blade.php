<section class='repair_blocks'>
    <div class='wrapper_new'>
        <h1>{{ $categoryPriceList->title }}</h1>
        <div class='under_title_section'>{{ $categoryPriceList->top_description }}</div>
        <div class='blocks'>
            @foreach($categoryPriceList->childCategories as $key => $price)
                @if($key == 3)
                    @continue
                @endif
                @if($price->image)
                        @if($key <3)
                    <div class='block'>
                        <div class='icon'>
                            <img src='{{ asset('storage/' . $price->image) }}'  alt='Прайс лист - Прораб Нева'>
                        </div>
                        <div class='name_block'>{{ $price->title }}</div>
                        <div class='info'>
                        @if (floor(0.9202 * $price->priceList->min('price'))==0)
                        от {{ floor(0.9202 * 119) }} р./м
                        @else
                        от {{ floor(0.9202 * $price->priceList->min('price')) }} р./м
                        @endif
                            <span>2</span>
                        </div>
                    </div>
                        @endif
                @endif
            @endforeach
            <div class='block more_block'>
                <a href='{{ route('priceList') }}'>
                    <div class='arrow'></div>
                    <div class='more_text'>
                        еще
                        <strong>300</strong>
                        <br>
                        позиций прайса
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{--<section class='repair_blocks'>
    <div class='wrapper_new'>
        <h1>{{ $categoryPriceList->title }}</h1>
        <div class='under_title_section'>{{ $categoryPriceList->top_description }}</div>
        <div class='blocks'>
            <div class='block'>
                <div class='icon'>
                    <img src='{{asset('frontend/images/rap_icon_1.png')}}'  alt='Прайс лист - Прораб Нева'>
                </div>
                <div class='name_block'>Поклейка обоев</div>
                <div class='info'>
                    от 140 р./м
                    <span>
2
</span>
                </div>
            </div>
            <div class='block'>
                <div class='icon'>
                    <img src='{{asset('frontend/images/rap_icon_2.png')}}'  alt='Прайс лист - Прораб Нева'>
                </div>
                <div class='name_block'>Укладка плитки</div>
                <div class='info'>
                    от 576 р./м
                    <span>
2
</span>
                </div>
            </div>
            <div class='block'>
                <div class='icon'>
                    <img src='{{asset('frontend/images/rap_icon_3.png')}}'  alt='Прайс лист - Прораб Нева'>
                </div>
                <div class='name_block'>Выравнивание стен</div>
                <div class='info'>
                    от 230 р./м
                    <span>
2
</span>
                </div>
            </div>
            <div class='block more_block'>
                <a href='#'>
                    <div class='arrow'></div>
                    <div class='more_text'>
                        еще
                        <strong>300</strong>
                        <br>
                        позиций прайса
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>--}}

