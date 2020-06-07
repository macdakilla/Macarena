<footer class="site-footer container text-center">
    <div class="footer-top">
        <div class="footer-top__wrap container">
            <div class="footer-logo">
                <?php the_custom_logo( $blog_id ); ?>
            </div>
            <nav id="footer-navigation" class="footer-menu">
                <?php wp_nav_menu([
                    'menu' => 'Footer',
                    'container' => false,
                    'menu_class' => 'menu',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'items_wrap' => '<ul class="footer-menu__items">%3$s</ul>',
                    'depth' => 1
                ]); ?>
            </nav>
        </div>
    </div>
    <div class="footer-container">
        <div class="site-info container">
            <div class="site-info__flex">
                <div class="footer-copyright">
                    © 2020 Macarena. Все права защищены.
                    <a href="<?php echo get_permalink(3); ?>">Политика конфиденциальности</a>
                </div>
                <div class="social-list social-list__footer social-list__icon">
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
</footer>
<a href="#top" id="toTop">
    <i class="fas fa-chevron-up"></i>
</a>
<?php
    wp_footer();
?>
    </body>
</html>