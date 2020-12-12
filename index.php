<?php
use system\router\Routing as myRouter;
require_once("system/config.php");
require_once(ROOT."system/bootstrap/Autoload.php");
$autoload = new system\bootstrap\Autoload();
$autoload->load();
$url =(isset($_GET['url']))?trim($_GET['url'],"/"):"home/index";
$router = new myRouter();
$router->routeMe($url);
?>