@extends('frontend.layouts.master')

@section('content')

  <section class='all_comments'>
    <div class='wrapper_new'>
      <h1>{{ $page->title }}</h1>
      <div class='under_title_section'>{!! $page->body !!}</div>
      <div class="rating_prorab">
        <div class="strars">
          @for ($i = 0; $i < 5; $i++)
            @if ( $avgRating - $i <= 0 )
              <div></div>
            @elseif ( $avgRating - $i < 1)
              <div class="partly"></div>
            @else
              <div class="active"></div>
            @endif
          @endfor
        </div>
        <div class="num_rating">
          <span class="new_rating_num">{{ $avgRating }}</span> <span>/ 5</span>
        </div>
      </div>
      <div class='all_comments_blocks reviews__hide' id="">
        <div class='comment_blocks' id="mob_review_block" style="width: 100%">
          @include('frontend.reviews.partials._form')
          @foreach($reviews as $review)
            @include('frontend.reviews.partials.comment', ['comment' => $review])
          @endforeach
        </div>
      </div>

      <div class='all_comments_blocks mob__reviews__hide'>
        <div class='comment_blocks' id="mob_review_block_mob" style="width: 100%">
          @include('frontend.reviews.partials._form_mob')
          @foreach($reviews as $review)
            @include('frontend.reviews.partials.comment', ['comment' => $review])
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <div class="reviews__hide">
    @if($all_count > 15)
      <section class="pagination_block_new">
        <a href='#' class="show__more" data-step="0">Показать еще</a>
      </section>
    @endif
  </div>

  <div class="mob__reviews__hide">
    @if($all_count > 15)
      <section class="pagination_block_new">
        <a href='#' class="show__more" data-step="0">Показать еще</a>
      </section>
    @endif
  </div>



  {{--@include('frontend.blog.blocks.block_all',['padd_sm_not' => true ])--}}

  <div id='popup_add_comment'>
    <div class='all_popup'>
      <div class='close'>
        <img src='/frontend/images/close_icon.png'>
      </div>
      <div class='popup_block'>
        <div class='all_text_scrolling'>
          <div class='text_area_popup'>
            <span>Правила публикации отзывов</span>
            <ol>
              <li>
                <span>Оставляя отзывы на сайте www.prorabneva.ru, Клиент соглашается с Правилами публикации отзывов (далее - Правила), изложенными ниже.</span>
              </li>
              <li>
                <span>Оставлять отзывы могут только пользователи, заключившие договор на ремонт с Прораб НЕВА (Клиенты).</span>
              </li>
              <li>
                <span>Отзывы публикуются только после их просмотра модератором. По возможности сохраняется авторская орфография и пунктуация. Исправлению подлежат только опечатки.</span>
              </li>
              <li>
                <span>Требования по содержанию отзыва:</span>
                <ul>
                  <li>4.1. Клиент гарантирует, что имущественные права на использование средств индивидуализации,
                    содержащихся в отзыве (включая текст, рисунки, фотографические изображения, видеоматериалы и
                    др.) принадлежат ему или используются им на законных основаниях с согласия правообладателя.
                  </li>
                  <li>4.2. Клиент гарантирует соблюдение требований законодательства при размещении отзывов.</li>
                  <li>4.3. Размер текста отзыва не должен превышать две тысячи знаков с пробелами, количество
                    загружаемых фотографий – не более 10 штук формата jpeg / png.
                  </li>
                </ul>
              </li>
              <li>
                <span>Отклоняются модератором и не подлежат публикации отзывы следующего содержания:</span>
                <ul>
                  <li>5.1. содержащие нецензурную лексику;</li>
                  <li>5.2. содержащие только эмоциональные высказывания (например, "Все здорово!", "Супер!" и
                    различные вариации на эту тему) без указания причины, по которым понравился или не понравился
                    ремонт с нашей компанией;
                  </li>
                  <li>5.3. имеющие целью вступить в дискуссию либо оскорбить сотрудников или других
                    пользователей;
                  </li>
                  <li>5.4. содержащие большое количество лексических, орфографических и других ошибок;</li>
                  <li>5.5. содержащие материалы рекламного характера (в том числе номера телефонов, адреса, ссылки
                    на другие сайты, изображения и видеоматериалы об иных услугах, продавцах и т.п.).
                  </li>
                </ul>
              </li>
              <li>
                <span>Прораб НЕВА не несет ответственности за содержание опубликованных на сайте www.prorabneva.ru отзывов, т.к. они выражают мнение пользователей и могут не соответствовать мнению сотрудников.</span>
              </li>
              <li>
                <span>Прораб НЕВА принимает все меры для того, чтобы не допустить размещение на сайте www.prorabneva.ru отзывов, содержащих средства индивидуализации без разрешения правообладателей. Вместе с тем, в случае отсутствия соответствующей информации от правообладателя Прораб НЕВА не знает и не может знать о том, что использование средств индивидуализации, содержащихся в отзывах, является неправомерным.</span>
              </li>
              <li>
                <span>В случае выявления правообладателем факта размещения в отзыве принадлежащих ему средств индивидуализации без соответствующего разрешения, ему необходимо направить письменное заявление с указанием страницы сайта и (или) сетевого адреса в сети интернет, по которому размещен отзыв, на электронный адрес mail@prorabneva.ru</span>
              </li>
              <li>
                <span>Прораб НЕВА оставляет за собой право удалить любой отзыв в любое время без объяснения причин и без предварительного согласования с автором отзыва.</span>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id='popup_video_block'>
    <div class='popup_block'>
      <div class='close'>
        <img src='/frontend/images_4/close_black.png'>
      </div>
      <div class='video_block'>
        <img src='/frontend/images_4/video_img.jpg'>
      </div>
    </div>
  </div>
