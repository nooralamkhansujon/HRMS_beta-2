import {createRouter,createWebHistory} from 'vue-router';
import DashBoard  from '../pages/DashBoard';

import Login from '../pages/auth/Login.vue';
import Register from '../pages/auth/Register.vue';


const routes  = [
  {
   path:"/dashboard",
   component:DashBoard,
   name:"Dashboard",
   meta:{auth:true},
   beforeEnter: (to, from, next) => {
      if(to.meta.auth == true && localStorage.getItem('auth')){
          next();
      }
      else{
          next({name:"login"})
      }
   }
  },
    {
        path:"/",
        redirect:{name:"login"},
        meta:{auth:false},
        beforeEnter: (to, from, next) => {
            if(to.meta.auth == false && !localStorage.getItem('auth')){
                next();
            }
            else{
                next({name:"Dashboard"})
            }
        }
    },
    {
        path:"/login",
        component:Login,
        name:"login",
        meta:{auth:false},
        beforeEnter: (to, from, next) => {
            if(to.meta.auth == false && !localStorage.getItem('auth')){
                next();
            }
            else{
                next({name:"Dashboard"})
            }
        }
    },
    //sing up route
    {
        path:"/signup",
        component:Register,
        name:"signup",
        meta:{auth:false},
        beforeEnter: (to, from, next) => {
            if(to.meta.auth == false && !localStorage.getItem('auth')){
                next();
            }
            else{
                next({name:"Dashboard"})
            }
        }
    }


];

const router = createRouter({
    routes,
    history:createWebHistory()
});



export default router;
