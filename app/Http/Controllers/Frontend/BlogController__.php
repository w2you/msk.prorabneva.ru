<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Meta;

class BlogController__ extends Controller
{
    public function index()
    {
        $this->setBreadCrumbs([
            0 => 'Блог'
        ]);

        Meta::set('title', 'Блог полезных статей от профессионалов | Прораб НЕВА');
        Meta::set('description', 'статьи о ремонте, ремонт квартиры с чего начать');
        Meta::set('keywords', 'В нашем блоге вы найдете много полезных статей на темы ремонта, отделки и дизайна помещений. Заходите на сайт и читайте рекомендации профессиональных строителей и дизайнеров.');

        return $this->renderView('frontend.blog.index');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function category1()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            0 => 'Статьи о ремонте'
        ]);

        Meta::set('title', 'Статьи о ремонте от профессионалов | Прораб  НЕВА');
        Meta::set('description', 'статьи о ремонте, советы по ремонту, рекомендации по ремонту');
        Meta::set('keywords', 'Полезные статьи о ремонте и обо всех его аспектах: виды ремонта, типы жилья, новости рынка, рекомендации по ремонту и наши спецпредложения читайте на сайте.');

        return $this->renderView('frontend.blog.category1');
    }

    public function category1Mat1()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/stati-o-remonte' => 'Статьи о ремонте',
            0 => 'Предчистовая отделка квартиры'
        ]);

        Meta::set('title', 'Предчистовая отделка квартиры по доступной цене | Прораб НЕВА');
        Meta::set('description', 'Предчистовая отделка квартиры в новостройке или старом фонде. Подробнее об этапах и стоимости предчистовой отделки можно прочитать на сайте. Замер бесплатно!');
        Meta::set('keywords', 'предчистовая отделка квартиры, предчистовая отделка в новостройке, стоимость предчистовой отделки');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Predchistovaya otdelka oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/stati-o-remonte/predchistovaya-otdelka-kvartiry';

        return $this->renderView('frontend.blog.category1_mat1', compact('meta_image', 'url'));
    }

    public function category1Mat2()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/stati-o-remonte' => 'Статьи о ремонте',
            0 => 'Черновая отделка квартиры'
        ]);

        Meta::set('title', 'Черновая отделка квартиры по доступной цене | Прораб  НЕВА');
        Meta::set('description', 'Черновая отделка квартиры в сжатые сроки. Подробнее об этапах и ценах черновой отделки в новостройке или вторичке можно прочитать на нашем сайте. Замер бесплатно!');
        Meta::set('keywords', 'черновая отделка квартиры, черновая отделка в новостройке, ремонт квартиры с черновой отделкой');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/chernovaya_otdelka_oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/stati-o-remonte/chernovaya-otdelka-kvartiry';

        return $this->renderView('frontend.blog.category1_mat2', compact('meta_image', 'url'));
    }

    public function category1Mat3()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/stati-o-remonte' => 'Статьи о ремонте',
            0 => 'Чистовая отделка квартиры'
        ]);

        Meta::set('title', 'Чистовая отделка квартиры по доступной цене | Прораб  НЕВА');
        Meta::set('description', 'Чистовая отделка квартиры под ключ в сжатые сроки. Замер бесплатно! Подробнее об этапах работ, составление сметы,  а также фото и цены чистовой отделки смотрите на сайте');
        Meta::set('keywords', 'Чистовая отделка квартиры, цена чистовой отделки, чистовая отделка под ключ');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Chistovaya otdelka Oblozhka.JPG';
        $url = 'https://www.prorabneva.ru/blog/stati-o-remonte/chistovaya-otdelka-kvartiry';

        return $this->renderView('frontend.blog.category1_mat3', compact('meta_image', 'url'));
    }

    public function category1Mat4()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/stati-o-remonte' => 'Статьи о ремонте',
            0 => 'Евроремонт квартиры'
        ]);

        Meta::set('title', 'Евроремонт квартиры под ключ в СПб по доступной цене | Прораб  НЕВА');
        Meta::set('description', 'Евроремонт квартиры под ключ  в сжатые сроки. Замер бесплатно! Подробнее об этапах работ, проектировании и дизайне,  а также фото и цены евроремонта смотрите на сайте');
        Meta::set('keywords', 'Евроремонт квартиры, евроремонт квартиры под ключ');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Euroremont kvartiry oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/stati-o-remonte/evroremont-kvartiry';

        return $this->renderView('frontend.blog.category1_mat4', compact('meta_image', 'url'));
    }

    public function category1Mat5()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/stati-o-remonte' => 'Статьи о ремонте',
            0 => 'Сколько стоит ремонт квартиры?'
        ]);

        Meta::set('title', 'Сколько стоит ремонт квартиры | Прораб НЕВА');
        Meta::set('description', 'Узнайте, сколько стоит ремонт квартиры, что влияет на цену, каких расходов следует ожидать, как рассчитать стоимость ремонта квартиры за кв м');
        Meta::set('keywords', 'сколько стоит ремонт квартиры, сколько стоит кв м ремонта, стоимость ремонта квартиры');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/blog_13_img.jpg';
        $url = 'https://www.prorabneva.ru/blog/stati-o-remonte/skolko-stoit-remont-kvartiry';

        return $this->renderView('frontend.blog.category1_mat5', compact('meta_image', 'url'));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function category2()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            0 => 'История одного ремонта'
        ]);


        Meta::set('title', 'История одного ремонта | Прораб  НЕВА');
        Meta::set('description', 'ремонт личный опыт, с чего начать ремонт');
        Meta::set('keywords', 'История одного ремонта познакомит вас с разными этапами процесса, задействовав все тонкости работы специалистов, которые помогут вам больше узнать о ремонтных работах.');

        return $this->renderView('frontend.blog.category2');
    }

    public function category2Mat1()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/istoriya-odnogo-remonta' => 'История одного ремонта',
            0 => 'Обзор ремонта с перепланировкой в квартире'
        ]);
        Meta::set('title', 'Ремонт с перепланировкой в квартире  | Прораб  НЕВА');
        Meta::set('description', 'Обзор ремонта с перепланировкой в квартире. Подробнее об этапах ремонта, особенностях перепланировки, строительных материалах и фото можно посмотреть на сайте ');
        Meta::set('keywords', 'ремонт с перепланировкой, перепланировка квартиры');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Remont s pereplanirovkoy oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/istoriya-odnogo-remonta/obzor-remonta-s-pereplanirovkoj-v-kvartire';

        return $this->renderView('frontend.blog.category2_mat1', compact('meta_image', 'url'));
    }

    public function category2Mat2()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/istoriya-odnogo-remonta' => 'История одного ремонта',
            0 => 'Обзор дизайнерского ремонта в скандинавском стиле'
        ]);
        Meta::set('title', 'Дизайнерский ремонт в скандинавском стиле | Прораб  НЕВА');
        Meta::set('description', 'Нашей компанией был сделан дизайнерский ремонт в скандинавском стиле, полный отчет по работам, дизайн-проект, а также фото квартиры в скандинавском стиле уже на сайте');
        Meta::set('keywords', 'скандинавский стиль, дизайнерский ремонт, дизайн-проект');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Remont kvartiry Kremenchugskaya  oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/istoriya-odnogo-remonta/obzor-dizajnerskogo-remonta-v-skandinavskom-stile';

        return $this->renderView('frontend.blog.category2_mat2', compact('meta_image', 'url'));
    }


    public function category2Mat4()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/istoriya-odnogo-remonta' => 'История одного ремонта',
            0 => 'Обзор ремонта 4-комнатной квартиры с дизайн-проектом'
        ]);

        Meta::set('title', 'Ремонт 4-комнатной квартиры с дизайн-проектом | Прораб  НЕВА');
        Meta::set('description', 'Обзор ремонта 4-комнатной квартиры по продуманному дизайн проекту смотрите на сайте. Полная перепланировка хрущевки, дизайнерские решения, фото в нашей статье');
        Meta::set('keywords', 'ремонт с дизайн проектом, ремонт 4 комнатной квартиры, перепланировка хрущевки');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Remont 4-komnatnoy kvartiry s dizain-proektom oblozhka.JPG';
        $url = 'https://www.prorabneva.ru/blog/istoriya-odnogo-remonta/obzor-remonta-4-komnatnoj-kvartiry-s-dizajn-proektom';

        return $this->renderView('frontend.blog.category2_mat4', compact('meta_image', 'url'));
    }

    public function category2Mat5()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/istoriya-odnogo-remonta' => 'История одного ремонта',
            0 => 'Обзор ремонта в 2-комнатной квартире'
        ]);

        Meta::set('title', 'Обзор ремонта помещений в 2-комнатной квартире | Прораб  НЕВА');
        Meta::set('description', 'Ремонт помещений в 2-комнатной квартире в историческом доме, построенном в 1924 году. Об отделке потолка лепниной, а также о других интересных работах читайте здесь ');
        Meta::set('keywords', 'ремонт в 2-комнатной квартире, ремонт помещений, отделка потолка');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/istoriya-odnogo-remonta/obzor-remonta-pomeshenij-v-2-komnatnoj-kvartire';

        return $this->renderView('frontend.blog.category2_mat5', compact('meta_image', 'url'));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function category3()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            0 => 'Дизайн в деталях'
        ]);

        Meta::set('title', 'Дизайн интерьера квартиры | Прораб  НЕВА');
        Meta::set('description', 'дизайн интерьера квартиры, современный дизайн квартиры');
        Meta::set('keywords', 'Дизайн интерьера квартиры  в деталях вызывает больше экспрессии, поскольку общая картина складывается из хорошо проработанных мелочей. Читайте на сайте рекомендации от Прораб НЕВА.');

        return $this->renderView('frontend.blog.category3');
    }

    public function category3Mat1()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/dizajn-v-detalyah' => 'Дизайн в деталях',
            0 => 'Стиль лофт в интерьере квартиры: особенности, проекты и фото лофтов',
        ]);
        Meta::set('title', 'Стиль лофт  в интерьере квартиры, проекты ремонта, фото лофт | Прораб  НЕВА');
        Meta::set('description', 'Лофт в интерьере квартиры, один из самых популярных стилей. Подробнее о создании, главных отличий, особенности  ремонта в стиле лофт, фото проектов смотрите на сайте');
        Meta::set('keywords', 'стиль лофт в интерьере, ремонт в стиле лофт');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Loft style oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/dizajn-v-detalyah/stil-loft-v-interere-kvartiry-osobennosti-proekty-i-foto-loftov';

        return $this->renderView('frontend.blog.category3_mat1', compact('meta_image', 'url'));
    }


    public function category3Mat2()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/dizajn-v-detalyah' => 'Дизайн в деталях',
            0 => 'Скандинавский стиль в интерьере квартиры: отличительные черты, 70 фото',
        ]);
        Meta::set('title', 'Скандинавский стиль в интерьере квартиры | Прораб  НЕВА');
        Meta::set('description', 'Скандинавский стиль в интерьере квартиры смотрится просторно и со вкусом. Подробнее о создании, реализации в интерьере скандинавского стиля, фото квартир смотрите на сайте');
        Meta::set('keywords', 'скандинавский стиль в интерьере, интерьер в скандинавском стиле');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/skandinavski style in interior apartment oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/dizajn-v-detalyah/skandinavskij-stil-v-interere-kvartiry-otlichitelnye-cherty-70-foto';

        return $this->renderView('frontend.blog.category3_mat2', compact('meta_image', 'url'));
    }


    public function category3Mat3()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/dizajn-v-detalyah' => 'Дизайн в деталях',
            0 => 'Ремонт квартиры по дизайн-проекту',
        ]);
        Meta::set('title', 'Ремонт квартиры по дизайн-проекту | Прораб  НЕВА');
        Meta::set('description', 'Ремонт квартиры по дизайн-проекту обходится намного дешевле, т.к. все нюансы продуманы заранее. Подробнее о реализации дизайн-проекта в интерьере, фото и цены смотрите на сайте.');
        Meta::set('keywords', 'ремонт квартиры по дизайн-проекту, разработка дизайн-проекта, дизайн проект интерьера');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Remont_kvartiry_po_dizain-proektu_oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/dizajn-v-detalyah/remont-kvartiry-po-dizajn-proektu';

        return $this->renderView('frontend.blog.category3_mat3',compact('meta_image','url'));
    }

    public function category3Mat4()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/dizajn-v-detalyah' => 'Дизайн в деталях',
            0 => 'Дизайн квартиры-студии: как все грамотно обустроить',
        ]);
        Meta::set('title', 'Дизайн квартиры студии – идеи для интерьера | Прораб  НЕВА');
        Meta::set('description', 'Дизайн квартиры студии – интересная и непростая задача. В этой статье мы подробно расскажем, как создать наиболее удачный дизайн интерьера для квартиры-студии');
        Meta::set('keywords', 'дизайн квартиры студии, квартира студия дизайн интерьера');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/design studio 1 title.jpg';
        $url = 'https://www.prorabneva.ru/blog/dizajn-v-detalyah/dizajn-kvartiry-studii-kak-vse-gramotno-obustroit';

        return $this->renderView('frontend.blog.category3_mat4',compact('meta_image','url'));
    }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function category4()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            0 => 'Советы ученого прораба',

        ]);

        Meta::set('title', 'Полезные советы ученого прораба | Прораб НЕВА');
        Meta::set('description', 'советы по ремонту, ремонт квартиры своими руками');
        Meta::set('keywords', 'Советы ученого прораба помогут вам избежать ошибок и устранить риски, с которыми вы можете столкнуться, а также сэкономить бюджет и сделать ремонт квартиры своими руками.');

        return $this->renderView('frontend.blog.category4');
    }

    public function category4Mat1()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/sovety-uchenogo-proraba' => 'Советы ученого прораба',
            0 => 'Выравнивание стен в квартире: делаем правильно',
        ]);

        Meta::set('title', 'Выравнивание стен | Прораб НЕВА');
        Meta::set('description', 'Выравнивание стен – обыкновенная задача любого ремонта. В этой статье мы разберем этапы работы и технологии для выравнивания стен по маякам и с помощью гипсокартона и многое другое');
        Meta::set('keywords', 'Выравнивание стен, выравнивание стен по маякам, выравнивание стен гипсокартоном');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Viravnivanie sten kvartira oblozhka.png';
        $url = 'https://www.prorabneva.ru/blog/sovety-uchenogo-proraba/vyravnivanie-sten-v-kvartire-delaem-pravilno';

        return $this->renderView('frontend.blog.category4_mat1',compact('meta_image','url'));
    }

    public function category4Mat2()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/sovety-uchenogo-proraba' => 'Советы ученого прораба',
            0 => 'Декоративная штукатурка стен: основные виды и особенности нанесения'
        ]);

        Meta::set('title', 'Декоративная штукатурка стен | Прораб НЕВА');
        Meta::set('description', 'Декоративная штукатурка стен делает  помещение стильным и оригинальным. Подробнее о видах декоративной штукатурки, этапах работы, фото и цены работ в этой статье');
        Meta::set('keywords', 'декоративная штукатурка стен, отделка стен декоративной штукатуркой');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Decorativnaya shtukaturka sten oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/sovety-uchenogo-proraba/dekorativnaya-shtukaturka-sten-osnovnye-vidy-i-osobennosti-naneseniya';

        return $this->renderView('frontend.blog.category4_mat2',compact('meta_image','url'));
    }

    public function category4Mat3()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/sovety-uchenogo-proraba' => 'Советы ученого прораба',
            0 => 'Межкомнатные перегородки: современный взгляд'
        ]);

        Meta::set('title', 'Межкомнатные перегородки  | Прораб НЕВА');
        Meta::set('description', 'Межкомнатные перегородки - отличное решение для квартиры. В этой статье мы разберем виды перегородок, материалы и работу с ними, примерную цену межкомнатных перегородок');
        Meta::set('keywords', 'межкомнатные перегородки, раздвижные межкомнатные перегородки, межкомнатные перегородки цена');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Mezhkomnatnie peregorodki oblozhka.JPG';
        $url = 'https://www.prorabneva.ru/blog/sovety-uchenogo-proraba/mezhkomnatnye-peregorodki-sovremennyj-vzglyad';

        return $this->renderView('frontend.blog.category4_mat3',compact('meta_image','url'));
    }

    public function category4Mat4()
    {
        $this->setBreadCrumbs([
            '/blog' => 'Блог',
            '/blog/sovety-uchenogo-proraba' => 'Советы ученого прораба',
            0 => 'Шумоизоляция квартиры: обо всех нюансах и поверхностях'
        ]);

        Meta::set('title', 'Как сделать шумоизоляцию в квартире | Прораб НЕВА');
        Meta::set('description', 'Шумоизоляция квартиры в деталях, а именно, мы подробно расскажем: о видах шумов и изоляции помещений, о материалах и цене на разные виды шумоизоляции в квартире');
        Meta::set('keywords', 'шумоизоляция квартиры, шумоизоляция квартиры цена');

        $meta_image = 'https://www.prorabneva.ru/frontend/images_3/Shumoisolyatsiya kvartiry oblozhka.jpg';
        $url = 'https://www.prorabneva.ru/blog/sovety-uchenogo-proraba/shumoizolyaciya-kvartiry-obo-vseh-nyuansah-i-poverhnostyah';

        return $this->renderView('frontend.blog.category4_mat4',compact('meta_image','url'));
    }

}
