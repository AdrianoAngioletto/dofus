<?php


class Database{

public $host;

public $dbname;

public $user;

public $senha;


public function __construct($host, $dbname, $user, $senha){


$this->host = $host;

$this->dbname = $dbname;

$this->user = $user;

$this->senha = $senha;

}


public function Pdo(){

    $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->senha);

    return $conexao;
    
}


public function Recebe(){






}














}