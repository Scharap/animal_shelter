<?php
require_once __DIR__ . "/../parts/header.php";

$breed = $newPost->getSelect("breed");
$age = $newPost->getSelect("age");
$category = $newPost->getSelect("category");
?>
    <section class="<?= $banner ?> relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        <?= $titleHeader ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>


    <section>
        <form action="" class="form-group" method="POST">
            <div class="row">
                <div class="col-2 mx-5 mt-30">
                    <select class="form-control" name="IdCategory">
                        <option value="0">Все категории</option>
                        <?php foreach ($category as $b): ?>
                            <option value="<?= $b->IdCategory ?>"
                                    href='/animalsGallery.php?IdCategory=<?= $b->IdCategory; ?>'><?= $b->Name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-2 mt-30">
                    <select class="form-control" name="IdBreed">
                        <option value="0">Все породы</option>
                        <?php foreach ($breed as $b): ?>
                            <option value="<?= $b->IdBreed ?>"><?= $b->Name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-2 mx-5 mt-30">
                    <select class="form-control" name="IdAge">
                        <option value="0">Любой возраст</option>
                        <?php foreach ($age as $b): ?>
                            <option value="<?= $b->IdAge ?>"><?= $b->Age ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-2 ">
                    <button class="btn primary-btn" name="btnFilter">Применить фильтр</button>
                </div>
                <div class="col-2">
                    <button class="btn warning-btn" name="btnBack">Сбросить фильтр</button>
                </div>
            </div>
        </form>
    </section>

    <section class="cat-list-area section-gap">
        <div class="card-columns">
            <?php foreach ($animals as $animal): ?>
                <div class="card">
                    <div class="card-img-top">
                        <div class="single-cat-list">
                            <a href='/animalInfo.php?IdAnimal=<?= $animal->IdAnimal; ?>'>
                                <img src="<?= $animal ? '../../img/' . $animal->Photo : '' ?>" alt="" class="img-fluid">
                                <div class="card-body">
                                    <div class="card-text"><?= $animal->Nick ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="scrollup">Наверх</div>

<?php
require_once __DIR__ . "/../parts/footer.php";
?>