<section class='tur_3d tur_3d_stock tur_3d_home_page' style="display:none;">
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>3D-ТУРЫ РЕМОНТОВ</div>
        <div class='under_title_section'>Посмотрите максимально реалистичные интерактивные туры по нашим объектам после ремонта</div>
        <div class='tur_slider'>
            @if(count($tours) > 0)
                @foreach($tours as $tour)
                    <div class='block' style="height: 483px">
                        <div class='owl_slid'></div>
                        <iframe src="{{ $tour->link }}" frameborder="0" style="width: 100%;height: 100%"></iframe>
                    </div>
                @endforeach
            @endif
        </div>
        {{--<div class='view_portfolio'>
            <a href='{{ route('portfolio') }}'>Смотреть порфолио</a>
        </div>--}}
    </div>
</section>
