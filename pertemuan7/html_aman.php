<!DOCTYPE html>
<html>
    <head>
    <title>Inputan</title>
    </head>
    <body>
        <h2>HTML Injection</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'utf-8');

            echo "Input : ".$input. "<br>";
            
            $email = $_POST ["email"];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "email : " ,$email;
            } else {
                echo "Input yang dimasukkan tidak valid!";
            }
            
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <label for="input">Mauskkan input</label>
            <input type="text" name="input" id="email">
        <br>
            <label for="email">Masukkan email</label>
            <input type="text" name="email" id="email">
        <br>
            <input type="submit" name="submit" id="submit">
        </form>
    </body>
</html>
