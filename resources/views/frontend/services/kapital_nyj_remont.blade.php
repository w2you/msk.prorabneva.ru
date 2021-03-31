@extends('frontend.layouts.master')

@section('content')
    @include('frontend.services.partials.header')
    <section class='your_portfolio your_portfolio_page_1'>
        <div class='wrapper_new'>
            <div class='title_section'>Примеры работ</div>
            <div class='under_title_section'>Посмотрите примеры выполненных нами ремонтов квартир</div>

            <div class='portfolio_img_blocks active'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/beby_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/bedrooms_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='portfolio_img_blocks'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_2_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_3_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_4_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/san_img_6_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='portfolio_img_blocks'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_2_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_3_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_4_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_7_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='portfolio_img_blocks'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_2_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_3_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_4_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kar_6_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='portfolio_img_blocks'>
                <div class='blocks_1'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_1_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_2_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_3_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_4_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
                <div class='blocks_2'>
                    <div class='block'>
                        <div class='hover_img show_img_popup'></div>
                        <div class='show_block'>
                            <img src='{{ asset('frontend/images_1/kitchen_7_1.jpg') }}'  alt="Услуги - Прораб Нева">
                        </div>
                    </div>
                </div>
            </div>
            <div class='view_all'>
                <a href='#'>Смотреть портфолио целиком</a>
            </div>
        </div>
    </section>
    <section class='price_list_repairs'>
        <div class='title_section'>
            Прайс-лист
            <br>
            на ремонт квартир
        </div>
        <div class='wrapper_new'>
            <div class='price_list_repairs_block'>
                <div class='block'>
                    <div class='click_block'>1. Ремонт стен</div>
                    <div class='all_block'>
                        <table>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Снятие старых обоев</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Размывка мела, водоэмульсионки, олифы, извести</td>
                                <th>65 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Очистка потолка от краски или шпатлёвки</td>
                                <th>210 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж реечного потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесного потолка Армстронг</td>
                                <th>65 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесных потолков</td>
                                <th>190 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж полистироловой (пенопластовой) плитки с потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж потолков из ГКЛ (без сохранения материала)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство теплоизоляции (пеноплекс)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка из ГКЛ в два уровня с прямолинейными элементами</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка ГКЛ в один слой в один уровень на каркас</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Мелкозернистая шпатлёвка под окраску</td>
                                <th>100 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных) со световым
                                    карнизом
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Малярные работы по коробу (комплекс: шпатлёвка 2 слоя, шлифовка, поклейка флизелинового
                                    холста, грунтовка 3 слоя и покраска)
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='block'>
                    <div class='click_block'>2. Ремонт пола</div>
                    <div class='all_block'>
                        <table>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Снятие старых обоев</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Размывка мела, водоэмульсионки, олифы, извести</td>
                                <th>65 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Очистка потолка от краски или шпатлёвки</td>
                                <th>210 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж реечного потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесного потолка Армстронг</td>
                                <th>65 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесных потолков</td>
                                <th>190 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж полистироловой (пенопластовой) плитки с потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж потолков из ГКЛ (без сохранения материала)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство теплоизоляции (пеноплекс)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка из ГКЛ в два уровня с прямолинейными элементами</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка ГКЛ в один слой в один уровень на каркас</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Мелкозернистая шпатлёвка под окраску</td>
                                <th>100 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных) со световым
                                    карнизом
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Малярные работы по коробу (комплекс: шпатлёвка 2 слоя, шлифовка, поклейка флизелинового
                                    холста, грунтовка 3 слоя и покраска)
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='block'>
                    <div class='click_block'>3. Ремонт потолка</div>
                    <div class='all_block'>
                        <table>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Снятие старых обоев</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Размывка мела, водоэмульсионки, олифы, извести</td>
                                <th>65 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Очистка потолка от краски или шпатлёвки</td>
                                <th>210 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж реечного потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесного потолка Армстронг</td>
                                <th>65 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесных потолков</td>
                                <th>190 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж полистироловой (пенопластовой) плитки с потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж потолков из ГКЛ (без сохранения материала)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство теплоизоляции (пеноплекс)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка из ГКЛ в два уровня с прямолинейными элементами</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка ГКЛ в один слой в один уровень на каркас</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Мелкозернистая шпатлёвка под окраску</td>
                                <th>100 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных) со световым
                                    карнизом
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Малярные работы по коробу (комплекс: шпатлёвка 2 слоя, шлифовка, поклейка флизелинового
                                    холста, грунтовка 3 слоя и покраска)
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='block'>
                    <div class='click_block'>4. Сантехнические работы</div>
                    <div class='all_block'>
                        <table>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Снятие старых обоев</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Размывка мела, водоэмульсионки, олифы, извести</td>
                                <th>65 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Очистка потолка от краски или шпатлёвки</td>
                                <th>210 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж реечного потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесного потолка Армстронг</td>
                                <th>65 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесных потолков</td>
                                <th>190 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж полистироловой (пенопластовой) плитки с потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж потолков из ГКЛ (без сохранения материала)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство теплоизоляции (пеноплекс)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка из ГКЛ в два уровня с прямолинейными элементами</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка ГКЛ в один слой в один уровень на каркас</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Мелкозернистая шпатлёвка под окраску</td>
                                <th>100 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных) со световым
                                    карнизом
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Малярные работы по коробу (комплекс: шпатлёвка 2 слоя, шлифовка, поклейка флизелинового
                                    холста, грунтовка 3 слоя и покраска)
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class='block'>
                    <div class='click_block'>5. Электромонтажные работы</div>
                    <div class='all_block'>
                        <table>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Снятие старых обоев</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Размывка мела, водоэмульсионки, олифы, извести</td>
                                <th>65 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Очистка потолка от краски или шпатлёвки</td>
                                <th>210 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж реечного потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесного потолка Армстронг</td>
                                <th>65 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж подвесных потолков</td>
                                <th>190 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж полистироловой (пенопластовой) плитки с потолка</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Демонтаж потолков из ГКЛ (без сохранения материала)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство теплоизоляции (пеноплекс)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка из ГКЛ в два уровня с прямолинейными элементами</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство потолка ГКЛ в один слой в один уровень на каркас</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Мелкозернистая шпатлёвка под окраску</td>
                                <th>100 руб.</th>
                                <th>шт.</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных) со световым
                                    карнизом
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Устройство декоративных коробов по периметру помещений (прямолинейных)</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Малярные работы по коробу (комплекс: шпатлёвка 2 слоя, шлифовка, поклейка флизелинового
                                    холста, грунтовка 3 слоя и покраска)
                                </td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                            <tr class='clearfix'>
                                <td>Монтаж закладной</td>
                                <th>100 руб.</th>
                                <th>м2</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='object object_page_4'>
        <div class='wrapper_new'>
            <div class='object_title'>
                Так просто…
            </div>
            <p>Оставьте заявку, и мы сделаем расчет сметы вашего ремонта.
                Выполним замер, рассчитаем все виды работ, объемы и стоимость, проконсультируем по технологиям и этапам ремонтных работ — всё это за {{ env('PARRAM_TRIAL') }} руб. </p>
            <a href='#' class="call_open_popup_button">Заказать расчет сметы</a>
        </div>
    </section>
    @include('frontend.blocks.whyWe')

    @widget('reviews', ['title' => 'ОТЗЫВЫ КЛИЕНТОВ О «ПРОРАБ НЕВА»'])
    {{--<section class='tur_3d tur_3d_stock  tur_3d_repairs_rooms tur_3d_home_page'>--}}
        {{--<div class='wrapper_new'>--}}
            {{--<div class='title_section'>3D туры</div>--}}
            {{--<div class='under_title_section'>Посмотрите максимально реалистичные интерактивные туры по нашим объектам после--}}
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
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    @widget('tour3d')
    <section class='questions questions_page_2'>
        <div class='wrapper_new clearfix'>
            <div class='questions_title_block'>
                <div class='icon'>
                    <img src='{{ asset('frontend/images/icon_quest.png') }}'  alt="Услуги - Прораб Нева">
                </div>
                <p>ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ «Отделка квартир»</p>
            </div>
            <div class='questions_block'>
                <ul>
                    <li>
                        <h3>1. Что такое черновая и чистовая отделка квартиры?</h3>
                        <p>
                            Что собой представляет черновая отделка?<br>
                            Часто можно услышать это словосочетание при разговоре о квартире. Что же под этим подразумевается? Попробуем вдуматься в суть: в такой квартире не производится никаких косметических отделочных работ. Что же реализовано? Песчано-цементная стяжка полов помещения, выравнивание стен, а также потолков, установлена входная дверь, проведено отопление, водоснабжение и электричество. <br>
                            Ещё нет сантехники и межкомнатных дверей. <br>
                            Проще говоря, черновая отделка - это подготовка ко всем последующим косметическим и декоративным работам. Т.е. проделанные 50% ремонта. Жить там еще невозможно или точно очень неуютно. Лучше не стоит так поступать.<br>
                            Иногда люди решают продолжить ремонт своими руками с этого этапа. В таком случае стоит весьма трезво оценивать свои навыки. Неудачная чистовая отделка может визуально перечеркнуть плюсы даже самой лучшей и качественной черновой отделки. К тому же плохо установленная сантехника может испортить жизнь кому угодно. Всё это будет сильно обидней, чем сразу заплатить профессионалам. <br>
                            А какая отделка называется чистовой?<br>
                            Вы скорее всего много раз слышали разговоры о чистовой отделке. Давайте разберёмся подробней в том, что это. В квартире с чистовой отделкой уже можно жить. Предполагается, что чаще всего в неё сразу заселяются. То есть квартира отвечает всем эстетическим и функциональным требованиям. В ней красиво и уютно, а все бытовые технические вопросы решены. Не надо никаких дополнительных работ: выполнена электропроводка, стены покрашены или оклеены обоями, уложены полы, проведены все работы по потолкам, установлены унитаз, раковины, смесители, ванна или душевая кабина в санузле.
                        </p>
                    </li>
                    <li>
                        <h3>2.Сколько стоит отделка квартиры?</h3>
                        <p>
                            Это зависит от того, в каком виде жилище на данный момент, что за работы запланированы (разновидности и этапы), какого класса, а также вида материалы могут понадобиться и какова их стоимость, идет ли речь о ремонте с привлечением профессионального дизайнера или более-менее типовом решении. Предсказать стоимость, не зная всех деталей, невозможно.
                        </p>
                    </li>
                    <li>
                        <h3>3. Что такое отделка квартиры под ключ?</h3>
                        <p>
                            Часто это словосочетание можно увидеть в рекламе. Какого-то четкого определения, признанного всеми – нет, но приблизительных определений хватит для общего понимания термина.<br>
                            Это совокупность всех этапов ремонтного процесса помещения, предполагающая полную реализацию всех планов и идей касательно отделочных работ. <br>
                            Квартира с отделкой под ключ полностью готова, можно жить.<br>
                            Это синоним чистовой отделки (хотя, конечно, лучше это уточнять у той фирмы, с которой вы сотрудничаете)                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @include('frontend.repairs.partials.description', ['mainCategory' => $categoryService])
    @include('frontend.modals.call_order')

@endsection
