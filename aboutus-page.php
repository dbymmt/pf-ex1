<?php
/*
Template Name: About-Us
*/
?>
<?php get_header(); ?>
<section class="aboutus__top-fv">
    <h1 class="common-title-main common-theme-color">About us</h1>
    <p class="common-title-sub common-theme-color">私たちについて</p>
    <picture>
        <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/AboutUs_fv2.png">
        <img src="<?=get_template_directory_uri(); ?>/img/pc/AboutUs_fv.jpg">
    </picture>
</section>
<main class="main-inner1">
    <section class="aboutus__mission">
        <h1 class="common-title-main">Mission</h1>
        <p class="common-title-sub">ミッション</p>
        <ul class="common-article-list">
            <li class="common-article-img">
                <picture>
                    <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/front_AboutUs1_2.png">
                    <img src="<?=get_template_directory_uri(); ?>/img/pc/front_AboutUs1__AboutUs_mission1_edited11.png">
                </picture>
            </li>
            <li class="common-article-desc">
                <h4 class="common-article-title">
                    テキストテキスト
                </h4>
                <p class="common-article-article">
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    <br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </li>
        </ul>
        <ul class="common-article-list-rev">
            <li class="common-article-img">
                <picture>
                    <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/AboutUs_Mission2_2.png">
                    <img src="<?=get_template_directory_uri(); ?>/img/pc/AboutUs_mission2.png">
                </picture>
            </li>
            <li class="common-article-desc">
                <h4 class="common-article-title">
                    テキストテキスト
                </h4>
                <p class="common-article-article">
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    <br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </li>
        </ul>
    </section>
    <section class="aboutus__vision">
        <h1 class="common-title-main">Vision</h1>
        <p class="common-title-sub">ビジョン</p>
        <ul class="common-article-list">
            <li class="common-article-img">
                <picture>
                    <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/AboutUs_Vision1_2.png">
                    <img src="<?=get_template_directory_uri(); ?>/img/pc/AboutUs_vision1.png">
                </picture>
            </li>
            <li class="common-article-desc">
                <h4 class="common-article-title">
                    テキストテキスト
                </h4>
                <p class="common-article-article">
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    <br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </li>
        </ul>
        <ul class="common-article-list-rev">
            <li class="common-article-img">
                <picture>
                    <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/AboutUs_Vision2_2.png">
                    <img src="<?=get_template_directory_uri(); ?>/img/pc/AboutUs_vision2.png">
                </picture>
            </li>
            <li class="common-article-desc">
                <h4 class="common-article-title">
                    テキストテキスト
                </h4>
                <p class="common-article-article">
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    <br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </li>
        </ul>
    </section>
    <section class="aboutus__story">
        <h1 class="common-title-main">Story</h1>
        <p class="common-title-sub">沿革</p>
        <ul class="aboutus__story_list">
            <li class="aboutus__story_title">
                <time>xxxx年xx月</time>
                <p>テキストテキストテキスト</p>
            </li>
            <li class="aboutus__story_title">
                <time>xxxx年xx月</time>
                <p>テキストテキストテキストテキスト</p>
            </li>
        </ul>
    </section>
</main>
<?php get_footer(); ?>