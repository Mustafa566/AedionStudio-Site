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
    $subjects = $_POST['subjects'];
    $dateOptions = $_POST['dateOptions'];
    $subjectDescription = $_POST['subjectDescription'];
    $pdfExplaination = $_POST['pdfExplaination'];
    //$pdfFile = fopen($_FILES[pdfFile][tmp_name], 'rb');
    $employee = $_POST['employee'];
    $comments = $_POST['comments'];


    if($employee == "1") {
        $employee = "Joey Malta";
    } else {
        $employee = "Mustafa Bolat";
    }

    $sql = "INSERT INTO customercontact (
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
                subjects, 
                dateOptions, 
                subjectDescription, 
                pdfExplaination,
                employee,
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
                :subjects, 
                :dateOptions, 
                :subjectDescription, 
                :pdfExplaination,
                :employee,
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
        'subjects' => $subjects,
        'dateOptions' => $dateOptions,
        'subjectDescription' => $subjectDescription,
        'pdfExplaination' => $pdfExplaination,
        //'pdfFile' => $pdfFile, PDO::PARAM_LOB,
        'employee' => $employee,
        'comments' => $comments
    ]);

    header("Location: ../index.php");
?>