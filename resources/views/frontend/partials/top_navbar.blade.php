<div class='header_top clearfix'>
  @if(isset($selectRegion) && $selectRegion)
    <div class="header_city_block">
      <img class="locationicon" src="{{ asset('frontend/images/iconfinder_location_white.png') }}" title="Ваш город" alt="Ваш город">
      <a href="#" class="select_city_bloc_link">{{$selectRegion->title}}</a>
    </div>
  @endif


  <div class='menu_top'>
    <div class='all_menu_top'>
      {{-- <div class='tel_number'>
           <a href='tel:+78124261015'>+7 (812) 426-10-15</a>
       </div>
      @if(isset($selectRegion) && $selectRegion)
         <div class="header_city_block">
          Ваш город:
          <a href="#" class="select_city_bloc_link">{{$selectRegion->title}}</a>
        </div>
      @endif
--}}

      <div class="ya-phone tel_number ss">
		@if(isset($selectRegion) && $selectRegion)
        <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
			{{$selectRegion->phone}}
        </a>
		@endif
      </div>
      <ul class='clearfix'>
        <li>
          <a href='/'>Главная</a>
        </li>
        <li>
          <a href='{{ route('about') }}'>О компании</a>
        </li>
        <li>
          <a href='{{ route('salePromotions') }}'>Акции</a>
        </li>
        <li>
          <a href='{{ route('review') }}'>Отзывы</a>
        </li>
  
      </ul>
      <div class='calculate_link'>
        <a href='{{ route('calculator') }}'>Калькулятор</a>
      </div>
    </div>
  </div>
</div>
