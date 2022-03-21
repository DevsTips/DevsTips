<template>
  <nav>
    <ul class="nav flex-column text-left">
      <h6>CATÉGORIES</h6>
      <li class="nav-item">
        <a class="nav-link">
          <input type="checkbox" />
          CSS
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
          <input type="checkbox" />
          HTML
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
          <input type="checkbox" />
          JS
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
          <input type="checkbox" />
          Design
        </a>
      </li>
    </ul>

    <ul class="nav flex-column text-left">
      <h6>NIVEAUX</h6>
      <li class="nav-item">
        <a class="nav-link">
          <input type="checkbox" />
          Novice
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
          <input type="checkbox" />
          Intermédiaire
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link">
          <input type="checkbox" />
          Confirmé
        </a>
      </li>
    </ul>
    <button type="button" class="btn btn-light">Filtrer</button>
  </nav>
</template>

<style scoped>
nav {
  position: fixed;
  z-index: 1;
  box-shadow: 10px 5px 5px black;
  margin-top: 50px;
  background-color: #191E2A;;
}
ul {
  padding-left: 20px;
  padding-top: 20px;
}
h6 {
  padding-left: 20px;
  padding-top: 20px;
}
button {
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>
