<?php 
if (isset($_POST["enter_l"])) {
    
$login = $_POST["login"];
$password = $_POST["password"];
$regdate = time();
///

$result = mysqli_query($linkl,"SELECT * FROM admin WHERE login='".$login."' ");
$user = mysqli_fetch_assoc($result);


if (!empty($user)) {

if($user['password'] == $password){



    $_SESSION['auth'] = true;
                mysqli_query($linkl,"UPDATE admin SET last_online='".$regdate."' WHERE login='".$login."' ");
                header("Location: /admin ");


}else{
                header("Location: / ");}

}else{
                header("Location: / ");}



}else{
                header("Location: / ");}


///////////////////////////////////
///////////////////////////////////
///////////////////////////////////
///////////////////////////////////

?>