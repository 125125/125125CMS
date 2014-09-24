<?php
define("125125CMS", "WOWCMS");

include_once "content/config/db_connect.php";
include_once "content/config/vars.php";
include_once "content/config/functions.php";
include_once "content/include/header.php";
include_once "content/include/nav.php";
include_once "content/include/slider.php";
include_once "content/include/body.php";
include_once "content/include/footer.php";

$mysqli -> close();
?>