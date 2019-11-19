<?php
    require("connect.php");

    $user=$_POST['user'];
    $update_user=$_POST['update_user'];

    $sql="UPDATE `lib_checkouts` SET `id_user`='$user' WHERE id_checkout = $update_user";
    
    mysqli_query($conn, $sql);
    header('location:index.php');
?>