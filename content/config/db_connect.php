<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

$hostname = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";

$mysqli = new mysqli($hostname, $dbusername, $dbpassword);
if (!$mysqli){
    die("Database Connection Failed" . $mysqli -> error);
}
?>