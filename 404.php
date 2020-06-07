<?php 
    get_header('error');
?>
<div id="page" class="site">
    <div class="site-content" id="content">
        <div class="site-content_wrap">
            <div class="row" style="margin: 0;">
                <div class="col-xs-12 col-md-12" style="padding: 0;">
                    <main class="site-main">
                        <section class="error-404 not-found">
                            <header class="page-header">
                                <h1 class="page-title">404</h1>
                            </header>
                            <div class="page-content">
                                <h2 class="page-subtitle">Страница не найдена.</h2>
                                <p>
                                    <a href="<?php 
                                   echo get_home_url(); ?>" class="btn btn-primary">Вернуться на главную</a>
                                </p>
                                <p class="error-descr">К сожалению, страница, которую вы ищете не может быть найден.
                                    <br>
                                Проверьте правильность url страницы.</p>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer('error');
?>