var imageTour = '';
var imageBeforeAfter = '';

$(document).ready(function () {
    $('[data-bg]').each(function () {
        if($(this).attr('data-bg')) {
            var  url = $(this).attr('data-bg'),
                bgStyle = $(this).css('backgroundImage');
            bgStyle = bgStyle.replace(/url\(.+\)/, 'url(' + url + ')');
            $(this).css({
                backgroundImage:  bgStyle
            });
        }
    });

    $(document).on('change', '#check_inp', function () {
        applyFilter();
    });

    $(document).on('change', '#check_inp_2', function () {
        applyFilter();
    });

});
