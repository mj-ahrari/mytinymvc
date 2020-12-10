<?php
use system\router\Routing as myRouter;
require_once("system/config.php");
require_once(ROOT."system/botstrap/Autoload.php");
$autoload = new system\bootstrap\Autoload();
$autoload->load();
$router = new myRouter();
$router->routeMe();
?>