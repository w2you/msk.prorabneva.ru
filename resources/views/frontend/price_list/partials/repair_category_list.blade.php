{{--
<section class='sample_project sample_project_page_2'>
    <div class='wrapper_new'>
        <div class='title_section'>ЕЩЕ БОЛЬШЕ О РЕМОНТЕ</div>
        <div class='under_title_section'>Выберите раздел, который вам наиболее интересен</div>
        <div class='sample_project_blocks'>
            @foreach($categoryMainRepairs as $categoryMainRepair)
                <div class='block'>
                    <a href='{{ route('getRepairMainCategory', $categoryMainRepair->slug) }}'>
                        <div class='img'>
                            <img src='{{ asset('storage/' . $categoryMainRepair->image) }}'  alt='Ремонт - Прораб Нева'>
                        </div>
                        <p>{{ !empty($categoryMainRepair->menu_title) ? $categoryMainRepair->menu_title : $categoryMainRepair->title }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>--}}


<section class='sample_project sample_project_page_2'>
    <div class='wrapper_new'>
        <div class='title_h2 title_section'>Еще больше о ремонте</div>
        <div class='under_title_section'>Выберите раздел, который вам наиболее интересен</div>
        <div class='sample_project_blocks'>
            @foreach($categoryMainRepairs as $key => $categoryMainRepair)
                <div class='block'>

                    {{--
                    <a data-lightbox='{{$categoryMainRepair->slug}}' data-title='{{$categoryMainRepair->title}}' href='{{ asset('storage/' . $categoryMainRepair->image) }}'>
                    --}}
                    <a href="
                    @if($key == 0)
                    /
                    @else
                    {{route('getRepairMainCategory',$categoryMainRepair->slug)}}
                    @endif
                    ">
                        <div class='img'>
                            <img src='{{ asset('storage/' . $categoryMainRepair->image) }}' alt='Ремонт - Прораб Нева'>
                        </div>
                        <p>
                            @if($key == 3)
                                Ремонт ком. помещений
                            @else
                                {{$categoryMainRepair->title}}
                            @endif
                        </p>
                    </a>
                    <div class='hide_block'>

                        <a data-lightbox='{{$categoryMainRepair->slug}}' data-title='{{$categoryMainRepair->title}}'
                           href='{{ asset('storage/' . $categoryMainRepair->image) }}'></a>
                        {{--   <a data-lightbox='kvartir' data-title='Ласточка' href='images/fin_sim_img_2_3.jpg'></a>
                           <a data-lightbox='kvartir' data-title='Ласточка' href='images/fin_sim_img_2_4.jpg'></a>--}}
                    </div>
                </div>
            @endforeach

            {{--  <div class='block'>
                  <a data-lightbox='komnat' data-title='Ремонт комнат' href='images/p1_simple_img_2.jpg'>
                      <div class='img'>
                          <img src='images/p1_simple_img_2.jpg' alt='Ремонт - Прораб Нева'>
                      </div>
                      <p>Ремонт комнат</p>
                  </a>
                  <div class='hide_block'>
                      <a data-lightbox='komnat' data-title='Ласточка' href='images/fin_sim_img_2_11.jpg'></a>
                      <a data-lightbox='komnat' data-title='Ласточка' href='images/fin_sim_img_2_12.jpg'></a>
                      <a data-lightbox='komnat' data-title='Ласточка' href='images/fin_sim_img_2_13.jpg'></a>
                  </div>
              </div>
              <div class='block'>
                  <a data-lightbox='pomesheniy' data-title='Ремонт ком. помещений' href='images/p1_simple_img_3.jpg'>
                      <div class='img'>
                          <img src='images/p1_simple_img_3.jpg' alt='Ремонт - Прораб Нева'>
                      </div>
                      <p>Ремонт ком. помещений</p>
                  </a>
                  <div class='hide_block'>
                      <a data-lightbox='pomesheniy' data-title='Ласточка' href='images/fin_sim_img_2_11.jpg'></a>
                      <a data-lightbox='pomesheniy' data-title='Ласточка' href='images/fin_sim_img_2_12.jpg'></a>
                      <a data-lightbox='pomesheniy' data-title='Ласточка' href='images/fin_sim_img_2_13.jpg'></a>
                  </div>
              </div>--}}
        </div>
    </div>
</section>
