<?php
require_once "view/parts/adminHeader.php";
?>
    <section class="banner-area blog-home-banner relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content blog-header-content col-lg-12">
                    <h1 class="text-white">
                        <?= $animalInfo->Nick ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="post-content-area">
        <div class="container">
            <div class="row my-5">
                <div class="col-6 text-left">
                    <a class="btn btn-outline-warning"
                       href="/adminAnimalsUpdate.php?IdAnimal=<?= $animalInfo->IdAnimal; ?>">Изменить
                    </a>
                    <a class="btn btn-outline-danger mx-5"
                       href="/adminAnimalsDel.php?IdAnimal=<?= $animalInfo->IdAnimal; ?>">Удалить
                    </a>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-outline-secondary" href="/adminAnimalsGallery.php">Назад</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3 my-5">
                    <p>
                    <h1 class="nick"><?= $animalInfo->Nick ?></h1>
                    </p>
                    <div class="row">
                        <div class="col-4">
                            <p class="user-nameA col-lg-12 col-md-12 col-6">Возраст:</p>
                            <p class="user-nameA col-lg-12 col-md-12 col-6">Пол:</p>
                            <p class="user-nameA col-lg-12 col-md-12 col-6">Порода:</p>
                            <p class="user-nameA col-lg-12 col-md-12 col-6">Окрас:</p>

                        </div>
                        <div class="col-8">
                            <p class="user-nameA col-lg-12 col-md-12 col-6"><?= $animalInfo->Age ?></p>
                            <p class="user-nameA col-lg-12 col-md-12 col-6"><?= $animalInfo->Gender ?></p>
                            <p class="user-nameA col-lg-12 col-md-12 col-6"><?= $animalInfo->Breed ?></p>
                            <p class="user-nameA col-lg-12 col-md-12 col-6"><?= $animalInfo->Color ?></p>

                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-7">
                    <div id="carouselExampleControls" class="carousel slide w-75" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $item_class = ' active';
                            if ($animalInfo->IdAnimal < 195) {
                                ?>
                                <?php foreach ($photoAnimal as $photoAn): ?>
                                    <div class="carousel-item <?= $item_class ?>">
                                        <?php $item_class = ''; ?>
                                        <img src="<?= $photoAn ? '../../img/' . $photoAn->Photo : '' ?>"
                                             class="d-block w-100" alt="...">
                                    </div>
                                <?php endforeach;
                            } else {
                                ?>
                                <div class="carousel-item <?= $item_class ?>">
                                    <?php $item_class = ''; ?>
                                    <img src="<?= $animalInfo ? '../../img/' . $animalInfo->Photo : '' ?>"
                                         class="d-block w-100" alt="...">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="home-about-right">
                        <p><?= $animalInfo->History ?></p>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <div class="scrollup">Наверх</div>

<?php
require_once "view/parts/adminFooter.php";
?>