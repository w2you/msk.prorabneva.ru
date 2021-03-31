<section class='repair_studio repair_studio_repairs_rooms'>
    <div class='wrapper_new'>
        <h1>{{ $mainCategory->title }}</h1>
        <div class='under_title_section'>{!! $mainCategory->top_description !!}</div>
        <div class='blocks'>
            @if(is_array($mainCategory->advantages))
                @if(count($mainCategory->advantages))
                    @foreach($mainCategory->advantages as $advantage)
                        <div class='block'>
                            <div class='icon'>
                                @isset($advantage['image'])
                                    <img src='{{ asset('storage/' . $advantage['image']) }}' alt='Ремонт - Прораб Нева'>
                                @endif
                            </div>
                            <div class='name_block'>
                                {!! $advantage['title'] !!}
                            </div>
                            <p>{!! $advantage['description'] !!}</p>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</section>