<?php
     require("connect.php");

     $idtodelete=$_POST['idtodelete'];
 
     $sql="DELETE FROM `lib_authors` WHERE id_author = $idtodelete";
     echo($sql);
     mysqli_query($conn, $sql);
     header('location:authors.php');
?>