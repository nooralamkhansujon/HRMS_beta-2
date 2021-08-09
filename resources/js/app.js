require('./bootstrap');


import {createApp}  from 'vue';
import VueFeather from 'vue-feather';
import Master from './layout/Master.vue';
import router from './router/index';
import store from './store/index.js';
const app = createApp(Master);
app.component(VueFeather.name, VueFeather);
app.use(store);
app.use(router);
app.mount('#app');



// require('./core/app-menu.js');
// require('./core/app.js');
