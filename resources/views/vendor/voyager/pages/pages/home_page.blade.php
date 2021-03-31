@if(count($pageData->restSlides) > 0)
    <div class="form-group col-md-12">
        <label for="restSlides">Добавить существующие слайд</label>
        <select name="restSlides" id="restSlides" class="select2" multiple data-url="{{ route('getSlide') }}">
            @foreach($pageData->restSlides as $slide)
                <option value="{{ $slide->id }}">{!! $slide->title !!}</option>
            @endforeach
        </select>
    </div>
@endif
{{-- Мета тэги --}}
@include('vendor.voyager.blocks.meta_tags')

{{-- Информация о ремонте --}}
@include('vendor.voyager.blocks.repair_info')

{{-- Мета тэги --}}
{{--@include('vendor.voyager.blocks.repairs')--}}

{{-- Блок гарантии --}}
{{-- @include('vendor.voyager.blocks.banner') --}}

{{-- 3d тур слайды--}}
@include('vendor.voyager.blocks.3d_tour')

{{-- Блок "Почему мы" --}}
@include('vendor.voyager.blocks.why_we')

{{-- Блок "Ремонт и дизайн" --}}
@include('vendor.voyager.blocks.design_repairs')

{{-- Блок "ОТВЕТЫ НА ВОПРОСЫ" --}}
@include('vendor.voyager.blocks.faq')

@if($dataTypeContent->region->is_default == 0)
    @include('vendor.voyager.pages.partials.stabanner')
@endif


{{-- Услуги
 @include('vendor.voyager.blocks.services')
 --}}
