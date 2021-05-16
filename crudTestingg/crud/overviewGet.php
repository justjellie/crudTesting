<?php 

include "./db/db.php"; 
$sql = 'SELECT * FROM overview';

$query = $conn->prepare($sql);

$query->execute();
$result = $query->fetchAll();

foreach ($result as $key => $row) {
    echo "<tr >
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['adults'] . "</td>
            <td>" . $row['children'] . "</td>
            <td><a href='overviewPut.php?id=". $row['id'] ."&name=". $row['name'] ."&email=". $row['email'] ."&adults=". $row['adults'] ."&children=". $row['children'] ."'> EDIT </a> - <a href='overviewDelete.php?id=". $row['id'] ."'> DELETE </a></td>
            
        </tr>";
        
}

?>