<?php 
include "./db.php";


function createOrder($params) {
    include "./db.php";

    $sql = 'INSERT INTO overview (`name`, `email`, `adults`, `children`) VALUES (:name, :email, :adults, :children)';

    $query = $conn->prepare($sql);
    $query->bindValue(':name', $params['name']);
    $query->bindValue(':email', $params['email']);
    $query->bindValue(':adults', $params['adults']);
    $query->bindValue(':children', $params['children']);

    $query->execute();

    header('Location: http://localhost/examentest/index.php');
}

createOrder($_POST);

?>