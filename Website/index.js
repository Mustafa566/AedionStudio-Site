var app = new Vue({
    el: '#app',
    data: {
        text: {
            headerTxt: 'We are',
            headerAedionTxt: 'AEDION STUDIO',
            headerCareerTxt: 'CAREERS',
            headerContactTxt: 'CONTACT',
            ourTeamTxt: 'OUR TEAM',
            ourGamesTxt: 'OUR GAMES',
            socialMediaTxt: 'SOCIAL MEDIA',
            contactFormTxt: 'CONTACT FORM',
            servicesTxt: 'SERVICES',
            signUpTxt: 'SIGN-UP FOR OUR',
            newsletterTxt: 'NEWS LETTER',
            copyrightTxt: '@AEDIONSTUDIO 2021'
        },
        teamProfiles: [
            { 
                image: './image/profile/joey.png', 
                name: 'JOEY MALTA',
                function: 'CEO'
            },
            { 
                image: './image/profile/mustafa.png', 
                name: 'MUSTAFA BOLAT',
                function: 'DEVELOPER'
            },
            { 
                image: './image/profile/allesio.png', 
                name: 'ALESSIO BARBOSA',
                function: 'DEVELOPER'
            }
        ],
        down2dieCard: {
            gameLogo: './image/btnIcons/down2dieIcon.png',
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
        icons: {
            steamIcon: './image/btnIcons/steamIcon.png',
            facebookIcon: './image/btnIcons/facebookIcon.png',
            trelloIcon: './image/btnIcons/trelloIcon.png'
        },
        socialMediaBtn: [
            { 
                link: 'https://www.facebook.com/aedionstudioofficial/', 
                image: './image/socialBtn/facebookIcon.png', 
                classColor: 'lineBlue' 
            },
            { 
                link: 'https://www.instagram.com/aedionstudio/', 
                image: './image/socialBtn/instagramIcon.png', 
                classColor: 'linePink' 
            },
            { 
                link: 'https://twitter.com/aedionstudio', 
                image: './image/socialBtn/twitterIcon.png', 
                classColor: 'lineBabyBlue' 
            },
            { 
                link: '', 
                image: './image/socialBtn/snapchatIcon.png', 
                classColor: 'lineYellow' 
            },
            { 
                link: '', 
                image: './image/socialBtn/googleIcon.png', 
                classColor: 'lineBabyPurple' 
            },
            { 
                link: 'https://www.youtube.com/channel/UCj4KCUUk5mH1GM9ff2G0fSA', 
                image: './image/socialBtn/youtubeIcon.png', 
                classColor: 'lineRed' 
            },
        ],
        contact: {
            aedionStudioEmail: 'aedionmailservice@gmail.com',
            isEmpty: false,
            formData: {
                title: '',
                body: ''
            },
        },
        services: [
            {
                serviceText: 'WEBSITES',
                serviceInfo: 'Here at AedionStudio we create the most beautiful websites at low cost',
                serviceBgImg: ''
            },
            {
                serviceText: 'GAMES',
                serviceInfo: 'AedionStudio aims to create complexand fun game mechanics in eachgame we create.',
                serviceBgImg: ''
            },
            {
                serviceText: 'MUSIC',
                serviceInfo: 'Here at AedionStudio we create the most beautiful music at low cost',
                serviceBgImg: ''
            },
        ],
        footerBar: [
            { 
                headTxt: 'SERVICE', 
                subjects: [
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'}
                ]
            },
            { 
                headTxt: 'UNREAL', 
                subjects: [
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'}
                ]
            },
            { 
                headTxt: 'INFO', 
                subjects: [
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'}
                ]
            },
            { 
                headTxt: 'HELP', 
                subjects: [
                    {text: 'CONTACT'},
                    {text: 'CONTACT'},
                    {text: 'CONTACT'}
                ]
            },
        ],
        num: 0
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
        }
    },
    created() {
        setInterval(() => {
            this.changeTxt();
        }, 4000)
    }
  })