<?php
    require("connect.php");

    $update_date_in=$_POST['update_date_in'];
    $updateIn=$_POST['updateIn'];

    $sql="UPDATE `lib_checkouts` SET `date_in`='$update_date_in' WHERE id_checkout = $updateIn";

    echo($sql);
    
    mysqli_query($conn, $sql);
    header('location:index.php');
?>