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
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/responsive.css">

    <!-- Add Google font Oxanium --> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@800&display=swap" rel="stylesheet">

    <!-- Vue js import-->
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
                <h1 class="contactText transparant">CONTACT</h1>
            </div>

            <!-- Buttons -->
            <div class="buttonsDiv">
                <div class="btnCareer">
                    <a href="./quotation.php">
                        <p class="headerBtnTxt pointer transparant">QUOTATION</p>
                    </a>
                </div>
                <div class="btnContact">
                    <a href="../index.php">
                        <p class="headerBtnTxt pointer transparant">RETURN</p>
                    </a>
                </div>
            </div>
        </header>

    <div class="gap"></div>

        <!-- Personal info div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ contactPage.headerInfoText }}</p>
        </div>
    
    <div class="gap"></div>

    <form action="../php/postContactPage.php" method="post" enctype="multipart/form-data" class="formContact">
        <div class="row wrap w100">
            <div class="inputDiv grow">
                <input type="text" name="firstName" :placeholder="contactPage.inputFieldNames.firstName" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="email" :placeholder="contactPage.inputFieldNames.email" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="lastName" :placeholder="contactPage.inputFieldNames.lastName" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="phoneNumber" :placeholder="contactPage.inputFieldNames.phoneNumber" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="insertion" :placeholder="contactPage.inputFieldNames.insertion" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="gender" :placeholder="contactPage.inputFieldNames.gender" class="contactFormInput bgWhite outline" required>
            </div>
            <div class="inputDiv grow">
                <input type="text" name="companyName" :placeholder="contactPage.inputFieldNames.companyName" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="zipcode" :placeholder="contactPage.inputFieldNames.zipcode" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="dateOfBirth" :placeholder="contactPage.inputFieldNames.dateOfBirth" class="contactFormInput bgWhite outline">
            </div>
            <div class="inputDiv grow">
                <input type="text" name="adres" :placeholder="contactPage.inputFieldNames.adres" class="contactFormInput bgWhite outline">
            </div>
        </div>

    <div class="gap"></div>
    
        <!-- Subject div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ contactPage.headerSubjectText }}</p>
        </div>

    <div class="gap"></div>

        <div class="column wrap w100">
            <div class="w100 bgWhite">
                <select class="selectSubject outline" name="subjects" v-model="contactPage.selectedSubject">
                    <option value="">SELECT SUBJECT...</option>
                    <option v-for="option in contactPage.subjectOptions" :value="option.value">{{ option.text }}</option>
                </select>
            </div>

    <div class="gap"></div>

            <div class="w100 bgWhite">
                <input type="date" name="dateOptions" v-model="contactPage.selectedDate" class="selectSubject outline">
                <!-- <select class="selectSubject outline" name="dateOptions" v-model="contactPage.selectedDate">
                    <option value="">SELECT DATE OF MATTER...</option>
                    <option v-for="option in contactPage.dateOptions" :value="option.value">{{ option.text }}</option>
                </select> -->
            </div>
        
    <div class="gap"></div>

            <div class="w100 bgWhite">
                <textarea rows="10" name="subjectDescription" placeholder="SUBJECT DESCRIPTION..." class="subjectDescr outline" v-model="contactPage.subjectDescr"></textarea>
            </div>
    
            <div class="row wrap w100">
                <div class="pdfDiv bgWhite">
                    <input type="text" name="pdfExplaination" placeholder="PDF Explaination..." class="pdfInput bgWhite outline" v-model="contactPage.pdfExplain" required>
                </div>
    
                <input type="file" name="pdfFile" id="selectedFile" style="display: none;">
                <input type="button" value="UPLOAD PDF" onclick="document.getElementById('selectedFile').click();" class="fileButton pointer">
            </div>
        </div>

    <div class="gap"></div>

        <!-- Interest div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ contactPage.headerInterestText }}</p>
        </div>

    <div class="gap"></div>

        <div class="column wrap w100">
            <div class="w100 bgWhite">
                <select class="selectSubject outline" name="employee" v-model="contactPage.selectedEmployee">
                    <option value="">SELECT EMPOYEE...</option>
                    <option v-for="option in contactPage.employeeOptions" :value="option.value">{{ option.text }}</option>
                </select>
            </div>
        </div>

    <div class="gap"></div>

        <div class="w100 bgWhite">
            <textarea rows="10" name="comments" placeholder="ADDITIONAL COMMENTS..." class="subjectDescr outline" v-model="contactPage.employeeComment"></textarea>
        </div>

    <div class="gap"></div>
    <div class="gap"></div>

        <!-- Complete form div -->
        <div class="newSubject">
            <p class="headerText transparant">{{ contactPage.headerCompleteText }}</p>
        </div>

    <div class="gap"></div>

        <div class="row wrap w100">
            <h1 class="eulaText bgWhite">DOWNLOAD EULA AEDIONSTUDIO 2021.</h1>
            <input type="file" id="selectedFile" style="display: none;">
            <input type="button" value="DOWNLOAD" onclick="document.getElementById('selectedFile').click();" class="fileButton addMargB pointer">

            <h1 class="eulaText bgWhite">I ACCEPT THE TERMS OF CONDITION.</h1>
            <input type="submit" value="DOWNLOAD" class="submitBtnForm pointer">
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