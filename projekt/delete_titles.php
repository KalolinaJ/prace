<?php
    require("connect.php");

    $delete=$_POST['delete'];
 
    $sql="DELETE FROM `lib_titles` WHERE id_title = $delete";

    mysqli_query($conn, $sql);
    header('location:titles.php');
?>