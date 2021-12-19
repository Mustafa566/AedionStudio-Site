<?php
    require('connect.php');
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);

    $sql2 = "SELECT * FROM `iteminfo`, `itemspecs` WHERE iteminfo.id = itemspecs.specsItemID AND iteminfo.category = itemspecs.category ORDER BY iteminfo.id";
    $result2 = $conn->query($sql2);


    echo "<section>";
    echo "<div class='w100'>";
    echo "<div class='accordionDiv'>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='accordionHeader'>";
                echo "<a class='accordionLink'>";
                    echo "<div class='flex bgLightBlack'>";
                        echo "<h3 class='bgLightBlack'>". $row["categoryName"]. "</h3>";
                    echo "</div>";
                echo "</a>";
                echo "<div class='scroll'>";
                    echo "<div class='accordionItem transparant'>";

                    if ($result2->num_rows > 0) {
                        while($row2 = $result2->fetch_assoc()) {
                            echo 
                            "<div class='w100 transparant'>".
                                "<div class='rowItem transparant row'>".
                                    "<div class='itemImg transparant'>".
                                        '<img src="data:image/jpeg;base64,'.base64_encode($row2['texture']).'" class="imgItem"/>'.
                                        "<div class='row transparant'>".
                                            "<div class='column transparant'>".
                                                "<div class='itemDiv'>".
                                                    "<p class='itemInfo transparant'><span class='span transparant'></span>". $row2["name"] ."</p>".
                                                "</div>".
                                                "<div class='itemDiv'>".
                                                    "<p class='itemInfo transparant'><span class='span transparant'>ID:</span>". $row2["id"] ."</p>".
                                                "</div>".
                                                "<div class='itemDiv'>".
                                                    "<p class='itemInfo transparant'><span class='span transparant'>ROWS:</span>". $row2["category"] ."</p>".
                                                "</div>".
                                            "</div>".
                                            "<div class='column transparant'>".
                                                "<div class='itemDescDiv'>".
                                                    "<p class='itemInfo transparant'><span class='span transparant'>ITEM DESCRIPTION:</span></p>".
                                                "</div>".
                                                "<div class='itemDesc'>".
                                                    "<p class='transparant'>". $row2["description"] ."</p>".
                                                "</div>".
                                            "</div>".
                                            "<div class='column transparant'>".
                                                "<div class='itemCraftDiv'>".
                                                    "<p class='itemInfo transparant'><span class='span transparant'>ITEM SPECIFICATION:</span></p>".
                                                "</div>".
                                                "<div class='itemCraftRow row transparant'>".
                                                    "<div class='itemCraft'>".
                                                        '<img src="data:image/jpeg;base64,'.base64_encode($row2['boxOne']).'"/>'.
                                                    "</div>".
                                                    "<div class='itemCraft'>".
                                                        '<img src="data:image/jpeg;base64,'.base64_encode($row2['boxTwo']).'"/>'.
                                                    "</div>".
                                                    "<div class='itemCraft'>".
                                                        '<img src="data:image/jpeg;base64,'.base64_encode($row2['boxThree']).'"/>'.
                                                    "</div>".
                                                    "<div class='itemCraft'>".
                                                        '<img src="data:image/jpeg;base64,'.base64_encode($row2['boxFour']).'"/>'.
                                                    "</div>".
                                                    "<div class='itemCraft'>".
                                                        '<img src="data:image/jpeg;base64,'.base64_encode($row2['boxFive']).'"/>'.
                                                    "</div>".
                                                    "<div class='itemCraft'>".
                                                        '<img src="data:image/jpeg;base64,'.base64_encode($row2['boxSix']).'"/>'.
                                                    "</div>".
                                                "</div>".
                                            "</div>".
                                            "<div class='itemInfoDiv column transparant'>".
                                                "<div class='itemInfoTextDiv'>".
                                                    "<p class='itemInfo transparant'><span class='span transparant'>ITEM INFO:</span></p>".
                                                "</div>".
                                                "<div class='itemInfoBtn'>".
                                                    "<p class='itemInfoBtnText transparant'><span class='transparant'>MORE INFO:</span></p>".
                                                "</div>".
                                            "</div>".
                                        "</div>".
                                    "</div>".
                                "</div>".
                            "</div>";
                        }
                    } else {
                        echo "0 results";
                    }

                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    echo "</div>";
    echo "</div>";
    echo "</section>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>