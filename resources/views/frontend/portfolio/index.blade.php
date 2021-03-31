@extends('frontend.layouts.master')

@section('content')
    <section class='all_portfolio'>
        <div class='wrapper_new'>
            <h1 class='title_section'>{{ $page->title }}</h1>
            <div class='under_title_section'>{!! $page->description !!}</div>

            <div class="portfolio">
                @include('frontend.portfolio.partials.portfolio')
            </div>
            @if($page->region->is_default)
                <div class='show_more'>
                    <a href='#'>Показать еще</a>
                </div>
            @endif
        </div>
    </section>
        @if($selectRegion->is_default)
            @widget('blog_block',['category' => 'istoriya-odnogo-remonta','region'=>$selectRegion])
        @endif

        @include('frontend.homepage.partials.description',['has_padd_40' => true, 'page'=>$page])

        <div id='popup_portfolio_slider'>
            <div class='popup_block'>
                <div class='close'></div>
            </div>
        </div>

@endsection
@section('script')
    <script>
        (function(){
            $(function(){


                $("#roistat-lh-submit").unbind('click').click(function(){
                    $.post($form.attr('action'), $form.serializeArray(), function(){
                        (function(){
                            window.yaCounter44756221.reachGoal('roi');
                            ga('send','event','button','click','test4');
                        })();

                    });
                    return false;
                });})

    </script>
@endsection