@endsection

@section('styles')
  <style>
    .errors {
      margin-top: 15px;
      display: none;
      font-size: 14px;
      color: red;
    }

    .errors p {
      display: block !important;
    }

    .errors p {
      font-size: inherit !important;
    }

    section.all_comments .all_comments_blocks .comment_blocks .block .new_comment .thanks_comment {
      position: static !important;
    }

    section.all_comments .all_comments_blocks .comment_blocks .block .img_name_stars .img_name .img img {
      object-fit: cover;
      object-position: center;
    }

    section.all_comments .all_comments_blocks .comment_blocks .block {
      width: calc(50% - 20px);
      box-sizing: border-box;
      /*margin-right: 10px;*/
    }

    @media only screen and (max-width: 820px) {
      section.all_comments .all_comments_blocks .comment_blocks .block {
        width: calc(100% - 10px);
      }
    }


    section.all_comments .all_comments_blocks .comment_blocks .block .img_name_stars .soc2 {
      float: left;
      width: 40%;
      margin-top: 2px;
      text-align: right;
    }

    section.all_comments .all_comments_blocks .comment_blocks .block .img_name_stars .soc2 a {
      display: inline-block;
      vertical-align: top;
      -webkit-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease;
      width: 36px;
      height: 50px;
      margin-left: 10px;
      box-sizing: border-box;
      text-align: center;
      position: relative;
    }

    section.all_comments .all_comments_blocks .comment_blocks .block .img_name_stars .soc2 a img {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      -webkit-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease;
    }

    section.all_comments .all_comments_blocks .comment_blocks .block .img_name_stars .img_name {
      width: 60%;
    }

  </style>
@endsection

@section('scripts')
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script>
    var masonryBlock;

    function initMasonry() {
      masonryBlock = $('.all_comments_blocks.reviews__hide').masonry({
        itemSelector: '.block',
        columnWidth: '.block',
        gutter: 20
      });
    }

    $(document).ready(function () {

      $('.all_comments_blocks.reviews__hide').masonry({
        // options
        itemSelector: '.block',
        columnWidth: '.block',
        gutter: 20
      });

      /*$('.send_comm').on('click', function () {
          setTimeout(function () {


          }, 10);
      })*/

      /*var heightArr = [],
          heightSum = 0,
          firstHeightSum = 0,
          selectedIndex = 0;

      $('.all_comments_blocks .block').each(function () {
          heightArr.push(parseInt($(this).css('height')));
          heightSum += parseInt($(this).css('height'));
      });

      for (var i = 0; i < heightArr.length; i ++) {
          firstHeightSum += heightArr[i];
          if (firstHeightSum >= heightSum - firstHeightSum) {
              selectedIndex = i;
              break;
          }
      }
      for (var j = selectedIndex; j < heightArr.length; j ++) {
          $('.all_comments_blocks .comment_blocks:first-child .block').eq(j).clone().appendTo('.comment_blocks:last-child');
          $('.all_comments_blocks .comment_blocks:first-child .block').eq(j).remove();
      }*/

      $("#images_files").on("change", function () {
        var numFiles = $(this).get(0).files.length;
        if (numFiles > 0) {
          $('#count_images_files').text(numFiles);
        } else {
          $('#count_images_files').text('');
        }
      });
      $("#author_image").on("change", function () {
        var numFiles = $(this).get(0).files.length;
        if (numFiles > 0) {
          $('#count_author_image').text(numFiles);
        } else {
          $('#count_author_image').text('');
        }
      });

      $("#images_files_mob").on("change", function () {
        var numFiles = $(this).get(0).files.length;
        if (numFiles > 0) {
          $('#count_images_files_mob').text(numFiles);
        } else {
          $('#count_images_files_mob').text('');
        }
      });
      $("#author_image_mob").on("change", function () {
        var numFiles = $(this).get(0).files.length;
        if (numFiles > 0) {
          $('#count_author_image_mob').text(numFiles);
        } else {
          $('#count_author_image_mob').text('');
        }
      });
    });
  </script>
@endsection
