<?php
include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";
include "sign-up.php";
include 'template'.DIRECTORY_SEPARATOR.'template.php';

$foo_connection = db_connect($host, $user_name, $user_password, $database);

$new_user_name = "NULL";
$new_user_email = "NULL";
$new_user_password = "NULL";
$sql = "";



    
   if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $new_user_name = $_POST['name'];
        $new_user_email = $_POST['email'];
        $new_user_password = $_POST['password'];

        $sql = "INSERT INTO articles(heading, text, autor) VALUES('$new_user_name','$new_user_email','$new_user_password')";


   }


if(mysqli_query($foo_connection,$sql)) {
    print "Records inserted successfully.";
}
else {
    print "Error: ".$sql."<br>".mysqli_error($foo_connection);
}
    

$result = mysqli_query($foo_connection, $sql);
mysqli_close($foo_connection);


