<?php
$protocol = (strpos($_SERVER['SERVER_PROTOCOL'],"https"))? "https":"http";
define("BASE_URL",$protocol."://".$_SERVER['HTTP_HOST']."/tinymvc/");
define("ROOT",__DIR__."/../");
define("HOST","localhost");
define("DBNANE","tinymvc");
define("USERNAME","root");
define("PASSWORD","");
?>