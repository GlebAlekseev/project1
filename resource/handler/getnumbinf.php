<?php

define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', 'root');
define('DB', 'project1');
$linkl = mysqli_connect(HOST,USER,PASS,DB);
$rs = mysqli_query($linkl, "SELECT * FROM inform");
$temp = 0;
while ($row = mysqli_fetch_assoc($rs)) {
	if ($row["class"] > $temp) {
		$temp = $row["class"];
	}
  $data[] = $row;

}
$number = rand(1,$temp);
$rand = rand(1,100);

if ($rand < 50) {
	$numbers = '{ "id": '.$number.',"sort": "id"}';
}else{
	$numbers = '{ "id": '.$number.',"sort": "-id"}';
}


    print_r($numbers);
?>


