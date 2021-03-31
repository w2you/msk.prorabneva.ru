<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Партнеры</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <select name="partners[]" id="partners" class="select2" multiple>
                @if(count($pageData->allPartners) > 0)
                    @foreach($pageData->allPartners as $partners)
                        <option value="{{ $partners->id }}" @if(array_key_exists($partners->id, $pageData->partners->keyBy('id')->toArray())){{ 'selected' }}@endif>{{ $partners->title }}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>