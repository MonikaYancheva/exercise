<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>$_GET $_POST $_REQUEST</title>
    </head>
    <body>
        <form action = "" method="post">
            <fieldset>
                <legend>Регистрационна форма</legend>
            <div>
                <label for="first_name">Въведете име</label>
                <input type="text" name="first_name"/>
            </div>
            <br>

            <div>
                <label for="last_name">Въведете фамилия</label>
                <input type="text" name="last_name"/>
            </div>
            <br>
            <div>
                <label for="email">Въведете имейл адрес</label>
                <input type="email" name="mail"/>
            </div>
            <br>

            <div>
                <label for="password">Въведете парола</label>
                <input type="password" name="psw"/>
            </div>
            <br>
            <div>
                <input type="radio" name="sex" value="male">Мъж
            </div>

            <div>
                <input type="radio" name="sex" value="female"/>Жена
            </div>
            <br>
            <br>
            <div>
                <input type="checkbox" name="terms_conditions" value="agree" required id ="terms"/>
                <label for = "terms">Съгласявам се с общите условия на сайта</label>
            <br>
            </div>
            <div>
                <input type="submit" value="Регистрация"/>
            </div>
            </fiedset>
        <?php
            $first_name = $_POST['first_name'];
            echo $first_name;
            echo "</br>";
            $last_name = $_POST['last_name'];
            echo $last_name;
            echo "</br>";
            $email = $_POST['mail'];          
            echo $email;
            echo "</br>";
            $password = $_POST['psw'];
            echo $password;
       
          
        ?>
    </body>
</html>
