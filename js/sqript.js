

// ハンバーガーメニュー

$('.header-nav-sp').hide();
$('.fa-bars').on('click', function () {

    $('.header-nav-sp').toggle();

})

$('.header-nav-sp').on('click', function () {

    $('.header-nav-sp').fadeOut();

});

$('.fa-times').on('click', function () {

    $('.header-nav-sp').fadeOut();

});

//scroll

$(function () {
    $(window).scroll(function () {
        $('.fadein').each(function () {
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (scroll > targetElement - windowHeight + 150) {
                $(this).addClass('scrollin');
            }

        });
    });
});

// skillの表示・非表示

$(function () {
    $('.skile-sec').click(function () {

        var $answer = $(this).find('.skile-list');
        if ($answer.hasClass('open')) {
            
            $answer.removeClass('open');
            $answer.slideUp();
            $(this).find('span').html('<i class="fas fa-angle-down"></i>');
        } else {
            $answer.addClass('open');
            $answer.slideDown();
            $(this).find('span').html('<i class="fas fa-angle-up"></i>');
        }
    });
});

//work

$(function () {
    $('.site-img-pc').hide();
    $('.btn-pc').on('click', function () {
        $('.site-img-pc').fadeIn();
    });
    $('.fa-times-circle').on('click', function () {
        $('.site-img-pc').fadeOut();
    });
});

$(function () {
    $('.site-img-sp').hide();
    $('.btn-sp').on('click', function () {
        $('.site-img-sp').fadeIn();
    });
    $('.fa-times-circle').on('click', function () {
        $('.site-img-sp').fadeOut();
    });
});





