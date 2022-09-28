<?php
    include ("circulo.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>A)</h1>
    
    <?php 
        $c1 = new Circulo();
        $c1->centroX = 10;
        $c1->centroY = 2;
        $c1->raio = 100;

        echo "Circulo: (".$c1->centroX.",".$c1->centroY.")";
        echo "<br/>Raio: ". $c1->raio;
    ?>
    <br>
    <br>
    <a href="../index.php">Exercicio 1: Inicio)</a>
</body>
</html>