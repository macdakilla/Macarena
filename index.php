<?php 
    get_header();
?>
<div class="site-content" id="content">
    <section class="assort" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/bg/menu_bg.jpg' ?>) center center/cover no-repeat;">
        <div class="container">
            <div class="row assort__title-wrap">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="title title_white">
                        <h2>Меню</h2>
                        <img src="<?php echo get_template_directory_uri() . '/assets/icons/subtitle/subtitle_white.png' ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding: 0;">
                <div class="assort-cat__wrap">
                    <div class="assort-cat__item" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/category/hot.jpg' ?>) center center/cover no-repeat;">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="assort-cat__link" href="<?php echo get_category_link(4) ?>">
                                <div class="assort-cat__effect"></div>
                                <div class="assort-cat__content">
                                    <h2 class="assort-cat__title">
                                        <?php echo get_cat_name(4); ?>
                                    </h2>
                                    <div class="assort-cat__descr">
                                        <?php echo category_description(4); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="assort-cat__item" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/category/deserts.jpg' ?>) center center/cover no-repeat;">
                        <div class="d-flex align-items-center justify-content-center">
                           <a class="assort-cat__link" href="<?php echo get_category_link(5) ?>">
                                <div class="assort-cat__effect"></div>
                                <div class="assort-cat__content">
                                    <h2 class="assort-cat__title">
                                        <?php echo get_cat_name(5); ?>
                                    </h2>
                                    <div class="assort-cat__descr">
                                        <?php echo category_description(5); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="assort-cat__item" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/category/zakus.jpg' ?>) center center/cover no-repeat;">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="assort-cat__link" href="<?php echo get_category_link(6) ?>">
                                <div class="assort-cat__effect"></div>
                                <div class="assort-cat__content">
                                    <h2 class="assort-cat__title">
                                        <?php echo get_cat_name(6); ?>
                                    </h2>
                                    <div class="assort-cat__descr">
                                        <?php echo category_description(6); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="assort-cat__item" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/category/drinks.jpg' ?>) center center/cover no-repeat;">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="assort-cat__link" href="<?php echo get_category_link(7) ?>">
                                <div class="assort-cat__effect"></div>
                                <div class="assort-cat__content">
                                    <h2 class="assort-cat__title">
                                        <?php echo get_cat_name(7); ?>
                                    </h2>
                                    <div class="assort-cat__descr">
                                        <?php echo category_description(7); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recalls">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="title">
                        <h2>Мы делаем людей счастливыми</h2>
                        <img src="<?php echo get_template_directory_uri() . '/assets/icons/subtitle/subtitle_black.png' ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top: 20px">
                <?php
                    $recent = new WP_Query("cat=8&showposts=3");
                    while($recent->have_posts()) : $recent->the_post(); ?>
                        <div class="recalls__item col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="recalls__wrap text-center">
                                <div class="recalls__content">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="recalls__author">
                                    <div class="recalls__portrait" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center/cover no-repeat"></div>
                                    <div class="recalls__name">
                                        <h5>
                                            <?php the_title(); ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="recomends">
        <div class="container">
            <div class="row recomends__title-top">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="title">
                        <h2>Рекомендуем вам</h2>
                        <img src="<?php echo get_template_directory_uri() . '/assets/icons/subtitle/subtitle_black.png' ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 35px 0 0;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding: 0;">
                <div class="row" style="margin: 0">
                    <?php
                        $recent = new WP_Query("cat=9&showposts=4");
                        while($recent->have_posts()) : $recent->the_post(); ?>
                            <div class="recomends__item">
                                <div class="recomends__item_wrap">
                                    <a href="<?php echo get_permalink() ?>" class="recomends__link">
                                        <div class="recomends__img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center/cover no-repeat"></div>
                                    </a>
                                </div>
                                <div class="recomends__content">
                                    <div class="recomends__title_wrap">
                                        <h5 class="recomends__title">
                                            <a href="<?php echo get_permalink() ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h5>
                                        <span class="recomends__price">
                                            <?php echo get_field('cost') ?>
                                        </span>
                                    </div>
                                    <div class="recomends__excerpt">
                                        <?php echo get_field('descr_short') ?>
                                    </div>
                                </div>  
                            </div>
                    <?php endwhile; ?>
                </div>
                <div class="row" style="margin: 0">
                    <?php
                        $recent = new WP_Query("cat=9&showposts=4&offset=4");
                        while($recent->have_posts()) : $recent->the_post();
                        ?>
                            <div class="recomends__item">
                                <div class="recomends__item_wrap">
                                    <a href="<?php echo get_permalink() ?>" class="recomends__link">
                                        <div class="recomends__img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center/cover no-repeat"></div>
                                    </a>
                                </div>
                                <div class="recomends__content">
                                    <div class="recomends__title_wrap">
                                        <h5 class="recomends__title">
                                            <a href="<?php echo get_permalink() ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h5>
                                        <span class="recomends__price">
                                            <?php echo get_field('cost') ?>
                                        </span>
                                    </div>
                                    <div class="recomends__excerpt">
                                        <?php echo get_field('descr_short') ?>
                                    </div>
                                </div>  
                            </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="map">
        <div class="row" style="margin: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding: 0;">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A517178347ae7922852f9f8f366e64108916147d4d3ed604aba27e1d1ad211b66&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>