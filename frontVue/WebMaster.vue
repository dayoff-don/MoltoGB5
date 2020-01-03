<template>
  <div v-if="currentGame === 'number-baseball'">
    <number-baseball></number-baseball>
  </div>
  <div v-else>일치하는 게임이 없습니다</div>
</template>

<script>
  import NumberBaseball from './page/sub01/NumberBaseball';

  export default {
    components: {
      NumberBaseball,
    },
    mounted() {
      console.log(this.$router);
      console.log(this.$route);
    },
    computed: {
      currentGame() {
        return this.$route.params.name;
      },
    },
  };
</script>
