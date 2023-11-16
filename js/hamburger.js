$(function(){

    // ハンバーガーメニュー系処理
    $('#header__toggle').on('click', function () {
        $('#header__toggle, #header__nav-sp').toggleClass('show');
    });


    // width処理
    // $(window).on('load resize', function(){
    //     var winW = $(window).width();
    //     var devW = 767;
    //     if (winW <= devW) {
    //       //767px以下の時の処理
    //         $('.common-inner').addClass('common-inner-sp');
    //         $('.common-inner-sp').removeClass('common-inner');
    //     } else {
    //       //768pxより大きい時の処理
    //         $('.common-inner-sp').addClass('common-inner');
    //         $('.common-inner').removeClass('common-inner-sp');
    //     }
    // });
});