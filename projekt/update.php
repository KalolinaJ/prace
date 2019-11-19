<?php
    require("connect.php");

    $title=$_POST['title'];
    $update=$_POST['update'];
    $sql="UPDATE `lib_titles` SET `title`='$title' WHERE id_title = $update";

    echo($sql);
    
    mysqli_query($conn, $sql);
    header('location:books.php');
?>