<template>
  <div>
    <div>
      <router-link to="/">홈</router-link>
      <router-link to="/pages/rock-scissors-paper">가위바위보</router-link>
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
