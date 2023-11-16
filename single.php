<?php get_header(); ?>
<section class="single-news__top-fv">
    <h1 class="common-title-main common-theme-color">News</h1>
    <p class="common-title-sub common-theme-color">おしらせ</p>
</section>
<main class="main-inner1">
    <section class="single-news__body">
        <time><?php the_time('Y-m-d');?></time>
        <h3><?php the_title();?></h3>
        <span><?php the_category();?></span>
        <?php if(has_post_thumbnail()) :?>
            <?php the_post_thumbnail(); ?>
        <?php endif;?>
        <p>
            <?php the_content();?>
        </p>
    </section>
</main>
<?php get_footer(); ?>