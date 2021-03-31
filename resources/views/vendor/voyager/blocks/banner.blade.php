<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Блок гарантии</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input type="text" name="banner[title]" class="form-control"
                   value="{{ !is_null($pageData->banner) ? $pageData->banner->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Описание</label>
            <textarea type="text" name="banner[description]" class="form-control" rows="5">{{ !is_null($pageData->banner) ? $pageData->banner->description : ''}}
            </textarea>
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Ссылка</label>
            <input type="text" name="banner[link]" class="form-control"
                   value="{{ !is_null($pageData->banner) ? $pageData->banner->link : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Текст кнопки</label>
            <input type="text" name="banner[button_text]" class="form-control"
                   value="{{ !is_null($pageData->banner) ? $pageData->banner->link ? isset($pageData->banner->button_text) : '' : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Картинка</label>
            @if(!is_null($pageData->banner))
            <img src="{{ asset('storage/' . $pageData->banner->image) }}" class="img-responsive"
                 alt="{{ !is_null($pageData->banner) ? $pageData->banner->title : ''}}" style="max-width: 300px;">
            @endif
            <input type="file" name="banner[image]" accept="image/*">
        </div>
    </div>
</div>