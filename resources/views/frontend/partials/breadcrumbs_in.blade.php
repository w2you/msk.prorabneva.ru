@if(!request()->is('/') && !request()->is('price'))
   <section class='navigation'>
        <div class='wrapper_new'>
            <ul class='clearfix'>
                <li>
                    <a href='/'>
                        <img src="{{ asset('frontend/images/home_icon.png') }}"  alt='Прораб Нева'>
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
