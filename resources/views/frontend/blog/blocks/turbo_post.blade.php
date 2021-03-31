
<item turbo="true">
  <!-- Информация о странице -->
  <turbo:extendedHtml>true</turbo:extendedHtml>
  <title>{{$material['title']}}</title>
  <link>{{route('blog.material',[$material['category']['slug'],$material['slug']])}}</link>
  <turbo:source>{{route('blog.material',[$material['category']['slug'],$material['slug']])}}</turbo:source>
  <turbo:topic>{{$material['title']}}</turbo:topic>
  <pubDate>{{ \App\Helpers\Helper::getRSSDate($material['date']) }}</pubDate>
  <author>{{$material['authorId']['name']}}</author>
  <metrics>
    <yandex schema_identifier="Идентификатор">
      <breadcrumblist>
        <breadcrumb url="https://www.prorabneva.ru" text="Домашняя"/>
        <breadcrumb url=" http://prorabneva.loc/blog" text="Блог"/>
        <breadcrumb url="{{ route('blog.category', $material->category->slug)  }}" text="{{$material->category->name}}"/>
      </breadcrumblist>
    </yandex>
  </metrics>
  <yandex:related></yandex:related>
  <turbo:content>
    <![CDATA[
      <header>
        <h1>{{$material['title']}}</h1>
      </header>
        @foreach($material->contents as $post_content)
		--{{ $post_content['type']}}--
          @include('frontend.blog.materyal_content_turbo.type_' . $post_content['type'])
        @endforeach
        {{--{!! $material['body'] !!}--}}
        <div class='blocks_all_width'>
          <div class='share_block'>
            <div class='img_name_info'>
              <div class='img'>
                <img src='{{$material['authorId']['image']}}'>
              </div>
            </div>
          </div>

          <div class='share_soc'>
            <div class='share'>Понравилось? Поделитесь с друзьями</div>
            <div class='soc'>
              <a href="https://vk.com/share.php?url={{route('blog.material', [$material['category']['slug'], $material['slug']])}}" target="_blank">
                <img src='https://www.prorabneva.ru/frontend/images_3/soc_icon_1_1.png'>
                <img src='https://www.prorabneva.ru/frontend/images/soc_icon_hover_1.png'>
              </a>
              <a href="https://www.facebook.com/sharer/sharer.php?u={{route('blog.material', [$material['category']['slug'], $material['slug']])}}" target="_blank">
                <img src='https://www.prorabneva.ru/frontend/images_3/soc_icon_2_1.png'>
                <img src='https://www.prorabneva.ru/frontend/images/soc_icon_hover_2.png'>
              </a>
              <a href='https://connect.ok.ru/offer?url={{route('blog.material', [$material['category']['slug'], $material['slug']])}}' target="_blank">
                <img src='https://www.prorabneva.ru/frontend/images_3/soc_icon_3_1.png'>
                <img src='https://www.prorabneva.ru/frontend/images/soc_icon_hover_5.png'>
              </a>
            </div>
          </div>

          <div class='sta_blog sta_blog_4'>
            <div class='left_block'>
              <div class='title_sta'>Нужна консультация по ремонту?</div>
              <p>Оставьте заявку, и наши специалисты проконсультируют вас по всем вопросам</p>
            </div>
            <div class='right_button'>
              <div class='button_style'>
                <a class='call_open_popup_button' href='https://www.prorabneva.ru'>Заявка</a>
              </div>
            </div>
          </div>
        </div>
    ]]>
  </turbo:content>
</item>