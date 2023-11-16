<?php
/*
Template Name: News_list
*/

?>
<?php get_header(); ?>
<section class="news__top-fv">
    <h1 class="common-title-main common-theme-color">News</h1>
    <p class="common-title-sub common-theme-color">おしらせ</p>
    <picture>
        <source media="(max-width:767px)" srcset="<?=get_template_directory_uri(); ?>/img/sp/News_fv_2.png">
        <img src="<?=get_template_directory_uri(); ?>/img/pc/News_fv.png">
    </picture>
</section>
<main class="main-inner1">
    <section class="news-news">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
        ); 
     
        $query = new WP_Query($args);
    ?>
        <ul class="front-news__list">
        <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
        ?>
            <li class="front-news__item"><a href="<?php the_permalink();?>">
                <div>    
                    <time><?php the_time('Y.m.d'); ?></time>
                    <p><?php the_title();?></p>
                </div>
                <img src="<?=get_template_directory_uri(); ?>/img/sp/arrow-next.png">
            </a></li>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </ul>
    
    </section>
</main>
<?php get_footer(); ?>