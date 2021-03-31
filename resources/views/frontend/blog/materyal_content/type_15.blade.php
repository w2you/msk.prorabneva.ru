<div class="blocks_all_width">
  <div class="all_photo_blocks">
    <div class="this_photo">
      @foreach($post_content->files ?? [] as $image)
        <div{{$loop->first?' class=active':''}}>
          <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery="all_img" title="" href="{{ asset('storage/' . $image->file) }}">
            <div class="img_hover"></div>
            <img src="{{ asset('storage/' . $image->file) }}">
          </a>
        </div>
      @endforeach
    </div>
    <div class="all_photos">
      @foreach($post_content->files ?? [] as $image)
        <div{{$loop->first?' class=active':''}}>
          <img src="{{ asset('storage/' . $image->file) }}">
        </div>
      @endforeach
    </div>
  </div>
</div>

