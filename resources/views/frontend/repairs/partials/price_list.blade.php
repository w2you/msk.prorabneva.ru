<section class='price_list_repairs'>
    <div class='title_section'>
        {!! $category->price_list_title !!}
    </p>
    <!--cheng fixs page-->
    @include('frontend.homepage.partials.prices')
   {{-- <div class='wrapper_new'>
        <div class='price_list_repairs_block'>
            @foreach($priceListCategories as $key => $categoryPrice)
                <div class='block'>
                    <div class='click_block'>{{ $key + 1 }}. {{ $categoryPrice->title }}</div>
                    @if(count($categoryPrice->priceList))
                        <div class='all_block'>
                            <table>
                                @foreach($categoryPrice->priceList as $price)
                                    <tr class='clearfix'>
                                        <td>{{ $price->title }}</td>
                                        <th>{{floor(0.903 * $price->price) }} руб.</th>
                                        <th>{{ $price->unit->value }}</th>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>--}}
</section>
