<?php
    require("connect.php");
    $title_insert_into = $_POST['title_insert_into'];

    $sql = "INSERT INTO lib_titles VALUES(NULL,'$title_insert_into')";

    mysqli_query($conn,$sql);
    header('location:books.php');
?>