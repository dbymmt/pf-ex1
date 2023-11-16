$(function(){
    
    // ハンバーガーメニュー系処理
    $('#header').css('background-color','transparent');

    var isProcessingA = true; // 初期状態は処理Aからスタート
    const home_dir = $("#header > h1").data('home_dir');
    var display_img = home_dir;
    var img_fp = '/img/pc/linkedin_banner_image_white.svg';
    var img_nor = '/img/pc/linkedin_banner_image_1.svg';

    $("#header__toggle").click(function() {
        if (isProcessingA) {
            $('#header').css('background-color','white');
            $('#header__toggle, #header__nav-sp').addClass('show');
            $('#header').removeClass('header-fp');
            console.log(home_dir);
            display_img = home_dir+img_nor;
            $('h1 > a > img').attr('src', display_img);
            // 処理Aの実行
            console.log("処理Aを実行");
        } else {
            $('#header').css('background-color','transparent');
            $('#header__toggle, #header__nav-sp').removeClass('show');
            $('#header').addClass('header-fp');
            console.log(home_dir);
            display_img = home_dir+img_fp;
            $('h1 > a >img').attr('src', display_img);
            // 処理Bの実行
            console.log("処理Bを実行");
        }

        // 処理を切り替える
        isProcessingA = !isProcessingA;
    });

    //width処理
    // $(window).on('load resize', function(){
    //     var winW = $(window).width();
    //     var devW = 767;
    //     if (winW <= devW) {
    //         //767px以下の時の処理
    //         console.log('unko');
    //         $('.common-inner').addClass('common-inner-sp');
    //         $('.common-inner-sp').removeClass('common-inner');
    //     } else {
    //         //768pxより大きい時の処理
    //         console.log('chinnko');
    //         $('.common-inner-sp').addClass('common-inner');
    //         $('.common-inner').removeClass('common-inner-sp');
    //     }
    // });

});