<?php

    require('menu.php');
    require('conn.php');
        session_start();

        
        if(isset($_GET['akcja']) && $_GET['akcja'] = 'wyloguj'){
            unset($_SESSION['zalogowany']);
        }
    
        if(isset($_POST['submit'])){
            $login = $_POST['login'];
            $password = $_POST['password'];
            $query = "SELECT * FROM users WHERE login = '$login' AND haslo = '$password'";
            $result = mysqli_query($mysqli,$query);
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['zalogowany'] = 1;
                $_SESSION['user'] = $login;
                $_SESSION['logged_in'] = 'true';
            }
            else {
                $_SESSION['zalogowany'] = 0;
            }
        }

        
        header('location: index.php');

?>
