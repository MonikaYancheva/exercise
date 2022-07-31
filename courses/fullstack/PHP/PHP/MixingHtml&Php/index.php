<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
    </head>
    <body>
        <?php
        
            $movies = array (
                "The Shawshank Redemption",
                "The Godfather",
                "Schindler's List",
                "City of God",
                "Seven"
                    
            );
            foreach ($movies as $key => $movie) {
               echo "<ul><li>$movie</li></ul>";
                
            }
        ?>
    </body>
</html>
