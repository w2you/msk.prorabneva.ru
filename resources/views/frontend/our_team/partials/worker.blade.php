<div class="block">
    <div class='img_block'>
        <img src="{{ asset('storage/' . $worker->image) }}"  alt='Наша команда - Прораб Нева'>
    </div>
    <div class='name_block'>
        {{ $worker->name }}
        @if(!is_null($worker->description))
            <p>{!! $worker->description !!}</p>
        @endif
    </div>
</div>