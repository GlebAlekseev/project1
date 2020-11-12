<?php

define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', 'root');
define('DB', 'project1');
$linkl = mysqli_connect(HOST,USER,PASS,DB);

$data=json_decode(file_get_contents("php://input"));

	session_start();
	$_SESSION['idlastdel'] = $data->id;


	$id = $data->id;

	$resultat = mysqli_query($linkl,"DELETE FROM fizika WHERE id = $id");








?>