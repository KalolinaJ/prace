<?php

    $servername = "172.16.131.125";
    $username = "02_janecka";
    $password = "arolinak";
    $dbname = "02_janecka";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $cena = $_POST['cena'];
    $photo = $_POST['photo'];
    $opis = $_POST['opis'];
    $promocja = $_POST['promocja'];
    $marka = $_POST['marka'];

    $sql = "INSERT INTO Cars (cena, photo, opis, promocja, marka ) VALUES ($cena, '$photo', '$opis', '$promocja', '$marka')";
    mysqli_query($conn, $sql);

?>