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
               ?>
        </div>
       
        <?php
            require('connect.php');

            $sql = "SELECT * FROM lib_users";
            $result = mysqli_query($conn, $sql);
                echo('<table border="1px solid black">');
                while($row=mysqli_fetch_assoc($result)){
                    echo('<tr>');
                    echo('<td>
                            <form action="logging.php" method="POST">
                                <input type="text" name="login_user" placeholder="login">
                                <input type="password" name="password" placeholder="password">
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="delete_users.php">
                                <input type="text" name="deleteId" hidden value="'.$row['id_user'].'">
                                <input type="submit" value="delete">
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="update_users.php">
                                 <select name="login">');
                                    $sql = "SELECT * FROM lib_users";
                                    $result = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_assoc($result)){
                                    
                                    echo('<option value="'.$row['id_user'].'">'.$row['login'].'</option>');
                                 };
                                 echo('
                                 </select> 
                                <input type="text" name="update" hidden value="'.$row['id_checkout'].'">
                                <input type="submit" value="submit">
                            </form>
                        </td>');
                    echo('</tr>');
                }
                echo('</table>');        
    
        ?>

    </div>

    <div class="centerLower">
    
        <img src="Text Dividers-02.png" class="dol">
    
    </div>
</body>