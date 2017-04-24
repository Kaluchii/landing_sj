$(document).ready(function () {
    // Перестройка блоков контента на разных разрешениях
    function MoveBlock() {
        if ($(window).width() <= '1000') {
            $('.images-list').prependTo($('.information__text-wrap'));
            $('.information__block-title').prependTo($('.information__text-wrap'));
        } else {
            $('.images-list').appendTo($('.information__wrap-1110'));
        }
    }

    $(window).on('load resize', MoveBlock());
});