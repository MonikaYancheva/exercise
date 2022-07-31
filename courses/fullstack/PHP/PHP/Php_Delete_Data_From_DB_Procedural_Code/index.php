<?php


include "app".DIRECTORY_SEPARATOR."config.php";
include "app".DIRECTORY_SEPARATOR."db_connection.php";

$foo_connection = db_connect($host, $user_name, $user_password, $database);

$sql = "SELECT * FROM articles ";

$result = mysqli_query($foo_connection, $sql);



if (mysqli_num_rows($result) > 0){
    print "<table>
            <tr>
              <th>Article ID</th>
              <th>Article heading</th>
              <th>Article text</th>
              <th>Article author</th>
              <th>Article published</th>
              <th>Show article</th>
            </tr>";
    foreach ($result as $key => $cols){
        
       
    print"<tr>". 
          "<td>".$cols["id"]."</td>".
          "<td>".$cols["heading"]."</td>".
          "<td>".$cols["text"]."</td>".
          "<td>".$cols["author"]."</td>".
          "<td>".$cols["published"]."</td>".
          "<td><a href= 'app/sql/article.php?id=".$cols['id']."'>Show</a></td>". 
         "</tr>";
             
    }
    
    print "</table>";
        
}
else {
    print "0 results.";
}

mysqli_close($foo_connection);