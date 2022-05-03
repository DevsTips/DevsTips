<?php

require_once(dirname(__DIR__) . '/config/database.php');

class Codes
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = getPdo();
    }

    public function list()
    {
        $sql = $this->pdo->query("
      SELECT * 
      FROM code
      ORDER BY idCode 
      DESC
    ");
        $sql->setFetchMode(\PDO::FETCH_ASSOC);

        return $sql;
    }
}
