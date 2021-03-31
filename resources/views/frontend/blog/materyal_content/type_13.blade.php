@php
  $file = ($post_content ?? null) ? $post_content->files()->first() : null;
@endphp
<div class="blocks_all_width">
  <div class="text_area_new">
    <div class="img_one">
      <img src="{{ asset('storage/' . $file->file) }}">
    </div>
  </div>
</div>
