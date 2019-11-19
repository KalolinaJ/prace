<?php
    require("connect.php");

    $name = $_GET['name'];
    $update_author = $_GET['update_author'];

    $sql="UPDATE `lib_authors` SET `name`='$name' WHERE id_author = $update_author";

    mysqli_query($conn, $sql);
    header('location:books.php');
?>