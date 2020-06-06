<?php
require_once "view/parts/adminHeader.php";
?>
    <section class="calltoaction-area section-gap relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content-join col-lg-12">
                    <h1 class="text-white">
                        <?= $titleHeader ?>
                    </h1>
                </div>
            </div>
        </div>

        <form action="" method="POST">
            <?php foreach ($volunteers as $volunteer): ?>
                <div class="form-group border border-white mx-3 my-3">
                    <div class="form-row">
                        <div class="col-6">
                            <div class="row mx-3 my-4">
                                <label for="Lastname" class="mb-3 text-white">ФИО:</label>
                                <input type="text" class="form-control" id="title" name="Lastname"
                                       required
                                       value="<?= $volunteer->Lastname . " " . $volunteer->Surname . " " . $volunteer->Patro ?>">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row my-4">
                                <label for="Email" class="mb-3 text-white">E-mail:</label>
                                <input type="text" class="form-control" id="title" name="Email" required
                                       value="<?= $volunteer->Email ?>">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row mx-3 my-4">
                                <label for="Phone" class="mb-3 text-white">Телефон:</label>
                                <input type="text" class="form-control" id="title" name="Phone" required
                                       value="<?= $volunteer->Phone ?>">
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </form>
    </section>
    <div class="scrollup">Наверх</div>

<?php
require_once "view/parts/adminFooter.php";
?>