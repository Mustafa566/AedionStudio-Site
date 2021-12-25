var app = new Vue({
    el: '#app',
    data: {
        text: {
            headerTxt: 'We are',
            headerAedionTxt: 'AEDION STUDIO',
            headerCareerTxt: 'OFFERTE',
            headerContactTxt: 'CONTACT',
            ourTeamTxt: 'OUR TEAM',
            ourGamesTxt: 'OUR GAMES',
            socialMediaTxt: 'SOCIAL MEDIA',
            contactFormTxt: 'CONTACT & BLOG',
            blogTxt: 'BLOG & UPDATES',
            servicesTxt: 'OUR SERVICES',
            signUpTxt: 'SIGN-UP FOR OUR',
            newsletterTxt: 'NEWS LETTER',
            copyrightTxt: '@AEDIONSTUDIO 2021'
        },
        teamProfiles: [
            { 
                image: './image/profile/joey.png', 
                name: 'JOEY MALTA',
                function: 'CEO',
                link: '/portfolio/mustafa'
            },
            { 
                image: './image/profile/mustafa.png', 
                name: 'MUSTAFA BOLAT',
                function: 'DEVELOPER',
                link: '/portfolio/mustafa'
            },
            { 
                image: './image/profile/allesio.png', 
                name: 'ALESSIO BARBOSA',
                function: 'DEVELOPER',
                link: '/portfolio/mustafa'
            }
        ],
        socialMediaBtn: [
            { 
                link: 'https://www.facebook.com/aedionstudioofficial/', 
                image: './image/socialBtn/facebookIcon.png', 
                name: 'Facebook',
                classColor: 'lineBlue' 
            },
            { 
                link: 'https://www.instagram.com/aedionstudio/', 
                image: './image/socialBtn/instagramIcon.png', 
                name: 'Instagram',
                classColor: 'linePink' 
            },
            { 
                link: 'https://twitter.com/aedionstudio', 
                image: './image/socialBtn/twitterIcon.png', 
                name: 'Twitter',
                classColor: 'lineBabyBlue' 
            },
            { 
                link: '', 
                image: './image/socialBtn/snapchatIcon.png', 
                name: 'Snapchat',
                classColor: 'lineYellow' 
            },
            { 
                link: '', 
                image: './image/socialBtn/googleIcon.png', 
                name: 'Google+',
                classColor: 'lineBabyPurple' 
            },
            { 
                link: 'https://www.youtube.com/channel/UCj4KCUUk5mH1GM9ff2G0fSA', 
                image: './image/socialBtn/youtubeIcon.png', 
                name: 'Youtube',
                classColor: 'lineRed' 
            },
        ],
        contact: {
            aedionStudioEmail: 'aedionmailservice@gmail.com',
            isEmpty: false,
            formData: {
                title: '',
                body: '',
                name: '',
                gender: ''
            },
        },
        services: [
            {
                blogTitle: 'WEBSITES',
                serviceInfo: 'Here at AedionStudio we create the most beautiful websites at low cost',
                serviceBgImg: ''
            },
            {
                blogTitle: 'GAMES',
                serviceInfo: 'AedionStudio aims to create complexand fun game mechanics in eachgame we create.',
                serviceBgImg: ''
            },
            {
                blogTitle: 'MUSIC',
                serviceInfo: 'Here at AedionStudio we create the most beautiful music at low cost',
                serviceBgImg: ''
            },
        ],
        blog: [
            {
                icon: '',
                title: 'BUGS & GLITCHES',
                backgroundImg: ''
            },
            {
                icon: '',
                title: 'MAPS AND MODES!',
                backgroundImg: ''
            },
            {
                icon: '',
                title: 'DEBUG',
                backgroundImg: ''
            },
        ],
        footerBar: [
            { 
                headTxt: 'SERVICE', 
                subjects: [
                    {text: 'CONTACT'},
                    {text: 'ORDERS'},
                    {text: 'WARRENTY'},
                    {text: 'DELIVERY'}
                ]
            },
            { 
                headTxt: 'UNREAL', 
                subjects: [
                    {text: 'CONTACT'},
                    {text: 'MARKETPLACE'},
                    {text: 'SERVICES'}
                ]
            },
            { 
                headTxt: 'INFO', 
                subjects: [
                    {text: 'KVK'},
                    {text: 'REVIEWS'},
                    {text: 'LEGAL'}
                ]
            },
            { 
                headTxt: 'HELP', 
                subjects: [
                    {text: 'CONTACT'},
                    {text: 'SUPPORT'},
                    {text: 'EMERGENCY'}
                ]
            },
        ],
        icons: {
            steamIcon: '../image/btnIcons/steamIcon.png',
            facebookIcon: '../image/btnIcons/facebookIcon.png',
            trelloIcon: '../image/btnIcons/trelloIcon.png'
        },
        down2dieCard: {
            gameLogo: '../image/btnIcons/down2dieIcon.png',
            gameNameTxt: 'DOWN2DIE',
            buyGameTxt: 'BUY GAME',
            updateTxt: 'UPDATES',
            trelloTxt: 'TRELLO',
            gameInfo: `Down2Die is an advanced zombie survival game that offers many ways of replayability and customization. 
                       The game features many ways to counteract your enemies with traps and upgrades. 
                       Work together with a team up to 4 survivors and level through the waves to be at your best when the "unknown" occurs.`,
            steamLink: 'https://store.steampowered.com/app/1272280/Down2Die/',
            trelloLink: 'https://trello.com/b/4FKTYq5j/down2die-early-access'
        },
        images: [
            {img: './image/d2dImg.png'},
            {img: './image/guessAndTeller.png'},
        ],
        contactPage: {
            headerInfoText: 'PERSONAL INFO',
            headerSubjectText: 'SUBJECT OF MATTER',
            headerInterestText:'PERSON OF INTEREST',
            headerCompleteText: 'COMPLETE FORM',
            inputFieldNames: [
                { name: 'SURNAME', data: '' },
                { name: 'EMAIL', data: '' },
                { name: 'INSERTION', data: '' },
                { name: 'PHONE NUMBER', data: '' },
                { name: 'LASTNAME', data: '' },
                { name: 'GENDER', data: '' },
                { name: 'COMPANY NAME', data: '' },
                { name: 'ZIPCODE', data: '' },
                { name: 'DATE OF BIRTH', data: '' },
                { name: 'ADDRESS', data: '' },
            ],
            subjectOptions: [
                { text: 'Subject 1', value: '1' },
                { text: 'Subject 2', value: '2' },
                { text: 'Subject 3', value: '3' }
            ],
            selectedSubject: '',
            dateOptions: [
                { text: 'Date 1', value: '1' },
                { text: 'Date 2', value: '2' },
                { text: 'Date 3', value: '3' }
            ],
            selectedDate: '',
            subjectDescr: '',
            pdfExplain: '',
            employeeOptions: [
                { text: 'Joey Malta', value: '1' },
                { text: 'Mustafa Bolat', value: '2' }
            ],
            selectedEmployee: '',
            employeeComment: '',
        },
        quotation: {
            headerPersonal: 'PERSONAL INFO',
            headerChoice: 'SERVICE OF CHOICE',
            headerSupport: 'SUPPORT PACKAGE',
            headerPrice: 'ESTIMATE PRICING',
            headerCompleteText: 'COMPLETE QUOTATION',
            personalInputs: [
                { placeholder: 'SURNAME', data: '' },
                { placeholder: 'EMAIL', data: '' },
                { placeholder: 'INSERTION', data: '' },
                { placeholder: 'PHONE NUMBER', data: '' },
                { placeholder: 'LASTNAME', data: '' },
                { placeholder: 'GENDER', data: '' },
                { placeholder: 'COMPANY NAME', data: '' },
                { placeholder: 'ZIPCODE', data: '' },
                { placeholder: 'DATE OF BIRTH', data: '' },
                { placeholder: 'ADDRESS', data: '' },
            ],
            serviceOptions: [
                { text: 'Service 1', value: '1' },
                { text: 'Service 2', value: '2' },
                { text: 'Service 3', value: '3' }
            ],
            selectedService: '',
            packageOptions: [
                { text: 'Package 1', value: '1' },
                { text: 'Package 2', value: '2' },
                { text: 'Package 3', value: '3' }
            ],
            selectedPackage: '',
            productDescr: '',
            pdfExplaination: '',
            supportOptions: [
                { text: 'Package support 1', value: '1' },
                { text: 'Package support 2', value: '2' },
                { text: 'Package support 3', value: '3' }
            ],
            selectedSupport: '',
            supportDurationOptions: [
                { text: 'Support duration 1', value: '1' },
                { text: 'Support duration 2', value: '2' },
                { text: 'Support duration 3', value: '3' }
            ],
            selectedSupportDuration: '',
            supportComment: '',
            pricing: [
                { name: 'SERVICE...', price: '€ 350' },
                { name: 'SERVICE PACKAGE...', price: '€ 110' },
                { name: 'SUPPORT SERVICE...', price: '€ 0' },
                { name: 'SUPPORT PACKAGE...', price: '€ 0' },
            ]
        },
        num: 0,
        product: true
    },
    methods: {
        formSend() {
            console.log(this.contact.formData);
        },
        changeTxt() {
            switch (this.num) {
                case 0:
                    this.text.headerAedionTxt = 'WEB DEVELOPERS'
                    this.num = 1;
                    break;
                case 1:
                    this.text.headerAedionTxt = 'GAME DEVELOPERS'
                    this.num = 2;
                    break;
                default:
                    this.text.headerAedionTxt = 'AEDION STUDIO'
                    this.num = 0;
                    break;
            }
        },
        getProfile(profile) {
            location.href = profile.link;
        },
        test() {
            // this.quotation.personalInputs.forEach(element => {
            //     console.log(element.data);
            // });
            console.log(this.quotation);
        }
    },
    created() {
        setInterval(() => {
            this.changeTxt();
        }, 4000)
    }
  })