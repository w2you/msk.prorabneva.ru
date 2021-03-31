
<rss xmlns:yandex="http://news.yandex.ru"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:turbo="http://turbo.yandex.ru"
     version="2.0">
  <channel>
    <!-- Информация о сайте-источнике -->
    <title>Блог о ремонте компании “Прораб НЕВА”</title>
    <link>https://www.prorabneva.ru</link>
    <description>Полезные статьи, красивые интерьеры и обзоры ремонтов, сделанных специалистами компании “Прораб НЕВА”</description>
    <language>ru</language>
    <turbo:analytics type="Yandex" id="44756221"></turbo:analytics>

    @foreach($materials as $material)
      @include('frontend.blog.blocks.turbo_post')
    @endforeach

  </channel>
</rss>

