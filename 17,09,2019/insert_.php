<?php

    $servername = "172.16.131.125";
    $username = "02_janecka";
    $password = "arolinak";
    $dbname = "02_janecka";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $marka = $_POST['marka'];
    $photo = $_POST['photo'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];
    $promocja = $_POST['promocja'];

    $sql = "INSERT INTO Cars('id_car','marka', 'photo','cena', 'opis', 'promocja' ) VALUES (NULL, '$marka', '$photo', $cena, '$opis', '$promocja')";

    mysqli_query($conn, $sql);

?>