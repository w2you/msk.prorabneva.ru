@if(isset($selectRegion) && $selectRegion)
    <div id='regions_select'>
        <div class='all_popup'>
            <div class='close region_close'>
                <img src='{{ asset('frontend/images/close_icon.png') }}' alt='Прораб Нева'>
            </div>
            <div class="popup_block">
                <div class='title_popup'>Ваш город:</div>
                <div class='text'>Неправильно определили? Выберите из списка: </div>
                    @widget('regions',['region'=>$selectRegion])
            </div>
        </div>
    </div>
@endif