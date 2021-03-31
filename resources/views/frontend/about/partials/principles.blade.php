<section class='our_principles'>
    <div class='wrapper_new'>
        <div class="title_h2 title_section">{{ $page->principles->title }}</div>
        <div class='under_title_section'>{{ $page->principles->description }}</div>
        <div class='principles'>
            @if($page->principles->item && count($page->principles->item) > 0)
                @foreach($page->principles->item as $key => $item)
                    <div class='block'>
                        <div class='number_name clearfix'>
                            <div class='number'>{{ $key + 1 }}</div>
                            <div class='name'>{{ $item->title }}</div>
                        </div>
                        <p>{!! $item->description !!}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
