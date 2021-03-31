<div class="col-md-12 form-border">
    <div class="row">
        <h2 class="text-center">Слайды</h2>
        <div class="form-group col-md-10 col-md-offset-1">
            <button class="btn btn-primary" id="add-slide" type="button">Добавить новъй слайд</button>

            <table class="datatable table table-hover" data-page-id="{{ $dataTypeContent->id }}">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Ссылка</th>
                    <th>Картина</th>
                    <th>Миниатюра</th>
                    <th class="sorting_disabled">Доступные действия</th>
                </tr>
                </thead>
                <tbody>
                @if(count($pageData->slides) > 0)
                    @foreach($pageData->slides as $slide)
                        <tr>
                            <td>{{ $slide->id }}</td>
                            <td>
                                <input required class="form-control richTextBoxCustom"
                                       name="slide[old][{{$slide->id}}][title]"
                                       rows="5" id="title_{{ $slide->id }}" value="{{ $slide->title }}">
                            </td>
                            <td>
                                <input required class="form-control"
                                       name="slide[old][{{$slide->id}}][description]"
                                       value="{{ $slide->description }}"
                                       id="description_{{ $slide->id }}">
                            </td>
                            <td>
                                <input type="text" value="{{ $slide->link }}" name="slide[old][{{$slide->id}}][link]"
                                       class="form-control" required>
                            </td>
                            <td>
                                <img src="{{ asset('storage/' . $slide->image) }}"
                                     style="display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;max-width: 200px">
                                <input type="file" name="slide[old][{{$slide->id}}][image]" accept="image/*">
                            </td>

                            <td>
                                @if($slide->thumbnail)
                                    <img src="{{ asset('storage/' . $slide->thumbnail) }}" class="img-responsive"
                                         style="display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;max-width: 200px">
                                @endif
                                <input type="file"
                                       name="slide[old][{{$slide->id}}][thumbnail]" accept="image/*">
                            </td>
                            <td class="no-sort no-click" id="bread-actions">
                                <a href="javascript:;" title="Удалить" class="btn btn-sm btn-danger delete"
                                   data-id="{{ $slide->id }}" id="delete-{{ $slide->id }}"
                                   data-url="{{ route('deletePageSlide', $slide->id) }}">
                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Удалить</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>