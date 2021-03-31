<section class='kinds_works kinds_works_page_2'>
  <div class='wrapper_new'>
    <div class='kinds_works_all_links'>
      @foreach($categoryPriceList->childCategories as $category)
        @if(!$category->image)
          <div class='block'>
            <a class="{{$category['status'] === 0 ? 'hide-link-icon': ''}}"
                {{$category['status'] === 0 ? : 'href=' .
                route('priceListChildCategory', ['priceListCategory' => $categoryPriceList->slug,
                 'priceListChildCategory' => $category->slug]) }} >
              {{ $category->title }}
            </a>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
