$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $(".ticky-top").css('background-color', '#f0f0f0');
            } else {
                $('.ticky-top').css('background-color', 'transparent');
            }
        });
    }
});