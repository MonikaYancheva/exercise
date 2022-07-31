


<?php

session_start();

$heading = "Home page";
$user_name = " ";

//$user_name = $_POST['user_name'];

// Домашно - направете проверка и нека при ново стартиране индекс файлът да не дава грешка.
echo $_SESSION['hello_user_name'];
$_SESSION['hello_user_name'] = $_POST['user_name'];

//echo isset($user_name) ? $user_name : " " ; 
if($_SESSION['hello_user_name'] == $_POST['user_name']) {
   $_SESSION['hello_user_name'] = "Hello ".$_POST['user_name']; 
}
else{
    $_SESSION['hello_user_name'] = "Hello ". " "; 
}

@include "template".DIRECTORY_SEPARATOR."app.php";
echo "<hr>";
@include "views".DIRECTORY_SEPARATOR."form.php";


