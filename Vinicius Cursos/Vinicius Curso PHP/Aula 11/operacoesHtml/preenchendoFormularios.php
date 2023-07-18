<?php
    $dados = [
        'nome' => 'Alfredo',
        'endereco' => 'Rua das Flores, 141',
        'bairro' => 'Bairro Novo',
        'cidade' => 'Cidade Nova',
        'cep' => '60000000'
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de preenchimento de formulário</title>
</head>
<body>
    <?php 
        
        if (isset($dados["nome"])){
            $nome = $dados["nome"];
            $endereco = $dados["endereco"];
            $bairro = $dados["bairro"];
            $cidade = $dados["cidade"];
            $cep = $dados["cep"];
        } else {
            $nome = '';
            $endereco = '';
            $bairro = '';
            $cidade = '';
            $cep = '';
        }
    ?>

    <form method='POST' action='preenchendoFormularios.php'>
        <div>
            <input type="text" name="nome" placeholder="Nome" value="<?= $nome ?>" />
        </div>
        <div>
            <input type="text" name="endereco" placeholder="Endereço" value="<?= $endereco ?>" />
        </div>
        <div>
            <input type="text" name="bairro" placeholder="Bairro" value="<?= $bairro ?>" />
        </div>
        <div>
            <input type="text" name="cidade" placeholder="Cidade" value="<?= $cidade ?>" />
        </div>
        <div>
            <input type="text" name="cep" placeholder="Cep" value="<?= $cep ?>" />
        </div>

        <input type="submit" value="Enviar"/>
    </form>

</body>
</html>