<?php
require_once "view/parts/header.php";
?>
    <section class="calltoaction-area section-gap relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content-join col-lg-12">
                    <h1 class="text-white">
                        <?=$titleHeader?>
                    </h1>
                </div>
            </div>
        </div>
        <form action="" method="POST">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                        <div class="row mx-5 my-4">
                            <label for="Lastname" class="mb-3 text-white">Имя:</label>
                            <input type="text" class="form-control" id="title" name="Lastname"
                                   required
                                   value="">
                        </div>
                        <div class="row mx-5 my-4">
                            <label for="Surname" class="mb-3 text-white">Фамилия:</label>
                            <input type="text" class="form-control" id="title" name="Surname"
                                   required
                                   value="">
                        </div>
                        <div class="row mx-5 my-4">
                            <label for="Patro" class="mb-3 text-white">Отчество:</label>
                            <input type="text" class="form-control" id="title" name="Patro" required
                                   value="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row mx-5 my-4">
                            <label for="Email" class="mb-3 text-white">E-mail:</label>
                            <input type="text" class="form-control" id="title" name="Email" required
                                   value="">
                        </div>
                        <div class="row mx-5 my-4">
                            <label for="Phone" class="mb-3 text-white">Телефон:</label>
                            <input type="text" class="form-control" id="title" name="Phone" required
                                   value="">
                        </div>

                        <div class="row my-5 align-items-center justify-content-center">
                            <button type="submit" name="btnPost" class="primary-btn text-uppercase">
                                Отправить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mx-5 my-4">
            </div>
        </form>
    </section>
    <div class="scrollup">Наверх</div>


<?php
require_once __DIR__ . "/../parts/footer.php";
?>