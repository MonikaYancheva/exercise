<?php

session_start();

$heading = "Page 2";
$user_name = " ";
//$user_name = $_POST['user_name'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['hello_user_name'] = "Hello ".$_POST['user_name'];
}
// Домашно - направете проверка и нека при ново стартиране page-2 файлът да не дава грешка.
echo $_SESSION['hello_user_name'];
$_SESSION['hello_user_name'] = $_POST['user_name'];

//echo isset($user_name) ? $user_name : " " ; 

//if($_SESSION['hello_user_name'] == $_POST['user_name']) {
//   $_SESSION['hello_user_name'] = "Hello ".$_POST['user_name']; 
//}
//else{
//    $_SESSION['hello_user_name'] = "Hello ". " "; 


@include "template".DIRECTORY_SEPARATOR."app.php";

