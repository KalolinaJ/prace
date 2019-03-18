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
}