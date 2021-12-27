<?php
    include('./connection.php');
    $mydate = getdate(date("U"));
    $dates = "$mydate[mday]-$mydate[month]-$mydate[year]";

    $myEmail = $_POST['email'];
    $postDate = $_POST['dates'];
    
    $sql = "INSERT INTO newsletter (email, date) VALUES (:email, :dates)";
    
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':email', $myEmail);
    $stmt->bindParam(':dates', $dates);
    $stmt->execute();

    header("Location: ../index.php");
?>