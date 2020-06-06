<?php
require_once "view/parts/headerPayment.php";
?>

    <section class="home-about-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 home-about-right no-padding">
                    <p>
                        Для того чтобы сделать пожертвование через SMS,
                        нужно отправить сообщение на короткий номер <?= $donat->Donat?> со словом BeastFriends и через пробел указать
                        сумму пожертвования цифрами.
                        <br><br>Например: BeastFriends 300

                        <br><br>
                        Комиссия с абонента — 0% Допустимый размер пожертвования — от 10 до 15 000 рублей.
                        Услуга доступна для абонентов МТС, Билайн, Мегафон, ТЕЛЕ2.

                        <br><br>
                        Ознакомтесь с требованиями вашего оператора до завершения пожертвования.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php
require_once __DIR__ . "/../parts/footerPayment.php";
?>