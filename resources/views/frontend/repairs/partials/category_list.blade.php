<section class='kinds_repairs
@if($mainCategory->slug == "remont-komnat")
    kinds_repairs_repairs_rooms
@elseif($mainCategory->slug == "remont-kommerceskih-pomeshenij")
    kinds_repairs_commercial
@endif'>
  <div class='kinds_block'>
    <div class='img_block'>
      <img src='{{ asset('storage/' . $mainCategory->image) }}' alt='Ремонт - Прораб Нева'>
    </div>
    <div class='links_block'>
      <div class='title_section'>
        {!! $mainCategory->repair_types_title !!}
      </div>
      <div class='under_title_section'>Выберите интересующий вас раздел из списка</div>
      <ul>
        @php
          if($mainCategory->slug == "remont-kommerceskih-pomeshenij"){
            $arr=array();
            foreach($mainCategory->childCategories as $key => $value){
                 if($key==5){
                     $arr[8] = $value;
                 }
                 elseif($key==8){
                   $arr[5] = $value;
                 }else{
                   $arr[$key] = $value;
                 }

             }
             ksort($arr);
          }else{
            $arr = $mainCategory->childCategories ;
          }
/*
              $arr=array();
       if($key==5){
            $arr[] = $category;
         }
         elseif($key==8){
               $arr[] = $category;
         }*/
       //  ksort($arr);
        @endphp

        @foreach($arr as $key => $category)
          @if($category->category_main_repair_id != 2)
            @if($key == 4 || $key == 5 && $category->category_main_repair_id != 4)
              @continue
            @endif
            @if($category->category_main_repair_id == 4)

              @if($key == 6 || $key==7  )
                @continue
              @endif

            @endif

            {{--@else
                @if($key >4)
                    @continue
                @endif--}}
          @endif
          @if($key == 6  )
            @continue
          @endif
          <li>
            <a href='{{ route('getRepairCategory', ['slug'=>$mainCategory->slug, 'sub_slug' => $category->slug]) }}'>{{ $category->title }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
