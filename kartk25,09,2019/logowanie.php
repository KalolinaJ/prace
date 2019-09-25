<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container">
        <div class="left">

            <?php
                require("menu.php")
            ?>

        </div>

        <div class="top">
            <?php
                    SESSION_START();
                    echo('<h1>plik logowanie.php</h1>');

                    if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj'){
                        unset($_SESSION['zalogowano']);
                        echo '<br> nie zalogowano';
                    }

                    if(!isset($_SESSION['zalogowano'])){
                    ?>

                    <form action="plik1.php" method="POST">
                        <input type="text" name="login" placeholder="login">
                        <input type="submit" class="submit" value="submit">
                    </form>

                    <?php
                    } else {
                        echo('<br><a href="zalogowano.php?akcja=wyloguj">wyloguj</a>');
                    };
                    ?>
        </div>

        <div class="bottom">
            <?php
                    require("plik1.php");
            ?>
        </div>
    </div>
    </body>
</html>