<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Преимущества</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <div class="advantage-list">
                @if($dataTypeContent->exists && $dataTypeContent->advantages)
                    @if(count($dataTypeContent->advantages) > 0)
                        @foreach($dataTypeContent->advantages as $key => $advantage)
                            <div class="advantage-item" data-id="{{ $key }}">
                                <label for="">Название</label>
                                <input type="text" class="form-control" name="advantages[{{ $key }}][title]"
                                       value="{{ $advantage['title'] }}">
                                <label for="">Описание</label>
                                <input type="text" class="form-control" name="advantages[{{ $key }}][description]"
                                       value="{{ $advantage['description'] }}">
                                <label for="">Иконка</label>
                                @if(isset($advantage['image']))
                                    <br><img src="{{ asset('storage/' . $advantage['image']) }}" alt=""
                                             style="max-width: 300px">
                                @endif
                                <input type="file" name="advantages[{{ $key }}][image]">
                                <button type="button" class="btn btn-danger pull-right remove-advantage">Удалить
                                    преимущество
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        @endforeach
                    @endif
                @else
                    <div class="advantage-item" data-id="0">
                        <label for="">Название</label>
                        <input type="text" class="form-control" name="advantages[0][title]">
                        <label for="">Описание</label>
                        <input type="text" class="form-control" name="advantages[0][description]">
                        <label for="">Иконка</label>
                        <input type="file" name="advantages[0][image]">
                        <button type="button" class="btn btn-danger pull-right remove-advantage">Удалить преимущество
                        </button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="advantage-item" data-id="1">
                        <label for="">Название</label>
                        <input type="text" class="form-control" name="advantages[1][title]">
                        <label for="">Описание</label>
                        <input type="text" class="form-control" name="advantages[1][description]">
                        <label for="">Иконка</label>
                        <input type="file" name="advantages[1][image]">
                        <button type="button" class="btn btn-danger pull-right remove-advantage">Удалить преимущество
                        </button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="advantage-item" data-id="2">
                        <label for="">Название</label>
                        <input type="text" class="form-control" name="advantages[2][title]">
                        <label for="">Описание</label>
                        <input type="text" class="form-control" name="advantages[2][description]">
                        <label for="">Иконка</label>
                        <input type="file" name="advantages[2][image]">
                        <button type="button" class="btn btn-danger pull-right remove-advantage">Удалить преимущество
                        </button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="advantage-item" data-id="3">
                        <label for="">Название</label>
                        <input type="text" class="form-control" name="advantages[3][title]">
                        <label for="">Описание</label>
                        <input type="text" class="form-control" name="advantages[3][description]">
                        <label for="">Иконка</label>
                        <input type="file" name="advantages[3][image]">
                        <button type="button" class="btn btn-danger pull-right remove-advantage">Удалить преимущество
                        </button>
                        <div class="clearfix"></div>
                    </div>
                @endif
                <button type="button" class="btn btn-primary pull-right" id="add-advantage">Добавить преимущество
                </button>
            </div>
        </div>
    </div>
</div>