<section class='porcelain'>
    <div class='wrapper_new'>
        <h1>{{ $childCategory->title }}</h1>
        <div class='under_title_section'>{{ $childCategory->top_description }}</div>
        <div class='reice_list_blocks'>
            <table>
                @foreach($childCategory->priceList as $price)
                    <tr class='clearfix'>
                        <td>{{ $price->title }}</td>
                        <th>{{ floor(0.9202 * $price->price) }} руб.</th>
                        <th>{{ $price->unit->value }}</th>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class='view_all'>
            <a href='{{ route('priceList') }}'>Смотреть весь прайс</a>
        </div>
    </div>
</section>