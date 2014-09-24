<div id="news">
	<?php
	//If person is not logged
	if (!isset($_SESSION['username']) OR empty($_SESSION['username'])){
		include 'content/pages/must_login.php';
	}
	elseif ($_GET['p'] == "donate" AND !isset($_GET['action'])){
		?>
		<div class="title">
			<center>Donate</center>
		</div>
		<div class="message">
			<center>
				1$ = 1 DP
				<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-top: 30px;">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>-->
				
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="BSYEHUNCTV5HU">
					<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				<table>
					<tr>
						<th style="text-align:left;">Type</th>
						<th style="text-align:left;">Price</th>
					</tr>
					<tr>
						<td>Off-Set Piece</td>
						<td>5 DP</td>
					</tr>
					<tr>
						<td>One-Hand Weapon</th>
						<td>7 DP</td>
					</tr>
					<tr>
						<td>Set Piece</td>
						<td>10 DP</td>
					</tr>
					<tr>
						<td>Two-Hand Weapon</td>
						<td>12 DP</td>
					</tr>
					<tr>
						<td>VIP Rank</td>
						<td>15 DP</td>
					</tr>
					<tr>
						<td>Full VIP Set</td>
						<th>25 DP</td>
					</tr>
				</table>
			</center>
			<br />
		</div>
	<?php
	}
	elseif ($_GET['p'] == "donate" AND $_GET['action'] == "cancel"){
		echo "Donation canceled...";
	}
	elseif ($_GET['p'] == "donate" AND $_GET['action'] == "success"){
		echo "Donation success!";
	}
	else{
		echo "Your doing something wrong";
	}
	?>
</div>	  
</div>
