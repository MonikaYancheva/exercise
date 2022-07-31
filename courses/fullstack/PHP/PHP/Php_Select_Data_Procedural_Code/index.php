<?php


include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);

$sql = "SELECT * FROM articles";

$result = mysqli_query($foo_connection, $sql);

//print_r($result);

if (mysqli_num_rows($result) > 0){
    print "<table border ='1'>";
    foreach ($result as $key => $cols){
        
        echo "<tr>";
        
          echo "<td>".$cols["id"]." "."</td>";  
          echo "<td>".$cols["heading"]." "."</td>";
          echo "<td>".$cols["text"]." "."</td>";
          echo "<td>".$cols["author"]." "."</td>";
          echo "<td>".$cols["published"]." "."</td>";
              "<br>";
      

        echo "</tr>";
             
    }
    
    
    print "</table>";
        
}
else {
    print "0 results.";
}

mysqli_close($foo_connection);