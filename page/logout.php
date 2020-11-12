<?php 

$_SESSION['auth'] = false;
$_SESSION['id'] = '';
$_SESSION['login'] = '';

$_SESSION['users'] = array();
setcookie("login",'',time());
setcookie("key",'',time());
header("Location: / ");

 ?>