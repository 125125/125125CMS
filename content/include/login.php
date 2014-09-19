<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

if (isset($_POST['username']) and isset($_POST['password'])){
	$username = $_POST['username'];
	$password = sha_password($username,$_POST['password']);
	
	$mysqli -> select_db($acc_db);
	
	$check_account = $mysqli -> query("SELECT * FROM `account` WHERE username='$username' and sha_pass_hash='$password'") or die( $mysqli -> error );
	$count = $check_account -> num_rows;
	 
	if ($count == 1){
		$_SESSION['username'] = $username;
		header("Location: index.php?p=index");
	}
	else{
		echo 'Wrong username/password !';
	}
}
?>