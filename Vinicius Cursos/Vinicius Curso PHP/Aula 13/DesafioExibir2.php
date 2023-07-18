<?php
    $delimitador = ',';
    $cerca = '"';

    $registros = [];


    // Abrir arquivo para leitura
    $f = fopen('desafio.csv', 'r'); //read -> significa LER
    if ($f) { 


        // Enquanto nao terminar o arquivo
        while (!feof($f)) { // F -> FILE //  E -> END  // O -> OF  // F -> FILE / END OF FILE : FIM DO ARQUIVO

            // Ler uma linha do arquivo
            $linha = fgetcsv($f, 0, $delimitador, $cerca);
            if (!$linha) {
                continue;
            }

            // Montar registro com valores indexados pelo cabecalho
            $registros[] = [$linha[0], $linha[1], $linha[2], $linha[3]];

        }
        fclose($f);
    }    

    // Verificar ser foi submetida alguma informação

    if ( count($_POST) > 0 ) {

        $registros[] = [ $_POST['Nomecurso'], $_POST['Professor'] , $_POST['DataInicio'], $_POST['DataFim'] ];
        
        $f = fopen('desafio.csv', 'w');

        //fputcsv, array( $_POST['Nome do curso'],array( $_POST['Professor'],array( $_POST['Data de inicio'],array( $_POST['Data de término']),$delimitador
        if ($f) { 
            foreach ($registros as $registro) {
                fputcsv($f, $registro, $delimitador, $cerca);
            }
            fclose($f);
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">    
</head>
<body>
    <h1>Cursos cadastrados</h1>
    <hr/>

    <table style="border: 1px;">
        <tr>
            <th>Nome</th>
            <th>Professor</th>
            <th>Data de inicio</th>
            <th>Data de término</th>
        </tr>
        <?php foreach($registros as $registro): ?>
            <tr>

                <td> <?= $registro[0] ?> </td>
                <td> <?= $registro[1] ?> </td>
                <td> <?= $registro[2] ?> </td>
                <td> <?= $registro[3] ?> </td>
            </tr>    
                
        <?php endforeach; ?> 
    </table>
    <div class="btn-block">
        <form action="Desafio.php"> 
        <button type="submit" href="/">Cadastrar novo</button>   
        </form>
        
    </div>

</body>
</html>