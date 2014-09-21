<div id="news">
	<?php
	//Refuse direct access
	if(!defined("125125CMS")){ exit; }
	
	//If person is not logged
	if (!isset($_SESSION['username']) OR empty($_SESSION['username'])){
		include 'content/pages/must_login.php';
	}
	else{
		?>
		<div class="title">
			<center>Virtual AH</center>
		</div>
		<div class="message">
			<center>
				<?php
				if (!isset($_POST['characters'])){
					echo "Select a character.<br />";
					
					$mysqli -> select_db($acc_db);
					$get_account = $mysqli -> query("SELECT id FROM account WHERE username = '".$_SESSION['username']."'");
					while ($row = $get_account -> fetch_array(MYSQLI_ASSOC)){
						$account_id = $row['id'];
					}
					
					$mysqli -> select_db($char_db);
					$get_chars = $mysqli -> query("SELECT * FROM characters WHERE account = '$account_id'");
					
					echo "<form action='' method='post'><select name='characters'>";
					while ($row = $get_chars -> fetch_array(MYSQLI_ASSOC)){
						echo "<option value='".$row['guid']."'>".$row['name']."</option>";
					}
					echo "</select><input type='submit' /></form>";
				}
				else{
					echo "<p>Items in the AH </p>";
					
					$mysqli -> select_db($char_db);
					$get_ah_items = $mysqli -> query("SELECT * FROM auctionhouse LIMIT 10");
					$check = $get_ah_items -> num_rows;
					if ($check > 0){
						while ($row = $get_ah_items -> fetch_array(MYSQLI_ASSOC)){
							echo $row['itemguid'].". Buyout: ".$row['buyoutprice']."<br/>";
						}
					}
					else{
						echo "There are no items in the AH<br/>";
					}
					
					echo "<p>Items in your bag </p>";
					$get_char_items = $mysqli -> query("SELECT * FROM character_inventory WHERE guid = '".$_POST['characters']."'");
					$check = $get_char_items -> num_rows;
					if ($check > 0){
						while ($row = $get_char_items -> fetch_array(MYSQLI_ASSOC)){
							echo $row['slot'].". Item: ".$row['item']."<br/>";
						}
					}
					else{
						echo "There are no items in your inventory<br/>";
					}
					
					echo "<p><a href='?p=auctionhouse'><button>Go Back</button></a></p>";
				}
				?>
			</center>
			<br />
		</div>
	<?php
	}
	?>
</div>	  
</div>