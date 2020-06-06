<?php
require_once "bootstrap.php";
$titleHeader="Список волонтеров";
$volunteers=$admin->getAllVolunteer();

require_once "view/admin/view/adminVolunteer.view.php";