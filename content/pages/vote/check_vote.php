<div id="news">
<?php
//Refuse direct access
if (!defined("125125CMS")) { exit; }

if (isset($_SESSION['username']) AND !empty($_SESSION['username'])){
	date_default_timezone_set(date_default_timezone_get());
	
	$mysqli -> select_db("wow_cms");
	
	$last_time = $mysqli -> query("SELECT * FROM voted_cooldown WHERE username = 'admin'");
	
	while($row = $last_time -> fetch_array(MYSQLI_ASSOC)){
		$last_time_voted = date("Y/m/d H:i:s", strtotime($row['voted_time']));
		$id = $row['id'];
	}
	
	$now = date("Y/m/d H:i:s", time());
	
	$can_vote = date("Y/m/d H:i:s",strtotime("+12 Hours", strtotime($last_time_voted)));
	
	$time_to_vote = date("H:i:s",strtotime($can_vote) - strtotime($now));
	
	//echo "Now: ". $now ."<p/>";
	//echo "Last time: ". $last_time_voted ."<p/>";
	//echo "Can Vote: ". $can_vote ."<p/>";
	//echo "Try to vote in: ". $time_to_vote ." hours<p/>";
	
	//Debug to vote
	//$can_vote = $now;
	
	$user =  $_SESSION['username'];
	
	if ($now >= $can_vote){
		$mysqli -> query("UPDATE voted_cooldown SET voted_time = '$now' WHERE id = '$id'");
		include_once "openwow.php";
	}
	else {
		echo '<div class="title">
			<center>Permission Denied</center>
		</div>
		<div class="message">
			<center>
				<p>Sorry but you cannot vote yet</p>
				Try vote again in '.$time_to_vote.' hours
			</center>
		</div>';
	}
}
else{
	include_once "content/pages/must_login.php";
}
?>
</div>
</div>