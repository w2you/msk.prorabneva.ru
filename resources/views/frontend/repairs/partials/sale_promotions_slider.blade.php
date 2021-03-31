<? //dd($category)?>
@if(count($category->salePromotions))
    <section class='promotion_discount'>
        <div class='wrapper_new'>
            <div class='title_h2 title_section'>{{ $category->sale_promotion->title }}</div>
            <div class='under_title_section'>{{ $category->sale_promotion->description }}</div>
            <div class='promotion_discount_slider'>
            
            
            
            <div class='block'>
                        <div class='img_block'>
                            <img src='https://www.prorabneva.ru/storage/slides/happy/ng111.png'  alt="Акции - Прораб Нева">
                        </div>
                        <div class='text'>
                            <div class='name_block'>Скидка -14% на ремонт квартир</div>
                            <p>До 31 октября скидка -14% от Прайса на все ремонтные и отделочные работы. Успейте оформить заказ на ремонт по низким ценам!</p>
                            <div class='read_more'>
                                <a href='#'  class="call_open_popup_button">Узнать подробнее</a>
                            </div>
                        </div>
                    </div>
            
            
                @foreach($category->salePromotions as $salePromotion)
                    <div class='block'>
                        <div class='img_block'>
                            <img src='{{ asset('storage/' . $salePromotion->slider_image) }}' alt="Акции - Прораб Нева">
                        </div>
                        <div class='text'>
                            <div class='name_block'>{{ $salePromotion->title }}</div>
                            <p>
                            @if($salePromotion->slug == 'remont-po-sisteme-vse-vklyucheno' )
                            Фиксированная цена и сроки ремонта. С материалами и без материалов. <br> Под ключ от 4200 руб./м2.
                            @else                            
                            {!! $salePromotion->short_description !!}
                            @endif
                            </p>
                            <div class='read_more'>
                            
                            @if(route('getSalePromotion', $salePromotion->slug)=='https://www.prorabneva.ru/actsii/remont-po-sisteme-vse-vklyucheno')
                            <a href='https://www.prorabneva.ru/otdelka-v-novostroyke'>Узнать подробнее</a>
                            @else                            
                            <a href='{{ route('getSalePromotion', $salePromotion->slug) }}'>Узнать подробнее</a>
                            @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@else
    <section class='promotion_discount'>
        <div class='wrapper_new'>
            <div class='title_h2 title_section'>Акции и скидки</div>
            <div class='under_title_section'>Специальные сезонные предложения по ремонту квартир-студий</div>
            <div class='promotion_discount_slider'>
                <div class='block'>
                    <div class='img_block'>
                        <img src='{{asset('frontend/images/dis_slid_img_1.jpg')}}'  alt="Акции - Прораб Нева">
                    </div>
                    <div class='text'>
                        <div class='name_block'>Готовые решения для новостроек</div>
                        <p>Купили квартиру в новостройке? Хотите сэкономить Ваше время и деньги и получить качественный и профессионально выполненный ремонт? Воспользуйтесь специальными пакетными предложениями по ремонту от Прораб НЕВА . .</p>
                        <div class='read_more'>
                            <a href='#'>Узнать подробнее</a>
                        </div>
                    </div>
                </div>
                <div class='block'>
                    <div class='img_block'>
                        <img src='{{asset('frontend/images/dis_slid_img_1.jpg')}}' alt="Акции - Прораб Нева">
                    </div>
                    <div class='text'>
                        <div class='name_block'>Готовые решения для новостроек</div>
                        <p>Купили квартиру в новостройке? Хотите сэкономить Ваше время и деньги и получить качественный и профессионально выполненный ремонт? Воспользуйтесь специальными пакетными предложениями по ремонту от Прораб НЕВА . .</p>
                        <div class='read_more'>
                            <a href='#'>Узнать подробнее</a>
                        </div>
                    </div>
                </div>
                <div class='block'>
                    <div class='img_block'>
                        <img src='{{asset('frontend/images/dis_slid_img_1.jpg')}}' alt="Акции - Прораб Нева">
                    </div>
                    <div class='text'>
                        <div class='name_block'>Готовые решения для новостроек</div>
                        <p>Купили квартиру в новостройке? Хотите сэкономить Ваше время и деньги и получить качественный и профессионально выполненный ремонт? Воспользуйтесь специальными пакетными предложениями по ремонту от Прораб НЕВА . .</p>
                        <div class='read_more'>
                            <a href='#'>Узнать подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endif
