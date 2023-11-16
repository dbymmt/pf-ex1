<?php
/*
Template Name: Company
*/

?>
<?php get_header(); ?>
<section class="company__top-fv">
    <h1 class="common-title-main common-theme-color">Company</h1>
    <p class="common-title-sub common-theme-color">会社概要</p>
    <picture>
        <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/company_fv_2.png">
        <img src="<?=get_template_directory_uri(); ?>/img/pc/company_fv.png">
    </picture>
</section>
<main class="main-inner1">
    <section class="company__history">
        <dl class="company__desc-table">
            <div><dt>会社名</dt><dd>株式会社テックコーポレート</dd></div>
            <div><dt>設立</dt><dd>20XX年X月X日</dd></div>
            <div><dt>代表者</dt><dd>テック　太郎</dd></div>
            <div><dt>資本金</dt><dd>5,000,000万円</dd></div>
            <div><dt>従業員数</dt><dd>15名</dd></div>
            <div><dt>事業内容</dt><dd>テキストテキストテキスト<br>テキストテキストテキスト</dd></div>
            <div><dt>住所</dt><dd><p>&#12306;123-1234</p><p>東京都東京区東京町1-1-1</p></dd></div>
            <div><dt>お問い合わせ</dt><dd><p>Tel: 080-1234-5678</p><p>Mail: xxx@xxx.xxx</p></dd></div>
        </dl>
    </section>
    <section class="company__map">
        <div class="company__map-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030694501!2d139.76454451176457!3d35.68123617247281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1693494949599!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section class="company__message">
        <h2 class="common-title-main">Message</h2>
        <p class="common-title-sub">社長挨拶</p>
        <ul class="common-article-list-fp-rev">
            <li class="common-article-img">
                <picture>
                    <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/front_company__company_message.png">
                    <img src="<?=get_template_directory_uri(); ?>/img/pc/front_company__company_message1_edited11.png">
                </picture>
            </li>
            <li class="common-article-desc">
                <h4 class="common-article-title">
                    テキストテキスト
                </h4>
                <p class="common-article-article">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
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
</main>
<?php get_footer(); ?>