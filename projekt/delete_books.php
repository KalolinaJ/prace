<?php
    require("connect.php");

    $idToDelete=$_POST['idToDelete'];

    $sql="DELETE FROM `lib_books` WHERE id_book = $idToDelete";
    
    mysqli_query($conn, $sql);
    header('location:books.php');
?>