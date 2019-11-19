<?php
   require("connect.php");
    $id_to_delete=$_POST['id_to_delete'];

    $sql="DELETE FROM `lib_checkouts` WHERE id_checkout = $id_to_delete";

    mysqli_query($conn, $sql);
    header('location:index.php');
?>