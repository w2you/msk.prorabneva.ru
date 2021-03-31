<div class="block">
  <div class='new_comment' style="height: auto !important;">
    <div class='block_title'>Добавить отзыв</div>
    <div class='new_comments_block'>
      <div class="errors">

      </div>
      <form data-action="{{ route('review.create') }}">
        <div class='your_stars'>
          <p>Оценить:</p>
          <div class='stars clearfix'>
            <div class='active'></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
        <p>Название отзыва:</p>
        <input placeholder='Ремонт . . . ' required='' type='text' name="title">
        <p>Оставить отзыв:</p>
        <textarea placeholder='Ваш отзыв' name="body" required></textarea>
        <p>Представьтесь, пожалуйста:</p>
        <div class='inp_attech'>
          <input placeholder='Ваше Имя ' required='' name="author" type='text'>
          <label  style="position: relative">
            <div class='attach__up'></div>
            <input class='attach_input' type='file' name="author_image" id="author_image" accept="image/*">
            <span id="count_author_image"></span>
          </label>
        </div>
        <p>Номер договора:</p>
        <input placeholder='№' type='text' name="deal_number">
        <div class='sumbit_send'>
          <a href='#' class='open_popup_add_comment'>Правила публикации отзывов</a>
          <label style="position: relative">
            <div class='attach__up'></div>
            <span id="count_images_files"></span>
            <input class='attach_input' id="images_files" type='file' name="images" accept="image/*" multiple>
          </label>
          <input class='send_comm' type='submit' value='Оставить отзыв'>
        </div>
      </form>
    </div>
    <div class='thanks_comment'>
      <div class='block_title'>Спасибо</div>
      <p>Ваш отзыв отправлен на модерацию и будет размещен после проверки администрации сайта.</p>
      <div class='img'>
        <img src="{{ asset('frontend/images/img_thanks_pop.png') }}" alt="Отзывы - Прораб Нева">
      </div>
    </div>
  </div>
</div>
