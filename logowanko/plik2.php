<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <?php
                require('menu.php');
                require('table.php');
            ?>
        </div>
        <div class="top">
            <?php
                session_start();
                if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1){
                    echo('');
                }
                else {
                    require('logPanel.php');
                }
            ?>
        </div>
        <div class="bot">
            <span class="index">jestes w plik2.php</span><br>
            <?php
                if(isset($_SESSION['zalogowany'])){
                    if ($_SESSION['zalogowany'] == 1){
                        echo ('
                            <span class="logged">conn status</span><br>
                        ');
                        echo('
                        <a href="logowanie.php?akcja=wyloguj" class="logOut">wyloguj</a>
                    ');
                    }
                    else {
                        echo('
                            <span class="nonLogged">nie udalo sie zalogowac</span><br>
                            
                        ');
                        }
                    }

            ?>
        </div>
    </div>
</body>
</html>