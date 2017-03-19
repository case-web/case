<!-- Подключение хедера -->
<?php include('templates/header.php') ?>

<!-- Слайдер. Начало.-->

<div class="wrapper slider">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- Индикаторы слайдера. -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <!-- Индикаторы слайдера. Конец. -->

            <!-- Слайды -->
            <div class="carousel-inner" role="listbox">
                <!-- 1 слайд -->
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <img class="d-block img-fluid" src="assets/images/slider/1.png" alt="First slide">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h2>
                                    Case web technology
                                </h2>
                                <h3>
                                    PROMO TEXT PROMO TEXT PROMO
                                    TEXT PROMO TEXT PROMO TEXT
                                    PROMO TEXT PROMO TEXT PROMO
                                    TEXT PROMO TEXT PROMO TEXT
                                    PROMO TEXT PROMO TEXT PROMO
                                    TEXT PROMO TEXT
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Слайд 1. Конец. -->
            </div>
            <!-- Слайды. Конец.  -->

            <!-- Стрелки слайдера -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Предыдущий</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Следующий/span>
            </a>
            <!-- Стрелки слайдера. Конец. -->
        </div>
    </div>
</div>

<!-- Слайдер. Конец -->
<!-- Блок "О компании" -->
<div class="wrapper about">
    <div class="container">
        <!-- Заголовок -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 header_about">
                <h2 class="under_line">О компании</h2>
            </div>
        </div>
        <!-- Заголовок. Конец. -->

        <!-- Тело блока -->
        <div class="row about_body">
            <!-- Текст о компании. -->
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 text_block">
                <p>
                    Здесь находится текст о компании, в
                    котором будет рассказываться о том,
                    какие мы крутые и хорошие, и почему
                    стоит заказывать у нас.
                    Ведь у нас хорошая история и такое
                    крутое описание, что все остальные
                    студии, являющимися нашими
                    конкурентами, отходят на задний
                    план. Когда наш будущий клиент
                    знакомиться с нами с помощью
                    этого мега-крутого сайта, то он
                    точно станет нашим клиентом и
                    закажет у нас сайт, потому что наш текст
                    о компании привлечет его.
                </p>
            </div>
            <!-- Текст о компании. Конец. -->
            <!-- Картинка в блоке. -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 image_block">
                <img src="assets/images/index/about.png" alt="">
            </div>
            <!-- Картинка в блоке. Конец. -->
        </div>
    </div>
</div>
<!-- Блок "О компании". Конец. -->

<!-- Блок "Услуги". -->
<div class="wrapper services">
    <div class="container">
        <!-- Заголовок. -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 header_services">
                <h2 class="under_line">Что мы умеем</h2>
                <h3>Наши возможности безграничны</h3>
            </div>
        </div>
        <!-- Заголовок. Конец. -->
        <!-- Тело блока. -->
        <div class="row body_services">
            <!-- Сами услуги. -->
            <!-- Услуга. Дизайн. -->
            <div class="offset-1 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 service design">
                <a href="#">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="assets/images/index/service.png" alt="">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3>Дизайн</h3>
                        <h4>Разрабатываем крутые вещи, от которых
                            голова пойдет кругом у вас</h4>
                    </div>
                </div>
                </a>
            </div>
            <!-- Услуга. Дизайн. Конец. -->

            <!-- Услуга. Разработка.  -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 service develop">
                <a href="#">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="assets/images/index/service.png" alt="">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3>Разработка</h3>
                        <h4>Разрабатываем крутые вещи, от которых
                            голова пойдет кругом у вас</h4>
                    </div>
                </div>
                </a>
            </div>
            <!-- Услуга. Разработка. Конец. -->

            <!-- Услуга. Продвижение. -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 service promo">
                <a href="#">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="assets/images/index/service.png" alt="">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3>Продвижение</h3>
                        <h4>Разрабатываем крутые вещи, от которых
                            голова пойдет кругом у вас</h4>
                    </div>
                </div>
                </a>
            </div>
            <!-- Услуга. Продвижение. Конец. -->

            <!-- Услуга. Администрирование.  -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 service admin">
                <a href="#">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="assets/images/index/service.png" alt="">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3>Администрирование</h3>
                        <h4>Разрабатываем крутые вещи, от которых
                            голова пойдет кругом у вас</h4>
                    </div>
                </div>
                </a>
            </div>
            <!-- Услуга. Администрирование. Конец. -->
            <!-- Сами услуги. Конец. -->
        </div>
        <!-- Тело блока. Конец. -->
    </div>
</div>
<!-- Блок "Услуги". Конец. -->

<!-- Блок "Портфолио". -->
<div class="wrapper portfolio">
    <div class="container">
        <div class="row portfolio_header">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="under_line">Портфолио</h2>
                <h3>То, что навсегда останется
                    в нашей памяти и никогда не
                    забудется.</h3>
            </div>
        </div>
        <div class="row portfolio_body">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">

            </div>
        </div>
    </div>
</div>
<!-- Блок "Портфолио". Конец. -->
<!-- Подключение футера. -->
<?php include('templates/footer.php') ?>