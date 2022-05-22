<?php
//192.168.1.11:8080/libraries/controllers/getData.php
//http://localhost:8080/devtips/src/libraries/controllers/getData.php/**
/* Retourne une connexion à la DB
 * 
 * @return PDO
 */

function getPDO(): PDO
{

  $servername = 'localhost';
  $dbname = 'ulysseperret_devstip';
  $user =   'root'; //local ;//'175707_lpwam'; //175707_lpwam pour always data'
  $pass =  'root'; //local ;//'Devstips1234'; // pour always data'

  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass, [
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
    // mode de requête par défaut => renvoit des tableaux associatifs
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);

  return $pdo;
}
