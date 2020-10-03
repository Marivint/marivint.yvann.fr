/**
* Import required file
*/
require('./bootstrap');
require('./cursor.js');
// require('@fortawesome/fontawesome-free/js/all.js');
// require('simple-parallax-js');

/**
* Import VueJs
*/
window.Vue = require('vue');
Vue.mixin(require('./mixins/asset.js')); // Import VueJs Mixins
/**
 * Import VueJs components
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 */ 
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/** 
 * Main vue app
 */
const app = new Vue({
    el: '#app',
});
