
<footer class="footer">
    <?php if(!(is_page('contact') || is_page('contact-confirm') || is_page('contact-thanks'))):?>
    <section class="footer__img">
        <picture>
            <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/footer_contact2.png">
            <img src="<?=get_template_directory_uri(); ?>/img/pc/footer_contact.png">
        </picture>
        <div class="footer__img-phrases">
            <h2 class="common-title-main">Contact</h2>
            <p class="common-title-sub">お問い合わせ</p>
        </div>
        <a href="contact" class="footer__img-button">
            <p>お問い合わせはこちらから</p>
            <img src="<?=get_template_directory_uri(); ?>/img/pc/Icon-ionic-ios-arrow-dropright_ボタン飾り1.svg" alt="コンタクトボタン">
        </a>
    </section>
    <?php endif;?>
    <section class="footer__body">
        <div class="common-inner common-inner-2">
            <ul class="footer__body-content">
                <li class="footer__body-left">
                    <img src="<?=get_template_directory_uri(); ?>/img/pc/logo-footerみえない.svg" alt="フッタロゴ">
                </li>
                <li class="footer__body-right">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="news">News</a></li>
                        <li class="footer__item"><a href="aboutus">AboutUs</a></li>
                        <li class="footer__item"><a href="service">Service</a></li>
                        <li class="footer__item"><a href="company">Company</a></li>
                        <li class="footer__item"><a href="contact">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="footer__footer">&copy;2022 Tech Corporate</div>
    </section>

</footer>
<?php wp_footer(); ?>
</body>
</html>