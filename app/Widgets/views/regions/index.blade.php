<div class="form-group">
        @foreach($regions as $reg )
            <a href="http://{{ $reg->slug }}.<?php echo env('SESSION_DOMAIN') ?>/">
                @if($region->slug == $reg->slug)
                    <b>
                        {!!  $reg->title  !!}
                    </b>
                @else
                    {!!  $reg->title  !!}
                @endif
            </a>
        @endforeach
</div>