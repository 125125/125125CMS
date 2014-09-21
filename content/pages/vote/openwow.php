<?php
//Refuse direct access
if (!defined("125125CMS")) { exit; }

$account_name = "admin";

$mysqli -> select_db($acc_db);

$mysqli -> query("UPDATE account SET vp = vp+10 WHERE username = '$account_name'");

$mysqli -> close();
?>
<div class="title">
	<center>Success!</center>
</div>
<div class="message">
	<center>
		<p>10 Points given!</p>
	</center>
</div>