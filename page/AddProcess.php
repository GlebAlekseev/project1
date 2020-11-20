<?php 
if (isset($_POST["insert-Go"])) {
    
$name = $_POST["name"];
$describes = $_POST["describes"];
$class = $_POST["class"];
$bool = $_POST["bool"];
$boolfiz = $_POST["boolfiz"];
$boolprog = $_POST["boolprog"];
$boolinf = $_POST["boolinf"];
$booleng = $_POST["booleng"];

if ($boolfiz == 'on') {
		$resultata = mysqli_query($linkl,"INSERT INTO fizika (class,name,describes,bool) VALUES('$class','$name','$describes','$bool')");
}
if ($boolprog == 'on') {
		$resultata = mysqli_query($linkl,"INSERT INTO programming (class,name,describes,bool) VALUES('$class','$name','$describes','$bool')");
}
if ($boolinf == 'on') {
		$resultata = mysqli_query($linkl,"INSERT INTO inform (class,name,describes,bool) VALUES('$class','$name','$describes','$bool')");
}
if ($booleng == 'on') {
		$resultata = mysqli_query($linkl,"INSERT INTO english (class,name,describes,bool) VALUES('$class','$name','$describes','$bool')");
}


///
                header("Location: /admin ");}


///////////////////////////////////
///////////////////////////////////
///////////////////////////////////
///////////////////////////////////

?>