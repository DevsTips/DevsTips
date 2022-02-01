<!-- template html -->
<header>Header</header>
<template>
  <div class="hello">
    
    <h1>Premier Projet - DevsTips </h1>
  
  <nav>
			<a href="/">Accueil</a>
			<a href="/about">À propos</a>
			<a href="/contact">Contact</a>
		</nav>
    
    <h3>Page Acceuil</h3>
    <div id="categories-Languages">
      Catégories    
        <p>Voici les différents languages possible</p> 
        <ul>
          <li>HTML/CSS  </li> 
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
                     Vous êtes connecté en tant que {{user}}
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
   console.log("Debut")
    // Vue n'est pas encore chargé donc une ReferenceError devrait être retournée
   //console.log(Vue)
export default {
  name: 'Appli Devtips',
  props: {
    msg: String,
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