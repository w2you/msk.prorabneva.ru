<section class='design_repairs {{ $class }}' data-bg="{{ isset($designRepair->image) ? preg_replace('/\\\/', '/', asset('storage/' . $designRepair->image)) : '' }}">
    <div class='wrapper_new'>
        <div class='design_repairs_blocks'>
            <div class='block block_1'>
                <div class='title_section yandex_metrica'>{!! $designRepair->feature[0]->title !!}</div>
                <p>{!! $designRepair->feature[0]->description !!}</p>
                <a href='#' class="call_open_popup_button">
                    @isset($designRepair->feature[1]->button_text){{ $designRepair->feature[0]->button_text }}@else{{ 'Заказать расчет сметы' }}@endisset
                </a>
            </div>
            <div class='block block_2'>
                <div class='title_section yandex_metrica'>{!! $designRepair->feature[1]->title !!}</div>
                <p>{!! $designRepair->feature[1]->description !!}</p>
                <a href='#' class="call_open_popup_button">
                    @isset($designRepair->feature[1]->button_text){{ $designRepair->feature[1]->button_text }}@else{{ 'Записаться на консультацию' }}@endisset
                </a>
            </div>
        </div>
    </div>
</section>