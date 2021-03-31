<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Уже более 15 лет МЫ</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название блока</label>
            <input type="text" name="operations[title]" class="form-control"
                   value="{{ !is_null($dataTypeContent->operations) ? $dataTypeContent->operations->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <h3 class="text-center">Операции</h3>
            <div class="row">
                @if(isset($dataTypeContent->operations->items) && count($dataTypeContent->operations->items) > 0)
                    @foreach($dataTypeContent->operations->items as $key => $item)
                        <div class="col-md-6">
                            <label for="">Название</label>
                            <input type="text" name="operations[items][{{ $key }}][title]" class="form-control"
                                   value="{{ $item->title }}">
                            <label for="">Описание</label>
                            <textarea name="operations[items][{{ $key }}][description]" rows="3"
                                      class="form-control">{{ $item->description }}</textarea>
                        </div>
                    @endforeach
                    <hr class="visible-xs visible-sm">
                @else
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="operations[items][0][title]" class="form-control">
                        <label for="">Описание</label>
                        <textarea name="operations[items][0][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="operations[items][1][title]" class="form-control">
                        <label for="">Описание</label>
                        <textarea name="operations[items][1][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="operations[items][2][title]" class="form-control">
                        <label for="">Описание</label>
                        <textarea name="operations[items][2][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="operations[items][3][title]" class="form-control">
                        <label for="">Описание</label>
                        <textarea name="operations[items][3][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
