<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

session_destroy();
header ('location: index.php?p=index');
?>