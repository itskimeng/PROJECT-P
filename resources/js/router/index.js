import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import About from "../components/About.vue";
import Dashboard from "../components/Dashboard.vue";
import Register from "../components/Register.vue";
import LoginForm from "../components/LoginForm.vue";

// Calendar of Activities
import calendar_panel from "../components/calendar/calendar_panel.vue";
import calendar_activities from "../components/calendar/calendar_activities.vue";
import add_activity from "../components/calendar/add_activity.vue";

// GSS
import index from "../components/GeneralSupplyService/index.vue";
import create_new from "../components/GeneralSupplyService/create_new.vue";
import view_item from "../components/GeneralSupplyService/view_item.vue";
import create_pr from "../components/GeneralSupplyService/create_pr.vue";
import view_pr from "../components/GeneralSupplyService/form/pr_view_form.vue";

import axios from "axios";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/about',
        name: 'About',
        component: About
    },
    {
        path: '/calendar/calendar_panel',
        name: 'calendar_panel',
        component: calendar_panel
    },
    {
        path: '/calendar/calendar_activities',
        name: 'calendar_activities',
        component: calendar_activities
    },
    {
        path: '/calendar/add_activity',
        name: 'add_activity',
        component: add_activity
    },
    {
        path: '/GeneralSupplyService/index',
        name: 'GSS',
        component: index
    },
    {
        path: '/GeneralSupplyService/create_new',
        name: 'Create PR',
        component: create_new
    },
    {
        path: '/GeneralSupplyService/create_new/:id',
        name: 'view item',
        component: view_item
    },
    {
        path: '/GeneralSupplyService/create_pr/:id',
        name: 'create item',
        component: create_pr
    },
    {
        path: '/GeneralSupplyService/view/:id',
        name: 'view pr',
        component: view_pr
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard,
        beforeEnter:(to, form, next) => {
            axios.get('api/athenticated').then(()=>{
                next()
            }).catch(() =>{
                return next({ name: 'LoginForm'})
            })
        }
    },
    {
        path: '/register',
        name: 'Register',
        component: Register
    },
    {
        name: 'loginform',
        path: '/loginform',
        component: LoginForm
       
    }
    
    
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router