<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">ЧТО МЫ ДЕЛАЕМ</h2>
        <div class="col-md-10 col-md-offset-1 form-group">
            <h3 class="text-center">Список действий</h3>
            <div class="row action-list">
                @if(isset($dataTypeContent->what_we_do->items) && count($dataTypeContent->what_we_do->items) > 0)
                    @foreach($dataTypeContent->what_we_do->items as $key => $item)
                        <div class="col-md-12 action-item" data-id="{{ $key }}">
                            <div>
                                <label for="">Название</label>
                                <input type="text" name="what_we_do[items][{{ $key }}][title]" class="form-control"
                                       value="{{ $item->title }}">
                            </div>
                            @isset($item->rows)
                                @if(count($item->rows))
                                    <div class="action-list-row-list">
                                        <label for="">Действия</label>
                                        @foreach($item->rows as $i => $row)
                                            <div class="action-list-row-item form-group" data-id="{{ $i }}">
                                                <input type="text" name="what_we_do[items][{{ $key }}][rows][{{ $i }}]"
                                                       value="{{ $row }}"
                                                       class="form-control">
                                                <a href="#" class="pull-right remove-row"><span
                                                            class="icon voyager-x"></span></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        @endforeach
                                        <a href="#" class="pull-right add-row"><span
                                                    class="icon voyager-list-add"></span></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <button type="button" class="btn btn-danger remove-operation-item pull-right">Удалить группу
                                        действия
                                    </button>
                                    <div class="clearfix"></div>
                                @endif
                            @endisset
                        </div>
                        <hr class="col-md-12">
                    @endforeach
                    <button type="button" class="btn btn-primary pull-right" id="operation-group">Добавить группу сействий
                    </button>
                    <div class="clearfix"></div>
                @else
                    <div class="col-md-12 action-item" data-id="0">
                        <div>
                            <label for="">Название</label>
                            <input type="text" name="what_we_do[items][0][title]" class="form-control">
                        </div>
                        <div class="action-list-row-list">
                            <label for="">Действия</label>
                            <div class="action-list-row-item form-group" data-id="0">
                                <input type="text" name="what_we_do[items][0][rows][0]"
                                       class="form-control">
                                <a href="#" class="pull-right remove-row"><span
                                            class="icon voyager-x"></span></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="action-list-row-item form-group" data-id="1">
                                <input type="text" name="what_we_do[items][0][rows][1]"
                                       class="form-control">
                                <a href="#" class="pull-right remove-row"><span
                                            class="icon voyager-x"></span></a>
                                <div class="clearfix"></div>
                            </div>
                            <a href="#" class="pull-right add-row"><span class="icon voyager-list-add"></span></a>
                            <div class="clearfix"></div>
                        </div>
                        <button type="button" class="btn btn-danger remove-operation-item pull-right">Удалить группу действия</button>
                        <div class="clearfix"></div>
                    </div>
                    <hr class="col-md-12">
                    <div class="col-md-12 action-item" data-id="1">
                        <div>
                            <label for="">Название</label>
                            <input type="text" name="what_we_do[items][1][title]" class="form-control">
                        </div>
                        <div class="action-list-row-list">
                            <label for="">Действия</label>
                            <div class="action-list-row-item form-group" data-id="0">
                                <input type="text" name="what_we_do[items][1][rows][0]"
                                       class="form-control">
                                <a href="#" class="pull-right remove-row"><span
                                            class="icon voyager-x"></span></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="action-list-row-item form-group" data-id="1">
                                <input type="text" name="what_we_do[items][1][rows][1]"
                                       class="form-control">
                                <a href="#" class="pull-right remove-row"><span
                                            class="icon voyager-x"></span></a>
                                <div class="clearfix"></div>
                            </div>
                            <a href="#" class="pull-right add-row"><span class="icon voyager-list-add"></span></a>
                            <div class="clearfix"></div>
                        </div>
                        <button type="button" class="btn btn-danger remove-operation-item pull-right">Удалить группу действия</button>
                        <div class="clearfix"></div>
                    </div>
                    <hr class="col-md-12">
                    <button type="button" class="btn btn-primary pull-right" id="operation-group">Добавить группу сействий</button>
                    <div class="clearfix"></div>
                @endif
            </div>
        </div>
    </div>
</div>
