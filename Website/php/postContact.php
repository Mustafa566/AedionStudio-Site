<?php
    include('./connection.php');

    $title = $_POST['title'];
    $messages = $_POST['messages'];
    $names = $_POST['names'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO contactform (title, messages, names, gender) VALUES (:title, :messages, :names, :gender)";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute(['title' => $title, 'messages' => $messages, 'names' => $names, 'gender' => $gender]);

    header("Location: ../index.php");
?>