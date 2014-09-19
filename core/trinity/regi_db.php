<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

if (isset($_POST['uname']) and isset($_POST['pass'])){
	if ($_POST['pass'] == $_POST['pass2']){
		$username = $_POST['uname'];
		$password = sha_password($username,$_POST['pass']);
		$mail = $_POST['email'];
		
		$mysqli -> select_db($acc_db);
		
		$check = $mysqli -> query("SELECT id FROM `account` WHERE username='$username'") or die($mysqli -> error); 
	
		$count = $check -> num_rows;
		
		if ($count == 1){
			echo "<p style='color:red;'>Username exists</p>";
		}
		else{ 
			$mysqli -> query("INSERT INTO `account` (username, sha_pass_hash, email, reg_mail) VALUES ('$username', '$password', '$mail', '$mail')") or die($mysqli -> error);
			header("Location: ?p=register_success");
		}
	}
	else{
		echo "<p style='color:red;'>Password missmatch</p>";
	}
}