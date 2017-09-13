
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap')
import Vue from 'vue'
import Router from 'vue-router'
import Vuex from 'vuex'
import store from './store'
import App from './app'
import router from './router'
import { mapState } from 'vuex'

new Vue({
    el: '#app',
    router,
    store,
    template: '<App/>',
    components: { App },
    computed: mapState(['userProfile']),
    created: function () {
        this.$store.dispatch('LOAD_USER_DATA')
    }    
});
