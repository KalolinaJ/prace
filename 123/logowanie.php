<?php
    echo'<h1> PLIK LOGOWANIE.PHP</h1> ';
    session_start();

    if(isset($_GET['akcja']) && $_GET['akcja'] = 'wyloguj'){
        unset($_SESSION['zalogowano']);
        echo' <br> nie zalogowano';
    }

    if(isset($_POST['login']) && $_POST['login'] == '123'){
        $_SESSION['zalogowano'] = 1;
        echo ' <br> zalogowano';
    }

    require('menu.php');
?>