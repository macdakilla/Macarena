<?php
/*
Template Name: О нас
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
                        <div class="about">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="about__thumbnail">
                                            <img src="<?php the_post_thumbnail_url() ?>" alt="Thumbnail About">
                                        </div>
                                        <div class="about__title text-center">
                                            <h2>Лучший Гастро-бар в Оренбурге</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $recent = new WP_Query("cat=31&showposts=4");
                                        while($recent->have_posts()) : $recent->the_post();
                                        ?>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="achiev">
                                                <div class="achiev__content">
                                                    <div class="achiev__img">
                                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="achievments">
                                                    </div>
                                                    <div class="achiev__wrap">
                                                        <h4><?php the_title(); ?></h4>
                                                        <div class="achiev__rating">
                                                            <p>
                                                                <img src="<?php 
                                                                switch (get_field('number_stars')) {
                                                                    case 2:
                                                                        echo get_template_directory_uri() . '/assets/img/stars/stars2.png';
                                                                        break;
                                                                    case 3:
                                                                        echo get_template_directory_uri() . '/assets/img/stars/stars3.png';
                                                                        break;
                                                                    case 4:
                                                                        echo get_template_directory_uri() . '/assets/img/stars/stars4.png';
                                                                        break;
                                                                    case 5:
                                                                        echo get_template_directory_uri() . '/assets/img/stars/stars5.png';
                                                                        break;
                                                                }
                                                                ?>" alt="stars"/>
                                                            </p>
                                                            <p><?php the_field('year'); ?></>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="about__quote-wrap center-block">
                                            <blockquote>
                                                <p>"<?php the_field('quote', 23); ?>"</p>
                                            </blockquote>
                                        </div>
                                        <div class="about__img">
                                            <img src="<?php the_field('about_img', 23) ?>" alt="Интерьер" />
                                        </div>
                                        <div class="about__title text-center">
                                            <h2>Знакомьтесь с нашей командой</h2>
                                            <p>В нашей команде собраны профессионалы своего дела, ответственно выполняющие свою работу</p>
                                            <p>Мы с любовью и уважением относимся к каждому посетителю нашего ресторана</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="team col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <?php
                                        $recent = new WP_Query("cat=32");
                                        while($recent->have_posts()) : $recent->the_post();
                                        ?>
                                            <div class="team-member center-block">
                                                <div class="team-member__image">
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                </div>
                                                <div class="team-member__text">
                                                    <h4 class="team-member__name" style="margin: 0;"><?php the_title(); ?></h4>
                                                    <p class="team-member__position">
                                                        <small><?php the_field('team_pos'); ?></small>
                                                    </p>
                                                    <p>
                                                        <?php the_field('team_descr'); ?>
                                                    </p>
                                                    <?php
                                                        if (get_field('team_inst') or get_field('team_vk') or get_field('team_facebook')) {
                                                            ?>
                                                            <ul class="team-member__social">
                                                                <?php
                                                                    if (get_field('team_inst')) {
                                                                        ?>
                                                                        <li>
                                                                            <a href="<?php the_field('team_inst') ?>">
                                                                                <i class="fab fa-instagram"></i>
                                                                            </a>
                                                                        </li>
                                                                        <?php
                                                                    }
                                                                    if (get_field('team_vk')) {
                                                                        ?>
                                                                        <li>
                                                                            <a href="<?php the_field('team_vk') ?>">
                                                                                <i class="fab fa-vk"></i>
                                                                            </a>
                                                                        </li>
                                                                        <?php
                                                                    }
                                                                    if (get_field('team_facebook')) {
                                                                        ?>
                                                                        <li>
                                                                            <a href="<?php the_field('team_facebook') ?>">
                                                                                <i class="fab fa-facebook-f"></i>
                                                                            </a>
                                                                        </li>
                                                                        <?php
                                                                    }
                                                                ?>                                             
                                                            </ul>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="about-footer row justify-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <hr>
                                        <div class="about-footer__text text-center">
                                            <p>
                                                Посмотрите
                                                <a href="<?php the_permalink(37) ?>">Меню</a>
                                                и 
                                                <a href="<?php the_permalink(45) ?>">Забронируйте столик</a>
                                            </p>
                                        </div>
                                        <hr>
                                    </div>
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