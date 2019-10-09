<?php
    $id = $_POST['id'];
    $conn = new mysqli("172.16.131.125","02_barczak","zaq1@WSX","02_barczak");
    $sql = "DELETE FROM users WHERE id = '$id'";
    mysqli_query($conn,$sql);
    Header('location:index.php');
?>