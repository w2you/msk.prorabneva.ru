<div class='portfolio_block' style="margin-bottom: 45px">
@foreach($repairs as $repair)

        <div
                class='block show_img_popup'
                style="height: 250px"
                data-main-category="{{ $repair->category->parentCategory->slug }}"
                data-category="{{ $repair->category->id == 7 ? 'bathroom' : $repair->category->id == 6 ? 'kitchen' : 'room' }}"
                data-id="{{ $repair->id }}"
                data-image-before-after="{{  count($repair->imagesBefore) || !is_null($repair->image_after) }}"
                data-image-tour="{{ count($repair->tour3d) > 0 }}"
                data-url="{{ route('getRepair') }}">
            <div class='img_block'>
                <div class='portfoloi_block_hover'></div>
                <img
                        src='{{ asset('storage/' . $repair->imagemain) }}'
                        style="min-width: 100%; max-height: 100%; object-fit: cover" alt="{{ $repair->name }} - Прораб Нева">
            </div>
            <div class='info_portfolio'>
                <a href='#'>{{ $repair->name }}</a>
                <div class='info_text_portfolio'>
                    <p>{{ $repair->address }}</p>
                    <div class='m2'>
                         ({{ $repair->area }} м
                        <span>2</span>
                        )
                    </div>
                    <strong>{{ number_format($repair->budget, 0, '.', ' ') }} руб.</strong>
                    <strong>{{ $repair->term }} дней</strong>
                </div>
            </div>
        </div>
    @endforeach
</div>
