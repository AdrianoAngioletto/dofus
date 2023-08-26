<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dofus Kamas</title>
    <link rel="stylesheet" href="../test/View/style.css">
</head>

<body>


<div class="menu-login">

<form action="" method="post"/>

<label> &nbsp;  Email: </label>
<input type="email" required name="email" value="digite email"/> 

<label> &nbsp; Senha:</label>
<input type="password" required name="senha"  />

<br>
<input type="submit" name="submit" value="login"/>

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



    
</body>
</html>