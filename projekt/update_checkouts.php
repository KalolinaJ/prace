<?php
    require("connect.php");

    $user=$_POST['user'];
    $update=$_POST['update'];

    $sql="UPDATE `lib_checkouts` SET `id_user`='$user' WHERE id_checkout = $update";
    
    mysqli_query($conn, $sql);
    header('location:index.php');
?>