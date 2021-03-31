@if( count($category->repairs) > 0)
    <section class='your_portfolio your_portfolio_page_1'>
        <div class='wrapper_new'>
            <div class='title_h2 title_section'>Примеры работ</div>
            <div class='under_title_section'>{{ $category->repair_list_title }}</div>
            @if(count($category->repairs))
                <div class='portfolio_img_blocks active'>
                    <div class='blocks_1'>
                        @foreach($category->repairs as $key => $repair)
                            @if($key === 4) @continue @endif
                            <div class='block'>
                                <div class='hover_img show_img_popup' data-id="{{ $repair->id }}"
                                     data-url="{{ route('getRepair') }}"></div>
                                <div class='show_block'>
                                    <img src="{{ asset('storage/' .  $repair->image ) }}"  alt="Примеры работ - Прораб Нева">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @isset($category->repairs[4])
                        <div class='blocks_2'>
                            <div class='block'>
                                <div class='hover_img show_img_popup' data-id="{{ $category->repairs[4]->id }}"
                                     data-url="{{ route('getRepair') }}"></div>
                                <div class='show_block'>
                                    <img src="{{ asset('storage/' . $category->repairs[4]->image) }}"  alt="Примеры работ - Прораб Нева">
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>
            @endif
            <div class="view_all">
                <a href="{{ route('portfolio') }}">Смотреть портфолио целиком</a>
            </div>
        </div>
    </section>
@endif
