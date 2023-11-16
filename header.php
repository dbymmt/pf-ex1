<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.css">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <?php if(is_front_page()):?>
    <script src="<?=get_template_directory_uri(); ?>/js/hamburger-fp.js"></script>
    <?php else:?>
    <script src="<?=get_template_directory_uri(); ?>/js/hamburger.js"></script>
    <?php endif;?>
    <title>Tech Corporate</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- 背景色変更 -->
    <?php if(is_front_page()): ?>
    <header id="header" class="header-fp">
    <?php else:?>
    <header id="header">
    <?php endif;?>

        <h1 data-home_dir="<?=get_template_directory_uri(); ?>">
            <a href="<?=home_url();?>">
            <!-- ロゴ変更 -->
                <?php if(is_front_page()): ?>
                <img src="<?=get_template_directory_uri(); ?>/img/pc/linkedin_banner_image_white.svg" alt="ロゴ白"></h1>
                <?php else: ?>
                <img src="<?=get_template_directory_uri(); ?>/img/pc/linkedin_banner_image_1.svg" alt="ロゴ"></h1>
                <?php endif;?>
            </a>
        </h1>
        <nav id="header__nav-pc">
            <!-- pc-menu リスト内変更-->
            <?php if(is_front_page()): ?>
            <ul id="header__list-pc" class="header__list-pc_fp">
            <?php else: ?>    
            <ul id="header__list-pc">
            <?php endif;?>
                <li class="header__item-pc"><a href="aboutus">About us</a></li>
                <li class="header__item-pc"><a href="service">Service</a></li>
                <li class="header__item-pc"><a href="company">Company</a></li>
                <li class="header__item-pc"><a href="news">News</a></li>
                <?php if(is_front_page()): ?>
                <li class="header__item-contact-pc_fp">
                    <a href="contact"><img src="<?=get_template_directory_uri(); ?>/img/pc/Icon-material-mail.svg" alt="メールアイコン"><p>Contact</p></a>
                <?php else:?>
                <li class="header__item-contact-pc">
                    <a href="contact"><img src="<?=get_template_directory_uri(); ?>/img/pc/Icon-material-emailみえない.svg" alt="メールアイコン"><p>Contact</p></a>
                <?php endif;?>
                    
                </li>
            </ul>
        </nav>
        <!-- ハンバーガ背景色変更 -->
        <?php if(is_front_page()): ?>
        <div id="header__toggle" class="header__toggle_fp">
        <?php else:?>
        <div id="header__toggle">
        <?php endif;?>
            <i></i>
            <i></i>
            <i></i>
        </div>

        <nav id="header__nav-sp">
            <!-- sp-menu -->
            <ul id="header__list-sp">
                <li class="header__item-sp"><a href="aboutus"><p>About us</p><img src="<?=get_template_directory_uri(); ?>/img/sp/arrow-next-black.png"></a></li>
                <li class="header__item-sp"><a href="service"><p>Service</p><img src="<?=get_template_directory_uri(); ?>/img/sp/arrow-next-black.png"></a></li>
                <li class="header__item-sp"><a href="company"><p>Company</p><img src="<?=get_template_directory_uri(); ?>/img/sp/arrow-next-black.png"></a></li>
                <li class="header__item-sp"><a href="news"><p>News</p><img src="<?=get_template_directory_uri(); ?>/img/sp/arrow-next-black.png"></a></li>
                <li class="header__item-sp"><a href="contact"><p>Contact</p><img src="<?=get_template_directory_uri(); ?>/img/sp/arrow-next-black.png"></a></li>
            </ul>
        </nav>
    </header>