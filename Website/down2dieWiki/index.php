<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Add stylesheet --> 
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/accordion.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/responsive.css">

    <!-- Add Google font Oxanium --> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- Title --> 
    <title>Aedion Studio</title>

    <link rel="icon" href="./image/down2dieIcon.png">
    <?php include('./php/connect.php'); ?>
</head>
<body>

    <!-- Topbar orangje background --> 
    <div class="topBar boxShadow"></div>

    <!-- Main container div -->
    <div class="container" id="app">

        <!-- Header -->
        <header class="header bgLightBlack boxShadow">

            <!-- Logo of Down 2 Die-->
            <img src="./image/down2dieIcon.png" class="logo">

            <!-- AedionStudio Down2Die div -->
            <div class="d2dHeadText bgLightBlack">
                <p class="firstHeaderText bgLightBlack">{{ text.headerTxt }}</p>
                <h1 class="secondHeaderText bgLightBlack">{{ text.headerDown2DieTxt }}</h1>
            </div>

            <!-- Buttons -->
            <div class="buttonsDiv">
                <div class="btnPurchase">
                    <a href="https://store.steampowered.com/app/1272280/Down2Die/" target="_blank">
                        <p class="headerBtnTxt pointer transparant">{{ text.headerPurchaseTxt }}</p>
                    </a>
                </div>
                <div class="btnContact">
                    <a href="../index.html">
                        <p class="headerBtnTxt pointer transparant">{{ text.headerContactTxt }}</p>
                    </a>
                </div>
            </div>
        </header>

    <!-- Whitespace -->
    <div class="gap"></div>
        
        <!-- recipes header div -->
        <div class="newSubject">
            <p class="headerText bgLightBlack">{{ text.recipesTxt }}</p>
        </div>
    
    <!-- Whitespace -->
    <div class="gap"></div>

        <!-- Section of accordion RECIPES wiki -->
        <section>
            <div class="w100">
                <!-- Accordion Div full -->
                <div class="accordionDiv">
                    <!-- Accordion item div -->
                    <div class="accordionHeader" v-for="(accordionItem, index) in recipesItems" :key="index" :id="'question' + index">
                        <!-- A href link to id div -->
                        <a class="accordionLink" :href="'#question' + index">
                            <div class="flex bgLightBlack">
                                <h3 class="bgLightBlack">{{ accordionItem.headerText }}</h3>
                            </div>
                        </a>
                            <!-- Enable scroll items -->
                            <div class="scroll">
                                <!-- Get all items in array foreach -->
                                <div class="accordionItem transparant" v-for="item in accordionItem.items">
                                    <!-- Add row -->
                                    <div class="rowItem transparant row">
                                        <!-- Image item -->
                                        <div class="itemImg transparant">
                                            <img :src="item.image" class="imgItem">
                                        </div>
                                        <!-- Item info row -->
                                        <div class="row transparant">
                                            <!-- get item: Name, id, row in a column -->
                                            <div class="column transparant">
                                                <div class="itemDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">NAME:</span> {{ item.name }}</p>
                                                </div>
                                                <div class="itemDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">ID:</span> {{ item.itemId }}</p>
                                                </div>
                                                <div class="itemDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">ROW:</span> {{ item.rows }}</p>
                                                </div>
                                            </div>
                                            <!-- get item: description in a column -->
                                            <div class="column transparant">
                                                <div class="itemDescDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">{{ text.itemDescTxt }}</span></p>
                                                </div>
                                                <div class="itemDesc">
                                                    <p class="transparant">{{ item.descr }}</p>
                                                </div>
                                            </div>
                                            <!-- get item: crafting in a column -->
                                            <div class="column transparant">
                                                <div class="itemCraftDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">{{ text.itemCraftTxt }}</span></p>
                                                </div>
                                                <div class="itemCraftRow row transparant">
                                                    <div class="itemCraft" v-for="craft in item.craft">
                                                        <img :src="craft.craftImg">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- get item: info in a column -->
                                            <div class="itemInfoDiv column transparant">
                                                <div class="itemInfoTextDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">{{ text.itemInfoTxt }}</span></p>
                                                </div>
                                                <div class="itemInfoBtn">
                                                    <p class="itemInfoBtnText transparant"><span class="transparant">{{ text.itemMoreInfoTxt }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="gap"></div>

        <!-- recipes header div -->
        <div class="newSubject">
            <p class="headerText bgLightBlack">{{ text.itemTxt }}</p>
        </div>

    <div class="gap"></div>

        <!-- Section of accordion ITEMS wiki -->
        <section>
            <div class="w100">
                <!-- Accordion Div full -->
                <div class="accordionDiv">
                    <!-- Accordion item div -->
                    <div class="accordionHeader" v-for="(itemId, index) in itemIdss" :key="index" :id="'questions' + index">
                        <!-- A href link to id div -->
                        <a class="accordionLink" :href="'#questions' + index">
                            <div class="flex bgLightBlack">
                                <h3 class="bgLightBlack">{{ itemId.headerText }}</h3>
                            </div>
                        </a>
                            <!-- Enable scroll items -->
                            <div class="scroll">
                                <!-- Get all items in array foreach -->
                                <div class="accordionItem transparant" v-for="item in itemId.items">
                                    <!-- Add row -->
                                    <div class="rowItem transparant row">
                                        <!-- Image item -->
                                        <div class="itemImg transparant">
                                            <img :src="item.image" class="imgItem">
                                        </div>
                                        <!-- Item info row -->
                                        <div class="row transparant">
                                            <!-- get item: Name, id, row in a column -->
                                            <div class="column transparant">
                                                <div class="itemDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant"></span> {{ item.name }}</p>
                                                </div>
                                                <div class="itemDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">ID:</span> {{ item.itemId }}</p>
                                                </div>
                                                <div class="itemDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">ROW:</span> {{ item.rows }}</p>
                                                </div>
                                            </div>
                                            <!-- get item: description in a column -->
                                            <div class="column transparant">
                                                <div class="itemDescDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">{{ text.itemDescTxt }}</span></p>
                                                </div>
                                                <div class="itemDesc">
                                                    <p class="transparant">{{ item.descr }}</p>
                                                </div>
                                            </div>
                                            <!-- get item: specifications in a column -->
                                            <div class="column transparant">
                                                <div class="itemCraftDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">{{ text.itemSpecTxt }}</span></p>
                                                </div>
                                                <div class="itemCraftRow row transparant">
                                                    <div class="itemCraft" v-for="craft in item.craft">
                                                        <img :src="craft.craftImg">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- get item: info in a column -->
                                            <div class="itemInfoDiv column transparant">
                                                <div class="itemInfoTextDiv">
                                                    <p class="itemInfo transparant"><span class="span transparant">{{ text.itemInfoTxt }}</span></p>
                                                </div>
                                                <div class="itemInfoBtn">
                                                    <p class="itemInfoBtnText transparant"><span class="transparant">{{ text.itemMoreInfoTxt }}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="gap"></div>

        <!-- Footer div -->
        <div class="footer">
            <div class="row bgLightBlack">
                <div class="service column bgLightBlack" v-for="footer in footerBar">
                    <p class="footerHead bgLightBlack">{{ footer.headTxt }}</p>
                    <li class="li bgLightBlack" v-for="subject in footer.subjects">{{ subject.text }}</li>
                </div>
                

                <div class="signUpDiv bgLightBlack">
                    <form class="bgLightBlack">
                            <p class="signUpTxt bgLightBlack">{{ text.signUpTxt }}</p>
                            <p class="newsLetterTxt bgLightBlack">{{ text.down2dieTxt }}</p>
                        <input type="email" placeholder="EMAIL.." class="subsEmail outline" required>
                    </form>
                </div>
            </div>
        </div>

    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>

    <?php
        // $sql = "SELECT * FROM iteminfo";
        // $result = $conn->query($sql);
        
        // if ($result->num_rows > 0) {
        //     echo "<table>";
        //     while($row = $result->fetch_assoc()) {
        //         echo '<img src="data:image/jpeg;base64,'.base64_encode($row['texture']).'" class="pumpkin"/>';
        //         echo "<tr>".
        //         "<td>".$row["id"].
        //         "</td>".$row["name"]." ".
        //         $row["description"]." ".
        //         $row["category"]." ".
        //         $row["stackSize"]." ".
        //         $row["canStack"]." ".
        //         $row["itemData"]." ".
        //         $row["pickupSound"]." ".
        //         $row["dropSound"]." ".
        //         error_reporting(0);
        //         $row['<img src="data:image/jpeg;base64", '.base64_encode($row['texture']).'/>'].
        //         "</td></tr>";
        // }
        //     echo "</table>";
        // } 
        // $conn->close();
    ?>

<br><br><br>
    <?php require('./php/itemId.php'); ?>


    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>

        <!-- Copyright div -->
        <div class="newSubject">
            <div class="row bgLightBlack">
                <p class="headerText bgLightBlack">{{ text.copyrightTxt }}</p>
                <img src="../image/AedionStudio.png" class="copyrightIcon bgLightBlack">
            </div>
        </div>

    <div class="gap"></div>
    </div>
    <script>
        var accordionLink = document.getElementsByClassName('accordionLink');
        accordionLink.onclick=function(e){
            e.preventDefault();
            // code
            return false;
        }
    </script>
    <script type="text/javascript" src="./json/recipes.json"></script>
    <script type="text/javascript" src="./json/itemId.json"></script>
    <script type="text/javascript" src="./index.js"></script>
</body>
</html>