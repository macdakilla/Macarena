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
                                <span class="breadcrumbs__item-target"><?php single_cat_title(); ?></span>
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
                        <div class="assort">
                            <div class="assort-header" style="background: url(<?php
                                $category = get_queried_object();
                                echo get_field('catalog_img', $category);
                            ?>) center center/cover no-repeat;">
                                <div class="assort-header__content text-center">
                                    <h1 class="assort-header__title">
                                        <?php single_cat_title(); ?>
                                    </h1>
                                </div>
                            </div>
                            <div class="assort-list">
                                <?php
                                    if ($category->term_id == 3) {
                                        $recent = new WP_Query("cat=" .  $category->term_id . "&showposts=24");
                                    } else {
                                        $recent = new WP_Query("cat=" .  $category->term_id);
                                    }
                                    
                                    while($recent->have_posts()) : $recent->the_post(); ?>
                                        <div class="assort-list__item">
                                            <div class="assort-list__content">
                                                <div class="assort-list__title_wrap">
                                                    <h5 class="assort-list__title">
                                                        <a href="<?php echo get_permalink() ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h5>
                                                    <span class="assort-list__price">
                                                        <?php echo get_field('cost') ?>
                                                    </span>
                                                </div>
                                                <div class="assort-list__excerpt">
                                                    <?php echo get_field('descr_short') ?>
                                                </div>
                                            </div>
                                        </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>