<section class='price_list_repairs'>
    <div class='title_h2 title_section'>
        Прайс-лист
        <br>
        {{$title}}
    </div>
    <div class='wrapper_new'>
        <div class='price_list_repairs_block'>
            @foreach($priceListCategories as $key => $category)
                <div class='block'>
                    <div class='click_block'>{{$key+1}}. {{$category->title}}</div>
                    <div class='all_block'>
                        <table>
                        {{-- priceListUnit - закешированый метод сократил выборку с 290 до 46 запросов --}}
                        @foreach($category->priceListUnit as $index => $price )
                            @if(!$price->image)
                                <tr class='clearfix'>
                                    <td>{{$price->title}}</td>
                                    <th>{{floor(0.9202 * $price->price)}}{{$rub ? $rub : ' руб.'}}</th>
                                    <th>{{$price->unit->value}} </th>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
