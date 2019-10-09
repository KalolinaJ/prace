<?php
    SESSION_START();

    require_once('conn.php');

    $connect = new mysqli ($hn, $un, $pw, $dbn);

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT user,passw FROM user WHERE user='$login' AND passw='$password'";

   
    if ($result = $connect->query($sql)){
        $users = $result->num_rows;
        if($users>0) {
            $_SESSION['zalogowany'] = true;

            $row = $result->fetch_assoc();
            $_SESSION['user'] = $row['user'];

           

            unset($_SESSION['blad']);

            header('location: plik1.php');
            
            
        } else {
           $_SESSION['blad'] = '<h1><span style="color:red">Nie zalogowano!</span></h1>';
            header('location: index.php');
            
        }
    }

    if (isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj') {
        unset ($_SESSION['zalogowany']);
        header('location: index.php');
    }
    
    

?>