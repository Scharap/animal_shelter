<?php
require_once "view/parts/adminHeader.php";
?>
<section class="banner-area-happy relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?= $happyEnd->Title ?? '' ?>
                </h1>
            </div>
        </div>
    </div>
</section>


<form method="POST">

    <section>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-12 text-right">
                    <a class="btn btn-outline-secondary" href="/adminHappyEnd.php">Назад</a>
                </div>
            </div>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-9">
                    <p>
                        <?= $happyEnd->Description ?>
                    </p>

                </div>
            </div>
            <div class="row justify-content-center align-items-center m-5">
                <div class="col-9">
                    <div class="home-about-right no-padding">
                        <div class="row">
                            <div class="col-9">
                                <a class="btn btn-outline-warning mx-3"
                                   href="/adminHappyEndUpdate.php?IdHappy=<?= $happyEnd->IdHappy; ?>">Изменить
                                </a>
                                <a class="btn btn-outline-danger mx-3"
                                   href="/adminHappyEndDel.php?IdHappy=<?= $happyEnd->IdHappy; ?>">Удалить
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<div class="scrollup">Наверх</div>
<?php
require_once "view/parts/adminFooter.php";
?>
