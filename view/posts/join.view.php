<?php
require_once __DIR__ . "/../parts/header.php";
?>
    <section class="calltoaction-area section-gap relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content-join col-lg-12">

                </div>
            </div>
        </div>

            <div class="row align-items-center justify-content-center">
                <h1 class="text-white">Мы всегда благодарны Вам за поддержку приюта!</h1>
                <p class="text-white join-p">
                    Приют для бездомных животных "BeastFriends" создан волонтерами и зоозащитниками для того,
                    чтобы найти вам верного друга и помочь обрести дом животному с нелегкой судьбой.
                    Породистые и беспородные, большие и маленькие, спокойные и активные, они ждут своих заботливых хозяев.
                    Стать частью нашей команды можно совершив добровольное пожертование
                    или оставив заявку на волонтрество.
                </p>
                <div class="buttons d-flex flex-row">
                    <a href="/volunteer.php" class="primary-btn text-uppercase">Записаться в волонтеры</a>
                    <a href="/donat.php" class="primary-btn text-uppercase mx-3">Добровольное пожертвование</a>
                </div>
            </div>
    </section>

    <section class="testomial-area section-gap" id="testimonail">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Наша благодарность</h1>
                        <p>Проект создан, чтобы найти вам верного друга и помочь обрести дом животному с нелегкой
                            судьбой.
                            В проекте принимали участие волонтеры, тыдыды
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <?php foreach ($work as $w): ?>
                        <div class="single-testimonial item">
                            <img class="mx-auto" src="<?= $w ? '../../img/' . $w->Photo : '' ?>" alt="" >
                            <p class="desc">
                                <?= $w->Description ?>
                            </p>
                            <h4><?= $w->Name ?></h4>
                            <p>
                                <?= $w->Title ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="scrollup">Наверх</div>

<?php
require_once __DIR__ . "/../parts/footer.php";
?>