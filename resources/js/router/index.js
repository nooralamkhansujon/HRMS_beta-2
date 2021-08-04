import {createRouter,createWebHistory} from 'vue-router';
import DashBoard  from '../pages/DashBoard';

import Login from '../pages/auth/Login.vue';
import Register from '../pages/auth/Register.vue';


const routes  = [
  {
   path:"/dashboard",
   component:DashBoard,
   name:"Dashboard"
  },
    {
        path:"/",
        redirect:{name:"login"},
    },
    {
        path:"/login",
        component:Login,
        name:"login"
    },
    //sing up route
    {
        path:"/signup",
        component:Register,
        name:"signup"
    }


];

const router = createRouter({
    routes,
    history:createWebHistory()
});

export default router;
