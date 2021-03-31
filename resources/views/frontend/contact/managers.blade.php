<section class='menagers clearfix'>
    <div class='text_arrow'>
        <div class='title_services'>Менеджеры</div>
        <p>Всегда готовы помочь и ответить на любые ваши вопросы, связанные с ремонтом и отделкой различных
            помещений,
            квартир, офисов, загородных домов.</p>
        <div class='next_prev clearfix'>
            <div class='prev'></div>
            <div class='next'></div>
        </div>
    </div>
    <div class='manager_block'>
        <div class='bg_block'></div>
        <div class='manager_slider'>
            @if(count($managers) > 0)
                @foreach($managers as $manager)
                    <div class='block'>
                        <div class='manager_img'>
                            <div class='img'>
                                <img src="{{ asset('storage/' . $manager->image) }}" style="object-fit: cover"  alt='Менеджер - Прораб Нева'>
                            </div>
                        </div>
                        <div class='name_block'>
                            <p>{{ preg_split('/[ ]+/',trim($manager->name))[1] ?? '' }}</p>
                            <p>{{ preg_split('/[ ]+/',trim($manager->name))[0] ?? '' }}</p>
                        </div>
                        <div class='connection'>
                            <p>{{ $manager->description }}</p>
                            <a class="mail" href='mailto:{{ $manager->email }}'>{{ $manager->email }}</a>
                        </div>
                        <div class='line'></div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
