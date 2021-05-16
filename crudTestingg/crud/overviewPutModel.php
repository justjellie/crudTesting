<?php 
    include "./db/db.php"; 

    $sql = 'UPDATE overview SET `name` = :name, email = :email, adults = :adults, `children` = :children WHERE (`id` = :id);';

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":name", $_POST['name']);
    $stmt->bindValue(":email", $_POST['email']);
    $stmt->bindValue(":adults", $_POST['adults']);
    $stmt->bindValue(":children", $_POST['children']);
    $stmt->bindValue(":id", $_POST['id']);

    $stmt->execute();
    
    header('Location: http://localhost/examen/overview.php');


?>
