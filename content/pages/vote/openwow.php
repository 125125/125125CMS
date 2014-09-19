<?php
$host = "localhost";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass);

$mysqli -> select_db("account_info");

$account_name = $mysqli -> real_scape_string($_POST['user']);

$voted = $mysqli -> query("SELECT voted FROM voted_cooldown WHERE account = '$account'");

if(!$voted[0]){
	$mysqli -> select_db("auth");
	$mysqli -> query("UPDATE account SET vp = vp+10 WHERE username = '$account_name'");
	echo "Points given!";
}
else{
	echo "Already voted...";
}

$mysqli -> close();
?>