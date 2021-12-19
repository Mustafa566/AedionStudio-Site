<?php
    require('connect.php');
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);


    echo "<section>";
    echo "<div class='w100'>";
    echo "<div class='accordionDiv'>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 
            "<div class='accordionHeader'>".
                "<a class='accordionLink'>".
                    "<div class='flex bgLightBlack'>".
                        "<h3 class='bgLightBlack'>". $row["categoryName"]. "</h3>".
                    "</div>".
                "</a>".
                "<div class='scroll'>".
                    "<div class='accordionItem transparant'>".
                    
                    "</div>".
                "</div>".
            "</div>";
    }
    echo "</div>";
    echo "</div>";
    echo "</section>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>