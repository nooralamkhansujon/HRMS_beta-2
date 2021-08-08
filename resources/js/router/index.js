import {createRouter,createWebHistory} from 'vue-router';
import DashBoard  from '../pages/DashBoard';
import AddEmployee  from '../pages/employee/AddEmployee.vue';
import ViewEmployee  from '../pages/employee/ViewEmployee.vue';

import Login from '../pages/auth/Login.vue';
import Register from '../pages/auth/Register.vue';

import UserApi from '../api/User';

const routes  = [
    {
        path:"/dashboard",
        component:DashBoard,
        name:"Dashboard",
        meta:{requiresAuth:true},
    },
    {
        path:"/employee/list",
        component:ViewEmployee,
        name:"ViewEmployee",
        meta:{requiresAuth:true},
    },
    {
        path:"/employee/add",
        component:AddEmployee,
        name:"AddEmployee",
        meta:{requiresAuth:true},
        // beforeEnter: (to, from, next) => {
        //     if(to.meta.requiresAuth == true && localStorage.getItem('auth')){
        //         next();
        //     }
        //     else{
        //         next({name:"login"})
        //     }
        // }
    },
    {
        path:"/login",
        component:Login,
        name:"login",
        meta:{guestOnly:true}
    },
    //sing up route
    {
        path:"/signup",
        component:Register,
        name:"signup",
        meta:{guestOnly:true}
    },
    {
        path:"/",
        redirect:{name:"login"}
    },


];
function isLoggedIn(){
    return !!localStorage.getItem('token');
}

const router = createRouter({
    routes,
    history:createWebHistory()
});


router.beforeEach((to, from, next) => {
    console.log(to.matched);
    if (to.matched.some(record => record.meta.requiresAuth)) {
      // this route requires auth, check if logged in
      // if not, redirect to login page.
      console.log(isLoggedIn());
      if (!isLoggedIn()) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            });
      } else {
        next();
      }
    }
    else if (to.matched.some(record => record.meta.guestOnly) ){
        ///if user is already logged in and it is login page
        if (isLoggedIn()) {
            next({
                path: '/dashboard',
                query: { redirect: to.fullPath }
            });
        }
        else {
            next();
        }

    }
    else {
      next() // make sure to always call next()!
    }
  });





export default router;
