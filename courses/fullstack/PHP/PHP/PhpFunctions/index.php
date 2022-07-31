<?php

    function asign_foo () {
        $personValues = 
            ["firstName" => "Monika",
            "lastName" => "Yancheva",
            "age" => 40,
            "occupation" => "Shop manager"
            ];
        $firstArray = $personValues;
        
    foreach ($personValues as $key => $val) {
         print $key . "-" .$val . "<br>";
    }
        
         print "<br>=============================</br>";
 
       
       $cars = 
           ["firstCar" => "BMW",
           "secondCar" => "Mazda",
           "thirdCar" => "Infinity",
           "year" => 2015
           ];
       
       foreach($cars as $key => $val) {
         print $key . "-" .$val . "<br>";
    }
    
       $secondArray = $cars;
   
    
    }
     
   $asign_foo = asign_foo("firstArray");
   $asign_foo = asign_foo("secondArray");
        

    
  
