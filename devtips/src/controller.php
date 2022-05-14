<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //identifiants mysql
    $servername = "localhost";
    $dbname = "ulysseperret_devstip"
    $user = "175707_devstips";
    $password = "Devtips1234";
    
    $user = $_POST["user"]; 
    $password = $_POST["password"];

    if (!isset($name)){
      die("S'il vous plaît entrez votre nom d'utilisateur");
    }
    if (!isset($password) || !filter_var($password, FILTER_VALIDATE_PASSWORD)){
      die("S'il vous plaît entrez votre mot de passe ou il est incorrect");
    }  

    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $user, $password, $dbname);
    
    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO users (name, email) VALUES(?, ?)"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ss', $name, $email); 
    
    if($statement->execute()){
      print "Salut " . $user . "!, vous êtes connecté  ". $dbname;
    }else{
      print $mysqli->error; 
    }
  }
?>