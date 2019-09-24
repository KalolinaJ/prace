<?php

    SESSION_START();
    echo '(sesja logowanie)';

    if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj'){
        unset($_SESSION['zalogowano']);
        echo('<br>nie zalogowano');
    }

    if (!isset($_SESSION['zalogowano'])){
?>
    

<form method="POST" action="plik1.php">

    <input type="text" name="zaloguj" placeholder="nick">
    <input type="text" name="haslo" placeholder="haslo">
    <input type="submit" name="submit" value="submit">

</form>

<?php
    }else{
        echo('<br>zalogowany');
        echo('<br><a href="logowanie.php?akcja=wyloguj">wyloguj</a>');
           
    }
?>
<?php
    require("menu.php");
?>
