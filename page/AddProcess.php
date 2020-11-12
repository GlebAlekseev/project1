<?php 
if (isset($_POST["insert-Go"])) {
    
$name = $_POST["name"];
$describes = $_POST["describes"];
$class = $_POST["class"];
$bool = $_POST["bool"];

		$resultata = mysqli_query($linkl,"INSERT INTO fizika (class,name,describes,bool) VALUES('$class','$name','$describes','$bool')");


///
                header("Location: /admin ");}


///////////////////////////////////
///////////////////////////////////
///////////////////////////////////
///////////////////////////////////

?>