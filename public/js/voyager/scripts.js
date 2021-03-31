var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function () {
    $(function() {
        $('#repairs').selectize({
            plugins: ['drag_drop'],
        });
    });
    initRichTextEditor(false);

    $('#restSlides').on('select2:select', function (e) {
        var id = e.params.data.id;

        $.ajax({
            url: $(this).attr('data-url'),
            data: {id: id},
            type: 'POST',
            success: function (response) {
                var slide = response.slide,
                    thumbnail,
                    required;
                if (slide.thumbnail) {
                    required = '';
                    thumbnail = '<img src="' + slide.thumbnail + '" style="display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;max-width: 200px">';
                } else {
                    required = 'required';
                    thumbnail = '';
                }

                var data = '<tr>' +
                    // '<td>' + slide.id + '</td>' +
                    '<td>0</td>' +
                    '<td><textarea required class="form-control richTextBoxCustom" id="' + +'" name="slide[old][' + slide.id + '][title]" rows="5">' + slide.title + '</textarea></td>' +
                    '<td><textarea required class="form-control richTextBoxCustom" id="' + +'" name="slide[old][' + slide.id + '][description]" rows="5">' + slide.description + '</textarea></td>' +
                    '<td><input type="text" class="form-control" class="form-control" name="slide[old][' + slide.id + '][link]" value="' + slide.link + '"></td>' +
                    '<td><img src="' + slide.image + '" style="display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;max-width: 200px">' +
                    '<input ' + required + ' type="file" name="slide[old][' + slide.id + '][image]" accept="image/*"></td>' +
                    '<td>' + thumbnail +
                    '<input type="file" name="slide[old][' + slide.id + '][thumbnail]" accept="image/*"></td>' +
                    '<td><a href="javascript:;" title="Удалить" class="btn btn-sm btn-danger delete">' +
                    '<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Удалить</span>' +
                    '</a></10td>' +
                    '</tr>';

                $('.datatable').dataTable().fnDestroy();
                $('.datatable tbody').prepend(data);
                $('.datatable').DataTable({
                    "bDestroy": true,
                    "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>',
                });
                initRichTextEditor(true);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

    $('#add-slide').on('click', function () {
        var id1 = 'title_' + Math.ceil(Math.random() * 1000),
            id2 = 'description_' + Math.ceil(Math.random() * 1000),
            uniqueId = Math.ceil(Math.random() * 10000);

        var data = '<tr>' +
            '<td></td>' +
            '<td><input required class="form-control richTextBoxCustom" id="' + id1 + '" name="slide[new][' + uniqueId + '][title]"></td>' +
            '<td><input required class="form-control richTextBoxCustom" id="' + id2 + '" name="slide[new][' + uniqueId + '][description]"></td>' +
            '<td><input required type="text" name="slide[new][' + uniqueId + '][link]"></td>' +
            '<td>' +
            '<input required type="file" name="slide[new][' + uniqueId + '][image]" accept="image/*"></td>' +
            '<td>' +
            '<input type="file" name="slide[new][' + uniqueId + '][thumbnail]" accept="image/*"></td>' +
            '<td><a href="javascript:;" title="Удалить" class="btn btn-sm btn-danger delete">' +
            '<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Удалить</span>' +
            '</a></10td>' +
            '</tr>';

        $('.datatable').dataTable().fnDestroy();
        $('.datatable tbody').append(data);

        $('.datatable').DataTable({
            "bDestroy": true,
            "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
        });
        initRichTextEditor(true);
    });

    $('.datatable').on('click', '.delete', function () {
        var $self = $(this),
            pageId = $self.closest('table').data('page-id');

        if ($(this).attr('data-id')) {
            $.ajax({
                url: $self.data('url'),
                type: 'POST',
                data: {
                    _token: CSRF_TOKEN,
                    _method: 'delete',
                    pageId: pageId
                },
                success: function () {
                    $('.datatable').dataTable().fnDestroy();
                    $self.closest('tr').remove();
                    $('.datatable').DataTable({
                        "bDestroy": true,
                        "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
        } else {
            $('.datatable').dataTable().fnDestroy();
            $self.closest('tr').fadeOut(300, function () {
                $self.closest('tr').remove();
            });
            $('.datatable').DataTable({
                "bDestroy": true,
                "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
            });
        }

    });

    $('#add_stat').on('click', function () {
        var statId = Math.ceil(Math.random() * 1000);
        var stat = '<div class="row">\n' +
            '    <div class="col-md-3">\n' +
            '        <label for="">Количество</label>\n' +
            '        <input type="text" class="form-control" name="repairInfo[stats][' + statId + '][count]" class="form-control">\n' +
            '    </div>\n' +
            '    <div class="col-md-3">\n' +
            '        <label for="">Единица измерения</label>\n' +
            '        <input type="text" class="form-control" name="repairInfo[stats][' + statId + '][unit]" class="form-control">\n' +
            '    </div>\n' +
            '    <div class="col-md-3">\n' +
            '        <label for="">Название</label>\n' +
            '        <input type="text" class="form-control" name="repairInfo[stats][' + statId + '][name]" class="form-control">\n' +
            '    </div>\n' +
            '    <div class="col-md-3">' +
            '         <button class="btn btn-danger remove-stat" type="button">Удалить статистику</button>' +
            '    </div>' +
            '</div>\n' +
            '<hr class="visible-xs visible-sm">';

        $('#stat-list h2').after(stat);
    });

    $('#stat-list').on('click', '.remove-stat', function () {
        $(this).closest('.row').remove();
    })

});

function initRichTextEditor(isNew) {

    if (isNew) {
        $('.richTextBoxCustom[required]').each(function () {
            tinyMCE.execCommand('mceRemoveEditor', false, $(this).attr('id'))
        });
    }

    tinymce.init({
        menubar: false,
        selector: 'textarea.richTextBoxCustom',
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        },
        skin: 'voyager',
        min_height: 300,
        resize: 'vertical',
        plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
        extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
        file_browser_callback: function (field_name, url, type, win) {
            if (type === 'image') {
                $('#upload_file').trigger('click');
            }
        },
        toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
        convert_urls: false,
        image_caption: true,
        image_title: true,
        init_instance_callback: function (editor) {
            if (typeof tinymce_init_callback !== "undefined") {
                tinymce_init_callback(editor);
            }
        },
    });

    $('#add-faq').on('click', function () {
        var index = +$('.faq-list').find('.faq-item').last().data('id') + 1;
        var faq = '<div class="col-md-10 col-md-offset-1 faq-item" data-id="' + index + '">' +
            '            <div class="form-group" data-id="' + index + '">\n' +
            '                <label for="">Вопрос</label>\n' +
            '                <textarea name="faq[items][' + index + '][question]" rows="3" class="form-control"></textarea>\n' +
            '            </div>\n' +
            '            <div class="form-group">\n' +
            '                <label for="">Ответ</label>\n' +
            '                <textarea name="faq[items][' + index + '][answer]" rows="3" class="form-control"></textarea>\n' +
            '            </div>\n' +
            '            <button class="btn btn-danger pull-right remove-faq" type="button">Удалить вопрос-ответ</button>' +
            '            <div class="clearfix"></div>'
        '</div>';

        $('.faq-list').append(faq);
    });

    $(document).on('click', '.remove-faq', function () {
        $(this).closest('.faq-item').remove();
    });

    $('#add-sale').on('click', function () {
        var index = +$('.sale-list').find('.sale-item').last().data('id') + 1;
        var sale = '<div class="col-md-10 col-md-offset-1 sale-item" data-id="' + index + '">\n' +
            '                    <div class="form-group">\n' +
            '                        <label for="">Название</label>\n' +
            '                        <input name="sales[' + index + '][title]" class="form-control" value="">\n' +
            '                    </div>\n' +
            '                    <div class="form-group">\n' +
            '                        <label for="">Описание</label>\n' +
            '                        <textarea name="sales[' + index + '][description]" rows="3"\n' +
            '                                  class="form-control"></textarea>\n' +
            '                    </div>\n' +
            '                    <div class="form-group">\n' +
            '                        <label for="">Цена</label>\n' +
            '                        <input type="number" name="sales[' + index + '][price]" class="form-control" value="" min="1">\n' +
            '                    </div>\n' +
            '                    <div class="form-group">\n' +
            '                        <label for="">Картинка</label>\n' +
            '                        <input type="file" name="sales[' + index + '][image]">\n' +
            '                    </div>\n' +
            '                    <button class="btn btn-danger pull-right remove-sale" type="button">Удалить скидку</button>\n' +
            '                    <div class="clearfix"></div>\n' +
            '                </div>';

        $('.sale-list').append(sale);
    });

    $(document).on('click', '.remove-sale', function () {
        $(this).closest('.sale-item').remove();
    });

    $('#add-sale-condition').on('click', function () {
        var index = +$('.condition-item').last().attr('data-id') + 1;
        var condition = '<div class="condition-item" data-id="' + index + '">' +
            '                   <textarea name="conditions[' + index + ']" rows="3" class="form-control"></textarea>\n' +
            '                   <button class="pull-right remove-sale-condition btn btn-danger" type="button" data-id="' + index + '">Удалить условие</button>' +
        '               </div>';
        $(this).prev().before(condition);
    });

    $('.sale-condition-list').on('click', '.remove-sale-condition', function () {
        $(this).closest('.condition-item').remove();
    });

    $('.vacancy').on('click', '.remove-requirement', function () {
        $(this).closest('.requirement-item').remove();
    });

    $('#add-requirement').on('click', function () {
        var index = +$('.requirement-item').last().attr('data-id') + 1;
        var text = '<div class="requirement-item" data-id="' + index + '">\n' +
            '                <input type="text" class="form-control" name="requirements[' + index + ']" class="form-control">\n' +
            '                <button type="button" class="btn btn-danger remove-requirement pull-right">Удалить требование</button>\n' +
            '            </div>';
        $('.requirement-list .clearfix').before(text);
    });

    $('.vacancy').on('click', '.remove-requirement', function () {
        $(this).closest('.requirement-item').remove();
    });

    $('#add-responsibility').on('click', function () {
        var index = +$('.responsibility-item').last().attr('data-id') + 1;
        var text = '<div class="responsibility-item" data-id="' + index + '">\n' +
            '                <input type="text" class="form-control" name="responsibilities[' + index + ']" class="form-control">\n' +
            '                <button type="button" class="btn btn-danger remove-responsibility pull-right">Удалить требование</button>\n' +
            '            </div>';
        $('.responsibility-list .clearfix').before(text);
    });

    $('.vacancy').on('click', '.remove-condition', function () {
        $(this).closest('.condition-item').remove();
    });

    $('#add-condition').on('click', function () {
        var index = +$('.condition-item').last().attr('data-id') + 1;
        var text = '<div class="condition-item" data-id="' + index + '">\n' +
            '                <input type="text" class="form-control" name="conditions[' + index + ']" class="form-control">\n' +
            '                <button type="button" class="btn btn-danger remove-condition pull-right">Удалить требование</button>\n' +
            '            </div>';
        $('.condition-list .clearfix').before(text);
    });
    
    $('#add-advantage').on('click', function () {
        var index = $('.advantage-item').length ? +$('.advantage-item').last().attr('data-id') + 1 : 0;
        var text = '<div class="advantage-item" data-id="' + index + '">\n' +
            '                        <label for="">Название</label>\n' +
            '                        <input type="text" class="form-control" name="advantages[' + index + '][title]">\n' +
            '                        <label for="">Описание</label>\n' +
            '                        <input type="text" class="form-control" name="advantages[' + index + '][description]">\n' +
            '                        <label for="">Иконка</label>\n' +
            '                        <input type="file" name="advantages[' + index + '][image]">\n' +
            '                        <button type="button" class="btn btn-danger pull-right remove-advantage">Удалить преимущество</button>\n' +
            '                        <div class="clearfix"></div>\n' +
            '                    </div>';
        $('.advantage-list').append(text);
    });

    $('.advantage-list').on('click', '.remove-advantage', function () {
        $(this).closest('.advantage-item').remove();
    });

    $('.action-list').on('click', '.remove-row', function (e) {
        e.preventDefault();
        $(this).closest('.action-list-row-item').remove();
    });

    $('.action-list').on('click', '.remove-operation-item', function () {
        $(this).closest('.action-item').remove();
    });

    $('.action-list').on('click', '.add-row', function (e) {
        e.preventDefault();
        var index = +$(this).closest('.action-list-row-list').find('.action-list-row-item').last().attr('data-id') + 1;
        var parentIndex = +$(this).closest('.action-item').attr('data-id');
        var text = '<div class="action-list-row-item form-group" data-id="' + index + '">\n' +
            '           <input type="text" name="what_we_do[items][' + parentIndex + '][rows]['+ index +']"\n' +
            '                  class="form-control">\n' +
            '           <a href="#" class="pull-right remove-row"><span\n' +
            '                       class="icon voyager-x"></span></a>\n' +
            '           <div class="clearfix"></div>\n' +
            '       </div>';
        $(this).before(text);
    });
    
    $('#operation-group').on('click', function () {
        var index = +$('.action-list').find('.action-item').last().attr('data-id') + 1;
        console.log(index);
        var text = '<div class="col-md-12 action-item" data-id="0">\n' +
            '          <div>\n' +
            '              <label for="">Название</label>\n' +
            '              <input type="text" name="what_we_do[items][' + index + '][title]" class="form-control">\n' +
            '          </div>\n' +
            '          <div class="action-list-row-list">\n' +
            '              <label for="">Действия</label>\n' +
            '              <div class="action-list-row-item form-group" data-id="0">\n' +
            '                  <input type="text" name="what_we_do[items][' + index + '][rows][0]"\n' +
            '                         class="form-control">\n' +
            '                  <a href="#" class="pull-right remove-row"><span\n' +
            '                              class="icon voyager-x"></span></a>\n' +
            '                  <div class="clearfix"></div>\n' +
            '              </div>\n' +
            '              <div class="action-list-row-item form-group" data-id="1">\n' +
            '                  <input type="text" name="what_we_do[items][' + index + '][rows][1]"\n' +
            '                         class="form-control">\n' +
            '                  <a href="#" class="pull-right remove-row"><span\n' +
            '                              class="icon voyager-x"></span></a>\n' +
            '                  <div class="clearfix"></div>\n' +
            '              </div>\n' +
            '              <a href="#" class="pull-right add-row"><span class="icon voyager-list-add"></span></a>\n' +
            '              <div class="clearfix"></div>\n' +
            '          </div>\n' +
            '          <button type="button" class="btn btn-danger remove-operation-item pull-right">Удалить группу действия</button>\n' +
            '          <div class="clearfix"></div>\n' +
            '      </div>\n' +
            '      <hr class="col-md-12">';
        $(this).before(text);
    });

    $('.why-we-list').on('click', '.remove-why-we-item', function () {
        $(this).closest('.why-we-item').remove();
    });

    $('#add-why-we-item').on('click', function () {
        var index = +$('.why-we-list').find('.why-we-item').last().attr('data-id') + 1;
        var text = '<div class="col-md-4 why-we-item" data-id="' + index + '">\n' +
            '           <label for="">Название</label>\n' +
            '           <input type="text" name="why_we[feature][' + index + '][title]" class="form-control"\n' +
            '                  value="">\n' +
            '           <label for="">Описание</label>\n' +
            '           <textarea name="why_we[feature][' + index + '][description]" rows="3"\n' +
            '                     class="form-control"></textarea>\n' +
            '           <label for="">Картинка</label>\n' +
            '           <input type="file" name="why_we[feature][' + index + '][image]" accept="image/*"\n' +
            '                  style="max-width: 100%;">\n' +
            '           <button type="button" class="btn btn-danger remove-why-we-item">Удалить элемент</button>\n' +
            '           <div class="clearfix"></div>\n' +
            '       </div>';
        $('.why-we-list').find('.why-we-item').last().after(text);
    });

}