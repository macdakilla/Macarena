<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="«MACARENA – это заведение нового формата в Оренбурге. Нестандартная подача блюд и интересный интерьер сделают ваш вечер - незабываемый!">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=PT+Serif:ital@0;1&family=Open+Sans:wght@300;400&family=Oswald:wght@300;400;700&display=swap"
        rel="stylesheet">
    <title><?php bloginfo( 'name' ); echo " | "; bloginfo( ('description') ) ?></title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <header class="header" id="top">
        <div class="top-panel">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center">
                    <div class="col-lg-7 top-panel__message">
                        <div class="row justify-content-between">
                            <div class="top-panel__item">
                                <i class="fas fa-map-marker-alt"></i>
                                пр. Победы 1а, Оренбург
                            </div>
                            <div class="top-panel__item">
                                <i class="fas fa-phone-alt"></i>
                                <?php the_field('tel', 45) ?>
                            </div>
                            <div class="top-panel__item">
                                <i class="far fa-clock"></i>
                                Пн-Чт 11:00-00:00, Пт-Вс 15:00-03:00
                            </div>
                        </div>
                    </div>
                    <div class="social-list social-list__header social-list__icon">
                        <?php wp_nav_menu([
                            'menu' => 'Social-List',
                            'container' => false,
                            'menu_class' => 'menu',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'items_wrap' => '<ul class="social-list__items inline-list">%3$s</ul>',
                            'depth' => 1
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-wrapper" <?php if (is_home()) {
            ?>
            style="background: url(<?php echo get_template_directory_uri() . '/assets/img/bg/showcase_bg.jpg' ?>); background-size: cover;
            <?php
            } ?>">
            <div class="header-layout">
                <div class="header-container">
                    <div class="header-container_wrap container">
                        <div class="logo">
                            <?php the_custom_logo() ?>
                        </div>
                        <nav id="site-navigation" class="main-navigation">
                            <button class="navigation-toggle">
                                <span class="navigation-toggle__box">
                                    <span class="navigation-toggle__inner">
                                    </span>
                                </span>
                            </button>
                            <?php wp_nav_menu([
                                'menu' => 'Main',
                                'container' => false,
                                'menu_class' => 'menu',
                                'echo' => true,
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '<ul class="menu">%3$s</ul>',
                                'depth' => 1
                            ]); ?>
                        </nav>
                    </div>
                </div>
                <?php if (is_home()) {
                ?>
                <div class="promo-panel">
                    <div class="promo-panel__subtitle">добро пожаловть</div>
                    <h1 class="promo-panel__title">РЕСТОРАН "MACARENA"</h1>
                    <p class="promo-panel__descr text-nowrap">
                        Лучший гастро-бар в Оренбурге
                        <br>
                        Забронируйте стол онлайн или по телефону +7 (3532) 61-85-85
                    </p>
                    <a href="<?php echo get_permalink(45); ?>" class="btn btn-primary">Забронировать</a>
                </div>
                <?php
                } ?>
            </div>
        </div>
    </header>