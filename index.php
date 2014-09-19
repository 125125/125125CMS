<?php
define("125125CMS", "WOWCMS");

include "content/config/db_connect.php ";
include "content/config/vars.php";
include "content/config/functions.php";
include "content/include/header.php";
include "content/include/nav.php";
include "content/include/slider.php";
include "content/include/body.php";
include "content/include/footer.php";

$mysqli -> close();
?>