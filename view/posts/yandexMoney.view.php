<?php
require_once "view/parts/headerPayment.php";
?>
    <section class="home-about-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 home-about-right no-padding">
                    <p>
                        Для того чтобы сделать пожертвование через перевод воспользуйтесь интернет-банком "Сбербанк Онлайн".
                        Также возможно осуществить перевод с карты на карту в банкоматах и терминалах самообслуживания Сбербанка России
                        и в салонах сотовой связи.
                        <br><br>
                        Перевод на карту Яндекс.Деньги № <?= $donat->Donat?>
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php
require_once __DIR__ . "/../parts/footerPayment.php";
?>