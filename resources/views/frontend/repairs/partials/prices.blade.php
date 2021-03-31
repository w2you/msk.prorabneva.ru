@isset($category->prices->items)
    <section class='price_pepair_studio'>
        <div class='wrapper_new'>
            <div class='title_h2 title_section'>
                {!! $category->prices->title !!}
            </div>
            <div class='blocks_price'>
                @if(count($category->prices->items))
                    @foreach($category->prices->items as $item)
                        <div class='block'>
                            <div class='name_block'>{{ $item->title }}</div>
                            <p>
                                от {{ $item->from }} до {{ $item->to }} руб./м2
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class='text_bottom'>* {{ $category->prices->description }}
            </div>
        </div>
    </section>
@endisset
