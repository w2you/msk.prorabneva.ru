@extends('frontend.layouts.master')

@section('content')

    @if(in_array($segment,[
    "kapitalnyiy-remont" ,
    "kosmeticheskiy-remont",
    "dizaynerskiy-remont" ,
    "remont-pod-kluch",
    "remont-kvartir-v-novostrojke",
    "otdelka-kvartir",
    ]))
        @widget('banner_slide',['id'=> $categoryService['banner_slide_id'],'slide_link' => $categoryService['banner_slide_link']])
        <section class='navigation'>
            <div class='wrapper_new'>
                <ul class='clearfix'>
                    <li>
                        <a href='#'>
                            <img src='/frontend/images/home_icon.png'>
                        </a>
                    </li>
                    <li>
                        <a href='#'>{{ $categoryService->title }}</a>
                    </li>
                </ul>
            </div>
        </section>
    @endif

    @include('frontend.services.partials.header')
    {{--@widget('repair', ['childCategory' => $categoryService])--}}
    @include('frontend.blocks.repairs')
    {{-- @widget('price_list',[
    'title' => 'на ремонт квартир',
    'priceListCategories' => $priceListCategories,
    ]) --}}


    {{--<section class="price_list_new">
        <div class="wrapper_new">
            <div class="title_section">Расценки на отдельные ремонтные работы</div>
            <div class="flex_block">
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_1_D.png"/>
                        <img src="/frontend/images_3/ic_1_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">Выравнивание стен</div>
                        <p>
                            Грунтовка поверхности,
                            <br/>
                            оштукатуривание стен
                        </p>
                        <div class="price">от 265 руб./м2</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_2_D.png"/>
                        <img src="/frontend/images_3/ic_2_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">Поклейка обоев</div>
                        <p>
                            Грунтовка поверхности,
                            <br/>
                            поклейка обоев
                        </p>
                        <div class="price">от 195 руб./м2</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_3_D.png"/>
                        <img src="/frontend/images_3/ic_3_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">Покраска стен</div>
                        <p>
                            Грунтовка поверхности,
                            <br/>
                            нанесение в/д краски
                        </p>
                        <div class="price">от 133 руб./м2</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_4_D.png"/>
                        <img src="/frontend/images_3/ic_4_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">Облицовка кафелем</div>
                        <p>
                            Грунтовка поверхности, облицовка
                            <br/>
                            плиткой, затирка швов
                        </p>
                        <div class="price">от 885 руб./м2</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_5_D.png"/>
                        <img src="/frontend/images_3/ic_5_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">Выравнивание полов</div>
                        <p>
                            Подготовка основания,
                            <br/>
                            устройство финишной стяжки
                        </p>
                        <div class="price">от 255 руб./м2</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_6_D.png"/>
                        <img src="/frontend/images_3/ic_6_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">Укладка ламината</div>
                        <p>
                            Настил подложки, укладка
                            <br/>
                            ламината
                        </p>
                        <div class="price">от 885 руб./м2</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_7_D.png"/>
                        <img src="/frontend/images_3/ic_7_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">
                            Устройство гипрочных
                            <br/>
                            потолков
                        </div>
                        <p>
                            Устройство потолка ГКЛ,
                            <br/>
                            малярные работы по потолку
                        </p>
                        <div class="price">от 900 руб./м2</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_8_D.png"/>
                        <img src="/frontend/images_3/ic_8_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">
                            Электромонтажные
                            <br/>
                            работы
                        </div>
                        <p>
                            Устройство гнезда подрозетника,
                            <br/>
                            монтаж розетки / выключателя
                        </p>
                        <div class="price">от 500 руб.</div>
                    </div>
                </div>
                <div class="block">
                    <div class="icon">
                        <img src="/frontend/images_3/ic_9_D.png"/>
                        <img src="/frontend/images_3/ic_9_M.png"/>
                    </div>
                    <div class="text_price_list_item">
                        <div class="name_block">
                            Декоративная
                            <br/>
                            штукатурка
                        </div>
                        <p>
                            Грунтовка, нанесение
                            <br/>
                            раствора, полировка
                        </p>
                        <div class="price">от 1164 руб./м2</div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    @include('frontend.blocks.calculator')

    {{--<section class='object object_page_4'>
        <div class='wrapper_new'>
            <div class='object_title  yandex_metrica'>
                Так просто…
            </div>
            <p>Оставьте заявку, и мы сделаем расчет сметы вашего ремонта за сутки и абсолютно бесплатно. Рассчитаем все
                виды
                работ, объемы и стоимость, проконсультируем по технологиям и этапам ремонтных работ.</p>
            <a href='#' class="call_open_popup_button">Заказать расчет сметы</a>
        </div>
    </section>--}}

    @include('frontend.blocks.trial')

    @include('frontend.blocks.whyWe')
    @widget('reviews', ['title' => 'НАС БЛАГОДАРЯТ И РЕКОМЕНДУЮТ КЛИЕНТЫ'])

    {{--<section class='tur_3d  tur_3d_stock   tur_3d_repairs_rooms tur_3d_home_page' style="display:none;">--}}
        {{--<div class='wrapper_new'>--}}
            {{--<h2 class='title_section'>3D-ТУРЫ РЕМОНТОВ</h2>--}}
            {{--<div class='under_title_section'>Посмотрите максимально реалистичные интерактивные туры по нашим объектам--}}
                {{--после--}}
                {{--ремонта--}}
            {{--</div>--}}
            {{--<div class='tur_slider'>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen='' frameborder='0' height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=juV4G9jXPQi' width='853'></iframe>--}}
                {{--</div>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen='' frameborder='0' height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=9GAYFAn4fJ8' width='853'></iframe>--}}
                {{--</div>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen='' frameborder='0' height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=14NqnuQnZPK' width='853'></iframe>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    @widget('tour3d')
    @if(isset($segment))
        @if($segment == 'remont-pod-klyuch')
            <section class='questions '>
                <div class='wrapper_new clearfix'>
                    <div class='questions_title_block'>
                        <div class='icon'>
                            <img src='{{ asset('frontend/images/icon_quest.png') }}' alt="Услуги - Прораб Нева">
                        </div>
                        <p>Ответы на вопросы по запросу «Ремонт под ключ»</p>
                    </div>
                    <div class='questions_block'>
                        <ul>
                            <li>
                                <h3>1. Что такое ремонт под ключ?</h3>
                                <p>Термин «под ключ» в последнее время все шире и чаще используется в сфере услуг и
                                    означает работу – максимально полную, завершенную (как правило, с минимизацией
                                    привлечения заказчика). В такое помещение можно сразу заселяться - остается только
                                    меблировка и техника. По итогам вы получаете полностью готовое жилье, в котором уже
                                    ничего не придется делать.</p>
                            </li>
                            <li>
                                <h3>2.На какие этапы делится ремонт под ключ?</h3>
                                <p>
                                    Обычно процессы организованы в следующей последовательности:<br>
                                    1) Запись на замер. Технический специалист Прораб НЕВА сделает нужные обмеры,
                                    зафиксирует все ваши идеи и желания, чтобы потом они были отражены в смете.<br>
                                    2) Согласование сметы, заключение договора, знакомство с прорабом.<br>
                                    3) Закупка и доставка материалов. Когда окончательная смета одобрена, приобретением
                                    материалов может заниматься прораб, который ведет объект, или клиент - в зависимости
                                    от того, что удобней с точки зрения временных и финансовых затрат.<br>
                                    3) Черновые работы, включающие полную разводку электрики и сантехники, монтаж
                                    перегородок, стяжка и заливка полов, штукатурка и шпаклевка стен / потолков.
                                    Возможно проведение предварительных демонтажных работ. <br>
                                    4) Чистовые работы. Это важный этап, потому что недостатки чистовой отделки будут
                                    видны невооруженным взглядом. Эстетическая составляющая ремонта играет огромную
                                    роль. Данные работы включают: укладку ламината / паркета, поклейку обоев, отделку
                                    потолка, монтаж осветительных приборов, работы по облицовке плиткой, монтаж дверей,
                                    плинтусов, оконных и дверных наличников.<br>
                                    5) Дополнительные работы. Например, помощь в установке встраиваемой техники или
                                    мебели.<br>
                                </p>
                            </li>
                            <li>
                                <h3>3. Сколько стоит ремонт квартиры под ключ?</h3>
                                <p>
                                    Стоимость такого ремонта обуславливается целым набором факторов. Прежде всего,
                                    определение «под ключ» - само по себе достаточно расплывчатое. Даже если считать,
                                    что оно значит максимально законченный ремонт, то нужно учитывать размеры, состояние
                                    и возраст помещения, планируемые работы, выбор материалов, есть ли дизайн-проект,
                                    пожелания заказчика и много другое. Предоставить ответ на этот вопрос, если речь
                                    идет не о комплексном предложении в новостройке, без конкретной информации о
                                    квартире - невозможно.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        @endif
        @if($segment == "otdelka-kvartir")
            {{--
                                    <section class='questions '>
                                        <div class='wrapper_new clearfix'>
                                <div class='questions_title_block'>
                                    <div class='icon'>
                                        <img src='{{ asset('frontend/images/icon_quest.png') }}'  alt="Услуги - Прораб Нева">
                                    </div>
                                    <p>
                                        ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ «Отделка квартир»
                                    </p>
                                </div>
                                <div class='questions_block'>
                                    <ul>
                                        <li>
                                            <h3>1. Что такое черновая и чистовая отделка квартиры?</h3>
                                            <p>
                                                Что собой представляет черновая отделка?<br>
                                                Часто можно услышать это словосочетание при разговоре о квартире. Что же под этим
                                                подразумевается? Попробуем вдуматься в суть: в такой квартире не производится
                                                никаких косметических отделочных работ. Что же реализовано? Песчано-цементная стяжка
                                                полов помещения, выравнивание стен, а также потолков, установлена входная дверь,
                                                проведено отопление, водоснабжение и электричество. <br>
                                                Ещё нет сантехники и межкомнатных дверей. <br>
                                                Проще говоря, черновая отделка - это подготовка ко всем последующим косметическим и
                                                декоративным работам. Т.е. проделанные 50% ремонта. Жить там еще невозможно или
                                                точно очень неуютно. Лучше не стоит так поступать.<br>
                                                Иногда люди решают продолжить ремонт своими руками с этого этапа. В таком случае
                                                стоит весьма трезво оценивать свои навыки. Неудачная чистовая отделка может
                                                визуально перечеркнуть плюсы даже самой лучшей и качественной черновой отделки. К
                                                тому же плохо установленная сантехника может испортить жизнь кому угодно. Всё это
                                                будет сильно обидней, чем сразу заплатить профессионалам. <br>
                                                А какая отделка называется чистовой?<br>
                                                Вы скорее всего много раз слышали разговоры о чистовой отделке. Давайте разберёмся
                                                подробней в том, что это. В квартире с чистовой отделкой уже можно жить.
                                                Предполагается, что чаще всего в неё сразу заселяются. То есть квартира отвечает
                                                всем эстетическим и функциональным требованиям. В ней красиво и уютно, а все бытовые
                                                технические вопросы решены. Не надо никаких дополнительных работ: выполнена
                                                электропроводка, стены покрашены или оклеены обоями, уложены полы, проведены все
                                                работы по потолкам, установлены унитаз, раковины, смесители, ванна или душевая
                                                кабина в санузле.
                                            </p>
                                        </li>
                                        <li>
                                            <h3>2.Сколько стоит отделка квартиры?</h3>
                                            <p>
                                                Это зависит от того, в каком виде жилище на данный момент, что за работы
                                                запланированы (разновидности и этапы), какого класса, а также вида материалы могут
                                                понадобиться и какова их стоимость, идет ли речь о ремонте с привлечением
                                                профессионального дизайнера или более-менее типовом решении. Предсказать стоимость,
                                                не зная всех деталей, невозможно.
                                            </p>
                                        </li>
                                        <li>
                                            <h3>3.
                                                Что такое отделка квартиры под ключ?
                                            </h3>
                                            <p>
                                                Часто это словосочетание можно увидеть в рекламе. Какого-то четкого определения,
                                                признанного всеми – нет, но приблизительных определений хватит для общего понимания
                                                термина.<br>
                                                Это совокупность всех этапов ремонтного процесса помещения, предполагающая полную
                                                реализацию всех планов и идей касательно отделочных работ. <br>
                                                Квартира с отделкой под ключ полностью готова, можно жить.<br>
                                                Это синоним чистовой отделки (хотя, конечно, лучше это уточнять у той фирмы, с
                                                которой вы сотрудничаете)
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                        </div>
                                    </section>
            --}}
        @endif
        @if($segment == "kapital-nyj-remont")
            <section class='questions '>
                <div class='wrapper_new clearfix'>
                    <div class='questions_title_block'>
                        <div class='icon'>
                            <img src='{{ asset('frontend/images/icon_quest.png') }}' alt="Услуги - Прораб Нева">
                        </div>
                        <p>
                            ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ «Капитальный ремонт»
                        </p>
                    </div>
                    <div class='questions_block'>
                        <ul>
                            <li>
                                <h3>1.Что такое капитальный ремонт?</h3>
                                <p>
                                    Это полное изменение жилища из-за полной широкомасштабной внутренней и внешней
                                    переделки. Стоит понимать, что вас ждут ощутимые траты, и результат будет не быстро.<br>
                                    Этот ремонт условно делится на три этапа.<br>
                                    1. В самом начале составляется вся необходимая проектная документация. (В принципе,
                                    если вы обратились в хорошую фирму, скорее всего так будет и в случае других видов
                                    ремонта. Этот момент нужен повсеместно)<br>
                                    2. Дальше идёт черновой ремонт – это демонтаж старых элементов и подготовка квартиры
                                    к поклейке обоями или покраске стен, приведению в порядок потолка и пола, монтажу
                                    сантехники и пр., т.е. полноценная подготовка помещения к дальнейшим косметическим
                                    работам. Это важный момент, хоть результаты его и будут скрыты от невооружённого
                                    взгляда.<br>
                                    3. Чистовой ремонт – отделка стен, настил полов, установка или окраска потолка и
                                    другие работы, которые оговорены в проекте. Внешние красота, уют и стиль создаются
                                    именно в этот момент.<br>
                                    Можно заключить, что капитальный ремонт является полной переделкой жилища. Результат
                                    будет удовлетворять ваши желания и исправит недочёты, которые были раньше.
                                </p>
                            </li>
                            <li>
                                <h3>
                                    2.Сколько стоит капитальный ремонт квартиры?
                                </h3>
                                <p>
                                    Окончательную стоимость можно определить только исходя из пожеланий заказчика,
                                    измерения площади жилого помещения и определения текущего состояния.<br>
                                    Цены формируются исходя из состояния квартиры, текущей стоимости видов услуг и
                                    материалов. Определение стоимости происходит на основании сметно-проектной
                                    документации, которую составляют исполнитель по данным, полученным от заказчика.<br>
                                    В целом, определить стоимость можно попробовать и самостоятельно с помощью
                                    тщательных замеров, а также подробного изучения рынка материалов и оказываемых
                                    услуг. Конечно, многое может подсказать здравый смысл – чем больше помещение и чем
                                    больше перемен и интересных работ планируется, тем дороже выйдет капитальный ремонт.
                                    Однако лучше обратиться к специалисту, так как он поможет вам учесть то, что может
                                    быть заметно только опытному человеку.
                                </p>
                            </li>
                            <li>
                                <h3>
                                    3.С чего начинается капитальный ремонт?

                                </h3>
                                <p>
                                    Он начинается с оценки текущего состояния квартиры и объема необходимых работ. После
                                    этого ремонтники приступают к проектной документации. При формировании нужных
                                    документов выясняются все пожелания клиента, сопоставляются с техническими
                                    возможностями и ограничениями и идёт подсчет итоговых финансовых затрат. Советуем
                                    обратить внимание на то, чтобы была составлена ясная документация.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        @endif
        @if($segment == "kosmeticheskiy-remont")
            <section class='questions '>
                <div class='wrapper_new clearfix'>
                    <div class='questions_title_block'>
                        <div class='icon'>
                            <img src='{{ asset('frontend/images/icon_quest.png') }}' alt="Услуги - Прораб Нева">
                        </div>
                        <p>
                            ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ «Косметический ремонт»
                        </p>
                    </div>
                    <div class='questions_block'>
                        <ul>
                            <li>
                                <h3>1.Что такое косметический ремонт?</h3>
                                <p>
                                    Косметический ремонт – это улучшение внешнего состояния вашего жилья. Стоит выбрать
                                    его, если важна скорость и экономия.<br>
                                    Он включает в себя отделку поверхностей, без внесения изменений в планировку,
                                    инженерные системы или любые другие элементы конструкции. Состоит из демонтажа
                                    отделки, частичного выравнивания поверхностей, шпатлевания, покраски, поклейки обоев
                                    и укладки напольного покрытия.<br>
                                    Идеальный вариант, когда хочется что-то поменять. Жить станет уютней и дом станет
                                    выглядеть аккуратней, не стыдно будет привести гостей и родных.

                                </p>
                            </li>
                            <li>
                                <h3>
                                    2.Чем отличается косметический ремонт от капитального?
                                </h3>
                                <p>
                                    Основное отличие косметического ремонта от капитального – это количество и полнота
                                    выполняемых работ. Можно говорить о специфики работ, но через количество рассмотреть
                                    различие значительно проще. При капитальном возможна даже перепланировка квартиры,
                                    включая новый водопровод, сантехнику и электропроводку. При косметическом ремонте –
                                    основной упор делается на обновление вида уже имеющихся элементов –всех
                                    поверхностей, окон, дверей, плинтусов и наличников. Такой ремонт пройдёт чище и
                                    быстрее. В новых домах чаще нужен именно этот тип.<br>
                                    Капитальный ремонт почти всегда включает в себя косметический.<br>
                                    Порой люди своими силами «делают косметику», но это не всегда лучшее решение – тут
                                    важно адекватно оценивать свои умения и навыки. Решение в любом случае за вами, но
                                    помните: переделывать потом всегда дольше, да и неудобней, нежели сразу сделать
                                    хорошо.

                                </p>
                            </li>
                            <li>
                                <h3>
                                    3.Сколько стоит косметический ремонт?

                                </h3>
                                <p>
                                    Это трудно вычислить без большого количества информации и знаний. Лучше пригласить
                                    специалиста, чтобы корректно рассчитать объем и стоимость нужных работ, основываясь
                                    на замерах помещения. Если составленная компанией смета вас не устроит, ее всегда
                                    можно скорректировать, убрав какие-то её части. Еще можно сэкономить при покупке
                                    материалов, если покупать их самим и в заранее разведанных местах.<br>
                                    При желании попробовать рассчитать ценник можно самим, изучив рыночную стоимость
                                    материалов и ремонтных услуг.<br>
                                    В целом, самим прикинуть стоимость такого ремонта проще, так как он охватывает
                                    меньше работ. Удачи при занятии подсчётами.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        @endif
        @if($segment == "dizajnerskij-remont")
            <section class='questions '>
                <div class='wrapper_new clearfix'>
                    <div class='questions_title_block'>
                        <div class='icon'>
                            <img src='{{ asset('frontend/images/icon_quest.png') }}' alt="Услуги - Прораб Нева">
                        </div>
                        <p>
                            ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ «Дизайнерский ремонт»
                        </p>
                    </div>
                    <div class='questions_block'>
                        <ul>
                            <li>
                                <h3>1.Что такое дизайнерский ремонт? </h3>
                                <p>
                                    Это ремонт по заранее разработанному дизайнером проекту.<br>
                                    Такой проект поможет сделать ваш интерьер уникальным, современным и
                                    функциональным.<br>
                                    Дизайн-проект - это комплекс работ дизайнера, включающий: <br>
                                    1) Художественные коллажи и 3D-визуализацию. <br>
                                    2) Обмерные планы и планировочные чертежи.<br>
                                    3) Создание ведомости с подбором материалов для отделки.<br>
                                    4) Авторский надзор за ремонтными работами.<br>
                                    5) Помощь в закупке мебели и материалов.<br>
                                    6) Декорирование интерьера по окончании работ.<br>
                                    Дизайнерский ремонт может быть сделан по полному, он описан выше, или частичному
                                    дизайн-проекту.
                                </p>
                            </li>
                            <li>
                                <h3>
                                    2.Сколько стоит дизайнерский ремонт?
                                </h3>
                                <p>
                                    Стоимость дизайнерского ремонта квартиры зависит от выбранного вами комплекса услуг
                                    дизайнера.<br>
                                    У нас представлены три пакета услуг, чтобы вы могли подобрать наиболее подходящий
                                    под ваши задачи, желания и бюджет.<br>
                                    Пакет «Стандарт» 1000 р/м2<br>
                                    Пакет «Комфорт» 1400 р/м2<br>
                                    Пакет «Эксклюзив» 1800 р/м2<br>
                                    Познакомиться с тем, что включают эти пакеты услуг, вы можете, перейдя по ссылке:
                                    <a href="https://www.prorabneva.ru/service/dizajn-interera-kvartir-i-ofisov">https://www.prorabneva.ru/service/dizajn-interera-kvartir-i-ofisov</a>
                                    <br>
                                    Вы обязательно найдете что-то подходящее.
                                </p>
                            </li>
                            <li>
                                <h3>
                                    3.Какие стили дизайнерского ремонта популярны сегодня?


                                </h3>
                                <p>
                                    Сегодня наиболее популярны решения жилого пространства без использования пышной
                                    мебели, вычурных и дорогостоящих материалов или произведений искусства.<br>
                                    Назовем пять популярных стилей:<br>
                                <ul>
                                    <li>Современный стиль – безоговорочный лидер. Широкий и емкий стиль: собирательное
                                        понятие для различных модных и актуальных сейчас направлений. Для него важно
                                        ощущение свободного пространства без «захламления». Чистота цвета и простота его
                                        сочетаний, четкие линии. Часто можно увидеть металлические или стеклянные
                                        предметы интерьера или поверхности.
                                    </li>
                                    <li>Минимализм тоже очень популярен. Он напоминает современный стиль, только
                                        является еще более упрощенным, функциональным. Чистота линий здесь доведена до
                                        абсолюта. Цвета подчеркнуто нейтральные, либо белый с яркими цветовыми блоками.
                                        Обстановка, соответственно, тоже простая и рациональная – с минимальным
                                        количеством предметов мебели и декора.
                                    </li>
                                    <li>Промышленный стиль интерьера (чаще можно встретить «лофт») воплощает
                                        пространство в уютную версию склада, заброшенной фабрики или чердака. В
                                        интерьере здесь преследует ощущение незавершенности, недоделанности отдельных
                                        деталей: часто используются кирпичные стены, трубы, неприкрытые системы
                                        вентиляции. Очень важна умелая комбинация всех этих индустриальных элементов с
                                        чем-то ультрасовременным, дорогим и даже роскошным.
                                    </li>
                                    <li>Скандинавский стиль – это наглядное изображение простоты жизни и обстановки,
                                        присущая северным европейским народностям. В последнее время его очень полюбили:
                                        за легкость, естественность, экологичность и простую эстетику. Такой интерьер
                                        отличают простые линии, много белого цвета, большое количество текстиля и
                                        природных элементов.
                                    </li>
                                    <li>Богемский стиль или «бохо» всегда сочетает сразу несколько направлений и
                                        стилевых решений и приемлет наибольшее количество различных деталей. Это яркая
                                        смесь из эклектики, гламура и китча. Здесь гармонично будут смотреться сделанные
                                        своими руками сувениры или безделушки, привезенные из путешествий, винтажные
                                        вещицы и деревенская мебель.
                                    </li>
                                </ul>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        @endif
    @endif

    <div id='popup_portfolio_slider'>
        <div class='popup_block'>
            <div class='close'></div>
        </div>
    </div>

    @include('frontend.services.partials.questions', ['slug' => $categoryService->slug])


    @if($segment == "dizaynerskiy-remont")
        @widget('blog_block',['category' => 'dizajn-v-detalyah','region'=>$selectRegion])
        @include('frontend.repairs.partials.description', ['mainCategory' => $categoryService,'has_padd_40' => true])
    @elseif(in_array($segment,["kapitalnyiy-remont" ,"kosmeticheskiy-remont" ,"remont-pod-kluch" ,"git remont-kvartir-v-novostrojke" ,"otdelka-kvartir" ]))
        @widget('blog_block',['region'=>$selectRegion])
        @include('frontend.repairs.partials.description', ['mainCategory' => $categoryService,'has_padd_40' => true])
    @else
        @include('frontend.repairs.partials.description', ['mainCategory' => $categoryService])
    @endif


    @include('frontend.modals.call_order')

@endsection
