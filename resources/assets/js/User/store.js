require('./bootstrap')
import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios'

Vue.use(Vuex)
Vue.use(Axios)
// API Endpoints
const URL = '/api'
const APIUser = '/user'
const userUpdate = URL + APIUser + '/update'

const store = new Vuex.Store({
    state: {
        userProfile: {},
    },
    actions: {
        LOAD_USER_DATA: function ({ commit }){
            axios.get(URL + APIUser).then((response) => {
                commit('SET_USER_DATA', { user: response.data })
            }, (err) => {
                console.log(err)
            })
        },
        UPDATE_USER: function ({ dispatch, state }, {fname, lname, email, username}){
            axios.post(userUpdate, { 
                fname: fname,
                lname: lname,
                email: email,
                username: username
              }).then(function(f){
                   dispatch('LOAD_USER_DATA')
                   var div = document.getElementById('form_success');
                   div.innerHTML = 'Profile Successfully Updated'  
                   div.classList.add('alert', 'alert-success')
                   setTimeout(function(){
                       div.innerHTML = ''
                       div.classList.remove('alert', 'alert-success')
                   }, 7000);                   
              }).catch(function(response){
                let e = Object.values(response.response.data);
                for (var index in e[1]) {
                    var div = document.getElementById('error_' + index);
                    div.innerHTML = e[1][index][0];
                    setTimeout(function(){
                        div.innerHTML = '';
                    }, 5000);
                }
            });
        },
    },
    mutations: {
       SET_USER_DATA: (state, { user }) => {
        state.userProfile = user
       },
    },
    getters: {
        userProfile( state ){
            return state.userProfile
        },
    },
    modules: {

    }
})

export default store