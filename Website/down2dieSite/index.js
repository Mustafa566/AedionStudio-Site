var app = new Vue({
    el: '#app',
    data: {
        text: {
            headerTxt: 'AEDIONSTUDIO',
            headerDown2DieTxt: 'DOWN2DIE',
            headerPurchaseTxt: 'PURCHASE',
            headerContactTxt: 'CONTACT',
            screenShotTxt: 'SCREENSHOTS',
            aboutD2d: 'ABOUT DOWN2DIE',
            patchNotesTxt: 'PATCH NOTES',
            wikiTxt: 'DOWN2DIE WIKI',
            signUpTxt: 'SIGN-UP FOR OUR UPDATES',
            down2dieTxt: 'DOWN2DIE',
            copyrightTxt: '@AEDIONSTUDIO 2021'
        },
        gameImage: [
            { image: './image/d2d/d2dImg1.png'},
            { image: './image/d2d/d2dImg2.png'},
            { image: './image/d2d/d2dImg3.png'}
        ],
        down2dieCard: {
            gameInfo: 
            `
                The will provide you with a wide range of power-ups on
                a stationary location. Once you have the required amount
                the switches will allow you to turn on these Power Towers
                whether you need to stand your ground or even heal.
            `,
            secondGameInfo: 
            `
                The will provide you with a wide range of power-ups on
                a stationary location. Once you have the required 
                the switches will allow you to turn on these Power 
                whether you need to stand your ground or even
                will allow you to turn on these.
            `,
        },
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
        ]
    },
    methods: {
        
    }
  })