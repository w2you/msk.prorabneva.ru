@if(isset($faq->items) && isset($faq->title))
    <section class='questions'>
    <div class='wrapper_new clearfix'>
        <div class='questions_title_block'>
            <div class='icon'>
                <img src='{{ asset('frontend/images/icon_quest.png') }}'>
            </div>
            <p>ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ «{!! $faq->title !!}»</p>
        </div>
            <div class='questions_block'>
                <ul>
                    @foreach($faq->items as $key => $item)
                        @if(!is_null($item->question))
                            <li>
                                <h3>{!! $key + 1  !!}. {!! $item->question !!} </h3>
                                <p>
                                    {!! $item->answer  !!}
                                </p>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
    </div>
</section>
@endif
