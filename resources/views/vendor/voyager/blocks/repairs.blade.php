<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Примеры работ</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <select name="repairs[]" id="repairs" multiple>
            @if(isset($pageData->allRepairs))
                    @if(count($pageData->allRepairs) > 0)
                        @foreach($pageData->allRepairs as $repair)
                            <option value="{{ $repair['id'] }}" @if(array_key_exists($repair['id'], $pageData->repairs->keyBy('id')->toArray())){{ 'selected' }}@endif >{{ $repair['name'] }}
                                ({{$repair['id']}})
                            </option>
                        @endforeach
                    @endif
                @endif
            </select>
            {{-- <select name="repairs[]" id="repairs" class="select2" multiple>
                 @if(count($pageData->allRepairs) > 0)
                     @foreach($pageData->allRepairs as $repair)
                         <option value="{{ $repair->id }}" @if(array_key_exists($repair->id, $pageData->repairs->keyBy('id')->toArray())){{ 'selected' }}@endif>{{ $repair->name }}({{$repair->id}})</option>
                     @endforeach
                 @endif
             </select>--}}
        </div>
    </div>
</div>
