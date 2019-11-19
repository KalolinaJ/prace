<?php
    require("connect.php");

    $name=$_POST['name'];
    $updateAuthor=$_POST['updateAuthor'];

    $sql="UPDATE `lib_authors` SET `name`='$name' WHERE id_author=$updateAuthor";
   
  
    mysqli_query($conn, $sql);
    header('location:books.php');
?>