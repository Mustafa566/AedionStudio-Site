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
        showSection: false,
        toggleIcon: '+',
        recipesItems: [
            // WEAPONS list
            {
                id: 0,
                headerText: 'WEAPONS',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'GUNS',
                        descr: 'DFGDFGDFGDFGDFGDGDFVBNVNVBNVNB',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/gun.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/gun.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/gun.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/gun.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/gun.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/gun.png',
                            }
                        ],
                    },
                ]
            },

            // AMMO list
            {
                id: 1,
                headerText: 'AMMO',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'AMMO',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    },
                ]
            },

            // DEPLOYABLES list
            {
                id: 2,
                headerText: 'DEPLOYABLES',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'DEPLOYABLES',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    }
                ]
            },

            // MEDICAL list
            {
                id: 3,
                headerText: 'MEDICAL',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'MEDICAL',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    }
                ]
            },

            // STORAGE list
            {
                id: 4,
                headerText: 'STORAGE',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'STORAGE',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    }
                ]
            },

            // TOOLS list
            {
                id: 5,
                headerText: 'TOOLS',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'TOOLS',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    }
                ]
            },

            // FARMING list
            {
                id: 6,
                headerText: 'FARMING',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'FARMING',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    }
                ]
            },

            // WITCHERY list
            {
                id: 7,
                headerText: 'WITCHERY',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'WITCHERY',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    }
                ]
            },

            // MISCELANIOUS list
            {
                id: 8,
                headerText: 'MISCELANIOUS',
                items: [
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249',
                        itemId: '4001',
                        rows: 'MISCELANIOUS',
                        descr: '',
                        craft: [
                            {
                                craftImg: '',
                            }
                        ],
                    }
                ]
            },
        ],
        itemIds: [
            // CONSUMABLES list
            {
                id: 1,
                headerText: 'CONSUMABLES',
                items: [
                    // CONSUMABLES
                    {
                        image: './image/recipes/1001.png',
                        name: 'Pumpkin',
                        itemId: '1001',
                        rows: '1000',
                        descr: 'Pumpkins can be used for fertilizer.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/1002.png',
                        name: 'WaterBottle',
                        itemId: '1002',
                        rows: '1000',
                        descr: 'Wateriest water bottle you will ever see!',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
            // RECOURCES list
            {
                id: 2,
                headerText: 'RECOURCES',
                items: [
                    // RECOOURCES
                    {
                        image: './image/recipes/2001.png',
                        name: 'Wood',
                        itemId: '2001',
                        rows: '2000',
                        descr: 'Wood can be used to craft. It can also be used as fuel.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/2002.png',
                        name: 'Stone',
                        itemId: '2002',
                        rows: '2000',
                        descr: 'Stone can be used to craft.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/2003.png',
                        name: 'Charcoal',
                        itemId: '2003',
                        rows: '2000',
                        descr: 'Charcoal can be used to create sulfur.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/2004.png',
                        name: 'Sulfur',
                        itemId: '2004',
                        rows: '2000',
                        descr: 'Sulfur can be used to create gun powder.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/gun.png',
                        name: 'BioFuel',
                        itemId: '2005',
                        rows: '2000',
                        descr: 'Biofuel can be used to power machines.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
            // WEAPONS list
            {
                id: 3,
                headerText: 'WEAPONS',
                items: [
                    // WEAPONS
                    {
                        image: './image/recipes/3001.png',
                        name: 'M249',
                        itemId: '3001',
                        rows: '3000',
                        descr: 'Machine gun. Uses 5.56mm bullets.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
            // AMMUNITION list
            {
                id: 4,
                headerText: 'AMMUNITION',
                items: [
                    // AMMUNITION
                    {
                        image: './image/recipes/4001.png',
                        name: '5.56mm',
                        itemId: '4001',
                        rows: '4000',
                        descr: '5.56mm bullets. Used in heavy machine guns.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
            // DEPLOYABLES list
            {
                id: 5,
                headerText: 'DEPLOYABLES',
                items: [
                    // DEPLOYABLES
                    {
                        image: './image/recipes/gun.png',
                        name: 'LargeChest',
                        itemId: '5001',
                        rows: '5000',
                        descr: 'LargeChest used to store items.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/gun.png',
                        name: 'FarmBox',
                        itemId: '5002',
                        rows: '5000',
                        descr: 'Farming bitch slavery',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/gun.png',
                        name: 'Recycler',
                        itemId: '5003',
                        rows: '5000',
                        descr: 'Recycler to recycle items into components.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/gun.png',
                        name: 'Composter',
                        itemId: '5004',
                        rows: '5000',
                        descr: 'Composter ferments items into compost.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                    {
                        image: './image/recipes/5005.png',
                        name: 'WaterCatcher',
                        itemId: '5005',
                        rows: '5000',
                        descr: 'Watercatcher fills up with rain water to consume.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
            // CURRENCY list
            {
                id: 6,
                headerText: 'CURRENCY',
                items: [
                    // CURRENCY
                    {
                        image: './image/recipes/6001.png',
                        name: 'Money',
                        itemId: '6001',
                        rows: '6000',
                        descr: 'Cubits are used as currency.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
            // DESTRUCTABLES list
            {
                id: 7,
                headerText: 'DESTRUCTABLES',
                items: [
                    // DESTRUCTABLES
                    {
                        image: './image/recipes/gun.png',
                        name: 'M249_R',
                        itemId: '7001',
                        rows: '7000',
                        descr: 'Broken version of M249.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
            // FARMABLES list
            {
                id: 8,
                headerText: 'FARMABLES',
                items: [
                    // FARMABLES
                    {
                        image: './image/recipes/gun.png',
                        name: 'PumpkinSeed',
                        itemId: '8001',
                        rows: '8000',
                        descr: 'Seeds to plant in a farmbox.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
                ]
            },
             // TOOLS list
             {
                id: 9,
                headerText: 'TOOLS',
                items: [
                    // TOOLS
                    {
                        image: './image/recipes/gun.png',
                        name: 'Hammer',
                        itemId: '9001',
                        rows: '9000',
                        descr: 'Tool to pick up deployables.',
                        craft: [
                            {
                                id: 1,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 2,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 3,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 4,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 5,
                                craftImg: './image/recipes/test.png',
                            },
                            {
                                id: 6,
                                craftImg: './image/recipes/test.png',
                            }
                        ],
                    },
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
        }
    },
    mounted () {
        window.scrollTo(0, 5000)
      }
  })