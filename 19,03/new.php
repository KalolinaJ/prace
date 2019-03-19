<?php
$conn = new mysqli("172.16.131.125", "janecka_k", "arolinak", "janecka_k");
function selectLimit($tableName, $kolumnSort, $sort, $LimitNumber ){
$sql = "SELECT * FROM ".$tableName." order by ".$kolumnSort." ".$sort." limit " .$LimitNumber;
echo $sql;
$result = $conn->query($sql);
?>
<table border=1>
<?php while ($row = $result-> fetch_assoc() ) : ?>

    <tr>
        <td><?php echo($row['id_pracownicy']); ?></td>
        <td><?php echo($row['imie']); ?></td>
        <td><?php echo($row['zarobki']); ?></td>
    </tr>
<?php endwhile; ?>

</table>
<?php
}

function selectColumn($tableName, $mycolumns=[]){
    print_r($mycolumns);
    echo($mycolumns[0]);
    echo($mycolumns[1]);

        require ("connect.php");

    $kolumny = '<ol><li>'.implode('</li><li>', $mycolumns.'</ol>');
    echo $kolumn_show;
    $kolumny = implode(',', $mycolumns);
    echo ("<li>wygenerowany select: "."<br>");
    $sql="Select ".$kolumny." from ".$tableName;

    echo $sql;
    $result = $conn->query($sql);

    echo("<p><table border=1>");
    echo("<tr>");
    for($i=0; $i<count($mycolumns); $i++){
        echo("<th>".$mycolumns[$i]."</th>");
    }
    while($row = $result->fetch_assoc() ) {
        echo ("<tr>");

        for($i=0; $i<count($mycolumns); $i++){
            echo("<td>".$row[$mycolumns[$i]]."</td>");
        }

        echo("</tr>");
        
    }
    echo("</table></p>");
}