<?php
    require("connect.php");

    $update_date_out=$_POST['update_date_out'];
    $updateOut=$_POST['updateOut'];

    $sql="UPDATE `lib_checkouts` SET `date_out`='$update_date_out' WHERE id_checkout = $updateOut";

    echo($sql);
    
    mysqli_query($conn, $sql);
    header('location:index.php');
?>