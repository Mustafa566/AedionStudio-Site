<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Add stylesheet --> 
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/service.css">
        <link rel="stylesheet" href="../styles/blog.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/responsive.css">
    
    
        <!-- Add Google font Oxanium --> 
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200&display=swap" rel="stylesheet">
    
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@800&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
        <!-- Title --> 
        <title>Aedion Studio</title>
    
        <link rel="icon" href="../image/AedionStudio.png">
    </head>
<body>
    <!-- Topbar orangje background --> 
    <div class="topBar boxShadow"></div>

    <!-- Main container div -->
    <div class="container" id="app">

        <!-- Header -->
        <header class="header transparant">

            <!-- Logo of AedionStudio-->
            <img src="../image/AedionStudio.png" class="logo pointer" @click="linkHome">

            <!-- We are AedionStudio div -->
            <div class="weAreDiv transparant">
                <p class="firstHeaderText transparant">{{ text.headerTxt }}</p>
                <h1 class="secondHeaderText transparant">{{ text.headerAedionTxt }}</h1>
            </div>

            <!-- Buttons -->
            <div class="buttonsDiv">
                <div class="btnCareer">
                    <a href="../index.php">
                        <p class="headerBtnTxt pointer transparant">RETURN</p>
                    </a>
                </div>
                <div class="btnContact">
                    <a href="../down2dieSite/index.php">
                        <p class="headerBtnTxt pointer transparant">{{ text.headerContactTxt }}</p>
                    </a>
                </div>
            </div>
        </header>

    <div class="gap"></div>

        <?php include('../php/blogData.php'); ?>

    <div class="gap"></div>

        <div class="newSubject">
            <p class="headerText transparant">BUGS & GLITCHES</p>
        </div>
        
    <div class="gap"></div>

        <div class="column">
            <div class="wrap row">
                <a href="./products.php">
                    <div class="websiteService hoverService">
                        <div class="serviceBorder transparant">
                            <p class="websiteServiceTxt">Websites</p>
                        </div>
                    </div>
                </a>
                <div class="modelingService hoverService">
                    <div class="serviceBorder transparant">
                        <p class="modelingServiceTxt">3D Modeling</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="musicService hoverService">
                    <div class="serviceBorder transparant">
                        <p class="musicServiceTxt">Music & Sound</p>
                    </div>
                </div>
                <div class="gamesService hoverService">
                    <a href="../down2dieWiki/index.php">
                        <div class="serviceBorder transparant">
                            <p class="gamesServiceTxt">Games</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer div -->
        <div class="footer">
            <div class="row bgWhite">
                <div class="service column bgWhite" v-for="footer in footerBar">
                    <p class="footerHead bgWhite">{{ footer.headTxt }}</p>
                    <li class="li bgWhite" v-for="subject in footer.subjects">{{ subject.text }}</li>
                </div>
                
                <div class="signUpDiv bgWhite">
                    <form class="bgWhite" action="../php/postNewsLetter.php" method="post">
                        <p class="signUpTxt bgWhite">{{ text.signUpTxt }}</p>
                        <p class="newsLetterTxt bgWhite">{{ text.newsletterTxt }}</p>
                        <div class="row">
                            <input type="email" name="email" placeholder="EMAIL.." class="subsEmail outline" required>
                            <input type="submit" class="subscrBtn" id="subscrBtn" value="SUBMIT" style="display: none;">
                            <img src="../image/arrow.png" onclick="document.getElementById('subscrBtn').click();" class="emailArrow pointer">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <!-- Copyright div -->
        <div class="copyRightDiv">
            <div class="row bgWhite">
                <p class="headerText bgWhite">{{ text.copyrightTxt }}</p>
                <img src="../image/AedionStudio.png" class="copyrightIcon bgWhite">
            </div>
        </div>

        <div class="gap"></div>
    </div>

    <script src="../index.js"></script>
</body>
</html>