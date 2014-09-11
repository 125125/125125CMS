    <aside>
      <div class="sidepanel">
        <div class="sidetitle">
          <center>Tools</center>
        </div>
        <div class="sidecontent">
          <ul>
            <li><a href="#">Vote</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">Armory</a></li>
            <li><a href="#">Recruit</a></li>
			<?php
			if( !isset($_SESSION['username'])){
        //if the user is not allowed, display a message and a link to go back to login page
				echo '';
			}else{
				echo '<li><a href="/logout.php">Logout</a></li>';
			}
			?>
          </ul>
        </div>
        <div class="sidetitle">
          <center>Login Form</center>
        </div>
        <div class="sidecontent">
          <center>
			<?php
			if( !isset($_SESSION['username'])){ ?>
		  <form action="include/login.php" method="POST">
			<input type="text" id="user" name="username" placeholder="Username" required /><br /><br />
			<input type="password" id="pass" name="password" placeholder="Password" required /><br />
			<input type="submit" id="submit" value="Login !" />
		</form>
		<?php }else{ 
		echo "<font color='#3a3225'>Welcome,</font> <b>" . $_SESSION['username'] . "</b>" 
		?>
				<div class="userinfodiv">
			<table border="1" class="userinfo">
			<tr>
				<th class="userinfo-th" style="text-align:center;" colspan="2">Hellguard Realm</th>
			</tr>
			<tr>
				<th class="userinfo-th">Vote Points:</th>
				<td class="userinfo-td">0</td>
			</tr>
			<tr>
				<th class="userinfo-th">Donor Points:</th>
				<td class="userinfo-td">0</td>
			</tr>
			<tr>
				<th class="userinfo-th">Account Rank:</th>
				<td class="userinfo-td">Player</td>
			</tr>
			</table>
			</div>
		<?php } ?>
			
          </center>
        </div>
		<div class="sidetitle">
		  <center>Online Players</center>
		</div>
		<div class="sidecontent">
		<div class="userinfodiv" id="scrolling">
		<table class="userinfo" border="1">
			<tr>
			<?php
				$link = mysql_connect("localhost", "root", "");
				mysql_select_db("characters", $link);

				$result = mysql_query("SELECT * FROM characters WHERE online > 0", $link);
				$num_rows = mysql_num_rows($result);

				echo "<th class='userinfo-th'>Players Online\n</th>
						  <td class='userinfo-td'>$num_rows</td>";
			?>
			</tr>
				<th class="userinfo-th">Level</th>
				<th class="userinfo-th">Name</th>
			</tr>
			<?php
			$con=mysqli_connect("127.0.0.1","root","","characters");
			// Check connection
			if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$result = mysqli_query($con,"SELECT guid, name, level FROM characters WHERE online > 0");
			
			while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td class='userinfo-td'>" . $row['level'] . "</td>";
			echo "<td class='userinfo-td'>" . $row['name'] . "</td>";
			echo "</tr>";
			}
			
			mysqli_close($con);
			?>
		</table>
		</div>
		</div>
      </div>
    </aside>
