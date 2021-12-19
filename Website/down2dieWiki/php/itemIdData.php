<?php
    require('connect.php');
    $sql = "SELECT * FROM `iteminfo`, `itemspecs` WHERE iteminfo.id = itemspecs.specsItemID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 
            "<div class='w100 transparant'>".
                "<div class='rowItem transparant row'>".
                    "<div class='itemImg transparant'>".
                        '<img src="data:image/jpeg;base64,'.base64_encode($row['texture']).'" class="imgItem"/>'.
                        "<div class='row transparant'>".
                            "<div class='column transparant'>".
                                "<div class='itemDiv'>".
                                    "<p class='itemInfo transparant'><span class='span transparant'></span>". $row["name"] ."</p>".
                                "</div>".
                                "<div class='itemDiv'>".
                                    "<p class='itemInfo transparant'><span class='span transparant'>ID:</span>". $row["id"] ."</p>".
                                "</div>".
                                "<div class='itemDiv'>".
                                    "<p class='itemInfo transparant'><span class='span transparant'>ROWS:</span>". $row["category"] ."</p>".
                                "</div>".
                            "</div>".
                            "<div class='column transparant'>".
                                "<div class='itemDescDiv'>".
                                    "<p class='itemInfo transparant'><span class='span transparant'>ITEM DESCRIPTION:</span></p>".
                                "</div>".
                                "<div class='itemDesc'>".
                                    "<p class='transparant'>". $row["description"] ."</p>".
                                "</div>".
                            "</div>".
                            "<div class='column transparant'>".
                                "<div class='itemCraftDiv'>".
                                    "<p class='itemInfo transparant'><span class='span transparant'>ITEM SPECIFICATION:</span></p>".
                                "</div>".
                                "<div class='itemCraftRow row transparant'>".
                                    "<div class='itemCraft'>".
                                        '<img src="data:image/jpeg;base64,'.base64_encode($row['boxOne']).'"/>'.
                                    "</div>".
                                    "<div class='itemCraft'>".
                                        '<img src="data:image/jpeg;base64,'.base64_encode($row['boxTwo']).'"/>'.
                                    "</div>".
                                    "<div class='itemCraft'>".
                                        '<img src="data:image/jpeg;base64,'.base64_encode($row['boxThree']).'"/>'.
                                    "</div>".
                                    "<div class='itemCraft'>".
                                        '<img src="data:image/jpeg;base64,'.base64_encode($row['boxFour']).'"/>'.
                                    "</div>".
                                    "<div class='itemCraft'>".
                                        '<img src="data:image/jpeg;base64,'.base64_encode($row['boxFive']).'"/>'.
                                    "</div>".
                                    "<div class='itemCraft'>".
                                        '<img src="data:image/jpeg;base64,'.base64_encode($row['boxSix']).'"/>'.
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
    $conn->close();
?>