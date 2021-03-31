{{--$dataTypeContent--}}
@include('vendor.voyager.blocks.advantages')
@if($dataTypeContent->exists &&  $dataTypeContent->parentCategory)
    @if(get_class($dataTypeContent) === App\Models\CategoryRepair::class)
        @if($dataTypeContent->parentCategory->slug === \App\Models\CategoryMainRepair::FLAT_REPAIR && $dataTypeContent->slug != \App\Models\CategoryRepair::OFFISE_REPAIR )
            @include('vendor.voyager.blocks.prices')
            @include('vendor.voyager.blocks.sale_promotions')
        @elseif($dataTypeContent->parentCategory->slug === \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR || $dataTypeContent->slug == \App\Models\CategoryRepair::OFFISE_REPAIR)
            @include('vendor.voyager.blocks.operations')
            @include('vendor.voyager.category-repair.partials.what_we_do')
        @endif
    @endif
    @if($dataTypeContent->parentCategory->slug !== \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR &&
            $dataTypeContent->parentCategory->slug !== \App\Models\CategoryMAinRepair::FLAT_REPAIR && $dataTypeContent->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
        @include('vendor.voyager.blocks.price_list')
    @endif
@endif
@include('vendor.voyager.category-repair.partials.banner')
@include('vendor.voyager.category-repair.partials.why_we')
@include('vendor.voyager.blocks.3d_tour')
@include('vendor.voyager.category-repair.partials.faq')
@include('vendor.voyager.category-repair.partials.design_repairs')
@include('vendor.voyager.blocks.meta_tags')
