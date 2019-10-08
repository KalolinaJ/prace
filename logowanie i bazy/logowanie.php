<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_logowanie.css">
    <title>Document</title>
</head>
<body>

<?php
    session_start();

    if(isset($_SESSION['zalogowany']) == 1){
        header("location: index.php");
    }
?>


    <div class="container">
        <div class="loginBox">
            <form action="logowanie.php" method="post">
                <input type="text" name="login" id="login">
                <input type="text" name="password" id="pass">
                <input type="submit" value="zaloguj" id="submit">
            </form>
        </div>

        <?php
            require('connect.php');

            // ini_set('display_errors', 0);

            if(isset($_POST['login']) && isset($_POST['password'])){
                $login = $_POST['login'];
                $pass = $_POST['password'];
            

                $sql = "SELECT * FROM users WHERE login='$login' AND password='$pass'";

                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);
                $_SESSION['rola'] = $row['rola'];


                if(mysqli_num_rows($result) == 1){

                    $_SESSION['zalogowany'] = 1;
                    $_SESSION['user'] = 1;
                    header('location: index.php');
                }
                else{
                    echo 'zle';
                }
            }
        ?>

    </div>
</body>
</html>