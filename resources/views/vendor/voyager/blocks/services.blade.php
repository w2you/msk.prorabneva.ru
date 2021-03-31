<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Услуги</h2>
        <div class="form-group col-md-10 col-md-offset-1">
            <select name="services[]" class="select2" multiple>
                @if(count($pageData->allServices) > 0)
                    @foreach($pageData->allServices as $service)
                        <option value="{{ $service->id }}" @if(array_key_exists($service->id, $pageData->services->keyBy('id')->toArray())){{ 'selected' }}@endif>{{ $service->title }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
