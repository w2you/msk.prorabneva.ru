<section class='contact_page'>
    <div class='wrapper_new'>
        <h1 class='title_section'>{{ $page->title }}</h1>
        <div class='under_title_section'>{!! $page->body !!}</div>
        <div class='center_office'>
            {{--<div class='text'>
                <div class='name'>{{ $mainContact->title }}</div>
                <div class='place'>
                    <div class='street'>{{ $mainContact->metro }}</div>
                    <p>{{ $mainContact->address }}</p>
                </div>
                <div class="ya-phone tel_number">
                    <a class='tel roistat-phone call_link' href="tel:{{ $mainContact->phone }}" onclick="yaCounter44756221.reachGoal('tel'); return true;">{{ $mainContact->phone }}</a>
                </div>

                <div class='working_time'>
                    {!! $mainContact->work_time !!}
                </div>
                <a class='mail_contact' href='mailto:{{ $mainContact->email }}'>{{ $mainContact->email }}</a>
            </div>--}}
            {!! $city->body !!}
            <div class='map'>
                <div id='map_center' coordinates="{{$city->map_point}}">
{{--
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A894a5edea44ae70811545e8364bca3b245ebbbe043fb470f821308f62d12d624&amp;width=598&amp;height=411&amp;lang=ru_RU&amp;scroll=true"></script>
--}}
                </div>
            </div>
        </div>
    </div>
</section>
