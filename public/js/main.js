$(document).ready(function () {
    // Перестройка блоков контента на разных разрешениях
    function MoveBlock() {
        if ($(window).width() <= 1000) {
            $('.images-list').insertBefore($('.information__give-offer-wrap'));
        } else {
            $('.images-list').appendTo($('.information__wrap-1110'));
        }
    }

    $(window).on('resize', MoveBlock);
    $(window).on('load', MoveBlock());
});