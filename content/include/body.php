<?php
if(isset($_GET['p']) && !empty($_GET['p'])){
	$page = $_GET['p'];	
}
else {
	$page = "index";
}

switch($page){    
    case "index":
        include('content/pages/index.php');
        break;
    case "vote":
        include('content/pages/vote.php');
        break;
    case "donate":
        include('content/pages/donate.php');
        break;
    case "register":
        include('content/pages/register.php');
        break;
    case "connect":
        include('content/pages/connect.php');
        break;
    case "download":
        include('content/pages/download.php');
        break;
    case "armory":
        include('content/pages/armory.php');
        break;
    case "register_success":
        include('content/pages/register_success.php');
        break;
    case "ucp":
        include('content/pages/ucp.php');
        break;
    case "store":
        include('content/pages/store.php');
        break;
    case "staff":
        include('content/pages/staff.php');
        break;
	default:
		include('content/pages/notfound.php');
}
?>