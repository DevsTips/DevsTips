<?php

require_once(dirname(__DIR__) . '/models/Wines.php');

$model = new Codes();
$sql = $model->list();

//echo $sql; //vision de voir le resultat
//var_dump(json_encode($sql->fetchAll()));//vision
echo json_decode($sql->fetchAll());
