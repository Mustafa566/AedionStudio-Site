var app = new Vue({
    el: '#app',
    data: {
        text: {
            headerTxt: 'AEDIONSTUDIO',
            headerDown2DieTxt: 'DOWN2DIE',
            headerPurchaseTxt: 'PURCHASE',
            headerContactTxt: 'CONTACT',
            recipesTxt: 'RECIPES',
            signUpTxt: 'SIGN-UP FOR OUR UPDATES',
            down2dieTxt: 'DOWN2DIE',
            copyrightTxt: '@AEDIONSTUDIO 2021'
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
    
  })