<<<<<<< HEAD
 
<!-- template html -->

<template>

  <div class="hello">
    
    <h1>Premier Projet - DevsTips </h1>
  
  <nav>
      <HomeLink />  
			<a href="/">Accueil | </a>
			<a href="/about">À propos | </a>
			<a href="/contact">Contact | </a>
		</nav>

    <h3>Page Acceuil</h3>
    <div id="categories-Languages">
      Catégories    
        <p>Voici les différents languages possibles</p> 
        <ul>
          <li>HTML/CSS </li> 
          <li> {{costLanguage}}</li>
          <li> C++ </li>
          <li> JAVA </li>
          <li> JAVASCRIPT </li>
          <li> JQUERY </li>
          <li> JAVASCRIPT </li>
          <li> PYTHON </li>
          <li> JQUERY </li> 
        </ul>
    </div>
    
    <div id="app">
        <h1>Ma première application Vue.js !</h1>
        <p>J'ai hâte de créer des applications incroyables !</p>
    </div>
   
       <div id="app -Commentaire">
         Laisser un commentaire
        <div class="container">
            <div class="row">
                <p class="jumbotron">
                   Login : <input type="text" v-model="user" />  
                 <!-- Vous êtes connecté en tant que {{user}}-->  
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
  <nav>
      <HomeLink />  
			<a href="/">Accueil | </a>
			<a href="/about">À propos | </a>
			<a href="/contact">Contact | </a>
		</nav>
  </div>
</template>
 
<!--Script -->
 
<script>
import HomeLink from '../components/HomeLink.vue'
 
 
   console.log("Debut")
    // Vue n'est pas encore chargé donc une ReferenceError devrait être retournée
   //console.log(Vue)
export default {
  name: 'Appli Devtips',
  props: {
    msg: String,
  },
  components: {
    HomeLink
  },
      user:  "Anonyme",//Tempo "Ulysse"
    produits: ["HTML", "CSS","C", "C++","JAVA","JAVASCRIPT","JQUERY","PYTHON"] ,
    costLanguage: "Test",
    note:"1/5",
    favoris:true,
   /**  */


   }
</script>

<!-- Style -->
=======
<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      For a guide and recipes on how to configure / customize this project,<br>
      check out the
      <a href="https://cli.vuejs.org" target="_blank" rel="noopener">vue-cli documentation</a>.
    </p>
    <h3>Installed CLI Plugins</h3>
    <ul>
      <li><a href="https://github.com/vuejs/vue-cli/tree/dev/packages/%40vue/cli-plugin-babel" target="_blank" rel="noopener">babel</a></li>
      <li><a href="https://github.com/vuejs/vue-cli/tree/dev/packages/%40vue/cli-plugin-eslint" target="_blank" rel="noopener">eslint</a></li>
    </ul>
    <h3>Essential Links</h3>
    <ul>
      <li><a href="https://vuejs.org" target="_blank" rel="noopener">Core Docs</a></li>
      <li><a href="https://forum.vuejs.org" target="_blank" rel="noopener">Forum</a></li>
      <li><a href="https://chat.vuejs.org" target="_blank" rel="noopener">Community Chat</a></li>
      <li><a href="https://twitter.com/vuejs" target="_blank" rel="noopener">Twitter</a></li>
      <li><a href="https://news.vuejs.org" target="_blank" rel="noopener">News</a></li>
    </ul>
    <h3>Ecosystem</h3>
    <ul>
      <li><a href="https://router.vuejs.org" target="_blank" rel="noopener">vue-router</a></li>
      <li><a href="https://vuex.vuejs.org" target="_blank" rel="noopener">vuex</a></li>
      <li><a href="https://github.com/vuejs/vue-devtools#vue-devtools" target="_blank" rel="noopener">vue-devtools</a></li>
      <li><a href="https://vue-loader.vuejs.org" target="_blank" rel="noopener">vue-loader</a></li>
      <li><a href="https://github.com/vuejs/awesome-vue" target="_blank" rel="noopener">awesome-vue</a></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

>>>>>>> main
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
<<<<<<< HEAD
  text-decoration: none;
  color: #42b983;
  
}
</style>
=======
  color: #42b983;
}
</style>
>>>>>>> main
