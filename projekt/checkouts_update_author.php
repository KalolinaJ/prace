<?php
    require("connect.php");

    $update_author=$_POST['update_author'];
    $updateAuthor=$_POST['updateAuthor'];

    $sql="UPDATE `lib_authors` SET `name`='$update_author' WHERE id_author=$updateAuthor";
   
  
    mysqli_query($conn, $sql);
    header('location:index.php');
?>