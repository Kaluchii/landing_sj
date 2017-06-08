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

    //===============================================================
    //======= Обработчики для подсветки текущего пунтка меню ========
    //===============================================================
    var items = document.location.pathname;
    var category = items.split('/')[1];
    var category2 = items.split('/')[2];

    // Подсветка текущего пункта меню для общего меню
    $('.menu__link').each(function () {
        if (($(this).attr('href') == '/' + category) || ($(this).attr('href') == '/for-players/' + category2)) {
            $(this).addClass('active');
        }
    });
    // Подсветка текущего пункта меню для бокового меню
    $('.sub-navigation__link').each(function () {
        if ($(this).attr('href') == '/for-players/' + category2) {
            $(this).addClass('active');
        } else if (category2 === undefined) {
            $('.sub-navigation__item:first-child .sub-navigation__link').addClass('active');
        }
    });

    // Смена местами пятого и четвертого пункта в каждом втором спонсорском пакете
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