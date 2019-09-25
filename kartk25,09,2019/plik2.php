
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container">
        <div class="bottom">
        <?php
                // SESSION_START();
                echo('<h1>plik2.php</h1>');
            
                if(isset($_POST['login']) && $_POST['login'] == "123"){
                    $_SESSION['zalogowano'] = 1;
                    echo('<br> zalogowano');
                }
            
                if(isset($_SESSION['zalogowano']) && $_SESSION['zalogowano'] == 1) {
                    echo(' <br> zalogowano');
                    echo('<br><a href="logowanie.php?akcja=wyloguj">wyloguj</a>');
                } else {
                    echo('<br> nie zalogowano');
                }

                require("menu.php");
            ?>

            
        </div>
    </div>
    </body>
</html>
