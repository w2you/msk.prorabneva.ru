<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Скидки</h2>

        <div class="sale-list">
            @if(isset($pageData->sales) && !is_null( $pageData->sales))
                @foreach( $pageData->sales as $key => $item)
                    <div class="col-md-10 col-md-offset-1 sale-item" data-id="{{ $key }}">
                        <div class="form-group">
                            <label for="">Название</label>
                            <input name="sales[{{$key}}][title]" class="form-control" value="{{ $item->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Описание</label>
                            <textarea name="sales[{{$key}}][description]" rows="3"
                                      class="form-control">{{ $item->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Цена</label>
                            <input type="number" name="sales[{{$key}}][price]" class="form-control" value="{{ $item->price }}" min="1">
                        </div>
                        <div class="form-group">
                            <label for="">Картинка</label><br>
                            <img src="{{ asset('storage/' . $item->image) }}" alt="" style="max-width: 300px">
                            <input type="file" name="sales[{{ $key }}][image]">
                        </div>
                        <button class="btn btn-danger pull-right remove-sale" type="button">Удалить акцию</button>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            @else
                <div class="col-md-10 col-md-offset-1 sale-item" data-id="0">
                    <div class="form-group">
                        <label for="">Название</label>
                        <input name="sales[0][title]" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Описание</label>
                        <textarea name="sales[0][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Цена</label>
                        <input type="number" name="sales[0][price]" class="form-control" value="" min="1">
                    </div>
                    <div class="form-group">
                        <label for="">Картинка</label>
                        <input type="file" name="sales[0][image]">
                    </div>
                    <button class="btn btn-danger pull-right remove-sale" type="button">Удалить скидку</button>
                    <div class="clearfix"></div>
                </div>
            @endif
        </div>
        <div class="col-md-10 col-md-offset-1">
            <button type="button" id="add-sale" class="btn btn-primary pull-right">Добавить скидку</button>
        </div>
    </div>
</div>
