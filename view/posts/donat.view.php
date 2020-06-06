<?php
require_once "view/parts/header.php";
?>
    <section class="banner-area-donat relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        <?=$titleHeader?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="testomial-area section-gap" id="testimonail">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <p class="donat-p">
                            Самый простой, быстрый, но при этом самый эффективный способ помочь животным – это сделать
                            пожертвование. Спасибо, что не прошли мимо и помогли тем, кто не может попросить о помощи!</p>
                        <br><h1>Способ платежа</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <?php foreach ($donat as $d): ?>
                        <div class="single-testimonial-donat item">
                            <a href="/donat.php?IdPayment=<?= $d->IdPayment; ?>" class="play-btn">
                                <img class="mx-auto" src="<?= $d ? '../../img/' . $d->Photo : '' ?>" alt="">
                                <p class="desc">
                                    <?= $d->Description ?>
                                </p>
                                <h4><?= $d->Payment ?></h4>
                            </a>
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