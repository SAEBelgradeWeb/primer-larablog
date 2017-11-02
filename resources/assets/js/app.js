
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
import DataTables from 'vue-data-tables'

Vue.use(ElementUI)
Vue.use(DataTables)

import lang from 'element-ui/lib/locale/lang/en'
import locale from 'element-ui/lib/locale'

locale.use(lang)

window.EventBus = new Vue();
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('posts', require('./components/PostsComponent.vue'));
Vue.component('post-form', require('./components/PostForm.vue'));
const app = new Vue({
    el: '#app'
});
