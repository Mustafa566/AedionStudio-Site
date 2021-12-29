<?php 
    include('../php/connection.php');

    $sql = $conn->prepare("SELECT * FROM blogs WHERE id= '" . $_GET['id'] . "'");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    echo '
    <!-- Blog -->
    <div class="newSubject">
        <p class="headerText transparant">'. $result['blogTitle'] .'</p>
    </div>

    <div class="blogBodyDiv">
        <div class="blogBody">
            <p class="blogText transparant">
                '. $result['blogDescription'] .'
            </p>
        </div>
    </div>

<div class="gap"></div>

    <div class="carousel"></div>

<div class="gap"></div>

    <div class="newSubject">
        <p class="headerText transparant">SUMMARY</p>
    </div>

    <div class="summaryDiv">
        <div class="summaryBody">
            <p class="summaryText transparant">
                '. $result['blogSummary'] .'
            </p>
        </div>
    </div>
    ';
?>