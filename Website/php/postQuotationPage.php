<?php
    include('./connection.php');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $insertion = $_POST['insertion'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $companyName = $_POST['companyName'];
    $zipcode = $_POST['zipcode'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $adres = $_POST['adres'];

    $services = $_POST['services'];
    $servicePackage = $_POST['servicePackage'];
    $productDescription = $_POST['productDescription'];
    $pdfExplaination = $_POST['pdfExplaination'];
    $supportPackage = $_POST['supportPackage'];
    $supportDuration = $_POST['supportDuration'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO quotation (
                firstName, 
                lastName, 
                insertion, 
                phoneNumber, 
                email, 
                gender, 
                companyName, 
                zipcode, 
                dateOfBirth, 
                adres, 
                services, 
                servicePackage, 
                productDescription, 
                pdfExplaination,
                supportPackage,
                supportDuration,
                comments
                ) 
            VALUES (
                :firstName, 
                :lastName, 
                :insertion, 
                :phoneNumber, 
                :email, 
                :gender, 
                :companyName, 
                :zipcode, 
                :dateOfBirth, 
                :adres, 
                :services, 
                :servicePackage, 
                :productDescription, 
                :pdfExplaination,
                :supportPackage,
                :supportDuration,
                :comments
                )";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'firstName' => $firstName, 
        'lastName' => $lastName, 
        'insertion' => $insertion,
        'phoneNumber' => $phoneNumber,
        'email' => $email,
        'gender' => $gender,
        'companyName' => $companyName,
        'zipcode' => $zipcode,
        'dateOfBirth' => $dateOfBirth,
        'adres' => $adres,
        'services' => $services,
        'servicePackage' => $servicePackage,
        'productDescription' => $productDescription,
        'pdfExplaination' => $pdfExplaination,
        'supportPackage' => $supportPackage,
        'supportDuration' => $supportDuration,
        'comments' => $comments
    ]);

    header("Location: ../index.php");
?>