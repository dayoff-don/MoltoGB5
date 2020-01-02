import Vue from 'vue';
import VueRouter from 'vue-router';
import NumberBaseball from './page/sub01/NumberBaseball';


Vue.use(VueRouter);

export default new VueRouter({
  mode: 'history',
  routes: [
    { path: '/pages1/', component: NumberBaseball },
    { path: '/pages/:name', component: GameMatcher } // /game
  ],
});
