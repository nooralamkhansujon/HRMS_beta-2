require('./bootstrap');


import {createApp}  from 'vue';
import Master from './layout/Master.vue';
import router from './router/index';
import store from './store/index.js';
const app = createApp(Master);
app.use(store);
app.use(router);
app.mount('#app');
