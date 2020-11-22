<?php

define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', 'root');
define('DB', 'project1');
$linkl = mysqli_connect(HOST,USER,PASS,DB);
$rs = mysqli_query($linkl, "SELECT * FROM english");

while ($row = mysqli_fetch_assoc($rs)) {

  $datah[] = $row;

}
$all = count($datah);
/*0-7*/
for ($i=0; $i < 10;) { 
	$rand1 = rand(0,$all-1);
	$rand2 = rand(0,$all-1);
	$rand3 = rand(0,$all-1);
	$rand4 = rand(0,$all-1);
	if ($rand1 != $rand2 && $rand2 != $rand3 && $rand3 != $rand4 && $rand1 != $rand4 && $rand1 != $rand3 && $rand2 != $rand4 && $rand2 != $rand3) {
		break;
	}
}

/*nnnnmmmmnnnn*/

$i = -1;

for ($j=0; $j < $all; $j++) { 


	if ($j == $rand1 || $j == $rand2 || $j == $rand3 || $j == $rand4) {
		$i++;
		$arrand[$i] = $datah[$j]["describes"];
		$arrandid[$i] = $datah[$j]["id"];

		if ($j == $rand1) {
			$idwin = $datah[$j]["id"];
			$name = $datah[$j]["name"];
		}

	}







}
/*





*/
/*$data = ['{ "descr1": "'.$arrand[0].'", "descr2": "'.$arrand[1].'", "descr3": "'.$arrand[2].'", "descr4": "'.$arrand[3].'", "name": "'.$name.'", "idwin": '.$idwin.'}'];*/
$data= '{  "descr1":"'.$arrand[0].'", "descr2": "'.$arrand[1].'", "descr3": "'.$arrand[2].'", "descr4": "'.$arrand[3].'", "name": "'.$name.'", "idwin": '.$idwin.', "id1": '.$arrandid[0].', "id2": '.$arrandid[1].', "id3": '.$arrandid[2].', "id4": '.$arrandid[3].'}';
/* [{"id":"1","class":"1","name":"photocopier","describes":"ксерокс","bool":"on"},{"id":"4","class":"1","name":"photocopier1","describes":"комбайн","bool":"on"},{"id":"5","class":"1","name":"photocopier2","describes":"свеча","bool":"on"},{"id":"6","class":"1","name":"photocopier3","describes":"бензин","bool":"on"},{"id":"8","class":"2","name":"flatbed scanner","describes":"сканирование","bool":"on"},{"id":"9","class":"2","name":"flatbed 1scanner","describes":"планшетный сканер","bool":"on"},{"id":"11","class":"2","name":"flatbed scanner2","describes":"окно","bool":"on"},{"id":"12","class":"2","name":"flatbed scanner3","describes":"река","bool":"on"}] */
/*$data = '[{ "descr": '.$.'},{ "descr": '.$rand2.'},{ "descr": '.$rand3.'},{ "descr": '.$rand4.'},{ "name": '.$name.'},{ "idwin": '.$idwin.'}]';
*/

    print_r($data);
?>


