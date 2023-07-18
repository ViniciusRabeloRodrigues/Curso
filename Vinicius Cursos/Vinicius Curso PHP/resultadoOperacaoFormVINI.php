<!DOCTYPE html>
<html>
<head>
    <title> Documento teste - FORM </title>
</head>
<body> <body bgcolor="SILVER">
<?php

$metodo = $_SERVER['REQUEST_METHOD'];

    if ($metodo=="GET"){

    $nome = $_GET['nome'];
    $endereco = $_GET['endereÇo'];
} 
    else  {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
}

?>

<h1> Resultado do Form ! </h1>

<h2> <?= $metodo ?> </h2>

<h3>Nome: <?= $metodo ?> </h3>
<h3>Endereço: <?= $metodo ?> </h3>
<h3>Bairro <?= $_POST["bairro"] ?> </h3>
<h3>Cidade: <?= $_POST["cidade"]?> </h3>
<h3>Estado <?= $_POST["estado"] ?> </h3>
<h3>Cep: <?= $_POST["cep"] ?> </h3>

        <table>
    <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Bairro</th>
        <th>Estado</th>
        <th>Cep</th>
    </tr>
        
        <tr>
            <td> <?= $nome ?> </td> <br>
            <td> <?= $endereco ?> </td> 
            <td> <?= $_POST["bairro"] ?> </td>
            <td> <?= $_POST["cidade"] ?> </td>
            <td> <?= $_POST["estado"] ?> </td>
            <td> <?= $_POST["cep"] ?> </td>
            <tr>
        <table>
    </body>
</html>