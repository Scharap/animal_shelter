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

    <section class="testomial-area section-gap" id="testimonail">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group m-5">
                <div class="row">
                    <div class="col-7">
                        <div class="row">
                            <div class="col m-5">
                                <label for="Title" class="mb-3">Заголовок статьи:</label>
                                <input type="text" class="form-control" id="title" name="Title" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-5">
                                <label for="SubTitle" class="">Предварительное описание:</label>
                                <textarea class="form-control" id="description" name="SubTitle" rows="5" cols="50"
                                          required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group m-5">
                            <input type="file" class="input-file" id="file" name="Photo" accept="image/jpeg">
                            <label for="file" class="btn btn-tertiary js-labelFile">
                                <span class="js-fileName">Загрузить файл</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group m-5">
                    <label for="Description" class="mb-3">Полное описание:</label>
                    <textarea class="form-control" id="summernote" name="Description"></textarea>
                </div>
                <div class="form-group m-5">
                    <button type="submit" name="btnIns" class="btn primary-btn text-uppercase">Добавить</button>
                    <a class="btn warning-btn text-uppercase" href="/adminHappyEnd.php">Назад</a>
                </div>

        </form>


    </section>
    <div class="scrollup">Наверх</div>

<?php
require_once "view/parts/adminFooterAdd.php";
?>