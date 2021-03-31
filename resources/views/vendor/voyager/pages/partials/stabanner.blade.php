<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Блок гарантии</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input
                    type="text"
                    name="stabanner[title]"
                    class="form-control"
                    value="{{ $dataTypeContent->exists && isset($dataTypeContent->stabanner) ? $dataTypeContent->stabanner->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Описание</label>
            <textarea
                    type="text"
                    name="stabanner[description]"
                    class="form-control"
                    rows="5">{{ $dataTypeContent->exists && isset($dataTypeContent->stabanner) ? $dataTypeContent->stabanner->description : ''}}</textarea>
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Текст кнопки</label>
            <input type="text" name="stabanner[button_text]" class="form-control"
                   value="{{ ($dataTypeContent->exists && isset($dataTypeContent->stabanner)) ? isset($dataTypeContent->stabanner->button_text) ? $dataTypeContent->stabanner->button_text : '' : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Ссылка</label>
            <input type="text" name="stabanner[link]" class="form-control"
                   value="{{ $dataTypeContent->exists && isset($dataTypeContent->stabanner) ? $dataTypeContent->stabanner->link : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Картинка</label>
            @if($dataTypeContent->exists && isset($dataTypeContent->stabanner->image))
                <img src="{{ asset('storage/' . $dataTypeContent->stabanner->image) }}" class="img-responsive"
                     alt="{{ $dataTypeContent->exists && isset($dataTypeContent->stabanner) ? $dataTypeContent->stabanner->title : ''}}"
                     style="max-width: 300px;">
            @endif
            <input type="file" name="stabanner[image]" accept="image/*">
        </div>
    </div>
</div>