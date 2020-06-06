<?php
require_once "view/parts/authorizationHeader.php";
?>
    <section class="calltoaction-area-autho section-gap relative" id="home">
        <div class="overlay overlay-bg"></div>

        <div class="alert alert-dark-log text-white" role="alert" style="<?=$style;?>">
            <h2><?= $alert;?></h2>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="form-horizontal" method="POST">
                        <span class="heading">Подтвердите право входа</span>
                        <div class="form-group help">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password"
                                   name="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btnBack">НАЗАД</button>
                            <button type="submit" class="btn btn-default mx-5" name="btnCheck">ВХОД</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

<?php
require_once "view/parts/authorizationFooter.php";
?>