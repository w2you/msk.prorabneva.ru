<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Блок "Почему мы"</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Название</label>
            <input type="text" name="why_we[title]" class="form-control"
                   value="{{ $dataTypeContent->exists && isset($dataTypeContent->why_we) ? $dataTypeContent->why_we->title : ''}}">
        </div>
        <div class="col-md-10 col-md-offset-1 form-group">
            <label for="">Описание</label>
            <textarea type="text" name="why_we[description]" class="form-control"
                      rows="3">{{ $dataTypeContent->exists && isset($dataTypeContent->why_we) ? $dataTypeContent->why_we->description : ''}}</textarea>
        </div>

        <div class="col-md-10 col-md-offset-1 form-group">
            <h3 class="text-center">Преимушества</h3>
            <div class="row">
                @if(isset($dataTypeContent->why_we->feature) && count($dataTypeContent->why_we->feature) > 0)
                    @foreach($dataTypeContent->why_we->feature as $key => $feature)
                        <div class="col-md-4">
                            <label for="">Название</label>
                            <input type="text" name="why_we[feature][{{ $key }}][title]" class="form-control"
                                   value="{{ $feature->title }}">
                            <label for="">Описание</label>
                            <textarea name="why_we[feature][{{ $key }}][description]" rows="3"
                                      class="form-control">{{ $feature->description }}</textarea>
                            <label for="">Картинка</label>
                            @if(isset($feature->image))
                                <img src="{{ asset('storage/' . $feature->image) }}" class="img-responsive"
                                     alt="{{ $feature->title }}"
                                     style="max-width: 100%;">
                            @endif
                            <input type="file" name="why_we[feature][{{ $key }}][image]" accept="image/*"
                                   style="max-width: 100%;">
                        </div>
                    @endforeach
                    <hr class="visible-xs visible-sm">
                @else
                    <div class="col-md-4">
                        <label for="">Название</label>
                        <input type="text" name="why_we[feature][0][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="why_we[feature][0][description]" rows="3"
                                  class="form-control"></textarea>
                        <label for="">Картинка</label>
                        <input type="file" name="why_we[feature][0][image]" accept="image/*"
                               style="max-width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <label for="">Название</label>
                        <input type="text" name="why_we[feature][1][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="why_we[feature][1][description]" rows="3"
                                  class="form-control"></textarea>
                        <label for="">Картинка</label>
                        <input type="file" name="why_we[feature][1][image]" accept="image/*"
                               style="max-width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <label for="">Название</label>
                        <input type="text" name="why_we[feature][2][title]" class="form-control"
                               value="">
                        <label for="">Описание</label>
                        <textarea name="why_we[feature][2][description]" rows="3"
                                  class="form-control"></textarea>
                        <label for="">Картинка</label>
                        <input type="file" name="why_we[feature][2][image]" accept="image/*"
                               style="max-width: 100%;">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
