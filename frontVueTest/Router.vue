<template>
  <div>
    <div>
      <router-link to="/frontVue">홈</router-link>
      <router-link to="/frontVue/pages/number-baseball">넘버베이스볼</router-link>
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
  import router from './routes';
  export default {
    router,
  };
</script>

<style>

</style>
