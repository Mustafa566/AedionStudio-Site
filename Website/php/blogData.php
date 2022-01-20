<?php 
    include('../php/connection.php');

    $sql = "SELECT * FROM blogs WHERE id= '" . $_GET['id'] . "'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

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
    </div>';

if ($result["image"] != null) {
    echo '<div class="gap"></div>
        <div class="carousel">
            <ul class="slides">
        ';
        if ($result["image"] != null) {
            echo '
            <input type="radio" name="radio-buttons" id="img-1" checked/>
            <li class="slide-container">
                <div class="slide-image">
                    <img src="data:image/;base64,'.base64_encode($result["image"]).'"/>
                </div>
                <div class="carousel-controls">
                    <label for="img-6" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-2" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                </div>
            </li>
            ';
        }
        if ($result["image2"] != null) {
            echo '
            <input type="radio" name="radio-buttons" id="img-2"/>
            <li class="slide-container">
                <div class="slide-image">
                    <img src="data:image/;base64,'.base64_encode($result["image2"]).'"/>
                </div>
                <div class="carousel-controls">
                    <label for="img-1" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-3" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                </div>
            </li>
            ';
        }
        if ($result["image3"] != null) {
            echo '
            <input type="radio" name="radio-buttons" id="img-3"/>
            <li class="slide-container">
                <div class="slide-image">
                    <img src="data:image/;base64,'.base64_encode($result["image3"]).'"/>
                </div>
                <div class="carousel-controls">
                    <label for="img-2" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-4" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                </div>
            </li>
            ';
        }
        if ($result["image4"] != null) {
            echo '
            <input type="radio" name="radio-buttons" id="img-4"/>
            <li class="slide-container">
                <div class="slide-image">
                    <img src="data:image/;base64,'.base64_encode($result["image4"]).'"/>
                </div>
                <div class="carousel-controls">
                    <label for="img-3" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-5" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                </div>
            </li>
            ';
        }
        if ($result["image5"] != null) {
            echo '
            <input type="radio" name="radio-buttons" id="img-5"/>
            <li class="slide-container">
                <div class="slide-image">
                    <img src="data:image/;base64,'.base64_encode($result["image5"]).'"/>
                </div>
                <div class="carousel-controls">
                    <label for="img-4" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-6" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                </div>
            </li>
            ';
        }
        if ($result["image5"] != null) {
            echo '
            <input type="radio" name="radio-buttons" id="img-6"/>
            <li class="slide-container">
                <div class="slide-image">
                    <img src="data:image/;base64,'.base64_encode($result["image6"]).'"/>
                </div>
                <div class="carousel-controls">
                    <label for="img-5" class="prev-slide">
                        <span>&lsaquo;</span>
                    </label>
                    <label for="img-1" class="next-slide">
                        <span>&rsaquo;</span>
                    </label>
                </div>
            </li>
            ';
        }
        echo '<div class="carousel-dots">';
            if ($result["image"] != null) {
                echo '<label for="img-1" class="carousel-dot" id="img-dot-1"></label>';
            }
            if ($result["image2"] != null) {
                echo '<label for="img-2" class="carousel-dot" id="img-dot-2"></label>';
            }
            if ($result["image3"] != null) {
                echo '<label for="img-3" class="carousel-dot" id="img-dot-3"></label>';
            }
            if ($result["image4"] != null) {
                echo '<label for="img-4" class="carousel-dot" id="img-dot-4"></label>';
            }
            if ($result["image5"] != null) {
                echo '<label for="img-5" class="carousel-dot" id="img-dot-5"></label>';
            }
            if ($result["image6"] != null) {
                echo '<label for="img-6" class="carousel-dot" id="img-dot-6"></label>';
            }
            
            echo '
        </div>
            </ul>
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
}
?>