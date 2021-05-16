<?php 
    include "./db/db.php"; 

    $sql = 'DELETE FROM `overview` WHERE (`id` = :id);';

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":id", $_GET['id']);

    $stmt->execute();
    
    header('Location: http://localhost/examen/overview.php');


?>
