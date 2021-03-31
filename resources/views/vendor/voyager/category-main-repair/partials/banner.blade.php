<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Блок гарантии</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input
                    type="text"
                    name="banner[title]"
                    class="form-control"
                    value="{{ $dataTypeContent->exists && isset($dataTypeContent->banner) ? $dataTypeContent->banner->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Описание</label>
            <textarea
                    type="text"
                    name="banner[description]"
                    class="form-control"
                    rows="5">{{ $dataTypeContent->exists && isset($dataTypeContent->banner) ? $dataTypeContent->banner->description : ''}}</textarea>
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Текст кнопки</label>
            <input type="text" name="banner[button_text]" class="form-control"
                   value="{{ ($dataTypeContent->exists && isset($dataTypeContent->banner)) ? isset($dataTypeContent->banner->button_text) ? $dataTypeContent->banner->button_text : '' : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Ссылка</label>
            <input type="text" name="banner[link]" class="form-control"
                   value="{{ $dataTypeContent->exists && isset($dataTypeContent->banner) ? $dataTypeContent->banner->link : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Картинка</label>
            @if($dataTypeContent->exists && isset($dataTypeContent->banner->image))
                <img src="{{ asset('storage/' . $dataTypeContent->banner->image) }}" class="img-responsive"
                     alt="{{ $dataTypeContent->exists && isset($dataTypeContent->banner) ? $dataTypeContent->banner->title : ''}}"
                     style="max-width: 300px;">
            @endif
            <input type="file" name="banner[image]" accept="image/*">
        </div>
    </div>
</div>