<div id="vue-app" class="lobby-container">
  <div @click="cancelSearch" v-if="searchKey || countrySelected || grapesSelected" class="cancel">
    <h5>Annuler recherche</h5>
    <i class="fas fa-times"></i>
  </div>
  <ul>
    <li v-on:click="searchInput('titre')" class="titre">
      <i class="fas fa-search"></i>
      <input v-if="inputType == 'titre'" v-model="searchKey" type="search" class="search" placeholder="Entrez le titre du code...">
    </li>

    <li v-on:click="searchInput('nameLanguage');" class="nameLanguage">
      <i class="fas fa-globe-europe"></i>
      <select v-show="inputType == 'nameLanguage'" v-model="nameLanguageSelected">
        <option value="">Choisissez un language</option>
        <option v-for="categorie in validCategorie" :value="categorie.idCategorie">{{categorie.nameLanguage}}</option>
      </select>
    </li>

  </ul>

  <h1 v-if="inputType == ''" class="title">Liste des vins</h1>
  <h3 v-if="search.length == 0">Aucun résultat</h3>

  <transition-group name="item-anim" tag="div" class="list-container">
    <div v-for="code, idCode in search" :key="code.idCode" class="code-list">
      <div class="code-card">
        <div class="card-header">
          <h2>{{code.titre}}</h2>
          <i @click="removeItem(idCode)" class="fas fa-times"></i>
        </div>
        <div class="container">
          <div class="text-container">
            <div class="buttons">
              <h4>{{code.titre}}</h4>
              <h4>{{code.contentCode}}</h4>
              <h4>{{code.specifications}}</h4>
            </div>
            <p>{{code.description}}</p>
          </div>
        </div>
      </div>
    </div>
  </transition-group>
</div>