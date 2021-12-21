var app = new Vue({
    el: '#app',
    data: {
        text: {
            personTxt: 'MUSTAFA BOLAT',
            headerAedionTxt: 'AEDIONSTUDIO',
            headerReturnTxt: 'RETURN',
            headerCvTxt: 'CURRICULIUM VITAE',
            personalBlogTxt: 'PERSONAL BLOG',
            blogSummary: 'SUMMARY',
            aboutMeTxt: 'ABOUT ME',
            workTxt: 'PREVIOUS WORK',
            socialMediaTxt: 'SOCIAL MEDIA',
            contactFormTxt: 'CONTACT MUSTAFA',
            supportBtn: 'SUPPORT',
            submitBtn: 'SUBMIT',
            servicesTxt: 'PERSONAL STORIES',
            signUpTxt: 'SIGN-UP FOR UPDATES',
            newsletterTxt: 'AEDIONSTUDIO',
            copyrightTxt: '@AEDIONSTUDIO 2021',
            service: {
                websiteTxt: 'Websites',
                modellingTxt: '3D Modeling',
                musicTxt: 'Music & Sound',
                gamesTxt: 'Games'
            },
            galleryTxt: 'GALLERY SUMMARY',
            myGallery: 'MY GALLERY',
            galleryImgTxt: 'GALLERY IMAGES'
        },
        profile: { 
                image: './image/profile/mustafa.png', 
                name: 'MUSTAFA BOLAT',
                description: `
                    The will provide you with a wide range of power-ups on a stationary location.
                    Once you have the required amount the switches will allow you to turn on
                    these Power Towers whether you need to stand your ground or even heal.
                    The will provide you with a wide range of power-ups on a stationary location.
                    Once you have the required amount the switches will allow you to turn on
                    these Power Towers whether you need to stand your ground or even heal.
                    these Power Towers whether you need to stand your ground or even heal.
                `
        },
        socialMediaBtn: [
            { 
                link: 'https://www.facebook.com/mustafa.bolat.359', 
                image: './image/socialBtn/facebookIcon.png', 
                name: 'Facebook',
                classColor: 'lineBlue' 
            },
            { 
                link: 'https://www.instagram.com/m.bolat566/', 
                image: './image/socialBtn/instagramIcon.png', 
                name: 'Instagram',
                classColor: 'linePink' 
            },
            { 
                link: 'https://twitter.com/mbolatcode', 
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
                link: 'https://www.youtube.com/channel/UCx85A9hurbacbte0MSY_dGQ', 
                image: './image/socialBtn/youtubeIcon.png', 
                name: 'Youtube',
                classColor: 'lineRed' 
            },
        ],
        contact: {
            aedionStudioEmail: 'bolat31_@hotmail.com',
            isEmpty: false,
            formData: {
                title: '',
                body: '',
                name: '',
                gender: ''
            },
        },
        blog: [
            {
                icon: '',
                title: 'BUNNY PRISON',
                backgroundImg: ''
            },
            {
                icon: '',
                title: 'HKU BACHELOR',
                backgroundImg: ''
            },
            {
                icon: '',
                title: 'STAGE FINDER',
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
    },
    methods: {
        formSend() {
            console.log(this.contact.formData);
        },
        download() {
            window.open('./image/MustafaBolatCv.pdf');
        }
    }
  })