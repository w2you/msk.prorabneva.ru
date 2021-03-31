<section class='text_area_home @if($page->slug == "home_page") text_area_home_padd @endif {{isset($has_padd_40)?'padd_40':''}}' >
    <div class='wrapper_new'>
        <div class='text_area_new'>
            {!! $page->body !!}
        </div>
    </div>
</section>
