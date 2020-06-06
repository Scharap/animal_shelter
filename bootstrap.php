<?php

use App\Db\Components\Actions;
use App\Db\Components\Admin;
use App\Db\Components\Connection;
use App\Db\Components\Filter;

require_once "App/Actions.php";
require_once "App/Admin.php";
require_once "App/Connection.php";
require_once "App/Filter.php";

$config = require_once "config.php";
$newPost=new Actions(Connection::make($config));
$admin=new Admin(Connection::make($config));
$filter=new Filter(Connection::make($config));
