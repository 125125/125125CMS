<div id="news">
	<?php
	//If person is not logged
	if (!isset($_SESSION['username']) OR empty($_SESSION['username'])){
		include 'content/pages/must_login.php';
	}
	else{
		?>
		<div class="title">
			<center>Store</center>
		</div>
		<div class="message">
			<?php include ('content/include/tooltip.php'); ?>
			<br />
		</div>
		<?php
	}
	?>
</div>    
</div>