<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">АКЦИИ И СКИДКИ</h2>
        <div class="form-group col-md-10 col-md-offset-1">
            <label for="">Название блока</label>
            <input type="text" name="sale_promotion[title]" class="form-control"
                   value="@isset($dataTypeContent->sale_promotion->title){{ $dataTypeContent->sale_promotion->title }}@endisset">
        </div>
        <div class="form-group col-md-10 col-md-offset-1">
            <label for="">Описание блока</label>
            <input type="text" name="sale_promotion[description]" class="form-control"
                   value="@isset($dataTypeContent->sale_promotion->title){{ $dataTypeContent->sale_promotion->description }}@endisset">
        </div>
        <div class="form-group col-md-10 col-md-offset-1">
            <label for="">Выберите акции</label>
            <select name="salePromotions[]" class="select2" multiple>
                @if(count($pageData->allSalePromotions) > 0)
                    @foreach($pageData->allSalePromotions as $tour)
                        <option
                                value="{{ $tour->id }}"
                        @if(!is_null($pageData->salePromotions))
                            @if(array_key_exists($tour->id, $pageData->salePromotions->keyBy('id')->toArray())){{ 'selected' }}@endif
                                @endif>
                            {{ $tour->title }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
</div>
