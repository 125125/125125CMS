<?php
//falta fazer check de quem manda a variavel, e atribuir o voted_link consoante isso.

define("125125CMS", "WOWCMS");

session_start();

include_once "../config/db_connect.php ";
include_once "../config/vars.php ";

$accepted_servers = array('openwow' => "http://www.openwow.com/",
						'xtremetop100' => "http://xtremetop100.com/",
						'top100arena' => "http://www.top100arena.com/",
						'arenatop100' => "http://www.arena-top100.com/");

if (isset($_SESSION['username']) AND !empty($_SESSION['username']) AND isset($_SERVER['HTTP_REFERER'])){
	
	if (in_array($_SERVER['HTTP_REFERER'], $accepted_servers)){
		
		foreach ($accepted_servers as $key => $value) {
			if ($_SERVER['HTTP_REFERER'] == $value){
				$server = $key;
				break;
			}
		}
		
		if ($_SERVER['REQUEST_METHOD'] === "POST"){
			$user = $_POST['user'];
		}
		elseif($_SERVER['REQUEST_METHOD'] === "GET"){
			$user = $_GET['user'];
		}
		else{
			echo 'Sorry but you can`t do that.';
			exit;
		}
	
		date_default_timezone_set(date_default_timezone_get());
		
		$mysqli -> select_db("wow_cms");
		
		$last_time = $mysqli -> query("SELECT * FROM voted_cooldown WHERE username = '$user'");
		
		$now = date("Y/m/d H:i:s", time());
		
		if ($last_time -> num_rows == 0){
			$mysqli -> query("INSERT INTO voted_cooldown (username,voted_link,voted_time) VALUES('".$_SESSION['username']."','$server','$now')");
			$mysqli -> select_db($acc_db);
			$mysqli -> query("UPDATE account SET vp = vp+10 WHERE username = '$user'");
			$mysqli -> close();
			echo "success!";
		}
		else{
			while($row = $last_time -> fetch_array(MYSQLI_ASSOC)){
				$last_time_voted = date("Y/m/d H:i:s", strtotime($row['voted_time']));
				$id = $row['id'];
			}
			
			$can_vote = date("Y/m/d H:i:s",strtotime("+12 Hours", strtotime($last_time_voted)));
			
			$time_to_vote = date("H:i:s",strtotime($can_vote) - strtotime($now));
			
			//echo "Now: ". $now ."<p/>";
			//echo "Last time: ". $last_time_voted ."<p/>";
			//echo "Can Vote: ". $can_vote ."<p/>";
			//echo "Try to vote in: ". $time_to_vote ." hours<p/>";
			
			//Debug to vote
			//$can_vote = $now;
			
			if ($now >= $can_vote){
				$mysqli -> query("UPDATE voted_cooldown SET voted_time = '$now' WHERE id = '$id'");
				$mysqli -> select_db($acc_db);
				$mysqli -> query("UPDATE account SET vp = vp+10 WHERE username = '$user'");
				$mysqli -> close();
				echo "success!";
			}
			else {
				echo 'Sorry but you cannot vote yet';
			}
		}
	}
	else{
		echo "Your not allowed here...";
	}
}
else{
	echo "Your not allowed here...";
}
?>