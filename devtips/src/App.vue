<template>
 
  <div id="app"> 
    <Header />
    <VerticalMenu />
    <HomeLink />
    <Card />
    <Card />
    <Card />
    <Card />
    <Footer />
  </div>
 
</template>

<script>
import Header from './components/Header.vue'
import VerticalMenu from './components/VerticalMenu.vue'
import Card from './components/Card.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    VerticalMenu,
    Card,
    Footer
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #FFFFFF;
  background: #191E2A;
}
 
</style> 
