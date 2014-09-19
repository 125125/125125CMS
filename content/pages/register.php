<div id="news">
	<div class="title">
		<center>Register</center>
	</div>
	<div class="message">
		<center>
			<form action="" method="post" autocomplete="off">
			<input type="text" name="uname" placeholder="Username" required="required" /><br />
			<input type="password" name="pass" placeholder="Password" required="required" /><br />
			<input type="password" name="pass2" placeholder="Verify Password" required="required" /><br />
			<input type="email" name="email" placeholder="Email" required="required" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" /><br />
			<input type="submit" value="register">
			</form>
		</center>
		<br />
		<?php
		include "core/".$core."/regi_db.php";
		?>
	</div>
</div>
</div>