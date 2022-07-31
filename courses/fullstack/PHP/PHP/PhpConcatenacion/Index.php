<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Concatenation</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
             $firstName = "Monika";
             $lastName = "Yancheva";
             $occupation = "Shop manager";
             $hobby = "Swimming";
             
             echo "Име: ".$firstName."<br>"."Фамилия: ".$lastName."<br>"."Професия: ".$occupation."<br>"."Хоби: ".$hobby."<br>";
            
             define("CITY_OF_LIVING", "Varna");
      
             echo CITY_OF_LIVING."<br>";
             
             define("FUTURE_OCCUPATION", "Developer");
            
             echo FUTURE_OCCUPATION;
        ?>
    </body>
</html>

