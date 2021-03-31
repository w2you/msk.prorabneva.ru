<div class='filter_portfolio'>
    <form action="{{ route('portfolio') }}" method="get" id="portfolio_filter">
        <div class='select_blocks'>
            @if(\App\Helpers\Helper::getRegion()->is_default)
                @include('frontend.portfolio.partials.category_list')

                <div class='all_check' style="@if($filter['main_cat_id'] == 1 || $filter['main_cat_id'] == 0){{ 'display: inline-block !important' }}@endif">
                    <div class='check'>
                        <input id='check_inp' type='checkbox' name="tour_3d" @if($filter['tour_3d'] === 'on'){{ 'checked' }}@endif>
                        <label for='check_inp'>Объекты с 3D туром</label>
                    </div>
                    <div class='check'>
                        <input id='check_inp_2' type='checkbox' name="before_after" @if($filter['before_after'] === 'on'){{ 'checked' }}@endif>
                        <label for='check_inp_2'>Объекты с фото "До" и "После"</label>
                    </div>
                </div>
            @endif
        </div>
    </form>
</div>
@include('frontend.portfolio.partials.repair_list')

    @php
        parse_str(Request::getQueryString(), $queryString)
    @endphp

<!--Paginate comment-->
{{--
  {{ $repairs->appends($queryString)->links() }}
  --}}
<!--End Paginate comment-->
