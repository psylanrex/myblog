
require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);

// Vue multiselect
import Multiselect from 'vue-multiselect'
Vue.component('multiselect', Multiselect);

// js for manage pages
require('./manage');

// Vue.component('example', require('./components/Example.vue'));
// var app = new Vue({
//     el: '#app',
//     data: {}
// });