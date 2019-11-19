<?php

    require("connect.php");

    $author_insert = $_POST['author_insert'];
    $title_insert = $_POST['title_insert'];

    // $sql2= "SELECT id_title FROM lib_titles WHERE title LIKE '$title_insert'";
    // $result=mysqli_query($conn, $sql2);
    // $row=mysqli_fetch_assoc($result);

    
    $sql2 = "INSERT INTO lib_books (id_book, id_author, id_title) VALUES (NULL, '$author_insert', '$title_insert')";

    mysqli_query($conn,$sql2);

    echo($sql1);
    echo($sql2);

    // $author_insert=$_POST['author_insert'];
    // $sql = "SELECT id_author FROM lib_authors WHERE (name='$author_insert')";
    // $result = mysqli_query($conn, $sql);
    // while($row = mysqli_fetch_assoc($result){
    //     $id_author = $row['id_author'];
    // }

    // $title_insert = $_POST['title_insert'];
    // $sql1 = "INSERT INTO lib_titles VALUES(NULL, '$title_insert')";
    // mysqli_query($result, $sql1);

    // $title_insert=$_POST['title'];
    // $sql2 = "SELECT id_title FROM lib_titles WHERE (title='$title_insert')";
    // $result = mysqli_query($conn, $sql);
    // while($row = mysqli_fetch_assoc($result){
    //     $id_title=$row['id_title'];
    // }

    // $sql3="INSERT INTO lib_books VALUES(NULL,'$id_author','$id_title')";
    
    header('location:books.php');
?>