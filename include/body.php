<?php
if(isset($_GET['p']) && !empty($_GET['p'])){
	$page = $_GET['p'];	
}
else {
	$page = "index";
}

switch($page){    
    case "index":
        @include('pages/index.php');
        break;
    case "vote":
        @include('pages/vote.php');
        break;
    case "donate":
        @include('pages/donate.php');
        break;
    case "register":
        @include('pages/register.php');
        break;
    case "connect":
        @include('pages/connect.php');
        break;
    case "download":
        @include('pages/download.php');
        break;
    case "armory":
        @include('pages/armory.php');
        break;
    case "register_success":
        @include('pages/register_success.php');
        break;
    case "ucp":
        @include('pages/ucp.php');
        break;
    case "store":
        @include('pages/store.php');
        break;
    case "staff":
        @include('pages/staff.php');
        break;
	default:
		@include('pages/notfound.php');
}
?>