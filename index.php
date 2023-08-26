<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dofus Kamas</title>
    <link rel="stylesheet" href="../test/View/style.css">
    <link rel="shortcut icon" href="../test/View/css/backgrounds/dofus_icone.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
<style>

@media (max-width: 768px) {
    /* Área dos celulares mlk doido */

    body { 
    background: url("https://i.kym-cdn.com/photos/images/original/000/947/002/6e3.gif") 50% 70%; 
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0; 
    padding: 0; 
 }

    footer img{

    width: 75%;


    }
}



</style>
</head>

<body>

<nav  class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="../test/View/css/backgrounds/kamas.png" width="50"/>
    <a class="navbar-brand" style="font-family: brush; " href="#">Dofus Kamas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" style="font-family: brush; " aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-family: brush; " href="#">Vendedor</a>
          
        </li>
        <li class="nav-item dropdown">
          <a style="font-family: brush; " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Suporte
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" style="font-family: brush; " href="#">Contato</a></li>
            <li><a class="dropdown-item" style="font-family: brush; " href="#">Chat</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>


<div class="menu-login">

<h1> Cadastro </h1>

<form action="" method="post"/>

<label> &nbsp;  Email: </label>
<input type="email" required name="email" id="email" value="digite email"/> 

<label> &nbsp; Senha:</label>
<input type="password" required name="senha"  />

<br>
<input type="submit" name="submit" value="cadastar"/>

<p style="color: white"> Ja tem conta? faça o  <a style="color: yellow; text-decoration:" href="#login">login!</a> </p>

</div>

<?php

if(isset($_POST['submit']) && !null){
require_once("../test/Controller/insere.class.php");
require_once("../test/Model/class.database.php");

$database = new Database($host, $dbname, $user, $senha);

$insere = new Insere($database);

$insere->InsereDados();

}
?>



<footer>
<figcaption>
<img src="../test/View/css/backgrounds/cartao.png"/>
</figcaption>
<p> Desenvolvido por <a style="text-decoration: none" href="https://www.linkedin.com/in/adrianoangioletto/"> Adriano Angioletto</a> </p>



</footer>


    
</body>
</html>