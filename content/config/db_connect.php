<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

$host = "localhost";
$user = "root";
$pass = "";
$db = "auth";

$mysqli = new mysqli($host, $user, $pass, $db);
if (!$mysqli){
    die("Database Connection Failed" . $mysqli -> error);
}

$select_db = $mysqli -> select_db($db);
if (!$select_db){
    die("Database Selection Failed" . $mysqli -> error);
}