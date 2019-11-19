<?php
    require("connect.php");
    
    $checkouts_insert_book = $_POST['checkouts_insert_book'];
    $checkouts_insert_user = $_POST['checkouts_insert_user'];
    $checkouts_date_in = $_POST['checkouts_date_in'];
    $checkouts_date_out = $_POST['checkouts_date_out'];

    
    
    $sql = "INSERT INTO lib_checkouts (`id_checkout`, `id_user`, `id_book`, `date_in`, `date_out`) VALUES (NULL, '$checkouts_insert_user', '$checkouts_insert_book', '$checkouts_date_in', '$checkouts_date_out')";
    echo($sql);
    mysqli_query($conn,$sql);

    header("location:index.php");
?>