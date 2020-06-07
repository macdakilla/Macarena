<?php 
/*
Template Name: Шаблон для новости
Template Post Type: post, news
*/
?>
<?php
get_header();
?>

<div id="page" class="site">
    <div class="site-content" id="content">
        <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__items">
                    <div class="breadcrumbs__content">
                        <div class="breadcrumbs__wrap">
                            <div class="breadcrumbs__item">
                                <a href="<?php echo get_home_url(); ?>" class="breadcrumbs__item-link">Главная</a>
                            </div>
                            <div class="breadcrumbs__item">
                                <div class="breadcrumbs__item-sep">/</div>
                            </div>
                            <div class="breadcrumbs__item">
                                <a href="<?php echo get_permalink(43); ?>"
                                    class="breadcrumbs__item-link">
                                    Новости
                                </a>
                            </div>
                            <div class="breadcrumbs__item">
                                <div class="breadcrumbs__item-sep">/</div>
                            </div>
                            <div class="breadcrumbs__item">
                                <span class="breadcrumbs__item-target"><?php the_title(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content-new', get_post_type() );

        endwhile;
        ?>
    </div>
</div>


<?php
get_footer();
?>