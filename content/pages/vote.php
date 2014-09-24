<div id="news">
	<?php
	//If person is not logged
	if (!isset($_SESSION['username']) OR empty($_SESSION['username'])){
		include 'content/pages/must_login.php';
	}
	else{
		?>
		<div class="title">
			<center>Vote</center>
		</div>
		<div class="message">
			<center>
				<table width="500" id="votetable">
					<tr>
						<th class="left">Topsite</th>
						<th class="right">Value</th>
					</tr>
					<?php
					$mysqli -> select_db($acc_db);
					
					$acc_id = $mysqli -> query("SELECT id FROM account WHERE username='".$_SESSION['username']."'");
					
					while ($row = $acc_id -> fetch_array(MYSQLI_ASSOC)){
						$user_id = $row['id'];
					}
					
					$mysqli -> select_db("wow_cms");
						
					$vote_links = $mysqli -> query("SELECT * FROM vote_links");
					
					while ($row = $vote_links -> fetch_array(MYSQLI_ASSOC)) {
						switch($row['name']){ 
							case "openwow":
								$id_var = "&spb=".$user_id;
								break;
							case "arenatop100": 
								$id_var = "&id=".$user_id;
								break;
							case "top100arena": 
								$id_var = "&incentive=".$user_id;
								break;
							case "topg": 
								$id_var = "-".$_SESSION['username'];
								break;
							default : 
								$id_var = "";
								break;
						}
						echo "<tr>
						<td class='left'><a href='". $row['vote_link'] . $id_var ."' target='_blank'><img src='". $row['vote_img'] ."' border='0' alt='". $row['name'] ."'></a></td>
						<td class='right'>". $row['value'] ."</td>
						</tr>";
					}
					?>
				</table>
			</center>
	        <br />
		</div>
		<?php
	}
	?>
</div>
</div>