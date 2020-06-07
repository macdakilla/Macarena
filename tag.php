<?php
/*
Template Name: Все новости
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
                                <span class="breadcrumbs__item-target"><?php single_term_title(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="site-content_wrap container">
            <div class="row" style="margin: 0;">
                <div id="primary" class="col-xs-12 col-md-12" style="padding: 0;">
                    <main id="main" class="site-main" role="main">
                        <div class="news">
                            <?php
                                $posttags = get_the_tags() -> term_id;
                                $tag_id;
                                if( $posttags ){
                                    foreach( $posttags as $tag ){
                                        if ($tag->name == single_term_title()) {
                                            $tag_id = $tag->term_id;
                                        }
                                    }
                                }
                                $recent = new WP_Query("tag_id=" . $tag_id . "&showposts=6");
                                
                                while($recent->have_posts()) : $recent->the_post(); ?>
                                <article class="news-item" id="post-<?php the_ID(); ?>">
                                    <div class="news-item__content">
                                        <figure class="news-item__thumbnail-wrap">
                                            <a href="<?php echo get_permalink(); ?>" class="news-item__thumbnail">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            </a>
                                        </figure>
                                        <header class="news-item__header">
                                            <h2 class="news-item__title">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>
                                        </header>
                                        <div class="news-item__descr">
                                            <p>
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <footer class="news-item__footer">
                                        <a href="<?php echo get_permalink(); ?>" class="btn-link">
                                            <span>Подробнее</span>
                                        </a>
                                        <div class="news-item__meta">
                                            <div class="news-item__date">
                                                <?php the_date('j F Y'); ?>
                                            </div>
                                        </div>
                                        <div class="news-item__tags">
                                            <?php the_tags( '','',''); ?>
                                        </div>
                                    </footer>
                                </article>
                            <?php endwhile; ?>
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