<?php

/**
 * Retourne une connexion à la DB
 * 
 * @return PDO
 */

function getPDO(): PDO
{

  $servername = 'localhost';  
  $dbname = 'ulysseperret_devstip';
  $servername = 'localhost'; 
  $user = 'root';
  // cas pour alwaysdata // $user =  175707_devstips
  $pass = 'root';
    // cas pour alwaysdata //  $pass =   Devstips1234

  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass, [
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
    // mode de requête par défaut => renvoit des tableaux associatifs
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);

  return $pdo;
}
