<section class='sliders_comparison sliders_comparison_slid'>
    <div class='title_section'>{{ $category->title }}</div>
    <div class='slider_comparison'>
        <div class='bg_slider_comparison'></div>
        <div class='slider_comp'>
            @if(count($category->workers) > 0)
                @foreach($category->workers as $worker)
                    @include('frontend.our_team.partials.worker', ['worker' => $worker])
                @endforeach
            @endif
        </div>
    </div>
</section>