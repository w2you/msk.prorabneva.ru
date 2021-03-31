@php
  $file1 = ($post_content ?? null) ? $post_content->files()->where('sort_img',0)->first() : null;
  $file2 = ($post_content ?? null) ? $post_content->files()->where('sort_img',1)->first() : null;
@endphp
<div class="blocks_all_width">
  <div class="text_area_new">
    <div class="img_two">
      <div>
        <img src="{{ str_replace("\\","/",asset('storage/' . $file1->file)) }}">
      </div>
      <div>
        <img src="{{ str_replace("\\","/",asset('storage/' . $file2->file)) }}">
      </div>
    </div>
  </div>
</div>
