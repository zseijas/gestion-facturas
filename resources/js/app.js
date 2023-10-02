/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import ExampleComponent from  './components/ExampleComponent'
import { createApp } from 'vue'
/* import router from './router.js'
import store from './store/index'
import utils from './helpers/utilities'
import i18n from './plugins/i18n' */
// import swal from 'sweetalert'

require('./bootstrap')

//Vue.prototype.$utils = utils

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// window.i18n = i18n

/* new Vue({
  router,
  store,
  i18n,
  swal,
}).$mount('#app') */


createApp({
  components: {
		ExampleComponent,
	}
}).mount('#app');