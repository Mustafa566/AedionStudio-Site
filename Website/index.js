var app = new Vue({
    el: '#app',
    data: {
        text: {
            headerTxt: 'We are',
            headerAedionTxt: 'AEDIONSTUDIO',
            headerCareerTxt: 'CAREERS',
            headerContactTxt: 'CONTACT',
            ourTeamTxt: 'OUR TEAM',
            ourGamesTxt: 'OUR GAMES',
            socialMediaTxt: 'SOCIAL MEDIA',
            contactFormTxt: 'CONTACT FORM',
            signUpTxt: 'SIGN-UP FOR OUR',
            newsletterTxt: 'NEWS LETTER',
            copyrightTxt: '@AEDIONSTUDIO 2021'
        },
        teamProfiles: [
            { image: './image/profile/joey.png', name: 'JOEY MALTA' },
            { image: './image/profile/mustafa.png', name: 'MUSTAFA BOLAT' },
            { image: './image/profile/allesio.png', name: 'ALESSION BARBOSA' }
        ],
        down2dieCard: {
            gameLogo: './image/btnIcons/down2dieIcon.png',
            gameNameTxt: 'DOWN2DIE',
            buyGameTxt: 'BUY GAME',
            updateTxt: 'UPDATES',
            trelloTxt: 'TRELLO',
            gameInfo: `Down2Die is an advanced zombie survival game that offers many ways of replayability and customization. 
                       The game features many ways to counteract your enemies with traps and upgrades. 
                       Work together with a team up to 4 survivors and level through the waves to be at your best when the "unknown" occurs.`
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
        formData: {
            title: '',
            name: '',
            email: '',
            body: ''
        },
        show: true
    },
    methods: {
        formSend() {
            console.log(this.formData);
        }
    }
  })