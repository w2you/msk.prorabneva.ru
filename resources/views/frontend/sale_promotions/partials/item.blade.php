<div class='all_block'>
  <div class='block block_1' style="background: {{ $sale->background_color }}">
    <div class='promotions_text'>
      <div class='text'>
        <div class='name_block'>{{ $sale->name }}</div>
        <p>{!! $sale->description !!}</p>
        <div class='learn_more learn_more_{{ $key }}'>
          @if($sale->slug)
            <a href='{{$sale->slug}}'  onMouseOver="this.style.backgroundColor='{{ $sale->hover_color }}'"  onMouseOut="this.style.backgroundColor='{{ $sale->background_color }}'">Узнать подробнее</a>
          @else
            <a href="#" class="call_open_popup_button" onMouseOver="this.style.backgroundColor='{{ $sale->hover_color }}'"  onMouseOut="this.style.backgroundColor='{{ $sale->background_color }}'">Узнать подробнее</a>
          @endif
          {{--<a href='{{ route('getSalePromotion', $sale->slug) }}'>Узнать подробнее</a>--}}
        </div>
      </div>
    </div>
    <div class='promotions_img'>
      @if($sale->slug)
        <a href='{{$sale->slug}}'>
          <div class='img'>
            <img src='{{ asset('storage/' . $sale->image) }}'>
          </div>
        </a>
      @else
        <a href="#" class="call_open_popup_button">
          <div class='img'>
            <img src='{{ asset('storage/' . $sale->image) }}'>
          </div>
        </a>
      @endif
    </div>
  </div>
  <div class='for_whom'>
    <p>Для кого։</p>
    <strong>{{ $sale->description_for_whom }}</strong>
  </div>
</div>
