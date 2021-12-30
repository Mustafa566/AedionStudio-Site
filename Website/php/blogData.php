<?php 
    include('../php/connection.php');

    $sql = "SELECT * FROM blogs WHERE id= '" . $_GET['id'] . "'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    $sqlGetImg = "SELECT * FROM blogimages WHERE EXISTS (SELECT 1 FROM blogs WHERE  blogs.id = '" . $_GET['id'] . "' = blogimages.blogId)";
// blogimages.blogId = blogs.id = '" . $_GET['id'] . "'
    $stmt2 = $conn->prepare($sqlGetImg);
    $stmt2->execute();
    $newResult = $stmt2->fetch(PDO::FETCH_ASSOC);

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

    <div class="carousel">
        <img src="data:image/;base64,'.base64_encode($newResult["image"]).'"/>
        <h3>'. $newResult['blogId'] .'</h3>
    </div>

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