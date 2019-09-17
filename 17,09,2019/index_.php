<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">taki sobie header here</div>
        <div class="sidebar">taki sobie sidebar here
        
            <form action="insert_.php" method="POST">

                <span class="in">marka: </span><br>
                <input type="text" name="marka">
                <p></p>
                <span class="in">zdjecie: </span><br>
                <input type="text" name="photo">
                <p></p>
                <span class="in">cena: </span><br>
                <input type="number" name="cena">
                <p></p>
                <span class="in">opis: </span><br>
                <input type="text" name="opis">
                <p></p>
                <span class="in">promocja: </span><br>
                <input type="text" name="promocja">
                <input type="submit" name="submit" value="wyslij">

            </form>

        </div>

        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        <?php

        require("card.php");

        ?>
        
        <div class="footer">footer</div>
        
    </div>
</body>
</html>