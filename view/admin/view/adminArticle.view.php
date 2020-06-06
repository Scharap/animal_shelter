<?php
require_once "view/parts/adminHeader.php";
?>
<section class="banner-area-article relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?=$titleHeader?>
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="testomial-area section-gap" id="testimonail">
    <form method="POST">
        <div class="container-fluid">
            <?php foreach ($article as $art): ?>
                <div class="row align-items-center">
                    <?php if ($art->IdArticle % 2 != 0) { ?>
                        <div class="col-lg-6 home-about-left no-padding">
                            <img src="<?= $art ? '../../img/' . $art->Photo : '' ?>" alt="">
                        </div>
                        <div class="col-lg-6 home-about-right no-padding">
                            <h2><?= $art->Title ?></h2>
                            <h5><?= $art->SubTitle ?></h5>
                            <a class="btn btn-info"
                               href="/adminArticleInfo.php?IdArticle=<?= $art->IdArticle; ?>">Подробнее...
                            </a>
                            <a class="btn btn-outline-warning mx-3"
                               href="/adminArticleUpdate.php?IdArticle=<?= $art->IdArticle; ?>">Изменить
                            </a>
                            <a class="btn btn-outline-danger mx-3"
                               href="/adminArticleDel.php?IdArticle=<?= $art->IdArticle; ?>">Удалить
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-6 home-about-right no-padding">
                            <h2><?= $art->Title ?></h2>
                            <h5><?= $art->SubTitle ?></h5>
                            <a class="btn btn-info"
                               href="/adminArticleInfo.php?IdArticle=<?= $art->IdArticle; ?>">Подробнее...
                            </a>
                            <a class="btn btn-outline-warning mx-3"
                               href="/adminArticleUpdate.php?IdArticle=<?= $art->IdArticle; ?>">Изменить
                            </a>
                            <a class="btn btn-outline-danger mx-3"
                               href="/adminArticleDel.php?IdArticle=<?= $art->IdArticle; ?>">Удалить
                            </a>

                        </div>
                        <div class="col-lg-6 home-about-left no-padding">
                            <img src="<?= $art ? '../../img/' . $art->Photo : '' ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            <?php endforeach; ?>
            <div class="scrollup">Наверх</div>

        </div>
    </form>
</section>

<?php
require_once "view/parts/adminFooter.php";
?>
