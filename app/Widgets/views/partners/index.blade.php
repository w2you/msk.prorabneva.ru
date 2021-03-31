<section class='our_partners our_partners_repairs_rooms our_partners_page_1 {{$class}}'>
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>{{ $title }}</div>
        <div class='under_title_section'>{{ $subTitle }}</div>
        <div class='partners'>
            @if(count($partners) > 0)
                @foreach($partners as $partner)
                    <div>
                        <a href="#{{!! $partner->link }}">
                            <img src="{{ asset('storage/' . $partner->image) }}">
                            <img src="{{ asset('storage/' .  $partner->mobile_image) }}">
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
       {{-- <div class='all_partners'>
            <a href='{{ route('partners') }}'>Все партнеры</a>
        </div>--}}
    </div>
</section>
