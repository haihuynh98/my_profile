require('./bootstrap')

window.Vue = require('vue')

window.events = new Vue()

import App from './App.vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import {routes} from './routes'

import NProgress from 'nprogress'
import 'nprogress/nprogress.css'

import VueFlashMessage from 'vue-flash-message'

require('vue-flash-message/dist/vue-flash-message.min.css')

Vue.use(VueFlashMessage, {
    messageOptions: {
        timeout: 3000,
        outerClass: "flash-wrapper",
    },
})

axios.interceptors.request.use(function(config) {
    NProgress.start()
    return config
}, function(error) {

    console.error(error)
    return Promise.reject(error)
})

axios.interceptors.response.use(function(response) {
    NProgress.done()
    return response

}, function(error) {

    console.error(error)
    return Promise.reject(error)

})

$(document).ajaxComplete(function(event, request, settings) {
    NProgress.done()
})
$(document).ajaxError(function(event, request, settings) {
    NProgress.done()
})
$(document).ajaxStart(function() {
    NProgress.start()
})

$(document).bind(function() {
    NProgress.start()
})

// $(document).onload(function() {
//     NProgress.start();
// });

$(document).ready(function() {
    NProgress.done()
})

Vue.use(VueRouter)
Vue.use(axios)

const router = new VueRouter({
    mode: 'history',
    routes: routes,
})

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
})

require('./main')
