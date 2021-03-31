<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Условия</h2>
        <div class="form-group col-md-10 col-md-offset-1 sale-condition-list">
            @if(isset($pageData->conditions))
                @foreach($pageData->conditions as $key => $condition)
                    <div class="condition-item"  data-id="{{ $key }}">
                        <textarea name="conditions[{{ $key }}]" rows="3"
                                  class="form-control">{{ $condition }}</textarea>
                        <button class="pull-right remove-sale-condition btn btn-danger" type="button">Удалить условие
                        </button>
                    </div>
                @endforeach
            @else
                <div class="condition-item"  data-id="0">
                    <textarea name="conditions[0]" rows="3" class="form-control"></textarea>
                    <button class="pull-right remove-sale-condition btn btn-danger" type="button">Удалить
                        условие
                    </button>
                </div>
            @endif
            <div class="clearfix"></div>
            <button class="pull-right btn btn-primary" id="add-sale-condition" type="button">Добавить условие</button>
        </div>
    </div>
</div>