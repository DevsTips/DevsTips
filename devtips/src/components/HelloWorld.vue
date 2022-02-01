<!-- template html -->
<header>Header</header>
<template>
  <div class="hello">
    
    <h1>Premier Projet - DevsTips</h1>
  
    <h3>Page Acceuil</h3>
    <div>
      Catégories 
    </div>

   Languages
    <div id="app">
        <h1>Ma première application Vue.js !</h1>

        <p>J'ai hâte de créer des applications incroyables !</p>
    </div>
   
    <h3>Footer</h3>
    <ul>
      <li><a src="./Contact.vue" target="_blank" rel="noopener">Contact</a></li>
     </ul>
  </div>
</template>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
 
<!--Script -->
<script>
    // Vue n'est pas encore chargé donc une ReferenceError devrait être retournée
   //console.log(Vue)
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Style -->
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>