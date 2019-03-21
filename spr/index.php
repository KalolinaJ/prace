<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <?php
        function connect(){
            $conn=new mysqli ('172.16.131.125','z_ghj', 'cxz', 'z_ghj');
            return $conn;
        }
    ?>

    <div class="lewo">
    <form method="POST" action="insert.php">
        <input type="text" name="autor" placeholder="autor">
        <input type="submit" value="send">
    </form>
    </div>
    <div class="jeden">
        <div class="gora_prawo">
        <?php
            $sql="SELECT * FROM `bibl_autor` WHERE autor LIKE '%a'";
            $result=mysqli_query(connect(),$sql);
            echo('<table border=1px solid black>');
            while($row=mysqli_fetch_assoc($result) ){
                echo('<tr>');
                echo("<td>".$row['autor']."</td>");
                echo('</tr>');
            }
            echo('</table>');
        ?>
        </div>
    
        <div class="gora_lewo">
            <?php
                $sql="SELECT tytul,autor FROM `bibl_tytul`,`bibl_autor` WHERE id_tytul=id_autor";
                $result=mysqli_query(connect(),$sql);
                echo('<table border=1px solid black>');
                while($row=mysqli_fetch_assoc($result) ){
                    echo("<td>".$row['tytul']."</td><td>".$row['autor']."</td>");
                    echo('<tr>');
                    echo('</tr>');
                }
                echo('</table>');
            ?>
        </div>

        <div class="dol">
            <?php
                    $sql="SELECT * FROM `bibl_wyp`, `bibl_autor`, `bibl_tytul` WHERE id_book=id_tytul AND id_user=id_autor";
                    $result=mysqli_query(connect(),$sql);
                    echo('<table border=1px solid black>');
                    while($row=mysqli_fetch_assoc($result) ){
                        echo('<tr>');
                        echo("<td>".$row['tytul']."</td><td>".$row['autor']."</td><td>".$row['id_user']."</td><td>".$row['date_wyp']."</td><td>".$row['date_odd']."</td>");
                        echo('</tr>');
                    }
                    echo('</table>');
                ?>
        
            <button id="button">send</button>
        </div>

    </div>
    
</body>
    <script src="script.js"></script>
</html>