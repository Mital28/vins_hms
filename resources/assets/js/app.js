import router from './router.js'

import Layout from './helpers/layout'
import store from './store'
import newsTicker from './newsTicker.js'
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Plugin from './helpers/plugin'
window.Plugin = Plugin

const app = new Vue({
	el: 'body',
    router,
    store,
    methods : {
        onOverlayClick(){
            Layout.toggleSidebar()
        }
    }
}).$mount('#app')


Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

// document.addEventListener('contextmenu', event => event.preventDefault());