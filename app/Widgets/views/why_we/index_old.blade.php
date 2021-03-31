<section class='why_we {{ $class }} @if($isHome){{ 'home_page_why_we' }}@endif @if($hideTitle){{ 'why_we_page_3 ' }}@endif'>
    <div class='wrapper_new'>
        @if(!$hideTitle)
            <div class='title_h2 title_section'>{{ $whyWe->title }}</div>
            <div class='under_title_section'>{{ $whyWe->description }}</div>
        @endif
        <div class='why_blocks'>
            @if($whyWe->feature && count($whyWe->feature) > 0)
                @foreach($whyWe->feature as $feature)
                    <div class='block'>
                        @if (isset($feature->image))
                            <div class='img'>
                                <img src="{{ asset('storage/' . $feature->image) }}" alt="Прораб Нева">
                            </div>
                        @endif
                        <div class='text'>
                            @if (isset($feature->title))
                                <div class='name_block'>{{ $feature->title }}</div>
                            @endif
                            @if (isset($feature->description))
                                <p>{!! $feature->description !!}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
