<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Блок "ОТВЕТЫ НА ВОПРОСЫ"</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input type="text" name="faq[title]" class="form-control"
                   value="{{ $dataTypeContent->exists && $dataTypeContent->faq ? $dataTypeContent->faq->title : ''}}">
        </div>

        <div class="faq-list">
            @if(isset($dataTypeContent->faq->items) && count( $dataTypeContent->faq->items) > 0)
                @foreach( $dataTypeContent->faq->items as $key => $item)
                    <div class="col-md-10 col-md-offset-1 faq-item" data-id="{{ $key }}">
                        <div class="form-group">
                            <label for="">Вопрос</label>
                            <textarea name="faq[items][{{$key}}][question]" rows="3"
                                      class="form-control">{{ $item->question }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Ответ</label>
                            <textarea name="faq[items][{{$key}}][answer]" rows="3"
                                      class="form-control">{{ $item->answer }}</textarea>
                        </div>
                        <button class="btn btn-danger pull-right remove-faq" type="button">Удалить вопрос-ответ</button>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            @else
                <div class="faq-item col-md-10 col-md-offset-1" data-id="0">
                    <div class="form-group">
                        <label for="">Вопрос</label>
                        <textarea name="faq[items][0][question]" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Ответ</label>
                        <textarea name="faq[items][0][answer]" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-danger pull-right remove-faq" type="button">Удалить вопрос-ответ</button>
                </div>
            @endif
        </div>
        <div class="col-md-10 col-md-offset-1">
            <button type="button" id="add-faq" class="btn btn-primary pull-right">Добавить вопрос-ответ</button>
        </div>
    </div>
</div>
