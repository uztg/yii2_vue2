<template>
  <div id="app">
    <img src="./assets/logo.png">

    <router-view
    class="view"
    keep-alive
    transition
    transition-mode="out-in">
    </router-view><!-- 添加路由根节点 -->
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
