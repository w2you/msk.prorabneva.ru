<section class='your_portfolio'>
    <div class='wrapper_new'>
        <div class='title_section'>наше портфолио</div>
        <div class='under_title_section'>Смотрите примеры наших интерьеров для разных типов помещений</div>
        <div class='your_portfolio_menu'>
            <ul>
                <li class='active'>
                    <a href='#'>Все</a>
                </li>
                <li>
                    <a href='#'>Ванные и санузлы</a>
                </li>
                <li>
                    <a href='#'>Кухни и гостиные</a>
                </li>
                <li>
                    <a href='#'>Коридоры и прихожие</a>
                </li>
                <li>
                    <a href='#'>Детские комнаты</a>
                </li>
                <li>
                    <a href='#'>Спальни</a>
                </li>
            </ul>
        </div>
        <div class='portfolio_img_blocks active'>
            <div class='blocks_1'>
                @foreach($categoryService->newRepairs as $key => $category)
                    @if(count($categoryService->newRepairs))
                        @if($key === 2) @continue @endif
                        <div class='block'>
                            <a data-lightbox='roadtrip1' data-title='Ванная #1'
                               href='{{ asset('storage/' .  $category->image ) }}'>
                                <div class='hover_img'></div>
                            </a>
                            <div class='show_block'>
                                <img src='{{ asset('storage/' .  $category->image ) }}'>
                            </div>
                        </div>

                    @endif
                @endforeach
            </div>

            @if(isset($categoryService->newRepairs[2]) && isset($categoryService->newRepairs[2]))
                <div class='blocks_2'>
                    <div class='block'>
                        <a data-lightbox='roadtrip1' data-title='Ванная #1' href='{{ asset('storage/' . $categoryService->newRepairs[2]->image ) }}'>
                            <div class='hover_img'></div>
                        </a>
                        <div class='show_block'>
                            <img src='{{ asset('storage/' .  $categoryService->newRepairs[2]->image ) }}'>
                        </div>
                    </div>
                </div>
            @endif

        </div>

    </div>

    </div>
</section>