$(document).ready(function() {
    var span = $('<span>').css('display', 'inline-block')
        .css('word-break', 'break-all').appendTo('body').css('visibility', 'hidden');

    function initSpan(textarea) {
        span.text(textarea.text())
            .width(textarea.width())
            .css('font', textarea.css('font'));
    }
    $('textarea').on({
        input: function () {
            var text = $(this).val();
            span.text(text);
            $(this).height(text ? span.height() : '20');
        },
        focus: function () {
            initSpan($(this));
        },
        keypress: function (e) {
            if (e.which == 13) e.preventDefault();
        }
    });
});