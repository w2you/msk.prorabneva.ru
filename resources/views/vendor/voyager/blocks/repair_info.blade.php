<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Информация о ремонте</h2>
        <div class="form-group col-md-10 col-md-offset-1">
            <label for="top_title">Верхнее название</label>
            <textarea name="repairInfo[top_title]" id="top_title"
                      class="richTextBoxCustom form-control">@if (isset($pageData->repairInfo) && isset($pageData->repairInfo->top_title)){{ $pageData->repairInfo->top_title }}@endif</textarea>
        </div>
        <div class="form-group col-md-10 col-md-offset-1">
            <label>Верхнее описание</label>
            <textarea name="repairInfo[top_description]" id="top_description"
                      class="richTextBoxCustom form-control">@if (isset($pageData->repairInfo) && isset($pageData->repairInfo->top_title)){{ $pageData->repairInfo->top_description }}@endif</textarea>
        </div>
        <div class="form-group col-md-10 col-md-offset-1">
            <label>Нижнее название</label>
            <input name="repairInfo[bottom_title]" id="bottom_title"
                   class="richTextBoxCustom form-control" value="@if (isset($pageData->repairInfo) && isset($pageData->repairInfo->top_title)){{ $pageData->repairInfo->bottom_title }}@endif">
{{--            <textarea name="repairInfo[bottom_title]" id="bottom_title"
                      class="richTextBoxCustom form-control">@if (isset($pageData->repairInfo) && isset($pageData->repairInfo->top_title)){{ $pageData->repairInfo->bottom_title }}@endif</textarea>--}}
        </div>
        <div class="form-group col-md-10 col-md-offset-1">
            <label>Нижнее описание</label>
            <textarea name="repairInfo[bottom_description]" id="bottom_description"
                      class="richTextBoxCustom form-control">@if (isset($pageData->repairInfo) && isset($pageData->repairInfo->top_title)){{ $pageData->repairInfo->bottom_description }}@endif</textarea>
        </div>
        <div class="form-group col-md-10 col-md-offset-1">
            @if (isset($pageData->repairInfo) && isset($pageData->repairInfo->image))
                <img src="{{ asset('storage/' . $pageData->repairInfo->image) }}"
                     alt="{{ $pageData->repairInfo->top_title }}"
                     class="img-responsive" style="max-width: 300px;">
            @endif
            <input type="file" name="repairInfo[image]" class="form-control">
        </div>
        <div class="form-group col-md-10 col-md-offset-1" id="stat-list">
            <h2 class="text-center">Статистики</h2>
            @if(!isset($pageData->repairInfo) || !isset($pageData->repairInfo->stats))
                @include('vendor.voyager.pages.partials.stat', ['statId' => 0, 'stat' => null])
                @include('vendor.voyager.pages.partials.stat', ['statId' => 1, 'stat' => null])
                @include('vendor.voyager.pages.partials.stat', ['statId' => 2, 'stat' => null])
                @include('vendor.voyager.pages.partials.stat', ['statId' => 3, 'stat' => null])
            @else
                @foreach($pageData->repairInfo->stats as $key => $stat)
                    @include('vendor.voyager.pages.partials.stat', ['statId' => $key, 'stat' => $stat])
                @endforeach
            @endif
            <button type="button" class="btn btn-primary pull-right" id="add_stat">Добавить статистику</button>
        </div>
    </div>
</div>