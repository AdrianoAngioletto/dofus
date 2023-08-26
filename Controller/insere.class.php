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


try {
    
if ($blinda->execute([
    ':senha' => $senha,
    ':email' => $email,

])) {
    echo '<script> alert("dados inseridos com sucesso") </script>';
    $blinda ==null;

} else {
    echo '<script> alert("erro ao inserir") </script>';
}


} catch (PDOException $e) {

    if ($e->getCode() === '23000') {
        echo '<script>alert("Erro: Email já cadastrado.");</script>';
    } else {
        echo '<script>alert("Erro desconhecido: ' . $e->getMessage() . '");</script>';
    }
    
}







}














}













