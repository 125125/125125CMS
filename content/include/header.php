<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="HellguardWoW">
	<meta name="author" content="Tim Levinsson">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="content/css/style.css">
	<link rel="icon" type="image/png" href="content/images/favicon.ico">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="content/js/power.js"></script>
	<script>
		var wowhead_tooltips = { 
		"colorlinks": true, 
		"iconizelinks": true, 
		"renamelinks": true 
		}
	</script>
  	<script type="text/javascript" src="./jquery/jquery-1.2.6.min.js"></script>
    <script type="text/javascript">
	    function slideSwitch() {
	        var $active = $('#slideshow IMG.active');
	
	        if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
	
	        var $next =  $active.next().length ? $active.next()
	            : $('#slideshow IMG:first');
	
	        $active.addClass('last-active');
	
	        $next.css({opacity: 0.0})
	            .addClass('active')
	            .animate({opacity: 1.0}, 1000, function() {
	                $active.removeClass('active last-active');
	            });
	    }
	
	    $(function() {
	        setInterval( "slideSwitch()", 5000 );
	    });
	</script>
</head>
<body>