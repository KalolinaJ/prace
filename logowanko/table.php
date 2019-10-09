<?php

    $conn = new mysqli("172.16.131.125","02_barczak","zaq1@WSX","02_barczak");
    $sql = "SELECT * FROM users, rola WHERE rola = id_rola;";
    $result = mysqli_query($conn,$sql);
    echo('<table border>');
    echo('
        <tr>
            <th>login</th>
            <th>haslo</th>
            <th>rola</th>
        </tr>
    ');
    while($row = mysqli_fetch_assoc($result)){
        
        echo('<tr>');

            echo('<td>'.$row['login'].'</td>');
            echo('<td>'.$row['haslo'].'</td>');
            echo('<td>'.$row['funkcja'].'</td>');
            echo('<td>
                <form action="delete.php" method="POST">
                    <input id="id" name="id" type="text" value='.$row['id'].'>
                    <input id="usun" type="submit" value="X">
                </form>
            ');

        echo('</tr>');

    }

    echo('</table>');

?>