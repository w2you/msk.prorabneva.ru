<div class="col-md-12 vacancy">
    <div class="form-group requirement-list">
        <label for="">Требования</label>
        @isset($vacancy)
            @foreach($vacancy->requirements as $key => $requirement)
                <div class="requirement-item" data-id="{{ $key }}">
                    <input type="text" name="requirements[{{ $key }}]" value="{{ $requirement }}" class="form-control">
                    <button type="button" class="btn btn-danger remove-requirement pull-right">Удалить требование</button>
                </div>
            @endforeach
        @else
            <div class="requirement-item" data-id="0">
                <input type="text" name="requirements[0]" class="form-control">
                <button type="button" class="btn btn-danger remove-requirement pull-right">Удалить требование</button>
            </div>
        @endif
        <div class="clearfix"></div>
        <button type="button" class="btn btn-primary pull-right" id="add-requirement">Добавить требование</button>
    </div>
    <div class="form-group responsibility-list">
        <label for="">Обязанности</label>
        @isset($vacancy)
            @foreach($vacancy->responsibilities as $key => $responsibility)
                <div class="responsibility-item" data-id="{{ $key }}">
                    <input type="text" name="responsibilities[{{ $key }}]" value="{{ $responsibility }}"
                           class="form-control">
                    <button type="button" class="btn btn-danger remove-responsibility pull-right">Удалить обязанность</button>
                </div>
            @endforeach
        @else
            <div class="responsibility-item" data-id="0">
                <input type="text" name="responsibilities[]" class="form-control">
                <button type="button" class="btn btn-danger remove-responsibility pull-right">Удалить обязанность</button>
            </div>
        @endif
        <div class="clearfix"></div>
        <button type="button" class="btn btn-primary pull-right" id="add-responsibility">Добавить обязанность</button>
    </div>
    <div class="form-group condition-list">
        <label for="Условия">Условия</label>
        @isset($vacancy)
            @foreach($vacancy->conditions as $key => $condition)
                <div class="condition-item" data-id="{{ $key }}">
                    <input type="text" name="conditions[{{ $key }}]" value="{{ $condition }}" class="form-control">
                    <button type="button" class="btn btn-danger remove-condition pull-right">Удалить условие</button>
                </div>
            @endforeach
        @else
            <div class="condition-item" data-id="0">
                <input type="text" name="conditions[]" class="form-control">
                <button type="button" class="btn btn-danger remove-condition pull-right">Удалить условие</button>
            </div>
        @endif
        <div class="clearfix"></div>
        <button type="button" class="btn btn-primary pull-right" id="add-condition">Добавить условие</button>
    </div>
</div>