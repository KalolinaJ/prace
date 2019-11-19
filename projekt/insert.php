<?php

    require("connect.php");

    $author=$_POST['author'];

    $sql="INSERT INTO `lib_authors` VALUES (NULL,'$author')";
    
    mysqli_query($conn, $sql);
    header('location:index.php');
?>