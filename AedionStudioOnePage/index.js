const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!'
        }
    },
    methods: {
        nav(refName) {
            var element = this.$refs[refName];
            var top = element.offsetTop;
      
            window.scrollTo(0, top);
        }
    }
}).mount('#app')