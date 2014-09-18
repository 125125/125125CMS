<?php
define("125125CMS", "WOWCMS");

session_start();
 require('../config/db_connect.php');
 include('../config/db_connect.php');
 
function sha_password($user,$pass){
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return SHA1($user.':'.$pass);
}
 
if (isset($_POST['username']) and isset($_POST['password'])){

	$username = $_POST['username'];
	$password = sha_password($username,$_POST['password']);
	 
	$query = "SELECT * FROM `account` WHERE username='$username' and sha_pass_hash='$password'";
	 
	$result = mysql_query($query) or die(mysql_error());
	$count = mysql_num_rows($result);
	 
	if ($count == 1){
		$_SESSION['username'] = $username;
		echo "Hello, <b>" . $_SESSION['username'] . "</b>";
		header("Location: ../?p=index");
	}else{
		echo 'Wrong username/password !';
		header('refresh: 2; ../?p=index');
	}
}
?>