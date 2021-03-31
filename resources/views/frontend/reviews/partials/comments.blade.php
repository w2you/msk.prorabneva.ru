@foreach($reviews_mob as $comment)
    <div class='block' itemprop="review" itemscope itemtype="http://schema.org/Review">
        <div class='img_name_stars clearfix'>
            <div class='img_name clearfix'>
                <div class='img'>
                    @if($comment->link != "")
                        <a href="{{$comment->link}}" target="_blank">
                            <img src="{{ asset('storage/' . $comment->author_image) }}" alt="Отзывы - Прораб Нева">
                        </a>
                    @else
                        <img src="{{ asset('storage/' . $comment->author_image) }}" alt="Отзывы - Прораб Нева">
                    @endif

                </div>
                <div class='name_days'>
                    <div class='days' itemprop="datePublished">{{ $comment->created_at->format('d.m.Y') }}</div>
                    <div class='name_comm'>
                        @if($comment->link != "")
                            <a href="{{$comment->link}}" target="_blank">
                                {{ $comment->author }}

                            </a>
                        @else
                            {{ $comment->author }}
                        @endif
                    </div>
                </div>
            </div>
            <div class='soc2'>
                @if($comment['link_vk'])
                    <a class='{{$comment['link_vk'] ?:'disable_soc'}}' href='{{$comment['link_vk']}}' target="_blank"
                       title="Открыть профиль">
                        <img src='/frontend/images/rev_vk.png'>
                        <img src='/frontend/images/rev_vk.png'>
                    </a>
                @endif
                @if($comment['link_facebook'])
                    <a class='{{$comment['link_facebook'] ?:'disable_soc'}}' href='{{$comment['link_facebook']}}' target="_blank"
                       title="Открыть профиль">
                        <img src='/frontend/images/rev_fac.png'>
                        <img src='/frontend/images/rev_fac.png'>
                    </a>
                @endif
                @if($comment['link_instagram'])
                    <a class='{{$comment['link_instagram'] ?:'disable_soc'}}' href='{{$comment['link_instagram']}}'
                       target="_blank"
                       title="Открыть профиль">
                        <img src='/frontend/images/rev_inst.png'>
                        <img src='/frontend/images/rev_inst.png'>
                    </a>
                @endif
            </div>
            <div class='stars clearfix'>
                @for($i = 0; $i < $comment->rating; $i ++)
                    <div class='active'></div>
                @endfor
                @for($i = $comment->rating; $i < 5; $i ++)
                    <div></div>
                @endfor
            </div>
        </div>
        <div class='text_area_new comments_text_area' itemprop="review" itemscope itemtype="http://schema.org/Review">
            <h2 itemprop="name">{!! $comment->title !!}</h2>
            <p itemprop="reviewBody">{!! $comment->body !!}</p>
            <div class='images clearfix'>
                @if($comment->images)
                    @foreach(json_decode($comment->images) as $image)
                        <div class='img_click'>
                            <a class="lightbox" aria-haspopup="dialog" data-lightbox-gallery='images' title='Фото #1' href="{{ asset('storage/' . $image) }}">
                                <img src="{{ asset('storage/' . $image) }}" alt="Отзывы - Прораб Нева">
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endforeach
