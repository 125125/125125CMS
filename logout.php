<?php 
session_start();
session_destroy();
header ('location: ../hellguard/?p=index');
?>