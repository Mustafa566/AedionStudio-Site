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
            copyrightTxt: '@AEDIONSTUDIO 2021',
        },
        showSection: false,
        toggleIcon: '+',
        accordionItems: [
            // WEAPONS list
            {
                id: 0,
                headerText: 'WEAPONS',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    },
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    },
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    },
                ]
            },

            // AMMO list
            {
                id: 1,
                headerText: 'AMMO',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'AMMO',
                        craft: '',
                        descr: ''
                    }
                ]
            },

            // DEPLOYABLES list
            {
                id: 2,
                headerText: 'DEPLOYABLES',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'DEPLOYABLES',
                        craft: '',
                        descr: ''
                    }
                ]
            },

            // MEDICAL list
            {
                id: 3,
                headerText: 'MEDICAL',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    }
                ]
            },

            // STORAGE list
            {
                id: 4,
                headerText: 'STORAGE',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    }
                ]
            },

            // TOOLS list
            {
                id: 5,
                headerText: 'TOOLS',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    }
                ]
            },

            // FARMING list
            {
                id: 6,
                headerText: 'FARMING',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    }
                ]
            },

            // WITCHERY list
            {
                id: 7,
                headerText: 'WITCHERY',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    }
                ]
            },

            // MISCELANIOUS list
            {
                id: 8,
                headerText: 'MISCELANIOUS',
                items: [
                    {
                        itemId: '1000',
                        image: '',
                        name: 'Weapon',
                        craft: '',
                        descr: ''
                    }
                ]
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
        ]
    },
    methods: {
        toggle() {
            this.showSection = !this.showSection
            if (this.toggleIcon == '-') {
                this.toggleIcon = '+';
            } else {
                this.toggleIcon = '-';
            }
        },
        getTheSelectedOne (number) {
            // then number will be the number
            console.log(number)
        }
    }
  })