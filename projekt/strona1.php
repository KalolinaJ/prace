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
            <a href="strona1.php" class="button"><u>strona 1</u></a>
            <a href="strona1.php" class="button"><u>strona 2</u></a>
            <a href="strona1.php" class="button"><u>strona 3</u></a>
            <a href="strona1.php" class="button"><u>strona 4</u></a>
            <a href="strona1.php" class="button"><u>strona 5</u></a>
        </div>

    </div>

    <div class="lefter">
        <img src="Text Dividers-06.png"> 
        <?php
             require('connect.php');

             // ini_set('display_errors', 0);
        
             if(isset($_POST['login']) && isset($_POST['password'])){
                 $login = $_POST['login'];
                 $pass = $_POST['password'];
             
        
                 $sql = "SELECT * FROM lib_users WHERE login='$login' AND password='$password'";
        
                 $result = mysqli_query($conn, $sql);
        
                 $row = mysqli_fetch_assoc($result);
                 $_SESSION['rola'] = $row['rola'];
        
        
                 if(mysqli_num_rows($result) == 1){
        
                     $_SESSION['zalogowany'] = 1;
                     $_SESSION['user'] = 1;
                     header('location: index.php');
                 }
                 else{
                     echo 'zle';
                 }
             }
         ?>
            
        
        <img src="Text Dividers-06.png">
    </div>

    <div class="righter">
        <img src="Text Dividers-06.png">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sequi architecto quae porro excepturi perspiciatis pariatur. Quae ipsa libero excepturi cum debitis minima blanditiis consequuntur accusamus consequatur iusto, numquam ut dicta nemo earum amet cupiditate alias similique, corrupti repellat aliquid reprehenderit vero sint nisi soluta. Ipsum quas cupiditate culpa in. Illo necessitatibus deleniti atque esse, inventore rem laboriosam ad eum.</p>
        <img src="Text Dividers-06.png">
    </div>

    <div class="centerUpper">
        
        <?php

            require("connect.php");


        ?>
    
    </div>

    <div class="centerLower">
    
        <img src="Text Dividers-02.png" class="dol">
    
    </div>
</body>
</html>