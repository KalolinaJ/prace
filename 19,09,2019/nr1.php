<html>
    <head>
    
    </head>
    <body>
        <?php
        session_start();
        var_dump($_SESSION);
        echo('sesyja nr1 here ');
        

        if (isset ($_GET['akcja'] ) && $_GET['akcja'] == 'wyloguj'){
            unset($_SESSION['zalogowanie']);
            echo('<br> nie zalogowany');
        }
        if (!isset ($_SESSION['zalogowanie'])) {
        ?>

        <form action = "nr2.php" method="post">
        
            <input type="text" name="login" placeholder="wpisz login">
            <input type="text" name="password" placeholder="wpisz haslo">
            <input type="submit" value=" submit">

        </form>

        <?php
        }else{
            echo '<li>Zalogowany ';
                echo'<br><a href="nr1.php?akcja=wuloguj"> Wyloguj </a>';
        }
        ?>

        <h2>menu:</h2>

        <ul>
            <li><a href='nr2.php'>plik2</a>
            <li><a href='nr3.php'>plik3</a>
        </ul>
    </body>
</html>