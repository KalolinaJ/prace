<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
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
        <div class="txt1">
            <h4>Checkouts list:</h4>
        </div>
        <div class="phpUpper">
            <?php
                require("connect.php");
                $sql="SELECT * FROM `lib_authors`, `lib_checkouts`, `lib_titles`, `lib_books`, `lib_users` WHERE lib_checkouts.id_book=lib_books.id_book AND lib_books.id_author=lib_authors.id_author AND lib_books.id_title=lib_titles.id_title AND lib_checkouts.id_user=lib_users.id_user ORDER BY date_out ASC";
                $result = mysqli_query($conn, $sql);
                echo('<table border="1px solid white">');
                while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>'.$row['name'].'
                        <form action="checkouts_update_author.php" method="POST">
                            <input type="text" name="update_author" placeholder="update author">
                            <input type="text" name="updateAuthor" hidden value="'.$row['id_author'].'">
                            <input type="submit" value="update">
                        </form>
                    </td>
                    <td>'.$row['title'].'
                        <form action="checkouts_update_title.php" method="POST">
                            <input type="text" name="update_title" placeholder="update title">
                            <input type="text" name="updateTitle" hidden value="'.$row['id_title'].'">
                            <input type="submit" value="update">
                        </form>
                    </td>
                    <td>'.$row['login'].'
                        <form method="POST" action="checkouts_update_login.php">
                            <select name="user">');
                            $sql1 = "SELECT * FROM lib_users";
                            $result1 = mysqli_query($conn, $sql1);
                            while($row1=mysqli_fetch_assoc($result1)){
                            
                            echo('<option value="'.$row1['id_user'].'">'.$row1['login'].'</option>');
                            };
                            echo('
                            </select> 
                            <input type="text" name="update_user" hidden value="'.$row['id_checkout'].'">
                            <input type="submit" value="update">
                        </form>
                    </td>
                    <td>'.$row['date_in'].'
                        <form action="checkouts_update_date_in.php" method="POST">
                            <input type="date" name="update_date_in" value="'.$row['date_in'].'">
                            <input type="text" name="updateIn" hidden value="'.$row['id_checkout'].'">
                            <input type="submit" value="update">
                        </form>
                    </td>
                    <td>'.$row['date_out'].'
                        <form action="checkouts_update_date_out.php" method="POST">
                            <input type="date" name="update_date_out" value="'.$row['date_out'].'">
                            <input type="text" name="updateOut" hidden value="'.$row['id_checkout'].'">
                            <input type="submit" value="update">
                        </form>
                    </td>');
                    echo('<td>
                            <form method="POST" action="delete.php">
                                <input type="text" name="id_to_delete" hidden value="'.$row['id_checkout'].'">
                                <input type="submit" value="delete">
                            </form>
                        </td>');
                    echo('</tr>');
                }
                echo('</table>');
            ?>
        </div>
        <div class="txt1">
            <h4>Add checkout:</h4>
        </div>
        <div class="form">
            <form method="POST" action="checkouts_insert.php">
        
                <select name="checkouts_insert_book">
                    <?php
                        require("connect.php");
                        $sql = "SELECT * FROM `lib_authors`, `lib_titles`, `lib_books` WHERE lib_books.id_author=lib_authors.id_author AND lib_books.id_title=lib_titles.id_title";
                        $result = mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_assoc($result)){
                                echo('<option value="'.$row['id_book'].'">');
                                echo($row['name'].', "'.$row['title'].'"');
                                echo('</option>');
                            }
                    ?>
                </select>
                <select name="checkouts_insert_user">
                    <?php
                        require("connect.php");
                        $sql = "SELECT * FROM lib_users";
                        $result = mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_assoc($result)){
                            echo('<option value="'.$row['id_user'].'">'.$row['login'].'</option>');
                        }
                    ?>
                </select>
                <input type="date" name="checkouts_date_in">
                <input type="date" name="checkouts_date_out">
                <input type="submit" value="submit">
            </form>
            
        </div>
    
    </div>

    <div class="centerLower">
        <div class="txt">
            <h4>You cand find titles from this authors:</h4>
        </div>
        <div class="phpLower">
            <?php
                    require("connect.php");
                    $sql="SELECT * FROM `lib_authors` LIMIT 2";
                    $result=mysqli_query($conn,$sql);
                    echo('<table border="1px solid black">');
                    while($row=mysqli_fetch_assoc($result) ){
                        echo('<tr>');
                        echo('<td>'.$row['id_author'].'</td><td>'.$row['name'].'</td>');
                        echo('</tr>');
                    }
                    echo('</table>');
            ?>
        </div>
        <img src="Text Dividers-02.png" class="dol">
    
    </div>
</body>
</html>