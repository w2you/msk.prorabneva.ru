<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Блок "Ремонт и дизайн"</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Картинка</label>
            @if(isset($pageData->designRepairs->image))
                <img src="{{ asset('storage/' . $pageData->designRepairs->image) }}" style="max-width: 300px"
                     class="img-responsive">
            @endif
            <input type="file" name="designRepairs[image]" accept="image/*" style="max-width: 100%;">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <div class="row">
                @if(!is_null($pageData->designRepairs))
                    @foreach($pageData->designRepairs->feature as $key => $feature)
                        <div class="col-md-6">
                            <label for="">Название</label>
                            <input type="text" name="designRepairs[feature][{{ $key }}][title]" class="form-control"
                                   value="{{ $feature->title }}">
                            <label for="">Описание</label>
                            <textarea name="designRepairs[feature][{{ $key }}][description]" rows="3"
                                      class="form-control">{{ $feature->description }}</textarea>
                            <label for="">Текст кнопки</label>
                            <input type="text" name="designRepairs[feature][{{ $key }}][button_text]"
                                   value="@isset($feature->button_text){{ $feature->button_text }}@endisset"
                                   class="form-control">
                        </div>
                        <hr class="visible-xs visible-sm">
                    @endforeach
                @else
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="designRepairs[feature][0][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="designRepairs[feature][0][description]" rows="3"
                                  class="form-control"></textarea>
                        <label for="">Текст кнопки</label>
                        <input type="text" name="designRepairs[feature][0][button_text]" class="form-control">
                    </div>
                    <hr class="visible-xs visible-sm">
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="designRepairs[feature][1][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="designRepairs[feature][1][description]" rows="3"
                                  class="form-control"></textarea>
                        <label for="">Текст кнопки</label>
                        <input type="text" name="designRepairs[feature][1][button_text]" class="form-control">
                    </div>
                    <hr class="visible-xs visible-sm">
                @endif
            </div>
        </div>
    </div>
</div>
