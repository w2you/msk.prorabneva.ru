<section class='your_portfolio your_portfolio_home_page'>
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>Примеры работ</div>
        <div class='under_title_section'>Посмотрите примеры выполненных нами ремонтов квартир</div>
        <!--repairs-->
        <div class='portfolio_img_blocks active'>
            <div class='blocks_1'>
                @php
                    $repairs = \App\Helpers\Helper::repairs($selectRegion);
                @endphp
                @foreach($repairs as $key => $repair)
                    @if($key === 2) @continue @endif
                    <div class='block'>
                        <div class='hover_img show_img_popup' data-id="{{ $repair->repairId->id }}"
                             data-url="{{ route('getRepair') }}">
                            <p>{{$repair->repairId->name}}</p>
                        </div>
                        <div class='show_block'>
                            <img src="{{ asset('storage/' . $repair->repairId->image) }}" title="{{$repair->repairId->name}}"  alt='Примеры ремонта - Прораб Нева' >
                        </div>
                    </div>
                @endforeach
            </div>
            @if(isset($repairs[2]))
                <div class='blocks_2'>
                    <div class='block'>

                        <div class='hover_img show_img_popup'
                             data-id="{{ $repairs[2]->repairId->id }}"
                             data-url="{{ route('getRepair') }}">
                            <p>{{$repairs[2]->repairId->name}}</p>

                        </div>
                        <div class='show_block'>
                            <img src="{{ asset('storage/' . $repairs[2]->repairId->image) }}"  title="{{$repairs[2]->repairId->name}}"   alt='Примеры ремонта - Прораб Нева'>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!--end repairs-->
    </div>
</section>
