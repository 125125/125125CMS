<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

$host = "localhost";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass);
if (!$mysqli){
    die("Database Connection Failed" . $mysqli -> error);
}
?>