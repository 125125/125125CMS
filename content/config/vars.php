<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

$mysqli -> select_db("wow_cms");

$web_info = $mysqli -> query("SELECT * FROM info");

while ($row = $web_info -> fetch_array(MYSQLI_ASSOC)){
	$title = $row['website_name'];
	$core = $row['core'];
	$acc_db = $row['acc_db'];
	$char_db = $row['char_db'];
	$world_db = $row['world_db'];
	$style = $row['style'];
}
?>