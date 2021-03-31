<section class='your_portfolio your_portfolio_home_page'>
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>Примеры работ</div>
        <div class='under_title_section'>
            {{ $mainCategory->repair_list_title }}
        </div>
        @if(isset($mainCategory->slug) )
            @if($mainCategory->slug == "remont-komnat")
                <div class='your_portfolio_menu'>
                    <ul>
                        <li class='active'>
                            <a href='#'>Все</a>
                        </li>
                        @if($newRepairs['bathRoom'])
                            <li>
                                <a href='#'>{{$newRepairs['bathRoom'][0]->category->title}}</a>
                            </li>
                        @endif
                        @if($newRepairs['kitchen'])
                            <li>
                                <a href='#'>{{$newRepairs['kitchen'][0]->category->title}}</a>
                            </li>
                        @endif
                        @if($newRepairs['room'])
                            <li>
                                <a href='#'>Ремонт комнат</a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endif
        @endif
        <div class='portfolio_img_blocks active'>
            <div class='blocks_1'>
                @foreach($mainCategory->newRepairs as $key => $category)
                    @if(count($mainCategory->newRepairs))
                        @if($key === 2) @continue @endif
                        <div class='block'>
                            <div class='hover_img show_img_popup' data-id="{{ $category->id }}"
                                 data-url="{{ route('getRepair') }}">
                                <p>{{$category->name}}</p>

                            </div>
                            <div class='show_block'>
                                <img src="{{ asset('storage/' .  $category->image ) }}"  alt="Примеры работ - Прораб Нева">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @if(isset($mainCategory->newRepairs[2]) && isset($mainCategory->newRepairs[2]))
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'
                             data-id="{{ $mainCategory->newRepairs[2]->id }}"
                             data-url="{{ route('getRepair') }}">
                            <p>{{$mainCategory->newRepairs[2]->name}}</p>

                        </div>
                        <div class='show_block'>
                            <img src="{{ asset('storage/' .$mainCategory->newRepairs[2]->image) }}"  alt="Примеры работ - Прораб Нева">
                        </div>
                    </div>
                </div>
            @endif
        </div>
        @foreach($newRepairs as $key=>$category)
                <div class='portfolio_img_blocks'>
                    <div class='blocks_1'>
                        @php
                                if (count($category)>4){
                                    $count  = 4;
                                }else{
                                  $count = count($category);
                                }
                        @endphp
                        @for($i = 0; $i <= $count; $i ++)
                            @if($i === 2) @continue @endif
                            <div class='block'>
                                <div class='hover_img show_img_popup' data-id="{{ $category[$i]->id }}"
                                     data-url="{{ route('getRepair') }}">
                                    <p>{{$category[$i]->name}}</p>

                                </div>
                                <div class='show_block'>
                                    <img src="{{ asset('storage/' . $category[$i]->image) }}"  alt="Примеры работ - Прораб Нева">
                                </div>
                            </div>
                        @endfor
                    </div>
                    @if(isset($mainCategory->newRepairs[2]))
                        <div class='blocks_2'>
                            <div class='block'>
                                <div class='hover_img show_img_popup' data-id="{{ $category[2]->id }}"
                                     data-url="{{ route('getRepair') }}">
                                    <p>
                                        {{$category[2]->name}}
                                    </p>

                                </div>
                                <div class='show_block'>
                                    <img src="{{ asset('storage/' . $category[2]->image) }}"  alt="Примеры работ - Прораб Нева">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
        @endforeach
    </div>
</section>
