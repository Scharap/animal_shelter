<?php
require_once "view/parts/adminHeader.php";
?>
    <section class="banner-area-cat relative" id="home">
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

    <form action="" method="POST">
        <div class="form-group m-5">
            <label for="title" class="mb-3">Кличка:</label>
            <input type="text" class="form-control" id="title" name="title" required
                   value="<?= $animalInfo->Nick ?? '' ?>" disabled="disabled">
        </div>
        <div class="form-group m-5">
            <label for="title" class="mb-3">Фото:</label>
            <p><img class="img-fluid-admin" src="<?= $animalInfo ? '../../img/' . $animalInfo->Photo : '' ?>" alt="">
            </p>
        </div>
        <div class="form-group m-5">
            <label for="description" class="mb-3">История:</label>
            <textarea class="form-control" id="description" name="description" rows="10" cols="50" required
                      disabled="disabled">
                <?= trim($animalInfo->History ?? '', " \t\n\r\0\x0B") ?>
            </textarea>
        </div>
        <div class="row">
            <div class="col-5 mx-5">
                <button type="submit" name="btnDel" class="btn primary-btn text-uppercase">Удалить</button>
            </div>
            <div class="col-5 mx-5 text-right">
                <a class="btn warning-btn text-uppercase" href="../../../adminAnimalsGallery.php">Назад</a>
            </div>
        </div>
    </form>
    <div class="scrollup">Наверх</div>
<?php
require_once "view/parts/adminFooter.php";
?>