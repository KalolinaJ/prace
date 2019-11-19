<?php
    require("connect.php");

    $update_title=$_POST['update_title'];
    $updateTitle=$_POST['updateTitle'];
    $sql="UPDATE `lib_titles` SET `title`='$update_title' WHERE id_title = $updateTitle";

    echo($sql);
    
    mysqli_query($conn, $sql);
    header('location:index.php');
?>