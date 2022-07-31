<?php

include "..".DIRECTORY_SEPARATOR."config.php";
include "..".DIRECTORY_SEPARATOR."db_connection.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);

$id = $_GET['id'];
//print "$id";

$sql = "SELECT*FROM articles WHERE id = '$id'";
$result = mysqli_query($foo_connection, $sql);

foreach ($result as $key => $cols){
        
       
    print"<tr>". 
          "<td>".$cols["id"]."</td>".
          "<td>".$cols["heading"]."</td>".
          "<td>".$cols["text"]."</td>".
          "<td>".$cols["author"]."</td>".
          "<td>".$cols["published"]."</td>". 
         "</tr>";
             
    }