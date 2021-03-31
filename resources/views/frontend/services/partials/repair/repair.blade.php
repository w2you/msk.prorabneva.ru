
    @if(count($childCategory->newRepairs)>0 )
        <section class='your_portfolio'>

        <div class='wrapper_new'>
                <div class='title_h2 title_section'>
                    @if($childCategory->slug == "dizajn-inter-era")
                        наше портфолио
                    @else
                        Примеры работ
                    @endif
                </div>
                <div class='your_portfolio_menu'>
                    <ul>
                        <li class='active'>
                            <a href='#'>Все</a>
                        </li>
                        @foreach($mainCategory->childCategories as $key => $category)
                            @if($key == 2 || $key ==6 || $key == 7) @continue @endif
                            <li>
                                <a href='#'>{{ !empty($category->menu_title) ? $category->menu_title : $category->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class='under_title_section'>{{$childCategory->repair_list_title}}</div>
                <div class='portfolio_img_blocks active'>
                    <div class='blocks_1'>
                        @foreach($childCategory->newRepairs as $key => $category)
                            @if(count($childCategory->newRepairs))
                                @if($key === 2) @continue @endif
                                <div class='block'>
                                    <div class='hover_img show_img_popup' data-id="{{ $category->id }}"
                                         data-url="{{ route('getRepair') }}"></div>
                                    <div class='show_block'>
                                        <img src="{{ asset('storage/' .  $category->image ) }}"  alt="Примеры работ - Прораб Нева">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @if(isset($childCategory->newRepairs[2]) && isset($childCategory->newRepairs[2]))
                        <div class='blocks_2'>
                            <div class='block'>
                                <div class='hover_img show_img_popup'
                                     data-id="{{ $childCategory->newRepairs[2]->id }}"
                                     data-url="{{ route('getRepair') }}"></div>
                                <div class='show_block'>
                                    <img src="{{ asset('storage/' .$childCategory->newRepairs[2]->image) }}"  alt="Примеры работ - Прораб Нева">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                @foreach($childCategory->newRepairs as $key=>$category)
                    @if(count($childCategory->newRepairs))
                        <div class='portfolio_img_blocks'>
                            <div class='blocks_1'>
                                @php
                                    $count = $childCategory->newRepairs->count() === 5 ? 4 : $childCategory->newRepairs->count() - 1
                                @endphp
                                @for($i = 0; $i <= $count; $i ++)
                                    <div class='block'>
                                        <div class='hover_img show_img_popup'
                                             data-id="{{  $childCategory->newRepairs[0]->id }}"
                                             data-url="{{ route('getRepair') }}"></div>
                                        <div class='show_block'>
                                            <img src="{{ asset('storage/' . $childCategory->newRepairs[$i]->image) }}" alt="Примеры работ - Прораб Нева">
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            @if(isset($childCategory->newRepairs[2]) && isset($childCategory->newRepairs[2])))
                                <div class='blocks_2'>
                                    <div class='block'>
                                        <div class='hover_img show_img_popup' data-id="{{ $category->id }}"
                                             data-url="{{ route('getRepair') }}"></div>
                                        <div class='show_block'>
                                            <img src="{{ asset('storage/' . $category->image) }}" alt="Примеры работ - Прораб Нева">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    @endif

