<?php get_header(); ?>
<section class="contact__top-fv">
    <h1 class="common-title-main common-theme-color">Contact</h1>
    <p class="common-title-sub common-theme-color">お問い合わせ</p>
    <picture>
        <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/contact_fv_2.png">
        <img src="<?=get_template_directory_uri(); ?>/img/pc/contact_fv.png">
    </picture>
</section>
<main class="main-inner1">
    <section class="contact__cf7">
    <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
    ?>
    <div class="contact__cf7-form">
        <?php the_content();?>
    </div>
    <?php
            endwhile;
        endif;
    ?>

    </section>
</main>

<?php get_footer(); ?>