<?php
require_once "view/parts/adminHeader.php";
?>
<section class="banner-area-happy relative" id="home">
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
    <form action="" method="POST">
        <div class="form-group m-5">
            <div class="row">
                <div class="col-11">
                    <label for="Title" class="mb-3 mx-5">Заголовок статьи:</label>
                    <input type="text" class="form-control mx-5" id="title" name="Title" required
                           value="<?= $happyEnd->Title ?? '' ?>" disabled="disabled">
                </div>
            </div>
        </div>
        <div class="form-group m-5">
            <div class="row">
                <div class="col-5">
                    <div class="form-group m-5">
                        <label for="SubTitle" class="mb-3">Предварительное описание:</label>
                        <textarea class="form-control" id="description" name="SubTitle" rows="10" cols="50" required
                                  disabled="disabled">
                <?= trim($happyEnd->SubTitle ?? '', " \t\n\r\0\x0B") ?>
            </textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <img src="<?= $happyEnd->Photo ? '../../img/' . $happyEnd->Photo : '' ?>" alt=""
                             class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group mx-5">
                        <label for="Description" class="mb-3">Полное описание:</label>
                        <textarea class="form-control" name="Description" rows="10" disabled="disabled">
                <?= trim($happyEnd->Description ?? '', " \t\n\r\0\x0B") ?>
            </textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-5 mx-5">
                    <button type="submit" name="btnDel" class="btn primary-btn text-uppercase">Удалить</button>
                </div>
                <div class="col-5 mx-5 text-right">
                    <a class="btn warning-btn text-uppercase" href="../../../adminHappyEnd.php">Назад</a>
                </div>
            </div>
    </form>
</section>
<div class="scrollup">Наверх</div>
<?php
require_once "view/parts/adminFooter.php";
?>
