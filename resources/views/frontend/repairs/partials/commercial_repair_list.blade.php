

<section class='example_project'>
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>Примеры работ</div>
        <div class='under_title_section'>{{ $mainCategory->repair_list_title }}</div>
        <div class='example_project_slider'>
            @foreach($commercialRepairs as $commercialRepair)
                @php
                    $images = @json_decode($commercialRepair->images)
                @endphp
                <div class='block'>
                    <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='{{ $commercialRepair->title }}' title='{{ $commercialRepair->title }}'
                       href='{{ asset('storage/' . $images[0]) }}'>
                        <div class='img'>
                            <img src='@if($images){{ asset('storage/' . $images[0]) }}@endif'>
                        </div>
                        @php
                            array_shift($images)
                        @endphp
                        <div class="name_block">
                            <p>{{ $commercialRepair->title }}</p>
                        </div>
                    </a>
                    @if($images)
                        <div class='hide_block'>
                            @foreach($images as $image)
                                <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='{{ $commercialRepair->title }}'
                                   title='{{ $commercialRepair->title }}'
                                   href='{{ asset('storage/' . $image) }}'></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
