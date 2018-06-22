
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueResource from 'vue-resource';
Vue.use(VueResource);

import Carousel3d from 'vue-carousel-3d';
Vue.use(Carousel3d);

import Slick from 'vue-slick';
Vue.use(Slick);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('recipes', require('./components/recipes.vue'));

const app = new Vue({
    el: '#app',
    //render: h => h(App)
});
