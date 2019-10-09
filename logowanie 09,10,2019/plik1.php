<?php
    SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true){


        echo("<h1><span style='color:green'>Zalogowano: ".$_SESSION['user']."!</span></h1>");
        echo("</br><div style='background:green'></div>");
        echo(' <a href="logowanie.php?akcja=wyloguj">wyloguj</a>');
        } else {
            echo("<h1><span style='color:red'> Nie zalogowano: ".$_SESSION['user']."!</span></h1>");
            echo("</br><div style='background:red'></div>");
        }
    ?>

    <a href="index.php">index.php</a>
</body>
</html>