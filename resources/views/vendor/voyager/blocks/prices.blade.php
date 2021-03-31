<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">ЦЕНЫ НА РЕМОНТ </h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input type="text" name="prices[title]" class="form-control"
                   value="{{ !is_null($dataTypeContent->prices) ? $dataTypeContent->prices->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Описание</label>
            <textarea type="text" name="prices[description]" class="form-control"
                      rows="3">{{ !is_null($dataTypeContent->prices) ? $dataTypeContent->prices->description : ''}}</textarea>
        </div>

        <div class="col-md-10 col-md-offset-1 form-group">
            <h3 class="text-center">Список цен</h3>
            <div class="row">
                @if(isset($dataTypeContent->prices->items) && count($dataTypeContent->prices->items) > 0)
                    @foreach($dataTypeContent->prices->items as $key => $item)
                        <div class="col-md-4">
                            <div>
                                <label for="">Название</label>
                                <input type="text" name="prices[items][{{ $key }}][title]" class="form-control"
                                       value="{{ $item->title }}">
                            </div>
                            <div>
                                <label for="">От</label>
                                <input type="number" name="prices[items][{{ $key }}][from]" value="{{ $item->from }}"
                                       class="form-control">
                            </div>
                            <div>
                                <label for="">До</label>
                                <input type="number" name="prices[items][{{ $key }}][to]" value="{{ $item->to }}"
                                       class="form-control">
                            </div>
                        </div>
                    @endforeach
                    <hr class="visible-xs visible-sm">
                @else
                    <div class="col-md-4">
                        <div>
                            <label for="">Название</label>
                            <input type="text" name="prices[items][0][title]" class="form-control">
                        </div>
                        <div>
                            <label for="">От</label>
                            <input type="number" name="prices[items][0][from]" class="form-control">
                        </div>
                        <div>
                            <label for="">До</label>
                            <input type="number" name="prices[items][0][to]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="">Название</label>
                            <input type="text" name="prices[items][1][title]" class="form-control">
                        </div>
                        <div>
                            <label for="">От</label>
                            <input type="number" name="prices[items][1][from]" class="form-control">
                        </div>
                        <div>
                            <label for="">До</label>
                            <input type="number" name="prices[items][1][to]" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label for="">Название</label>
                            <input type="text" name="prices[items][2][title]" class="form-control">
                        </div>
                        <div>
                            <label for="">От</label>
                            <input type="number" name="prices[items][2][from]" class="form-control">
                        </div>
                        <div>
                            <label for="">До</label>
                            <input type="number" name="prices[items][2][to]" class="form-control">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
