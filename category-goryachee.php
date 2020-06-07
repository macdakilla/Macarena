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
                                <span class="breadcrumbs__item-target">Горячее</span>
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
                        <div class="row" style="margin: 0;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding: 0;">
                                <div class="assort-cat__wrap">
                                    <?php
                                        $parent_id = 4;
                                        $cat2 = get_query_var('cat');
                                        $sub_cats = get_categories( array(
                                            'parent' => $parent_id,
                                            'hide_empty' => 0
                                        ));
                                        if( $sub_cats ){
                                            foreach( $sub_cats as $cat ){
                                                if ($cat->term_id != $cat2) {
                                                    ?>
                                                    <div class="assort-cat__item assort-cat__item-half" style="background: url(<?php echo get_field('catalog_img', $cat); ?>) center center/cover no-repeat;">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <a class="assort-cat__link" href="<?php echo get_category_link( $cat->term_id ); ?>">
                                                                <div class="assort-cat__effect"></div>
                                                                <div class="assort-cat__content">
                                                                    <h2 class="assort-cat__title">
                                                                        <?php echo $cat->name ?>
                                                                    </h2>
                                                                    <div class="assort-cat__descr">
                                                                        <?php echo category_description($cat->term_id); ?>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    continue;
                                                }
                                            }
                                        }
                                    ?>
                                </div>
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