<section class='what_we bg_grey'>
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>Что мы делаем</div>
        <div class='blocks'>
            @isset($category->what_we_do->items)
                @if(count($category->what_we_do->items))
                    @foreach($category->what_we_do->items as $item)
                        <div class='block'>
                            <div class='name_click_block click_block'>
                                <div class='name_block'>{{ $item->title }}</div>
                                @isset($item->rows)
                                    @if(count($item->rows))
                                        <ul>
                                            @foreach($item->rows as $row)
                                                <li>{{ $row }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    @if(count($item->rows) > 3)
                                        <div class='name_link'>
                                            + показать больше
                                        </div>
                                    @endif
                                @endisset
                            </div>
                        </div>
                    @endforeach
                @endif
            @endisset
        </div>
    </div>
</section>
