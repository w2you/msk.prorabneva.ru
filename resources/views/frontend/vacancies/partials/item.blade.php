<div class='block'>
    <div class='click_block'>{{ $vacancy->title }}</div>
    <div class='all_block'>
        @if($vacancy->requirements)
            <div class='name_block'>Требования:</div>
            <ul>
                @foreach($vacancy->requirements as $requirement)
                    <li>{{ $requirement }}</li>
                @endforeach
            </ul>
        @endif
        @if($vacancy->responsibilities)
            <div class='name_block'>Обязанности:</div>
            <ul>
                @foreach($vacancy->responsibilities as $responsibility)
                    <li>{{ $responsibility }}</li>
                @endforeach
            </ul>
        @endif
        @if($vacancy->conditions)
            <div class='name_block'>Условия:</div>
            <ul>
                @foreach($vacancy->conditions as $condition)
                    <li>{{ $condition }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>