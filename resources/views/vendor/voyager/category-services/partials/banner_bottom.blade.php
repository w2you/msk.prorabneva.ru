<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Нижняя форма бронирования</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input
                    type="text"
                    name="banner_bottom[title]"
                    class="form-control"
                    value="{{ $dataTypeContent->exists && isset($dataTypeContent->banner_bottom) ? $dataTypeContent->banner_bottom->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Описание</label>
            <textarea
                    type="text"
                    name="banner_bottom[description]"
                    class="form-control"
                    rows="5">{{ $dataTypeContent->exists && isset($dataTypeContent->banner_bottom) ? $dataTypeContent->banner_bottom->description : ''}}</textarea>
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Текст кнопки</label>
            <input type="text" name="banner_bottom[button_text]" class="form-control"
                   value="{{ ($dataTypeContent->exists && isset($dataTypeContent->banner_bottom)) ? isset($dataTypeContent->banner_bottom->button_text) ? $dataTypeContent->banner_bottom->button_text : '' : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Ссылка</label>
            <input type="text" name="banner_bottom[link]" class="form-control"
                   value="{{ $dataTypeContent->exists && isset($dataTypeContent->banner_bottom) ? $dataTypeContent->banner_bottom->link : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Картинка</label>
            @if($dataTypeContent->exists && isset($dataTypeContent->banner_bottom->image))
                <img src="{{ asset('storage/' . $dataTypeContent->banner_bottom->image) }}" class="img-responsive"
                     alt="{{ $dataTypeContent->exists && isset($dataTypeContent->banner_bottom) ? $dataTypeContent->banner_bottom->title : ''}}"
                     style="max-width: 300px;">
            @endif
            <input type="file" name="banner_bottom[image]" accept="image/*">

            <label for="">
                <input type="checkbox" name="banner_bottom[image_clear]" class="clear_image">
                Удалить изображение
            </label>

        </div>
    </div>
</div>