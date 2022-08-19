import './bootstrap';

// VUE START
window.Vue = require('vue').default

Vue.component('product-add', require('./components/products/ProductAdd.vue').default)
Vue.component('product-edit', require('./components/products/ProductEdit.vue').default)

import store from './store/index.js';

const app = new Vue({
    el: '#vue-app',
    store
})

// VUE END

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
