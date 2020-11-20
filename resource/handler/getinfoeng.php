<?php

define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', 'root');
define('DB', 'project1');
$linkl = mysqli_connect(HOST,USER,PASS,DB);
$rs = mysqli_query($linkl, "SELECT * FROM english");

while ($row = mysqli_fetch_assoc($rs)) {

  $data[] = $row;

}



    print_r(json_encode($data));
?>


