<?php
require_once "view/parts/headerPayment.php";
?>
<section>
    <form class="mx-5">
        <div class="row my-5">
            <div class="col-3 border">
                <div class="row justify-content-center my-3">
                    <label>Извещение</label>
                </div>
                <div class="row donat mb-2">
                    <label>Кассир</label>
                </div>
            </div>
            <div class="col-9 border border-left-0">
                <div class="row my-3">
                    <div class="col pr-50">
                        <label><strong>Получатель платежа:</strong></label>
                        <input type="text" class="form-control" readonly value="ООО 'BeastFriends'">
                    </div>
                </div>
                <div class="row my-3 ml-1">
                    <label class="my-2">ИНН:</label>
                    <div class="col-5 col-sm-12 pl-sm-0 pr-sm-5">
                        <input type="text" class="form-control" readonly value="10 или 12 цифр">
                    </div>
                    <label class="my-2">КПП:</label>
                    <div class="col-5 col-sm-12 pl-sm-0 pr-sm-5">
                        <input type="text" class="form-control" readonly value="9 цифр">
                    </div>
                </div>
                <div class="row">
                    <div class="col pr-50">
                        <label>Банк получателя:</label>
                        <input type="text" class="form-control" readonly value="Наименование банка">
                    </div>
                </div>
                <div class="row my-3 ml-1">
                    <label class="my-2">р/с:</label>
                    <div class="col-5 ml-lr-3 col-sm-12 pl-sm-0 pr-sm-5">
                        <input type="text" class="form-control" readonly value="20 цифр">
                    </div>
                    <label class="my-2 ml-2">БИК:</label>
                    <div class="col-5 col-sm-12 pl-sm-0 pr-sm-5">
                        <input type="text" class="form-control" readonly value="9 цифр">
                    </div>
                </div>
                <div class="row my-3 mx-1">
                    <label class="my-2">корр/с:</label>
                    <div class="col pr-30">
                        <input type="text" class="form-control" readonly value="20 цифр" required>
                    </div>
                </div>
                <div class="row my-2 ml-1">
                    <label class="my-2">КБК:</label>
                    <div class="col-5 col-sm-12 pl-sm-0 pr-sm-5">
                        <input type="text" class="form-control" readonly value="20 цифр">
                    </div>
                    <label class="my-2">ОКТМО:</label>
                    <div class="col-5 col-sm-12 pl-sm-0 pr-sm-5">
                        <input type="text" class="form-control" readonly value="от 8 до 11 цифр">
                    </div>
                </div>
                <div class="row">
                    <div class="col pr-50">
                        <label>Сокращенное наименование органа:</label>
                        <input type="text" class="form-control" readonly value="Наименование органа">
                    </div>
                </div>
                <div class="row mt-5 mx-1">
                    <label class="my-2">ФИО:</label>
                    <div class="col pr-30">
                        <input type="text" class="form-control"
                               placeholder="Фамилия И.О. от чего имени производится платеж" required>
                    </div>
                </div>
                <div class="row my-3 mx-1">
                    <label class="my-2">Адрес:</label>
                    <div class="col pr-30">
                        <input type="text" class="form-control"
                               placeholder="Домашний адрес лица от чего имени производится платеж" required>
                    </div>
                </div>
                <div class="row my-3 mx-1">
                    <label class="my-2">ИНН:</label>
                    <div class="col pr-30">
                        <input type="text" class="form-control"
                               placeholder="12 цифр" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col pr-50">
                        <label>Наименование платежа:</label>
                        <input type="text" class="form-control" readonly
                               value="Наименование платежа"
                               required>
                    </div>
                </div>
                <div class="row my-3 mx-1">
                    <label class="my-2">Сумма:</label>
                    <div class="col pr-30">
                        <input type="text" class="form-control" placeholder="1250,35" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 col-sm-12">
                        <label><strong>Плательщик:</strong> (подпись)</label>
                    </div>
                    <div class="col-5 ml-70 col-sm-12 ml-sm-0 pr-sm-5">
                        <input type="date" class="form-control" value="Дата пожертвования" required>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
    <div class="scrollup">Наверх</div>

<?php
require_once __DIR__ . "/../parts/footerPayment.php";
?>