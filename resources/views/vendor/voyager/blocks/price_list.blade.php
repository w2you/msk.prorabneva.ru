<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Прайс-лист</h2>
        <div class="form-group col-md-10 col-md-offset-1">
            <select name="price_list[]" class="select2" multiple>
                @if(count($pageData->allPriceList) > 0)
                    @foreach($pageData->allPriceList as $price)
                        <option
                                value="{{ $price->id }}" data-id="{{$price->id}}"
                                @if(!is_null($pageData->priceList))
                                    @if(array_key_exists($price->id, $pageData->priceList->keyBy('id')->toArray())){{ 'selected' }}@endif
                                @endif>
                            {{ $price->title }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
