<template>
 
  <div id="app"> 
    <Header />
    <VerticalMenu />
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
 
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import Header from './components/Header.vue'
import VerticalMenu from './components/VerticalMenu.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
    Header,
    VerticalMenu
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-color: #191E2A;
}
 
</style> 
