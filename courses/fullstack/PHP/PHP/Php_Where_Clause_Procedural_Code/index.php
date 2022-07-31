<?php


include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);

$sql = "SELECT * FROM articles WHERE author = 'Monika Yancheva'";

$result = mysqli_query($foo_connection, $sql);



if (mysqli_num_rows($result) > 0){
    
    foreach ($result as $key => $cols){
        
       
        
    print $cols["id"]." ".
          $cols["heading"]." ".
          $cols["text"]." ".
          $cols["author"]." ".
          $cols["published"]." ".
              "<br>" ;
             
    }
    
  
        
}
else {
    print "0 results.";
}

mysqli_close($foo_connection);