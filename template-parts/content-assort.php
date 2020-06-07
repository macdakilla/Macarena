<div class="site-content_wrap container">
    <div class="row">
        <div id="primary" class="col-xs-12 col-md-12">
            <main id="main" class="site-main" role="main">
                <div class="assort-item">
                    <figure class="assort-item__thumbnail">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </figure>
                    <div class="assort-item__wrapper">
                        <div class="assort-item__content assort-item__column">
                            <h1 class="assort-item__title">
                                <?php the_title(); ?>
                            </h1>
                            <div class="assort-item__descr">
                                <?php the_field('descr'); ?>
                            </div>
                            <div class="contact__form contact__form_assort clearfix">
                                <?php echo do_shortcode('[contact-form-7 id="167" title="Форма связи"]') ?>
                            </div>
                        </div>
                        <div class="assort-item__sidebar assort-item__column">
                            <div class="assort-item__price-box">
                                <h3 class="assort-item__price">
                                    Стоимость: <?php the_field('cost'); ?>
                                </h3>
                            </div>
                            <?php 
                                if (get_field('weight') or get_field('calories')) {
                                    ?>
                                        <div class="assort-item__proportions">
                                            <h3 class="assort-item__subtitle">
                                                Размер порции
                                            </h3>
                                            <ul class="assort-item-list">
                                                <?php
                                                    if (get_field('weight')) {
                                                        ?>
                                                        <li class="assort-item-list__item">
                                                            <i class="fas fa-angle-right"></i>
                                                            Вес: <?php the_field('weight'); ?>
                                                        </li>
                                                        <?php
                                                    }
                                                ?>
                                                
                                                <?php
                                                    if (get_field('calories')) {
                                                        ?>
                                                        
                                                        <li class="assort-item-list__item">
                                                            <i class="fas fa-angle-right"></i>
                                                            Калорий: <?php the_field('calories'); ?>
                                                        </li>
                                                        <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php 
                                if (get_field('ingridient_1')) {
                                    ?>
                                        <div class="assort-item__ingridients">
                                            <h3 class="assort-item__subtitle">
                                                Ингридиенты
                                            </h3>
                                            <ul class="assort-item-list">
                                                <?php 
                                                    for ($i=1; $i <= 11; $i++) { 
                                                        if (get_field('ingridient_' . $i)) {
                                                            ?>
                                                                <li class="assort-item-list__item">
                                                                    <i class="fas fa-angle-right"></i>
                                                                    <?php the_field('ingridient_' . $i); ?>
                                                                </li>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php
                                }
                            ?>
                            <div class="assort-item__related">
                                <h3 class="assort-item__subtitle">
                                    Вам может понравиться
                                </h3>
                                <ul class="assort-related">
                                    <?php
                                        $recent = new WP_Query("cat=3&showposts=3");
                                        while($recent->have_posts()) : $recent->the_post();
                                        ?>
                                        <li class="assort-related__item">
                                            <a href="<?php echo get_permalink() ?>" title="<?php the_title(); ?>">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="assort-related__thumbnail" alt="<?php the_title(); ?>" />
                                                <p class="assort-related__title"><?php the_title(); ?></p>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="assort-item__clear"></div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>