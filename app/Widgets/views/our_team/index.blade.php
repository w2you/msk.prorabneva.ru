<section class='our_team'>
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>Наша команда</div>
        <div class='under_title_section'>Мы не просто делаем ремонт. Мы создаем уют и комфорт.</div>
        <div class='team'>
            @foreach($workers as $worker)
                <div class='block'>
                    <div>
                        <div class='img'>
                            <div class='bg_img'></div>
                            <img src='{{ asset('storage/' . $worker->image) }}' alt='Наша команда'>
                        </div>
                        <div class='hover_block'>
                            <div class='team_name'>{{ $worker->title }}</div>
                            <div class='status'>{{ mb_convert_case(mb_strtolower($worker->category->title), MB_CASE_TITLE, 'UTF-8') }}</div>
                            @if (!is_null($worker->quote))
                                <p>{{ $worker->quote }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if($region->id == 1)
            <div class='learn_more'>
                <a href='{{ route('our_team') }}'>Смотреть всех</a>
            </div>
        @endif
    </div>
</section>
