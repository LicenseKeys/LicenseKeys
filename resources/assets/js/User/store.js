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
        }
    },
    mutations: {
       SET_USER_DATA: (state, { user }) => {
           state.userProfile = user
       }
    },
    getters: {

    },
    modules: {

    }
})

export default store