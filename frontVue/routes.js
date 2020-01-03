import Vue from 'vue';
import VueRouter from 'vue-router';
import NumberBaseball from './page/sub01/NumberBaseball';
import WebMaster from './WebMaster';


Vue.use(VueRouter);

export default new VueRouter({
  mode: 'hash',
  routes: [
    { path: '/frontVue/pages/number-baseball', component: NumberBaseball },
    { path: '/frontVue', component: WebMaster } // /game
  ],
});
