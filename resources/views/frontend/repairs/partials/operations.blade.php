<section class="commercial_repairs">
    <div class="wrapper_new">
        <h1 class="title_section">{{ $category->title }}</h1>
        <div class="under_title_section">{{ $category->top_description }}</div>
        <div class="blocks">
            @isset($category->operations->title)
                <div class="block_title">
                    {!! $category->operations->title !!}
                </div>
            @endif
            @isset($category->operations->items)
                <div class="block_numbers_text">
                    @foreach($category->operations->items as $key => $item)
                        <div class="block">
                            <div class="number">{{ $key + 1 }}</div>
                            <div class="text_block">
                                <div class="name_text_block">{{ $item->title }}</div>
                                <p>{!! $item->description !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>