$(document).ready(function () {

    $('.sponsor_form').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                $('.popup-input[type=tel]').mask('+7 (000) 000-00-00');
            }
        },
        midClick: true
    });

    $('.package:nth-child(even)').each(function() {
        $(this).find('.components-list__item--520').insertAfter($(this).find('.components-list__item--490'));
    });

    // Перестройка блоков контента на разных разрешениях
    function MoveBlock() {
        if ($(window).width() <= 1000) {
            $('.images-list').insertBefore($('.information__give-offer-wrap'));
        } else {
            $('.images-list').appendTo($('.information__wrap-1160'));
        }
    }

    $(window).on('resize', MoveBlock);
    $(window).on('load', MoveBlock());

    window.vidplay = function() {
       var video = document.getElementById("video");
       video.paused ? video.play() : video.pause();
    }
});