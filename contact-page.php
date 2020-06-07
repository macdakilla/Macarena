<?php
/*
Template Name: Контакты
*/
?>
<?php 
    get_header();
?>

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
                    <section class="contact">
                        <div class="container">
                            <div class="row">
                                <div class="contact__item col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="contact__text">
                                        <h2>Контактная информация</h2>
                                        <p><?php the_field('address') ?></p>
                                        <p>
                                            ТЕЛ: <?php the_field('tel') ?>
                                            <br>
                                            <a href="mailto:<?php the_field('mail') ?>"><?php the_field('mail') ?></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact__item col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="contact__text">
                                        <h2>Время работы</h2>
                                        <p>
                                            <?php the_field('working') ?>
                                        </p>
                                    </div>
                                    <div class="contact__text">
                                        <p>
                                            Бронирование
                                            <br>
                                            <a href="tel:<?php the_field('tel'); ?>">
                                                <?php the_field('tel') ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="contact__btn">
                                        <a href="<?php echo get_permalink(45); ?>" class="btn btn-primary">Забронировать стол</a>
                                    </div>
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
                    <section class="contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="contact__text">
                                        <h2>Связаться</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="contact__item col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="contact__text">
                                        <p>
                                            Мы находимся в самом сердце города - в центре Оренбурга! MACARENA – это заведение нового формата в нашем городе
                                        </p>
                                        <p>
                                            Cвяжитесь с нами с помощью формы и задайте любые возникшие у вас вопросы.
                                        </p>
                                    </div>
                                </div>
                                <div class="contact__item col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                    <div class="contact__form clearfix">
                                        <?php echo do_shortcode('[contact-form-7 id="167" title="Форма связи"]') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>