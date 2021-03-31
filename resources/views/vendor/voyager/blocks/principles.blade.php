<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Блок "Наши принципы"</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input type="text" name="principles[title]" class="form-control"
                   value="{{ !is_null($pageData->principles) ? $pageData->principles->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Описание</label>
            <textarea type="text" name="principles[description]" class="form-control"
                      rows="3">{{ !is_null($pageData->principles) ? $pageData->principles->description : ''}}</textarea>
        </div>

        <div class="col-md-10 col-md-offset-1 form-group">
            <h3 class="text-center">Принципы</h3>
            <div class="row">
                @if(isset($pageData->principles->item) && count($pageData->principles->item) > 0)
                    @foreach($pageData->principles->item as $key => $item)
                        <div class="col-md-6">
                            <label for="">Название</label>
                            <input type="text" name="principles[item][{{ $key }}][title]" class="form-control"
                                   value="{{ $item->title }}">
                            <label for="">Описание</label>
                            <textarea name="principles[item][{{ $key }}][description]" rows="3"
                                      class="form-control">{{ $item->description }}</textarea>
                            <label for="">Картинка</label>
                        </div>
                        <hr class="visible-xs visible-sm">
                    @endforeach
                @else
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="principles[item][0][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="principles[item][0][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <hr class="visible-xs visible-sm">
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="principles[item][1][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="principles[item][1][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <hr class="visible-xs visible-sm">
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="principles[item][2][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="principles[item][2][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <hr class="visible-xs visible-sm">
                    <div class="col-md-6">
                        <label for="">Название</label>
                        <input type="text" name="principles[item][3][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="principles[item][3][description]" rows="3"
                                  class="form-control"></textarea>
                    </div>
                    <hr class="visible-xs visible-sm">
                @endif
            </div>
        </div>
    </div>
</div>
