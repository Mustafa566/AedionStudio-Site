<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Add stylesheet --> 
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/team.css">
    <link rel="stylesheet" href="./styles/products.css">
    <link rel="stylesheet" href="./styles/blog.css">
    <link rel="stylesheet" href="./styles/socialMedia.css">
    <link rel="stylesheet" href="./styles/form.css">
    <link rel="stylesheet" href="./styles/service.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/responsive/index.css">

    <!-- Vue js import-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

    <!-- Title --> 
    <title>Aedion Studio</title>

    <link rel="icon" href="./image/AedionStudio.png">
</head>
<body class="body">

    <!-- Topbar orangje background --> 
    <div class="topBar boxShadow"></div>

    <!-- Main container div -->
    <div class="container" id="app">
        <!-- <div class="gif"></div> -->
        
        <!-- Header -->
        <header class="header transparant">

            <!-- Logo of AedionStudio-->
            <img src="./image/AedionStudio.png" class="logo pointer" @click="home">

            <!-- We are AedionStudio div -->
            <div class="weAreDiv transparant">
                <p class="firstHeaderText fW400 transparant">{{ text.headerTxt }}</p>
                <h1 class="secondHeaderText transparant">{{ text.headerAedionTxt }}</h1>
            </div>

            <!-- Buttons -->
            <div class="buttonsDiv fW500">
                <div class="btnCareer">
                    <a href="./pages/quotation.php">
                        <p class="headerBtnTxt pointer transparant">{{ text.headerCareerTxt }}</p>
                    </a>
                </div>
                <div class="btnContact">
                    <a href="./pages/contact.php">
                        <p class="headerBtnTxt pointer transparant">{{ text.headerContactTxt }}</p>
                    </a>
                </div>
            </div>
        </header>

    <!-- Whitespace -->
    <div class="gap"></div>
        
        <!-- Our team div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ text.ourTeamTxt }}</p>
        </div>
    
    <!-- Whitespace -->
    <div class="gap"></div>
        
        <!-- Team -->
        <div class="profImg wrap row">
            <div class="profileImg boxShadow pointer" v-for="profile in teamProfiles" @click="getProfile(profile)">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img :src="profile.image" class="w100 h100">
                        <div class="overlay"></div>
                        <div class="overlayHr"></div>
                        <img src="./image/overlay.png" class="overlayPerson">
                        <p class="names bgWhite">{{ profile.name }}</p>
                    </div>
                </div>
            </div>

            <!-- Aedion Studio video-->
            <div class="video boxShadow">
                <iframe 
                width="100%" 
                height="100%" 
                src="https://www.youtube.com/embed/7o_BjY_FDms" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
                </iframe>
                <p class="names bgWhite">AEDION STUDIO INTRO</p>
            </div>
        </div>

        <!-- Our services -->
        <div class="ourGameHeader newSubject">
            <p class="headerText transparant">{{ text.servicesTxt }}</p>
        </div>
    
    <div class="gap"></div>

        <div class="glry column">
            <div class="wrap row">
                <a href="./pages/products.php">
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
                    <a href="./down2dieWiki/index.php">
                        <div class="serviceBorder transparant">
                            <p class="gamesServiceTxt">Games</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    <div class="gap"></div>

        <!-- Social media -->
        <div class="newSubject">
            <p class="headerText transparant">{{ text.socialMediaTxt }}</p>
        </div>

    <div class="gap"></div>

        <!-- Social media buttons -->
        <div class="social row pointer" v-for="socialMedia in socialMediaBtn">
            <a :href="socialMedia.link" target="_blank">
                <div class="socialDiv row">
                    <img :src="socialMedia.image" class="socicalIcon bgWhite">
                    <p class="socialTxt transparant">{{ socialMedia.name }}</p>
                    <div class="line" :class='socialMedia.classColor'></div>
                    <div class="lineBg" :class='socialMedia.classColor'></div>
                </div>
            </a>
        </div>
        
    <div class="gap"></div>

        <!-- Contact form -->
        <div class="newSubject">
            <p class="headerText transparant">{{ text.contactFormTxt }}</p>
        </div>
    
    <div class="gap"></div>

        <!-- Form -->
        <div class="forms row w100">
            <div class="formDiv transparant w100">
                <form action="./php/postContact.php" method="post" class="form">
                    <div class="row transparant w100">
                        <div class="formColumn bgWhite w100">
                            <input type="text" name="title" placeholder="Title" class="formInput outline" v-model="contact.formData.title" required>
                        </div>
                    </div>
                    <div class="formRow row">
                        <div class="textareaColumn bgWhite">
                            <textarea rows="9" cols="30" name="messages" placeholder="Message.." class="textarea outline" v-model="contact.formData.body" required></textarea>
                        </div>
                        <div class="column transparant">
                            <div class="formColumn">
                                <input type="text" name="names" placeholder="Name" class="formInput2 outline" v-model="contact.formData.name" required>
                            </div>
                            <div class="formColumn">
                                <input type="text" name="gender" placeholder="Gender" class="formInput2 outline" v-model="contact.formData.gender">
                            </div>
                            <div class="transparant supportColor submitBtn boxShadow">
                                <p class="submitText transparant pointer">SUPPORT</p>
                            </div>
                            <input type="submit" class="submitFormBtn submitColor" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>

            <!-- Service Div -->
            <?php include('./php/getBlog.php'); ?>
        </div>

        <!-- Footer div -->
        <div class="footer boxShadow">
            <div class="row bgWhite">
                <!-- <div class="vrLine"></div> -->
                <div class="service column bgWhite" v-for="footer in footerBar">
                    <p class="footerHead bgWhite">{{ footer.headTxt }}</p>
                    <li class="li bgWhite" v-for="subject in footer.subjects">{{ subject.text }}</li>
                </div>
                
                <div class="signUpDiv bgWhite">
                    <form class="bgWhite" action="./php/postNewsLetter.php" method="post">
                        <p class="signUpTxt bgWhite">{{ text.signUpTxt }}</p>
                        <p class="newsLetterTxt bgWhite">{{ text.newsletterTxt }}</p>
                        <div class="row">
                            <input type="email" name="email" placeholder="EMAIL.." class="subsEmail outline" required>
                            <input type="submit" class="subscrBtn" id="subscrBtn" value="SUBMIT" style="display: none;">
                            <img src="./image/arrow.png" onclick="document.getElementById('subscrBtn').click();" class="emailArrow pointer">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="gap transparant"></div>

        <!-- Copyright div -->
        <div class="copyRightDiv">
            <div class="row bgWhite">
                <p class="headerText bgWhite">{{ text.copyrightTxt }}</p>
                <img src="./image/AedionStudio.png" class="copyrightIcon bgWhite">
            </div>
        </div>

    <div class="gap"></div>

    </div>
    <script src="./index.js"></script>
</body>
</html>