@php
  $repair = \App\Helpers\Helper::repairs($selectRegion);
@endphp
@if($repair)
  <section class='your_portfolio your_portfolio_home_page'>
    <div class='wrapper_new'>
      <div class='title_h2 title_section'>Примеры работ</div>
      <div class='under_title_section'>Посмотрите примеры выполненных нами ремонтов 
      <?php
      //echo $repair->id;
      if ($repair->id==112)
      {
        echo ' ванных комнат';
      } 
      else
      {
        
        if ($repair->id==117)
        {
        echo ' кухонь';
        } 
        else
        {        
            if (($repair->id==132) OR ($repair->id==122) OR  ($repair->id==127))
            {
            echo ' комнат';
            } 
            else
            {        
            echo ' квартир';
            }
        }
      } 
      ?>
      </div>
      <!--repairs-->
      <div class='portfolio_img_blocks active'>
        <div class='blocks_1'>

          @if($repair->repairId1)
            <div class='block'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId1->id }}"
                   data-url="{{ route('getRepair') }}">
                <p>{{$repair->repairId1->name}}</p>
              </div>
              <div class='show_block'>
                <img src="{{ asset('storage/' . $repair->repairId1->image) }}" title="{{$repair->repairId1->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
          @endif
          @if($repair->repairId2)
            <div class='block'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId2->id }}"
                   data-url="{{ route('getRepair') }}">
                <p>{{$repair->repairId2->name}}</p>
              </div>
              <div class='show_block'>
                <img src="{{ asset('storage/' . $repair->repairId2->image) }}" title="{{$repair->repairId2->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
          @endif
          @if($repair->repairId4)
            <div class='block'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId4->id }}"
                   data-url="{{ route('getRepair') }}">
                <p>{{$repair->repairId4->name}}</p>
              </div>
              <div class='show_block'>
                <img src="{{ asset('storage/' . $repair->repairId4->image) }}" title="{{$repair->repairId4->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
          @endif
          @if($repair->repairId5)
            <div class='block'>
              <div class='hover_img show_img_popup' data-id="{{ $repair->repairId5->id }}"
                   data-url="{{ route('getRepair') }}">
                <p>{{$repair->repairId5->name}}</p>
              </div>
              <div class='show_block'>
                <img src="{{ asset('storage/' . $repair->repairId5->image) }}" title="{{$repair->repairId5->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
          @endif
        </div>
        @if($repair->repairId3)
          <div class='blocks_2'>
            <div class='block'>
              <div class='hover_img show_img_popup'
                   data-id="{{ $repair->repairId3->id }}"
                   data-url="{{ route('getRepair') }}">
                <p>{{$repair->repairId3->name}}</p>

              </div>
              <div class='show_block'>
                <img src="{{ asset('storage/' . $repair->repairId3->image) }}" title="{{$repair->repairId3->name}}"
                     alt='Примеры ремонта - Прораб Нева'>
              </div>
            </div>
          </div>
        @endif
      </div>
      <!--end repairs-->
    </div>
  </section>
@endif
