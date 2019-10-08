<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <?php
                require('menu.php');
            ?>
        </div>

        <div class="up">
            <?php
                SESSION_START();

                if (isset($_SESSION['zalogowano']) && $_SESSION['zalogowany'] = 1){
                    echo ' <br> zalogowano ';
                } else { 
            ?>

            <form action="logowanie.php" method="post">
                <input type="text" name="login" id="login">
                <input type="submit" value="submit">
            </form>
            
            <?php
                }
            ?>

        </div>

        <div class="srodek">
            <h1> PLIK.PHP </h1>

            <div class="in">
                <?php
                    if(isset($_SESSION['zalogowano']) && $_SESSION['zalogowano'] = 1){
                        echo ' <div class="zalogowano">in</div>';
                    }
                ?>
            </div>

            <?php
                if(isset($_SESSION['zalogowano']) && $_SESSION['zalogowano'] ==1){
                    echo ' <a href="logowanie.php?akcja=wyloguj">wyloguj</a>';
                }
            ?>
        </div>

    </div>
</body>
</html>