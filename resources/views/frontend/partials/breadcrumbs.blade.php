@if(!isset($has_not_breadcrumbs) && !request()->is('/') && !request()->is('price') && substr($_SERVER['REQUEST_URI'], 0, 31) != '/remont-kommerceskih-pomeshenij'
&& (!isset($category)|| (!isset($category->parentCategory)) || ( isset($category->parentCategory) &&
$category->parentCategory->slug !== \App\Models\CategoryMAinRepair::FLAT_REPAIR
  && $category->parentCategory->slug !== \App\Models\CategoryMAinRepair::ROOM_REPAIR
  && $category->parentCategory->slug !== \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR  ) )
  && !(isset($segment) && in_array($segment,[
    "kapitalnyiy-remont" ,
    "kosmeticheskiy-remont",
    "dizaynerskiy-remont" ,
    "remont-pod-kluch",
    "remont-kvartir-v-novostrojke",
    "otdelka-kvartir",
    ]) )
    && !(isset($slug) && ($slug === \App\Models\CategoryMAinRepair::ROOM_REPAIR || $slug === \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR))
 )
  <section class='navigation'>
    <div class='wrapper_new'>
      <ul class='clearfix'>
        <li>
          <a href='{{env('APP_URL')}}'>
            <img src="{{ asset('frontend/images/home_icon.png') }}" alt='Прораб Нева'>
          </a>
        </li>


        @if($_SERVER['REQUEST_URI']=='/dizajn-proekt-v-podarok')
          <li><a href="/actsii">Акции и предложения</a></li>
          <li><a href="#">Дизайн-проект в подарок</a></li>
        @else
              @foreach($breadCrumbs as $key => $breadCrumb)
                  @if($selectRegion->is_default)
                      @if($breadCrumb != "Ремонт квартир")

                          <li>
                              @if (is_numeric($key))
                                  <a>
                                      {{ $breadCrumb }}
                                  </a>
                              @else
                                  <a href="{{ $key }}">
                                      {{ $breadCrumb }}
                                  </a>
                              @endif

                          </li>
                      @endif
                  @else
                      @if (is_numeric($key))
                          <li>
                              <a>
                                  {{ $breadCrumb }}
                              </a>
                          </li>
                      @endif
                  @endif
              @endforeach
        @endif
      </ul>
    </div>
  </section>
@endif
