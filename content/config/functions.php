<?php
//Refuse direct access
if(!defined("125125CMS")){ exit; }

function sha_password($user,$pass){
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return SHA1($user.':'.$pass);
}
?>