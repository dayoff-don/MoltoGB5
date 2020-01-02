import Vue from 'vue';
import VueRouter from 'vue-router';
import NumberBaseball from '';
import ResponseCheck from '';
import RockScissorsPaper from '';
import LottoGenerator from '';
import GameMatcher from '';

Vue.use(VueRouter);

export default new VueRouter({
  mode: 'history',
  routes: [
    { path: '/number-baseball', component: NumberBaseball },
    { path: '/response-check', component: ResponseCheck },
    { path: '/rock-scissors-paper', component: RockScissorsPaper },
    { path: '/lotto-generator', component: LottoGenerator },
    { path: '/game/:name', component: GameMatcher } // /game
  ],
});
