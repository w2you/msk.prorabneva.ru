@extends('frontend.layouts.master')

@section('content')
    <section class='careers'>
        <div class='wrapper'>
            <h1 class='title_section'>{{ $page->title }}</h1>
            <div class='under_title_section'>Присоединяйтесь к нашей команде</div>
            <div class='careers_blocks'>
                @if(count($vacancies) > 0)
                    @foreach($vacancies as $vacancy)
                        @include('.frontend.vacancies.partials.item', ['vacancy' => $vacancy])
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection()