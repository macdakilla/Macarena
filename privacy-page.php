<?php
/*
Template Name: Политика конфиденциальности
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
                                <span class="breadcrumbs__item-target"><?php the_title(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="site-content_wrap container">
            <div class="row" style="margin: 0;">
                <div class="col-xs-12 col-md-12" style="padding: 0;">
                    <main id="main" class="site-main" role="main">
                        <p>&nbsp;</p>
                        <h2 class="text-center"><?php the_title(); ?></h2>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile;?>
                        <p>&nbsp;</p>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>