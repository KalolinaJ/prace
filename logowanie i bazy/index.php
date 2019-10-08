<?php
    session_start();

    if(isset($_SESSION['zalogowany']) != 1){
        header('location: logowanie.php');
    }
    else{
?>


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
    <?php
        
        if($_SESSION['rola'] == 3){
            echo 'ooo pan admin przyszedl, dzien dobry';
        }
        elseif($_SESSION['rola'] == 2){
            echo 'mode przyszedl';
        }
        elseif($_SESSION['rola'] == 1){
            echo 'tfu, user';
        }


    ?>
    <br><br>
    <a href="http://172.16.131.125/3ti/kubica_b/logowanie%20i%20bazy/index.php?akcja=wyloguj">wyloguj</a>
</body>
<script src="main.js"></script>
</html>


    <?php
        if(isset($_GET['akcja'])){
            if($_GET['akcja'] == 'wyloguj'){
                unset($_SESSION['zalogowany']);
                header('location: logowanie.php');

            }

        }
    }
?>