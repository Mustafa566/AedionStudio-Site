var app = new Vue({
    el: '#app',
    data: {
        text: {
            headerTxt: 'AEDIONSTUDIO',
            headerDown2DieTxt: 'DOWN2DIE WIKI',
            headerPurchaseTxt: 'PURCHASE',
            headerContactTxt: 'CONTACT',
            recipesTxt: 'RECIPES',
            itemTxt: "ITEM ID'S",
            signUpTxt: 'SIGN-UP FOR OUR UPDATES',
            down2dieTxt: 'DOWN2DIE',
            copyrightTxt: '@AEDIONSTUDIO 2021',
            itemDescTxt: 'ITEM DESCRIPTION:',
            itemCraftTxt: 'CRAFTING RECIPE:',
            itemSpecTxt: 'ITEM SPECIFICATION:',
            itemInfoTxt: 'ITEM INFO:',
            itemMoreInfoTxt: 'MORE INFO:',
        },
        recipesItems: [],
        itemIdss: [],
        showSection: false,
        toggleIcon: '+',
        getRecipesJson: 'http://127.0.0.1:5501/down2dieWiki/json/recipes.json',
        getItemIdJson: 'http://127.0.0.1:5501/down2dieWiki/json/itemId.json',
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
        getRecipesData() {
            axios.get(this.getRecipesJson).then(response => {
                this.recipesItems = response.data;
            }).catch((e) => {
                console.error(e);
                this.getRecipesJson = 'http://localhost/GitHub/AedionStudio-Site/Website/down2dieWiki/json/recipes.json';
                this.getRecipesData();
            })
        },
        getItemIdData() {
            axios.get(this.getItemIdJson).then(response => {
                this.itemIdss = response.data;
                console.log(this.itemIdss)
            })
            .catch((e) => {
                console.error(e);
                this.getItemIdJson = 'http://localhost/GitHub/AedionStudio-Site/Website/down2dieWiki/json/itemId.json';
                this.getItemIdData();
            })
        }
    },
    mounted() {
        window.scrollTo(0, 5000)
        this.getRecipesData();
        this.getItemIdData();
      }
  })