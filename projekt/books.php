<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_books.css">
</head>
<body>
    <div class="upper">
    
        <h1>Biblioteka</h1>
        <div class="buttons">
            <a href="books.php" class="button"><u>books</u></a>
            <a href="authors.php" class="button"><u>authors</u></a>
            <a href="titles.php" class="button"><u>titles</u></a>
            <a href="login.php" class="button"><u>login</u></a>
            <a href="index.php" class="button"><u>home</u></a>
        </div>

    </div>

    <div class="lefter">
        <img src="Text Dividers-06.png"> 
        
        <img src="pngguru.com.png" class="tea">    
        
        <img src="Text Dividers-06.png">
    </div>

    <div class="righter">
        <img src="Text Dividers-06.png">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sequi architecto quae porro excepturi perspiciatis pariatur. Quae ipsa libero excepturi cum debitis minima blanditiis consequuntur accusamus consequatur iusto, numquam ut dicta nemo earum amet cupiditate alias similique, corrupti repellat aliquid reprehenderit vero sint nisi soluta. Ipsum quas cupiditate culpa in. Illo necessitatibus deleniti atque esse, inventore rem laboriosam ad eum.</p>
        <img src="Text Dividers-06.png">
    </div>

    <div class="centerUpper">
        <div class="phpUpper">
            <?php 

                require("connect.php");


                //  $sql="UPDATE `lib_authors` SET `id_author`=[value-1],`name`=[value-2] WHERE 1";
                //  $sql="SELECT `id_checkout`,`name`,`title`, `login`, `date_in`, `date_out` FROM `lib_authors`, `lib_checkouts`, `lib_titles`, `lib_books`, `lib_users` WHERE lib_checkouts.id_book=lib_books.id_book AND lib_books.id_author=lib_authors.id_author AND lib_books.id_title=lib_titles.id_title AND lib_checkouts.id_user=lib_users.id_user ORDER BY date_out ASC";
                //  $result = mysqli_query($conn, $sql);
                //  echo('<table border="1px solid black">');
                //  while($row=mysqli_fetch_assoc($result)){
                //      echo('<tr>');
                //      echo('<td>'.$row['name'].'</td><td>'.$row['title'].'</td><td>'.$row['login'].'</td><td>'.$row['date_in'].'</td><td>'.$row['date_out'].'</td>');
                //      echo('<td>
                //              <form method="POST" action="delete.php">
                //                  <input type="text" name="id_to_delete" hidden value="'.$row['id_checkout'].'">
                //                  <input type="submit" value="delete">
                //              </form>
                //          </td>');
                //      echo('</tr>');
                //  }
                //  echo('</table>');

                $sql="SELECT * FROM `lib_authors`, `lib_titles`, `lib_books` WHERE lib_books.id_author=lib_authors.id_author AND lib_books.id_title=lib_titles.id_title";
                $result=mysqli_query($conn,$sql);
                echo('<table border="1px solid black">');
                while($row=mysqli_fetch_assoc($result) ){
                    echo('<tr>');
                    echo('<td>'.$row['id_author'].'</td><td>'.$row['name'].'</td><td>'.$row['title'].'</td>');
                    echo('<td>
                        <form method="POST" action="update.php">
                            <input type="text" name="title" placeholder="update title">
                            <input type="text" name="update" hidden value="'.$row['id_title'].'">
                            <input type="submit" value="submit">
                        </form>
                        </td>');
                    echo('<td>
                        <form method="POST" action="update_author.php">
                            <input type="text" name="name" placeholder="update name">
                            <input type="text" name="updateAuthor" hidden value="'.$row['id_author'].'">
                            <input type="submit" value="submit">
                        </form>
                        </td>
                        <td>
                            <form method="POST" action="delete_books.php">
                                <input type="text" name="idToDelete" hidden value="'.$row['id_book'].'">
                                <input type="submit" value="delete">
                            </form>
                        </td>');
                    
                    echo('</tr>');
                }
                echo('</table>');

            ?>
        </div>
        
        <div class="txt">
            <h4>Create new book:</h4>
        </div>
        <div class="form">
       
            <form action="insert_books.php" method="POST">
                <select name="author_insert">
                    <?php
                        require("connect.php");
                        $sql = "SELECT * FROM lib_authors";
                        $result = mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_assoc($result)){
                            echo('<option value="'.$row['id_author'].'">'.$row['name'].'</option>');
                        }
                    ?>
                </select>
                <select name="title_insert">
                    <?php
                        require("connect.php");
                        $sql = "SELECT * FROM lib_titles";
                        $result = mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_assoc($result)){
                            echo('<option value="'.$row['id_title'].'">'.$row['title'].'</option>');
                        }
                    ?>
                </select>
                <input type="submit" value="submit">
            </form>
        </div>

    </div>

    <div class="centerLower">
    
        <img src="Text Dividers-02.png" class="dol">
    
    </div>
</body>