<div id="news">
        <div class="title">
          <center>User Panel</center>
        </div>
        <div class="message">
		<center>
<?php
$con=mysqli_connect("127.0.0.1","root","","auth");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
$result2 = mysqli_query($con,"SELECT gmlevel FROM account_access WHERE id =(SELECT id FROM account WHERE username = '" . addslashes($_SESSION['username']) . "');");
  
while($row = mysqli_fetch_array($result2)) {
	$gmlevel = $row['gmlevel'];
	
	switch ($gmlevel) {
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
 
mysqli_close($con);
?>
		</center>
        <br>
      </div>
      </div>
      </div>
    
</div>