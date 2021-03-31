<div class='select_block select_1'>
    <div class='select_block_1 remove_active'>
        <select class='styler_new select2' data-placeholder='' name="main_cat_id"
                data-test="{{json_encode($filter['main_cat_id'])}}">
            <option value="0">Все объекты</option>
        @foreach($mainCategories as $key => $category)
                <option value="{{ $category->id }}"
                        @if($filter['main_cat_id'] == $category->id){{ 'selected' }}@endif
                        data-main-category="{{ $category->slug }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div class='select_block_2 remove_active' style="@if($filter['main_cat_id'] == 2){{ 'display: inline-block !important' }}@endif">
        <select class='styler_new_1 select2' data-placeholder='' name="cat">
            <option value="0">Все объекты</option>
            <option data-category="kitchen" value="kitchen" @if($filter['cat'] === 'kitchen'){{ 'selected' }}@endif>
                Кухни
            </option>
            <option data-category="bathroom" value="bathroom" @if($filter['cat'] === 'bathroom'){{ 'selected' }}@endif>
                Сан.узлы
            </option>
            <option data-category="room" value="room" @if($filter['cat'] === 'room'){{ 'selected' }}@endif>
                Комнаты
            </option>
        </select>
    </div>
</div>