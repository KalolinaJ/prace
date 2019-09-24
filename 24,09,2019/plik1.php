<?php
    SESSION_START();
    echo('<br>plik1');

    if(isset($_POST['haslo']) && $_POST['haslo'] == '123' ){
        $_SESSION['zalogowano'] = 1;
        echo '<br>zalogowano';
    }

    if(isset($_SESSION['zalogowano']) && $_SESSION['zalogowano'] ==1){
        echo '<br>zalogowano';
        echo'<br><a href="logowanie.php?akcja=wyloguj">wyloguj</a>';

    } else {
        echo '<br>nie zalogowano';
    }


// echo('<br>menu:
//     <br><a href="logowanie.php">logowanie</a>
//     <br><a href="plik2.php">plik2</a>
//     <br><a href="plik3.php">plik3</a>
// ');
?>

<?php
    require("menu.php");
?>
