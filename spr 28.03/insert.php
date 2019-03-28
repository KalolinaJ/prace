<?php
$conn=new mysqli('172.16.131.125', 'z_iop', 'fds', 'z_iop');

$autor=$_POST['autor'];

$sql="INSERT INTO `bibl_autor` VALUES (NULL,'$autor')";

mysqli_query($conn, $sql);
header('location:index.php'); 
?>