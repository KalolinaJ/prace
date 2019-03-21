<?php
    $conn=new mysqli ('172.16.131.125','z_ghj', 'cxz', 'z_ghj');
    $autor=$_POST['autor'];

    $sql="INSERT INTO `bibl_autor`(`id_autor`, `autor`) VALUES (null,'$autor')";

    mysqli_query($conn,$sql);

?>