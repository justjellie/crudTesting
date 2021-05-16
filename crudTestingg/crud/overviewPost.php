<?php 

function createOrder($params) {
    include "./db/db.php"; 
    $sql = 'INSERT INTO overview (`name`, email, adults, children) VALUES (:name, :email, :adults, :children)';

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":name", $params['name']);
    $stmt->bindValue(":email", $params['email']);
    $stmt->bindValue(":adults", $params['adults']);
    $stmt->bindValue(":children", $params['children']);

    $stmt->execute();
    header('Location: http://localhost/examen/overview.php');
}

createOrder($_POST);



?>
