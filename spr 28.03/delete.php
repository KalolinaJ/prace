<?php

    $conn= new mysqli("172.16.131.125", "z_iop", "fds", "z_iop");

    $id_to_delete=$_POST['id_to_delete'];

    $sql="DELETE $row FROM `bibl_wyp`";

    mysqli_query($conn, $sql);

    header('location:index.php');

?>