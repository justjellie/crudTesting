<?php 
include "./db.php";


    $sql = 'DELETE FROM `overview` WHERE (`id` = :id)';

    $query = $conn->prepare($sql);
    $query->bindValue(':id', $_GET['id']);

    $query->execute();

    header('Location: http://localhost/examentest/index.php');


?>