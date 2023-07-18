<?php

if(isset($_POST["nome"])){
    echo "O Nome é" .$_POST['nome'] . '<br>';
} else {
    echo 'Não foi informado ainda !';
}

if (isset($_POST["endereco"])){
    echo "O Endereco é". $_POST['endereco'];
} else {
    echo 'Não foi informado ainda';
}

?>