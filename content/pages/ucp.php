<div id="news">
	<?php
	//If person is not logged
	if (!isset($_SESSION['username']) OR empty($_SESSION['username'])){
		include 'content/pages/must_login.php';
	}
	else{
		?>
		<div class="title">
			<center>User Panel</center>
		</div>
		<div class="message">
			<center>
				<?php
				$mysqli -> select_db($acc_db);
				 
				$result = $mysqli -> query("SELECT username, email, vp, dp FROM account WHERE username = '" . addslashes($_SESSION['username']) . "'");
				$result2 = $mysqli -> query("SELECT gmlevel FROM account_access WHERE id =(SELECT id FROM account WHERE username = '" . addslashes($_SESSION['username']) . "');");
				 
				echo "<table border='1' style='border-collapse:collapse; border:1px solid #0d0f0d;'>
				<tr style='text-align:left; padding:10px;'>
				<th style='padding:10px;'>Username</th>
				<th style='padding:10px;'>Email</th>
				<th style='padding:10px;'>Account Status</th>
				<th style='padding:10px;'>Vp</th>
				<th style='padding:10px;'>Dp</th>
				<th style='padding:10px;'>Account Rank</th>
				</tr>";
				 
				while($row = $result -> fetch_array(MYSQLI_ASSOC)){
					echo "<tr style='text-align:left; color:#5f4a29; padding:10px;'>";
				  	echo "<td style='padding:10px;'>" . $row['username'] . "</td>";
				  	echo "<td style='padding:10px;'><a  style='color:#5f4a29; text-decoration:none;' href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a></td>";
				  	echo "<td style='padding:10px;'>Active</td>";
				  	echo "<td style='padding:10px;'>" . $row['vp'] . "</td>";
				  	echo "<td style='padding:10px;'>" . $row['dp'] . "</td>";
				}
				  
				while($row = $result2 -> fetch_array(MYSQLI_ASSOC)) {
					$gmlevel = $row['gmlevel'];
					
					switch ($gmlevel) {
						case "10":
							echo "<td style='color:#640000; padding:10px;'>Owner</td>";
							break;
						case "9":
							echo "<td style='color:#136400; padding:10px;'>Co-Owner</td>";
							break;
						case "8":
							echo "<td style='color:#ff0000; padding:10px;'>Head Admin</td>";
							break;
						case "7":
							echo "<td style='color:#ffcc00; padding:10px;'>Admin</td>";
							break;
						case "6":
							echo "<td style='color:#ffffff; padding:10px;'>Dev</td>";
							break;
						case "5":
							echo "<td style='color:#0084ff; padding:10px;'>Head GM</td>";
							break;
						case "4":
							echo "<td style='color:#00fffc; padding:10px;'>GM</td>";
							break;
						case "3":
							echo "<td style='color:#376261; padding:10px;'>Trial GM</td>";
							break;
						case "2":
							echo "<td style='color:#a1a1a1; padding:10px;'>Moderator</td>";
							break;
						case "1":
							echo "<td style='color:#ff8400; padding:10px;'>VIP</td>";
							break;
						default:
							echo "<td style='color:#b5b5b5; padding:10px;'>Player</td>";
					}
				  	echo "</tr>";
				  }
				  
				$row = $result2 -> fetch_array(MYSQLI_ASSOC); 
				$num_results = $result2 -> num_rows; 
				if ($num_results > 0){}
				else{ 
					echo "<td style='color:#b5b5b5; padding:10px;'>Player</td>";
					echo "</tr>";
				} 
				
				echo "</table>";
				?>
			</center>
	        <br />
		</div>
		<?php
	}
	?>
</div>
</div>   
</div>
