
<section class='object @if($isHome){{ 'object_home_page' }}@endif {{ $class }}' data-bg="{{ isset($banner->image) ? preg_replace('/\\\/', '/', asset('storage/' . $banner->image)) : ''}}"
style="background: url({{isset($banner->image) ? preg_replace('/\\\/', '/', asset('storage/' . $banner->image)): ''}}) no-repeat top center;"
>
    <div class='wrapper_new'>
        <div class='object_title yandex_metrica'>
           <div class="title_h2 "> {!! $banner->title !!}</div>
        </div>
        <p>{!! $banner->description !!}</p>
        <a class="call_open_popup_button" href='#' {{--class="call_open_popup_button"--}}>{{ $title }}</a>
    </div>
</section>
