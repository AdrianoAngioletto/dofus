<?php

require_once("./Model/class.database.php");
require_once("./Model/conexao.php");

$database = new Database($host, $dbname, $user, $senha);

class Insere{

private $database;

public function __construct($database){

$this->database = $database;


}


public function InsereDados(){

$email = $_POST['email'];

$senha = $_POST['senha'];


$database = $this->database;

$pdo = $database->Pdo();

$sql = "INSERT INTO registros (email, senha) VALUES (:email, :senha)";

$blinda = $pdo->prepare($sql);

$blinda->bindParam(':email', $email);

$blinda->bindParam(':senha', $senha);

if($blinda->execute()){

echo '<script>  alert("conta cadastrada com sucesso") </script>';


;}else{

    echo '<script>  alert("Erro ao cadastrar") </script>';

}




}
















}