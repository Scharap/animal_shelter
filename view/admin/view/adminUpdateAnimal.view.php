<?php
require_once "view/parts/adminHeader.php";
?>
<section class="banner-area blog-home-banner relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content blog-header-content col-lg-12">
                <h1 class="text-white">
                    <?= $titleHeader ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<form action="" method="POST" enctype="multipart/form-data">
    <?php
    $breed = $admin->getAdminSelect("breed");
    $age = $admin->getAdminSelect("age");
    $category = $admin->getAdminSelect("category");
    $color = $admin->getAdminSelect("color");
    $gender = $admin->getAdminSelect("gender");
    ?>
    <div class="form-group m-5">
        <label for="title" class="mb-3">Кличка:</label>
        <input type="text" class="form-control" id="title" name="Nick" required
               value="<?= $animalInfo->Nick ?? '' ?>">
    </div>
    <div class="form-group m-5">
        <div class="row">
            <div class="col">
                <label for="title" class="mb-3">Порода:</label>
                <select class="form-control" name="IdBreed">
                    <option value="<?= $animalInfo->IdBreed ?? '' ?>"><?= $animalInfo->Breed ?? '' ?></option>
                    <?php foreach ($breed as $b): ?>
                        <option value="<?= $b->IdBreed ?>"><?= $b->Name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="title" class="mb-3">Возраст:</label>
                <select class="form-control" name="IdAge">
                    <option value="<?= $animalInfo->IdAge ?? '' ?>"><?= $animalInfo->Age ?? '' ?></option>
                    <?php foreach ($age as $b): ?>
                        <option value="<?= $b->IdAge ?>"><?= $b->Age ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="title" class="mb-3">Категория:</label>
                <select class="form-control" name="IdCategory">
                    <option value="<?= $animalInfo->IdCategory ?? '' ?>"><?= $animalInfo->Category ?? '' ?></option>
                    <?php foreach ($category as $b): ?>
                        <option value="<?= $b->IdCategory ?>"><?= $b->Name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="title" class="mb-3">Пол:</label>
                <select class="form-control" name="IdGender">
                    <option value="<?= $animalInfo->IdGender ?? '' ?>"><?= $animalInfo->Gender ?? '' ?></option>
                    <?php foreach ($gender as $b): ?>
                        <option value="<?= $b->IdGender ?>"><?= $b->Gender ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="title" class="mb-3">Окрас:</label>
                <select class="form-control" name="IdColor">
                    <option value="<?= $animalInfo->IdColor ?? '' ?>"><?= $animalInfo->Color ?? '' ?></option>
                    <?php foreach ($color as $b): ?>
                        <option value="<?= $b->IdColor ?>"><?= $b->Color ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group my-5">
            <div class="row">
                <div class="col-5">
                    <label for="description" class="mb-3">История:</label>
                    <textarea class="form-control" id="description" name="History" rows="15" cols="50" required>
                <?= trim($animalInfo->History ?? '', " \t\n\r\0\x0B") ?>
            </textarea>
                </div>
                <div class="col-7 home-about-left no-padding">
                    <img src="<?= $animalInfo->Photo ? '../../img/' . $animalInfo->Photo : '' ?>" alt=""
                         class="img-fluid">
                    <input type="file" class="input-file" id="file" name="Photo">
                    <label for="file" class="btn btn-tertiary js-labelFile">
                        <span class="js-fileName">Загрузить файл</span>
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" name="btnPost" class="btn primary-btn text-uppercase">Сохранить</button>
        <a class="btn warning-btn text-uppercase" href="../../../adminAnimalsGallery.php">Назад</a>
</form>
<div class="scrollup">Наверх</div>
<?php
require_once "view/parts/adminFooter.php";
?>
