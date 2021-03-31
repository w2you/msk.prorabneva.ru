<section class='kinds_repairs
'>
    <div class='kinds_block'>
        <div class='img_block'>
            <img src='{{ asset('frontend/images/kinds_img.jpg') }}'  alt='Прораб Нева'>
        </div>
        <div class='links_block'>
            <div class='title_section'>
                <div class="title_h2">Виды
                <br>
                ремонта квартир</div>
            </div>
            <div class='under_title_section'>Выберите интересующий вас раздел из списка</div>
            <ul>
                @foreach($mainCategory->childCategories as $category)
                    <li>
                        <a href='{{ route('getRepairMainCategory', [ 'sub_slug' => $category->slug]) }}'>{{ $category->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
