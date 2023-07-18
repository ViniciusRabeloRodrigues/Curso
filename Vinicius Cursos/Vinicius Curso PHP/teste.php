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
            $endereço = $dados["endereco"];
        } else {
            $nome = '';
            $endereço = '';
        }
        ?>
        <form method= 'POST' action='preenchendoFormularios.php'>
            <div>
                    <input type="text" name="nome" placeholder="Nome" value="<?= $nome ?>" />
    </div>
    <div>
        <input type="text" name="endereco" placeholder="Endereço" value="<?= $endereço ?>" />
    </div>
    <input  type="submit" value="enviar">
    </form>
        
</body>
</html>