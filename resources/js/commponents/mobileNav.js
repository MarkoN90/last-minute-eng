import Vue from 'vue';

let mobileNav = Vue.component('mobile-nav', {
    data: function () {
        return {
            count: 0
        }
    },
    template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
})

export default mobileNav;
