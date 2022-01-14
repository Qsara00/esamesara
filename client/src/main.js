import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import axios from 'axios'

import Home from '@/components/Home.vue'
import View from '@/components/View.vue'
import Create from '@/components/Create.vue'

Vue.config.productionTip = false

Vue.prototype.$axios = axios;

Vue.use(VueRouter);

const routes = [
  {
    path: '/home',
    name: 'home',
    component: Home
  },
  {
    path: '/view/:id',
    name: 'view',
    component: View
  },
  {
    path: '/edit/:id',
    name: 'edit',
    component: Create
  },
  {
    path:'',
    redirect: '/home'
  }
];

const router = new VueRouter ({
  routes,
  mode: 'history'
})

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
