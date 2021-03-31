@extends('frontend.layouts.master')
@section('content')

  {{--@widget('banner_slide',['id'=> 13,'slide_link' => 'hide'])--}}
  <section class='navigation'>
    <div class='wrapper_new'>
      <ul class='clearfix'>
        <li>
          <a href='#'>
            <img src='/frontend/images/home_icon.png'>
          </a>
        </li>
        <li><a href="/actsii">Акции и предложения</a></li>
        <li><a href="#">Дизайн-проект в подарок</a></li>
      </ul>
    </div>
  </section>

  <section class='technical_design_project'>
    <div class='wrapper_new'>
      <h1 class='title_section_m'>
        Технический дизайн-проект
        <span>в подарок</span>
      </h1>
      <div class='under_title_section_m'>
        При заказе индивидуального комплексного ремонта квартиры мы дарим вам профессиональный технический
        дизайн-проект, разработанный специально для вас опытными дизайнерами.
        <br>
        В состав технического дизайн-проекта входят:
      </div>
    </div>
    <div class='technical_design_project_all_blocks'>
      <div class='block_technical'>
        <div class='block_technical_wrapper'>
          <div class='block_technical_title'>Обмерный план всех помещений</div>
          <div class='block_technical_left clearfix'>
            <div class='img_block_technical'>
              <a data-lightbox='technical' data-title='' href='/frontend/images_3/technical_img_1.jpg'>
                <div class='technical_hover_block'></div>
                <img src='/frontend/images_3/technical_img_1.jpg'>
              </a>
            </div>
            <div class='text_block_technical'>
              <div class='text_area_technical'>
                <p>Выполняем замеры с фотофиксацией по всей квартире, в том числе окна, простенки, делаем отметки
                  по трубам, балкам, колоннам, коробам и вентиляционным каналам. План БТИ не годится потому, что в
                  нём общие размеры и их точность далека от 100%.</p>
                <p>Точно фиксируем высоту потолков индивидуально по помещениям. Если ваша квартира свободной
                  планировки, могут быть отклонения внутри одного пространства, поэтому берем в расчёт несколько
                  точек, чтобы не допустить ошибки.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='block_technical'>
        <div class='block_technical_wrapper'>
          <div class='block_technical_title'>План расстановки мебели</div>
          <div class='block_technical_right clearfix'>
            <div class='img_block_technical img_block_technical_bg_2'>
              <a data-lightbox='technical' data-title='' href='/frontend/images_3/technical_img_2.jpg'>
                <div class='technical_hover_block'></div>
                <img src='/frontend/images_3/technical_img_2.jpg'>
              </a>
            </div>
            <div class='text_block_technical'>
              <div class='text_area_technical'>
                <p>Разрабатываем эргономичное планировочное решение с учетом:</p>
                <ul>
                  <li>образа жизни и привычек обитателей квартиры;</li>
                  <li>наличия, количества и возраста детей;</li>
                  <li>присутствия домашних питомцев.</li>
                </ul>
                <p>Расставляем мебель с учетом функции помещения и ваших потребностей, создаем функциональные зоны,
                  заботимся о визуальном балансе. Учитываем нормы прохода между предметами, способ открывания
                  дверей, отдаление от греющих поверхностей и т.п.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='block_technical'>
        <div class='block_technical_wrapper'>
          <div class='block_technical_title'>План размещения светильников</div>
          <div class='block_technical_left clearfix'>
            <div class='img_block_technical img_block_technical_bg_3'>
              <a data-lightbox='technical' data-title='' href='/frontend/images_3/technical_img_3.jpg'>
                <div class='technical_hover_block'></div>
                <img src='/frontend/images_3/technical_img_3.jpg'>
              </a>
            </div>
            <div class='text_block_technical'>
              <div class='text_area_technical'>
                <p>Рассчитываем освещение по комнатам. Выбираем тип освещения с учетом функционального зонирования:
                  где должны висеть красивые люстры, а куда встроить технический свет, причем так, чтобы
                  обеспечить хорошее освещение рабочим зонам, а не крышке холодильника или встроенному шкафу.</p>
                <p>Регулируем нормы освещения исходя из ваших предпочтений, но, как правило, предусматриваем
                  хороший свет на кухне и в санузлах.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='block_technical'>
        <div class='block_technical_wrapper'>
          <div class='block_technical_title'>План привязки светильников на выключатели</div>
          <div class='block_technical_right clearfix'>
            <div class='img_block_technical img_block_technical_bg_4'>
              <a data-lightbox='technical' data-title='' href='/frontend/images_3/technical_img_4.jpg'>
                <div class='technical_hover_block'></div>
                <img src='/frontend/images_3/technical_img_4.jpg'>
              </a>
            </div>
            <div class='text_block_technical'>
              <div class='text_area_technical'>
                <p>Соединяем все источники света в «цепь» и определяемся с местоположением выключателей для всех
                  групп светильников. Рассчитываем:</p>
                <ul>
                  <li>количество выключателей;</li>
                  <li>с одним источником включения или проходные;</li>
                  <li>одно- или двухклавишные;</li>
                  <li>необходимость диммирования.</li>
                </ul>
                <p>Учитываем расстановку мебели и маршруты передвижения по квартире.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='block_technical'>
        <div class='block_technical_wrapper'>
          <div class='block_technical_title'>План размещения розеток и выключателей</div>
          <div class='block_technical_left clearfix'>
            <div class='img_block_technical img_block_technical_bg_5'>
              <a data-lightbox='technical' data-title='' href='/frontend/images_3/technical_img_5.jpg'>
                <div class='technical_hover_block'></div>
                <img src='/frontend/images_3/technical_img_5.jpg'>
              </a>
            </div>
            <div class='text_block_technical'>
              <div class='text_area_technical'>
                <p>Разрабатываем схему электроточек, чтобы все электроприборы имели рядом розетки, а вам не
                  пришлось спотыкаться об удлинители и многочисленные провода. Составляем план с запасом – в
                  расчете не только на габаритную и постоянно работающую технику.</p>
                <p>Определяем высоту размещения розеток и выключателей из расчёта параметров мебели, крупных
                  электроприборов, дверей, чтобы они не прятались за диван или стиральную машину, а ими было
                  всегда удобно пользоваться.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='technical_design_house'>
    <div class='wrapper_new'>
      <div class='title_section_house'>
        Преимущества технического
        <br>
        дизайн-проекта
        <br>
        для заказчика ремонта квартиры:
      </div>
      <div class='technical_design_house_blocks'>
        <div class='block'>
          <div class='icon'>
            <img src='/frontend/images_3/technical_ic_1.png'>
          </div>
          <div class='name_block'>
            Экономия до 25% от
            <br>
            стоимости ремонта
          </div>
          <p>
            Изначально грамотный подход
            <br>
            позволит избежать лишних затрат,
            <br>
            связанных с переделками
            <br>
            и дополнительными работами
          </p>
        </div>
        <div class='block'>
          <div class='icon'>
            <img src='/frontend/images_3/technical_ic_2.png'>
          </div>
          <div class='name_block'>
            Эргономичное
            <br>
            пространство
          </div>
          <p>
            Дизайн-проект обеспечит рациональное
            <br>
            использование имеющегося
            <br>
            пространства, эффективную планировку
            <br>
            и инженерную составляющую
          </p>
        </div>
        <div class='block'>
          <div class='icon'>
            <img src='/frontend/images_3/technical_ic_3.png'>
          </div>
          <div class='name_block'>
            Дополнительные
            <br>
            гарантии
          </div>
          <p>
            Наличие технической документации –
            <br>
            дополнительная гарантия того, что все
            <br>
            будет сделано ровно так, как вы
            <br>
            изначально придумали с дизайнером
          </p>
        </div>
      </div>
      <div class='tel_info_block'>
        <div class='title_tel_block'>Хотите ремонт с дизайн-проектом в подарок?</div>
        <div class='tel_number'>
          <strong>Оставьте заявку:</strong>
          {{--<a href='tel:+78127777777'>+7 812 777-77-77</a>--}}
          <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
            {{$selectRegion->phone}}
          </a>
        </div>
      </div>
    </div>
  </section>


  <section class="conditions_promotion conditions_promotion_hause">
    <div class="wrapper_new clearfix">
      <div class="questions_title_block">
        <div class="title_h2">Условия акции:</div>
      </div>
      <div class="questions_block">
        <ol>
          <li>
            1. В акции могут участвовать заказы по индивидуальному
            комплексному ремонту
            <br/>
            квартир (детали уточняйте у менеджеров).
          </li>
          <li>
            2. Акция действует для договоров, заключенных с 1 марта 2019
            года.
          </li>
          <li>
            3. Акция может суммироваться с другими акциями и скидками.
            Подробности
            <br/>
            уточняйте у менеджеров.
          </li>
        </ol>
      </div>
    </div>
  </section>
  <section class="object object_stock">
    <div class="wrapper_new">
      <div class="object_title">
        Так просто…
      </div>
      <p>
        Оставьте заявку, и мы сделаем расчет сметы вашего ремонта.
        Выполним замер, рассчитаем все виды работ, объемы и стоимость, проконсультируем по технологиям и этапам ремонтных работ — всё это за 500 руб..
      </p>
      <a class="call_open_popup_button" href="#">Заказать расчет сметы</a>
    </div>
  </section>
  @include('frontend.blocks.whyWe')
  {{--<section class="tur_3d tur_3d_home_page tur_3d_technical">--}}
    {{--<div class="wrapper_new">--}}
      {{--<h2 class="title_section_new">3D туры</h2>--}}
      {{--<div class="under_title_section">--}}
        {{--Посмотрите максимально реалистичные интерактивные туры по нашим--}}
        {{--объектам после ремонта--}}
      {{--</div>--}}
      {{--<div class="tur_slider">--}}
        {{--<div class="block">--}}
          {{--<div class="owl_slid"></div>--}}
          {{--<iframe--}}
              {{--allow="vr"--}}
              {{--allowfullscreen=""--}}
              {{--frameborder="0"--}}
              {{--height="480"--}}
              {{--src="https://my.matterport.com/show/?m=juV4G9jXPQi"--}}
              {{--width="853"--}}
          {{--></iframe>--}}
        {{--</div>--}}
        {{--<div class="block">--}}
          {{--<div class="owl_slid"></div>--}}
          {{--<iframe--}}
              {{--allow="vr"--}}
              {{--allowfullscreen=""--}}
              {{--frameborder="0"--}}
              {{--height="480"--}}
              {{--src="https://my.matterport.com/show/?m=9GAYFAn4fJ8"--}}
              {{--width="853"--}}
          {{--></iframe>--}}
        {{--</div>--}}
        {{--<div class="block">--}}
          {{--<div class="owl_slid"></div>--}}
          {{--<iframe--}}
              {{--allow="vr"--}}
              {{--allowfullscreen=""--}}
              {{--frameborder="0"--}}
              {{--height="480"--}}
              {{--src="https://my.matterport.com/show/?m=14NqnuQnZPK"--}}
              {{--width="853"--}}
          {{--></iframe>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</section>--}}
  @widget('tour3d')
  <section class="text_area_home">
    <div class="wrapper_new">
      <div class="text_area_new">
        <h2>Технический дизайн-проект квартиры</h2>
        <p>
          Технический дизайн-проект представляет собой дизайн-проект квартиры,
          только без эскизной составляющей. Это техническая рабочая
          документация, включающая комплект проектных решений для грамотного
          проведения ремонтных работ в квартире, также дизайн-проект ремонта
          квартиры включает планировку будущего пространства.
        </p>
        <h2>В чем отличия технического проекта от экскизного?</h2>
        <p>
          Эскизный проект – это визуализация будущего интерьера, наброски
          расположения мебели и стилевых решений дизайнера.
        </p>
        <p>
          В противоположность эскизному, технический дизайн-проект квартиры
          представляет собой пакет рабочей документации для начала ремонта. В
          проект включают детализированную точную информацию о помещении:
          планы и чертежи. Эта часть очень важна и полезна для специалистов,
          реализующих дизайн-проект ремонта квартиры.
        </p>
        <p>
          Вся проектная документация оформляется в виде строительных чертежей
          и планов.
        </p>
        <h2>Что входит в дизайн-проект ремонта квартиры</h2>
        <p>
          Полнота и правильность технического проекта – основа успешной его
          реализации. Следует отнестись к подготовке проектной документации
          серьезно. Технический дизайн-проект ремонта квартиры включает в
          себя: планировочное пространственное решение, набор рабочих
          чертежей, план общего освещения и подсветки, вместе с тем не
          охватывает такие блоки как: подбор материалов для черновой и
          чистовой отделки, а также рекомендации по декору в помещении.
        </p>
        <p>
          Технические проекты, разработанные профессионалами, позволяют точно
          выполнить все задачи, с которыми сталкивается любой подрядчик, и
          полностью осознать, как воплотить дизайн-проект ремонта квартиры в
          жизнь!
        </p>
        <h2>Процесс реализации технического проекта квартиры</h2>
        <p>
          Замерный план. Выполняется на объекте будущего ремонта: делается
          осмотр, фотофиксация и обмеры всех поверхностей. Затем полученные
          данные заносятся в компьютер, дизайнер составляет цифровой обмерный
          план всех помещений.
        </p>
        <p>
          Целевое предназначение. На следующем этапе с заказчиком обсуждается
          целевое предназначение каждой из комнат, а также расположение в ней
          каких-либо конструкций, деталей интерьера, габаритной бытовой
          техники, мебели и т.п. Своим клиентам мы можем рекомендовать
          оптимальное расположение комнат с точки зрения их предназначения для
          достижения максимально рационального использования полезной площади.
        </p>
        <p>
          План расстановки мебели. Оптимальное решение расстановки мебели и
          оборудования – важная составляющая будущей планировки квартиры,
          данный блок основан на знаниях дизайнеров эргономики и правил
          зонирования помещений, нормативных стандартов, ваших пожеланий и
          фантазии специалиста, работающего над проектом.
        </p>
        <p>
          План размещения светильников. Правильное освещение с учетом
          количества естественного света и предназначения помещения – основа
          создания уютного и современного жилья. Дизайнеры выполнят план с
          указанием потолочных люстр, встраиваемых светильников, подвесных и
          навесных осветительных приборов с разметкой всех электровыводов и
          других технических моментов.
        </p>
        <p>
          План привязки светильников на выключатели. После определения точек
          освещения дизайнер распределит и привяжет к ним расположение
          выключателей (с пометкой способа подключения, размерной привязкой и
          т.п.).
        </p>
        <p>
          План размещения розеток и выключателей. На основании плана
          размещения мебели и освещения в квартире дизайнер разрабатывает
          схему расположения розеток (силовых, влагозащитных, интернет и TV) и
          электровыводов для всего оборудования и техники с размерными
          привязками и обозначением других технических моментов.
        </p>
        <p>
          В нашей работе мы используем самое современное и актуальное
          программное обеспечение, которое обеспечивает максимальную
          продуктивность и широкий инструментарий при работе с проектами.
        </p>
        <p>
          Если Вам необходимо заказать полный дизайн-проект с эскизной частью,
          обращайтесь в компанию «Прораб НЕВА». Одним из наших преимуществ
          можно назвать и предоставление широкого выбора дизайнерских решений
          для одного и того же помещения. При этом учитываются все технические
          особенности квартиры, детали интерьера, а также вкусы и пожелания
          самого заказчика, его приверженность к конкретному стилю.
        </p>
        <h2>Технический дизайн-проект от компании «Прораб НЕВА»</h2>
        <p>
          Получив технический дизайн-проект квартиры в нашей компании, Вы
          получите полное понимание о ходе выполнения ремонтных работ,
          технический проект, а также комплект профессиональной рабочей
          документации.
        </p>
        <p>
          Технический проект станет подробным руководством к действию по
          дальнейшему ремонту. Пакет документов будет подготовлен с учетом
          норм и ограничений, распространяющихся на перепланировку квартир.
        </p>
        <p>
          Обратившись к нашим специалистам, вы можете быть уверены, что
          получите оптимальное решение по обустройству вашего жилья. Компания
          «Прораб НЕВА» на рынке строительства и ремонта сумела заработать
          объективную репутацию надежного и ответственного исполнителя.
        </p>
        <p>
          В нашем активе множество успешных проектов для квартир различных
          планировок и площадей. Достигнуть такого результата удалось
          благодаря индивидуальному подходу к каждому клиенту и высокой
          квалификации наших дизайнеров.
        </p>
      </div>
    </div>
  </section>
  <section class="back_to_top"></section>
  <div id="popup_footer">
    <div class="all_popup">
      <div class="close">
        <img src="/frontend/images/close_icon.png"/>
      </div>
      <div class="popup_block">
        <div class="all_text_scrolling">
          <div class="text_area_popup">
            <span style="font-size: 14px;font-weight:bold;">ПОЛИТИКА ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
            <p>
              Дата размещения на Сайте «30» июня 2016 года
              <br/>
              Настоящее Пользовательское соглашение является публичным
              документом администратора сайта prorabneva.ru (далее –
              Администратор) и определяет порядок использования посетителями
              (далее - Посетитель) сайта prorabneva.ru, принадлежащего
              Администратору, и обработки, хранения и иного использования
              информации, получаемой Администратором от Посетителя на сайте
              Администратора. Администратор сайта может изменить в любой
              момент данное Пользовательское соглашение без уведомления
              Посетителя сайта.
            </p>
            <span style="font-size: 14px;font-weight:bold;">ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</span>
            <ul>
              <li>
                a) Данные – иные данные о Пользователе (не входящие в понятие
                персональных данных).
              </li>
              <li>
                b) Законодательство – действующее законодательство Российской
                Федерации.
                <br/>
                Оператор (Администратор сайта) – Прораб НЕВА, самостоятельно
                или совместно с другими лицами организующее и (или)
                осуществляющее обработку персональных данных, а также
                определяющее цели обработки персональных данных, состав
                персональных данных, подлежащих обработке, действия
                (операции), совершаемые с персональными данными.
              </li>
              <li>
                c) Персональные данные – любая информация, относящаяся к прямо
                или косвенно определённому или определяемому физическому лицу
                (Пользователю).
                <br/>
                Пользователь (Посетитель) сайта – лицо, имеющее доступ к Сайту
                посредством сети Интернет и использующее сайт.
              </li>
              <li>
                d) Предоставление персональных данных – действия, направленные
                на раскрытие Персональных данных определённому лицу или
                определённому кругу лиц.
              </li>
              <li>
                e) Сайт – сайт, расположенный в сети Интернет, где
                пользователь оставляет персональные данные.
              </li>
              <li>
                f) Субъект персональных данных – Пользователь (физическое
                лицо), к которому относятся Персональные данные.
              </li>
            </ul>
            <ol>
              <li>
                <span style="font-size: 14px;font-weight:bold;">ОБЩИЕ ПОЛОЖЕНИЯ</span>
                <ul>
                  <li>
                    1.1. Настоящая Политика в отношении обработки персональных
                    данных разработана в соответствии с положениями
                    Федерального закона от 27.07.2006 №152-ФЗ «О персональных
                    данных» (с изменениями и дополнениями), другими
                    законодательными и нормативными правовыми актами и
                    определяет порядок работы с Персональными данными
                    Пользователей и (или) передаваемых Пользователями и
                    требования к обеспечению их безопасности.
                  </li>
                </ul>
              </li>
              <li>
                <span style="font-size: 14px;font-weight:bold;">УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                <ul>
                  <li>
                    2.1. Обработка Персональных данных Администратором сайта
                    допускается при наличии согласия Пользователя на обработку
                    его Персональных данных. Посетитель сайта, оставляя
                    какую-либо информацию, относящуюся прямо или косвенно к
                    определенному или определяемому физическому лицу (далее -
                    Персональные данные), подтверждает, что ознакомился с
                    данным Пользовательским соглашением и согласен с ним.
                  </li>
                  <li>
                    2.2. Администратор сайта не раскрывает третьим лицам и не
                    распространяет Персональные данные без согласия
                    Пользователя, если иное не предусмотрено
                    Законодательством.
                  </li>
                  <li>
                    2.3. Посетитель сайта понимает и соглашается с тем, что
                    предоставление Администратору какой-либо информации, не
                    имеющей никакого отношения к целям сайта, запрещено. Такой
                    информацией может являться информация, касающаяся
                    состояния здоровья, интимной жизни, национальности,
                    религии, политических, философских и иных убеждений
                    Посетителя, а равно и информация, которая является
                    коммерческой, банковской и иной тайной Посетителя сайта.
                  </li>
                </ul>
              </li>
              <li>
                <span
                    style="font-size: 14px;font-weight:bold;">СБОР И ОБРАБОТКА ПЕРСОНАЛЬНЫХ ДАННЫХ И ИНЫХ ДАННЫХ</span>
                <ul>
                  <li>
                    3.1. В отношении всех сообщаемых Персональных данных
                    Посетитель дает Администратору полное согласие на их
                    обработку. При этом сбор Персональных данных может
                    осуществляться как посредством Сайта, так и в офисе
                    Администратора сайта.
                  </li>
                  <li>
                    3.2. Оператор обрабатывает Персональные данные в следующих
                    целях:
                  </li>
                  <li>
                    4.2.1. осуществления деятельности, предусмотренной̆
                    действующим законодательством РФ
                  </li>
                  <li>
                    3.2.2. выполнения обязательств Оператора перед
                    Пользователем по оказанию услуг;
                  </li>
                  <li>
                    3.2.3. для связи с Пользователями в случае необходимости,
                    в том числе для направления уведомлений, информации и
                    запросов, связанных с оказанием услуг, а также обработки
                    заявлений, запросов и заявок Пользователей;
                  </li>
                  <li>
                    3.2.4. для улучшение качества услуг, оказываемых
                    Оператором;
                  </li>
                  <li>
                    4.2.5. для продвижения услуг на рынке путем осуществления
                    прямых контактов с Пользователями;
                  </li>
                  <li>
                    3.2.6. для проведения статистических и иных исследований
                    на основе обезличенных персональных данных.
                  </li>
                  <li>
                    3.3. Посетитель в соответствии с ч. 1 ст. 18 Федерального
                    закона «О рекламе» дает Администратору свое согласие на
                    получение сообщений рекламного характера по указанным
                    контактным данным.
                  </li>
                  <li>
                    3.4. Посетитель самостоятельно несёт ответственность за
                    нарушение законодательства при использовании сайта
                    Администратора.
                  </li>
                  <li>
                    3.5. Администратор не несет никакой ответственности в
                    случае нарушения законодательства Посетителем, в том
                    числе, не гарантирует, что содержимое сайта соответствует
                    целям Посетителя сайта.
                  </li>
                  <li>
                    3.6. Посетитель сайта несет самостоятельно ответственность
                    в случае, если были нарушены права и законные интересы
                    третьих лиц, при использовании сайта Администратора,
                    Посетителем.
                  </li>
                  <li>
                    3.7. Администратор вправе запретить использование сайта
                    Посетителю, если на то есть законные основания.
                  </li>
                </ul>
              </li>
              <li>
                <span style="font-size: 14px;font-weight:bold;">ПРАВА СУБЪЕКТОВ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                <ul>
                  <li>
                    4.1. Пользователь имеет право на получение информации,
                    касающейся обработки его Персональных данных/Данных.
                    Пользователь вправе требовать от Оператора уточнения его
                    Персональных данных, их блокирования или уничтожения в
                    случае, если Персональные данные являются неполными,
                    устаревшими, неточными, незаконно полученными или не
                    являются необходимыми для заявленной цели обработки, а
                    также принимать предусмотренные законом меры по защите
                    своих прав.
                  </li>
                </ul>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
