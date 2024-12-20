<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Add stylesheet --> 
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/contactPage.css">
    <link rel="stylesheet" href="../styles/quotation.css">
    <link rel="stylesheet" href="../styles/responsive/quotation.css">

    <!-- Add Google font Oxanium --> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@800&display=swap" rel="stylesheet">

    <!-- Vue js import-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- Title --> 
    <title>Quostation</title>

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
                <!-- <p class="firstHeaderText transparant">{{ text.headerTxt }}</p> -->
                <h1 class="contactText transparant">QUOTATION</h1>
            </div>

            <!-- Buttons -->
            <div class="buttonsDiv">
                <div class="btnCareer">
                    <a href="../index.php">
                        <p class="headerBtnTxt pointer transparant">RETURN</p>
                    </a>
                </div>
                <div class="btnContact">
                    <a href="./contact.php">
                        <p class="headerBtnTxt pointer transparant">{{ text.headerContactTxt }}</p>
                    </a>
                </div>
            </div>
        </header>

    <div class="gap"></div>

        <!-- Personal info div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ quotation.headerPersonal }}</p>
        </div>
    
    <div class="gap"></div>

    <form action="../php/postQuotationPage.php" method="post" class="formContact">
        <div class="row wrap w100">
            <div class="inputDiv grow">
                <input type="text" name="firstName" :placeholder="quotation.personalInputs.firstName" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="email" :placeholder="quotation.personalInputs.email" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="lastName" :placeholder="quotation.personalInputs.lastName" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="phoneNumber" :placeholder="quotation.personalInputs.phoneNumber" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="insertion" :placeholder="quotation.personalInputs.insertion" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="gender" :placeholder="quotation.personalInputs.gender" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="companyName" :placeholder="quotation.personalInputs.companyName" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="zipcode" :placeholder="quotation.personalInputs.zipcode" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="dateOfBirth" :placeholder="quotation.personalInputs.dateOfBirth" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="adres" :placeholder="quotation.personalInputs.adres" class="contactFormInput bgWhite outline">
            </div>
        </div>

    <div class="gap"></div>

        <!-- Service of choice div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ quotation.headerChoice }}</p>
        </div>

    <div class="gap"></div>

        <div class="column wrap w100">
            <div class="w100 bgWhite">
                <select class="selectSubject outline w100" name="services" v-model="quotation.selectedService">
                    <option value="">SELECT SERVICE...</option>
                    <option v-for="option in quotation.serviceOptions" :value="option.text">{{ option.text }}</option>
                </select>
            </div>

    <div class="gap"></div>

            <div class="w100 bgWhite">
                <select class="selectSubject outline" name="servicePackage" v-model="quotation.selectedPackage">
                    <option value="">SELECT PACKAGE...</option>
                    <option v-for="option in quotation.packageOptions" :value="option.text">{{ option.text }}</option>
                </select>
            </div>
        </div>
    
    <div class="gap"></div>

        <div class="w100 bgWhite">
            <textarea rows="10" placeholder="PRODUCT DESCRIPTION..." name="productDescription" v-model="quotation.productDescr" class="subjectDescr outline"></textarea>
        </div>

        <div class="row wrap w100">
            <div class="pdfDiv bgWhite">
                <input type="text" placeholder="PDF Explaination..." name="pdfExplaination" class="pdfInput outline" v-model="quotation.pdfExplaination" required>
            </div>

            <input type="file" id="selectedFile" style="display: none;">
            <input type="button" value="UPLOAD PDF" onclick="document.getElementById('selectedFile').click();" class="uploadPdfButton pointer">
        </div>

    <div class="gap"></div>

        <!-- Support package div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ quotation.headerSupport }}</p>
        </div>

    <div class="gap"></div>

        <div class="column wrap w100">
            <div class="w100 bgWhite">
                <select class="selectSubject outline" name="supportPackage" v-model="quotation.selectedSupport">
                    <option value="">SELECT PACKGE...</option>
                    <option v-for="option in quotation.supportOptions" :value="option.text">{{ option.text }}</option>
                </select>
            </div>
            
    <div class="gap"></div>

            <div class="w100 bgWhite">
                <select class="selectSubject outline" name="supportDuration" v-model="quotation.selectedSupportDuration">
                    <option value="">SELECT DURATION...</option>
                    <option v-for="option in quotation.supportDurationOptions" :value="option.text">{{ option.text }}</option>
                </select>
            </div>

    <div class="gap"></div>

            <div class="w100 bgWhite">
                <textarea rows="7" placeholder="ADDITIONAL COMMENTS..." name="comments" v-model="quotation.supportComment" class="subjectDescr outline"></textarea>
            </div>
        </div>

    <div class="gap"></div>

        <!-- Pricing div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ quotation.headerPrice }}</p>
        </div>

        <div class="row wrap w100" v-for="pricing in quotation.pricing">
            <div class="textDiv grow wrap">
                <p class="pricingTitle centerVertical bgWhite">{{ pricing.name }}</p>
            </div>
            <div class="textDiv wrap">
                <p class="priceInfo centerVerAndHorizon">{{ pricing.price }}</p>
            </div>
        </div>

    <div class="gap"></div>
    
        <div class="hrLine w100 bgWhite"></div>

    <div class="gap"></div>

        <div class="row wrap w100">
            <div class="textDiv grow wrap">
                <p class="pricingTitle centerVertical bgWhite">ESTIMATE TOTAL</p>
            </div>
            <div class="textDiv wrap">
                <p class="priceInfo centerVerAndHorizon">€ 340</p>
            </div>
        </div>

    <div class="gap"></div>

        <!-- Complete div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ quotation.headerCompleteText }}</p>
        </div>

        <div class="row wrap w100">
            <h1 class="eulaText bgWhite">DOWNLOAD EULA AEDIONSTUDIO 2021.</h1>
            <input type="file" id="selectedFile" style="display: none;">
            <input type="button" value="DOWNLOAD" onclick="document.getElementById('selectedFile').click();" class="downloadButton pointer">

            <h1 class="eulaText bgWhite">I ACCEPT THE TERMS OF CONDITION.</h1>
            <input type="submit" value="DOWNLOAD" class="submitBtnForm pointer" @click="test()">
        </div>
        <input type="submit" class="submitFormBtn submitColor" value="SUBMIT">
    </form>

    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>

    </div>
    <script src="../index.js"></script>
</body>
</html>