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
                $sql = "SELECT * FROM lib_titles";
                $result=mysqli_query($conn,$sql);
                echo('<table border="1px solid black">');
                while($row=mysqli_fetch_assoc($result) ){
                    echo('<tr>');
                    echo('<td>'.$row['id_title'].'</td><td>'.$row['title'].'</td>
                    <td>
                        <form action="delete_titles.php" method="POST">
                            <input type="text" name="delete" hidden value="'.$row['id_title'].'">
                            <input type="submit" value="delete">
                        </form>
                    </td>');
                    echo('</tr>');
                }
                echo('</table>');
            ?>
        </div>
        <div class="txt">
            <h4>Create new title:</h4>
        </div>
        <div class="create_title">
            <form action="insert_title.php" method="POST">
            <input type="text" name="title_insert_into" placeholder="type title">
            <input type="submit" value="submit">
        </div>
        

    </div>

    <div class="centerLower">
    
        <img src="Text Dividers-02.png" class="dol">
    
    </div>
</body>