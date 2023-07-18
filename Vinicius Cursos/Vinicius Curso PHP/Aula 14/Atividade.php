<?php
//Vinicius
    $array = [15,30,45,60,75];
    echo 'Mostrando um array normal: <br>';
    echo "Valor do primeiro item: $array[0] <br>";
    echo "Valor do segundo item: $array[1] <br>";
    echo "Valor do terceiro item: $array[2] <br>";
    echo "Valor do quarto item: $array[3] <br>";
    echo "Valor do quinto item: $array[4] <br>";
    echo "<br>";
?>
<?php
//Jefferson
    $array = ['Arroz','Feijão','Macarrão','Salada','Ovo'];
        for ($contador = 0; $contador<count($array);$contador++){
            echo "O elemento $contador: " . $array[$contador] . "<br>";
        }
?>