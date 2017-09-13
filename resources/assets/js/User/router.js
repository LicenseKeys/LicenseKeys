import Vue from 'vue'
import Router from 'vue-router'
import Axios from 'axios'
import Home from './components/Home.vue'
import Services from './components/Services.vue'
import Tickets from './components/Tickets.vue'
import Invoices from './components/Invoices.vue'
import EditAccount from './components/account/Edit.vue'
Vue.use(Router)

export default new Router({
    mode: 'history',
    base: '/user',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/support',
            name: 'Support',
            component: Tickets
        },
        {
            path: '/services',
            name: 'Services',
            component: Services
        },
        {
            path: '/invoices',
            name: 'Invoices',
            component: Invoices
        },
        {
            path: '/edit',
            name: 'EditAccount',
            component: EditAccount
        }
    ]
})