<?php
require_once "view/parts/adminHeader.php";
?>
<section class="banner-area-happy relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    HAPPYEND
                </h1>
            </div>
        </div>
    </div>
</section>


<section class="testomial-area section-gap" id="testimonail">
    <form method="POST">
        <div class="container-fluid">
            <?php foreach ($happyEnd as $happy): ?>
                <div class="row align-items-center justify-content-center">
                    <?php if ($happy->IdHappy % 2 == 0) { ?>
                        <div class="col-lg-5 home-about-left no-padding radius">
                            <img src="<?= $happy ? '../../img/Happy End/' . $happy->Photo : '' ?>" alt="" class="w-75">
                        </div>
                        <div class="col-lg-6 home-about-right no-padding">
                            <h2><?= $happy->Title ?></h2>
                            <h5><?= $happy->SubTitle ?></h5>
                            <a class="btn btn-info"
                               href="/adminHappyEndInfo.php?IdHappy=<?= $happy->IdHappy; ?>">Подробнее...
                            </a>
                            <a class="btn btn-outline-warning mx-3"
                               href="/adminHappyEndUpdate.php?IdHappy=<?= $happy->IdHappy; ?>">Изменить
                            </a>
                            <a class="btn btn-outline-danger mx-3"
                               href="/adminHappyEndDel.php?IdHappy=<?= $happy->IdHappy; ?>">Удалить
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-6 home-about-right no-padding">
                            <h2><?= $happy->Title ?></h2>
                            <h5><?= $happy->SubTitle ?></h5>
                            <a class="btn btn-info"
                               href="/adminHappyEndInfo.php?IdHappy=<?= $happy->IdHappy; ?>">Подробнее...
                            </a>
                            <a class="btn btn-outline-warning mx-3"
                               href="/adminHappyEndUpdate.php?IdHappy=<?= $happy->IdHappy; ?>">Изменить
                            </a>
                            <a class="btn btn-outline-danger mx-3"
                               href="/adminHappyEndDel.php?IdHappy=<?= $happy->IdHappy; ?>">Удалить
                            </a>

                        </div>
                        <div class="col-lg-5 home-about-left no-padding radius">
                            <img src="<?= $happy ? '../../img/Happy End/' . $happy->Photo : '' ?>" alt="" class="w-75">
                        </div>
                    <?php } ?>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</section>
<div class="scrollup">Наверх</div>

<?php
require_once "view/parts/adminFooter.php";
?>
