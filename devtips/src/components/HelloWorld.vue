<!-- template html -->
<header>Header</header>
<template>
  <div class="hello">
    
    <h1>Premier Projet - DevsTips A</h1>
  
    <h3>Page Acceuil</h3>
    <div>
      Catégories 
    </div>

   Languages
    <div id="app">
        <h1>Ma première application Vue.js !</h1>

        <p>J'ai hâte de créer des applications incroyables !</p>
    </div>
   
       <div id="app">
        <div class="container">
            <div class="row">
                <p class="jumbotron">
                   Login : <input type="text" v-model="user" />   Vous êtes connecté en tant que {{user}}
                </p>
                <div class="row">
                    <div class="col-3">
                        <p class="jambotron">
                            Afficher les codes
                        </p>   
                    </div>
                </div>

            </div>
        </div>
    </div>

  

    <h3>Footer</h3>
    <ul>
      <li><a src="./Contact.vue" target="_blank" rel="noopener">Contact</a></li>
     </ul>
  </div>
</template>
 
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