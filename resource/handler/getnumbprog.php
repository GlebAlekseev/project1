<?php

define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', 'root');
define('DB', 'project1');
$linkl = mysqli_connect(HOST,USER,PASS,DB);
$rs = mysqli_query($linkl, "SELECT * FROM programming");

while ($row = mysqli_fetch_assoc($rs)) {

  $data[] = $row;

}
$number = rand(1,count($data)/4);
$numbers = '{ "id": '.$number.'}';



    print_r($numbers);
?>


