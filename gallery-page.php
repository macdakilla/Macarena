<?php
/*
Template Name: Галерея
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
        <div class="site-content_wrap">
            <div class="row" style="margin: 0;">
                <div class="col-xs-12 col-md-12" style="padding: 0;">
                    <main class="site-main">
                        <section class="gallery-promo" style="background: url(<?php the_field('gallery-promo_img'); ?>) center center/cover no-repeat;" >
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="gallery-promo__text text-center">
                                            <p><?php the_field('promo-gallery_text'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="gallery-title">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="text-center">
                                            <h2>Наш интерьер</h2>
                                            <p>Нестандартная подача блюд и интересный интерьер<br> сделают ваш вечер - незабываемый!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile;?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>