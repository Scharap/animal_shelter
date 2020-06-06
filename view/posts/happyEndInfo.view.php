<?php
require_once __DIR__ . "/../parts/header.php";
?>
<section class="banner-area-happy relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?= $happyEnd->Title ?>
                </h1>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center m-5">
        <div class="col-12 text-right">
            <a class="btn btn-outline-secondary" href="/happyEnd.php">Назад</a>
        </div>
    </div>

    <div class="row justify-content-center align-items-center m-5">
        <div class="col-9">
            <p>
                <?= $happyEnd->Description ?>
            </p>

        </div>

    </div>

<div class="scrollup">Наверх</div>

<?php
require_once __DIR__ . "/../parts/footer.php";
?>

