<?php
require_once __DIR__ . "/../parts/header.php";
?>

    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        О приюте
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="home-about-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 home-about-left no-padding">
                    <img src="/img/О%20нас/levi-saunders-_fw3BeaCGyI-unsplash.jpg" alt="">
                </div>
                <div class="col-lg-6 home-about-right no-padding">
                    <p>
                        Ваш ребенок давно мечтает о верном друге? Хотите, чтобы четырехлапый стал членом семьи? Если у
                        Вас добрые руки, мы поможем подобрать и взять собаку даром в Москве и других городах России.
                        Тысячи актуальных объявлений с фотографиями щенков и взрослых собак для Вас. Основная задача
                        нашей организации – питомец должен попасть в добрые руки. </p>
                    <a href="/animalsGallery.php" class="primary-btn text-uppercase">Найти друга</a>
                </div>
            </div>
        </div>
    </section>
    <section class="post-content-area-about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 home-about-right no-padding">
                    <?php foreach ($aboutIcon as $icon): ?>
                        <ul>
                            <li>
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-2 no-padding row-height">
                                        <img src="<?= $icon ? '../../img/' . $icon->Photo : '' ?>" alt="">
                                    </div>
                                    <div class="col-lg-10 col-md-10 row-padding">
                                        <?= $icon->Description ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="testomial-area section-gap" id="testimonail">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Наша благодарность</h1>
                        <p>Проект создан, чтобы найти вам верного друга и помочь обрести дом животному с нелегкой
                            судьбой.
                            В проекте принимали участие волонтеры, тыдыды
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <?php foreach ($work as $w): ?>
                        <div class="single-testimonial item">
                            <img class="mx-auto" src="<?= $w ? '../../img/' . $w->Photo : '' ?>" alt="" >
                            <p class="desc">
                                <?= $w->Description ?>
                            </p>
                            <h4><?= $w->Name ?></h4>
                            <p>
                                <?= $w->Title ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="scrollup">Наверх</div>
<?php
require_once __DIR__ . "/../parts/footer.php";
?>