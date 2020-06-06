<?php
$organization = $newPost->getOrg();
?>
<footer class="footer-area">
    <div class="container">
        <div class="row pt-120 pb-80">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget text-justify">
                    <h6>О нас</h6>
                    <p>
                        Ваш ребенок давно мечтает о верном друге? Хотите, чтобы четырехлапый стал членом семьи? Если у
                        Вас добрые руки, мы поможем подобрать и взять собаку даром в Москве и других городах России.
                        Тысячи актуальных объявлений с фотографиями щенков и взрослых собак для Вас. Основная задача
                        нашей организации – питомец должен попасть в добрые руки. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h6>Полезные ссылки</h6>
                    <div class="row">
                        <ul class="col footer-nav">
                            <li><a href="/admin.php">О приюте</a></li>
                            <li><a href="/adminAnimalsGallery.php">Каталог животных</a>
                            <li><a href="/adminArticle.php">Полезные статьи</a></li>
                            <li><a href="/adminHappyEnd.php">HappyEnd</a>

                        </ul>
                        <ul class="col footer-nav">
                            <li><a href="/adminVolunteer.php">Волонтеры</a></li>
                            <li><a href="/adminAnimalsInsert.php">Добавить питомца</a></li>
                            <li><a href="/adminArticleInsert.php">Добавить статью</a></li>
                            <li><a href="/adminHappyEndInsert.php">Добавить Happy End</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20 mx-lg-3">Наши контакты</h6>
                    <div class="row">
                        <?php foreach ($organization as $org): ?>
                            <div class="col-lg-6 col-md-6">
                                <ul class="list-contact">
                                    <li class="flex-row d-flex">
                                        <div class="detail">
                                            <h4><?= $org->City ?></h4>
                                            <p>
                                                <?= $org->Address ?>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex-row d-flex">
                                        <div class="detail">
                                            <h4><?= $org->Phone ?></h4>
                                            <p>
                                                Без перерывов
                                                <br>
                                                Без выходных
                                                <br>
                                                с 9:00 до 18:00
                                            </p>
                                        </div>
                                    </li>
                                    <li class="flex-row d-flex">
                                        <div class="detail">
                                            <h4><?= $org->Email ?></h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="../../summernote/summernote-bs4.min.js"></script>
<script src="../../lang/summernote-ru-RU.js"></script>
<script src="../../js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="../../js/vendor/bootstrap.min.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="../../js/easing.min.js"></script>
<script src="../../js/hoverIntent.js"></script>
<script src="../../js/superfish.min.js"></script>
<script src="../../js/jquery.ajaxchimp.min.js"></script>
<script src="../../js/jquery.magnific-popup.min.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/jquery.nice-select.min.js"></script>
<script src="../../js/mail-script.js"></script>
<script src="../../js/main.js"></script>
</body>
</html>