<?php
    SESSION_START();
    if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true){
        echo("<h1><span style='color:green'>Zalogowano: ".$_SESSION['user']."!</span></h1>");
    }
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
    if (isset($_SESSION['blad']))
        echo $_SESSION['blad'];
    ?>

    <form action="logowanie.php" method="POST">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit">
    </form>

    <?php
         echo(' <a href="logowanie.php?akcja=wyloguj">wyloguj</a>');
    ?>
    <a href="plik1.php">plik1.php</a>

</body>
</html>