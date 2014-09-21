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
					$mysqli -> select_db("wow_cms");
						
					$vote_links = $mysqli -> query("SELECT * FROM vote_links");
						
					while ($row = $vote_links -> fetch_array(MYSQLI_ASSOC)) {
						echo "<tr>
						<td class='left'><a href='". $row['vote_link'] ."&user=". $_SESSION['username'] ."' target='_blank'><img src='". $row['vote_img'] ."' border='0' alt='". $row['name'] ."'></a></td>
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