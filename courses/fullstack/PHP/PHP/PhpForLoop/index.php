<?php

    $myArray = array(
        "Monika",
        "Milcheva",
        "Yancheva",
        40,
        "Developer",
        "Shop manager",
        "Varna",
        "Mladost",
        132,
        10
    );

  
     for($i = 0; $i < count($myArray) ; $i++) {
         if ($i % 2 == 0) {
             echo $myArray[$i] . "<br>";
         }
     }      







?>
