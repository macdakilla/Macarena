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
        <div class="news-item__meta">
            <div class="news-item__date">
                <?php the_time('j F Y'); ?>
            </div>
        </div>
        <div class="news-item__tags">
            <?php the_tags( '','',''); ?>
        </div>
    </footer>
</article>