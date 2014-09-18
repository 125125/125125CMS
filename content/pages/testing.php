<div id="news">
	<div class="title">
		<center>User Panel</center>
	</div>
	<div class="message">
		<center>
			<?php
			$result2 = $mysqli -> query("SELECT gmlevel FROM account_access WHERE id =(SELECT id FROM account WHERE username = '" . addslashes($_SESSION['username']) . "');");
			  
			while($row = $result2 -> fetch_array(MYSQLI_ASSOC)) {
				$gmlevel = $row['gmlevel'];
				switch ($gmlevel){
					case "10";
						echo "Owner";
						break;
					case "9";
						echo "Co-Owner";
						break;
					case "8";
						echo "Head-Admin";
						break;
					case "7";
						echo "Admin";
						break;
					case "6";
						echo "Dev";
						break;
					case "5";
						echo "Head-GM";
						break;
					case "4";
						echo "GM";
						break;
					case "3";
						echo "Trial GM";
						break;
					case "2";
						echo "Moderator";
						break;
					case "1";
						echo "VIP";
						break;
					case "0";
						echo "Player";
						break;
				}
			}
			?>
		</center>
		<br />
	</div>
</div>
</div>
</div>