

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


// メニュースクロール時非表示

$(function(){
    var pos = 10;
    var header = $('header');
    
    $(window).on('scroll', function(){
      if($(this).scrollTop() < pos ){
        //上スクロール時の処理
        header.slideDown();
      }else{
        //下スクロール時の処理
        header.slideUp();
      }
    //   pos = $(this).scrollTop();
    });
  });


// $(document).ready(funcytion(){
//     $('.skile-list').each(function(){
//         if($(this).hasClass('active')){
//             $(this)parent('dd')preve()
//             .addClass('active');
//             $(this).parents('dd').show();
//         }
//     })
// });

// skillの表示・非表示

$(function () {
    $('.skile-ttl').on('click', function () {
        $(this).next().slideToggle();
    });
});

// works

// function ChangeImage(imgid, newimg) {
//     document.getElementById(imgid).src = newimg;
// }


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




