<?php 
include "./db.php";


    $sql = 'UPDATE `overview` SET `name` = :name, `email` = :email, `adults` = :adults, `children` = :children WHERE (`id` = :id)';

    $query = $conn->prepare($sql);
    $query->bindValue(':name', $_POST['name']);
    $query->bindValue(':email', $_POST['email']);
    $query->bindValue(':adults', $_POST['adults']);
    $query->bindValue(':children', $_POST['children']);
    $query->bindValue(':id', $_POST['id']);

    $result = $query->execute();


    header('Location: http://localhost/examentest/index.php');


?>