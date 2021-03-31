{{--$dataTypeContent--}}
@if($dataTypeContent->slug !== \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @include('vendor.voyager.blocks.advantages')
@else
    @include('vendor.voyager.blocks.operations')
    @include('vendor.voyager.category-repair.partials.what_we_do')
    {{--
    @include('vendor.voyager.blocks.partners')
    --}}
@endif
@include('vendor.voyager.category-main-repair.partials.banner')
@include('vendor.voyager.category-main-repair.partials.why_we')
@include('vendor.voyager.blocks.3d_tour')
@include('vendor.voyager.category-main-repair.partials.faq')
@include('vendor.voyager.category-main-repair.partials.design_repairs')
@include('vendor.voyager.blocks.meta_tags')
