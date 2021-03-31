<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">3d тур слайды</h2>
        <div class="form-group col-md-10 col-md-offset-1">
            <select name="tour3d[]" class="select2" multiple>
                @if(count($pageData->allTour3d) > 0)
                    @foreach($pageData->allTour3d as $tour)
                        <option
                                value="{{ $tour->id }}"
                                @if(!is_null($pageData->tour3d))
                                    @if(array_key_exists($tour->id, $pageData->tour3d->keyBy('id')->toArray())){{ 'selected' }}@endif
                                @endif>
                            {{ $tour->title }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
