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

        <div class="phpUpper">
            <?php

                require("connect.php");

                $sql="SELECT * FROM lib_authors";

                $result = mysqli_query($conn, $sql);
                echo('<table border="1px solid black">');
                while($row = mysqli_fetch_assoc($result)) {
                    echo('<tr>');
                    echo('<td>'.$row['id_author'].'</td><td>'.$row['name'].'</td>');
                    echo('<td>
                            <form method="POST" action="delete_authors.php">
                                <input type="text" name="idtodelete" hidden value="'.$row['id_author'].'">
                                <input type="submit" value="delete">
                            </form>
                    
                        </td>');
                    echo('</tr>');
                }
                echo('</table>');

             ?>
        </div>
        <div class="txt">
            <h4>Create new author:</h4>
        </div>
            <div class="form">
                <form method="POST" action="insert_authors.php">
                    <input type="text" name="author" placholder="author">
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>
    </div>

    <div class="centerLower">
    
        <img src="Text Dividers-02.png" class="dol">
    
    </div>
</body>
</html>