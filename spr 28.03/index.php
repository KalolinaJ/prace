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
            $conn = new mysqli("172.16.131.125", "z_iop", "fds", "z_iop");
            return $conn;
        }
    ?>

    <div class="top">
        <?php
            $sql="SELECT autor, tytul FROM `bibl_wyp`, `bibl_autor`,`bibl_book`, `bibl_tytul`  WHERE bibl_wyp.id_user=bibl_autor.id_autor AND bibl_wyp.id_book=bibl_tytul.id_tytul LIMIT 2";
            $result=mysqli_query(connect(),$sql);
            echo('<table border="1px solid black">');
            while($row=mysqli_fetch_assoc($result) ){
                echo('<tr>');
                echo('<td>'.$row['autor'].'</td><td>'.$row['tytul'].'</td>
                <td>
                <form method="POST" action="delete.php">
                    <input type="hidden" name="id_to_delete">
                    <input type="submit" value="delete">
                </form>

                </td>');
                echo('</tr>');
            }
            echo('</table>');
        ?>
    </div>

    <div class="leftd">
        <form method="POST" action="insert.php">
            <input type="text" name="autor" placeholder="autor"></br>
            <input type="submit" name="submit" value="send">
        </form>
    </div>

    <div class="rightd">
        <?php
            $sql="SELECT * FROM `bibl_autor`";
            $result=mysqli_query(connect(),$sql);
            echo('<table border="1px solid black">');
            while($row=mysqli_fetch_assoc($result) ){
                echo('<tr>');
                echo('<td>'.$row['id_autor'].'</td><td>'.$row['autor'].'</td>');
                echo('</tr>');
            }
            echo('</table>');
        ?>
    </div>
</body>
</html>