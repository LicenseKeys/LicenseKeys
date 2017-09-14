require('./bootstrap')
import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios'

Vue.use(Vuex)
Vue.use(Axios)
// API Settings
const URL = '/api'
const APIU = '/user'
const store = new Vuex.Store({
    state: {
        userProfile: [],
    },
    actions: {
        LOAD_USER_DATA: function ({ commit }){
            axios.get(URL + APIU).then((response) => {
                commit('SET_USER_DATA', { user: response.data })
            }, (err) => {
                console.log(err)
            })
        },
    },
    mutations: {
       SET_USER_DATA: (state, { user }) => {
        state.userProfile = user
       },
       UPDATE_FNAME: ( state, payload ) => {
        state.userProfile.fname = payload
       },
       UPDATE_LNAME: ( state, payload ) => {
        state.userProfile.lname = payload
       },
       UPDATE_EMAIL: ( state, payload ) => {
        state.userProfile.email = payload
       },
       UPDATE_USERNAME: ( state, payload ) => {
        state.userProfile.username = payload
       }
    },
    getters: {
        fname( state ){
            return state.userProfile.fname
        },
        lname( state ){
            return state.userProfile.lname
        },
        username( state ){
            return state.userProfile.username
        },
        email( state ){
            return state.userProfile.email
        }
    },
    modules: {

    }
})

export default store