@extends('frontend.layouts.master')

@section('content')
    <section class='our_team_new'>
        <h1>{{ $page->title }}</h1>
        <div class='team_img'>
            <img src="{{ asset('storage/' . $page->image) }}" alt='Наша команда - Прораб Нева'>
        </div>
        <div class='wrapper_new'>
            <div class='text_area_our_team'>{!! $page->body !!}</div>
        </div>
    </section>
    @foreach($workersCategories as $category)
        @include('frontend.our_team.partials.team', ['category' => $category])
    @endforeach
    <section class='need_repair_team'>
        <div class='wrapper_new clearfix'>
            <div class='title_block'>
                Присоединяйтесь к нашей команде!
            </div>
            <div class='application'>
                <a href='{{ route('vacancies') }}'>Смотреть вакансии</a>
            </div>
        </div>
    </section>
    <section class='back_to_top'></section>
@endsection