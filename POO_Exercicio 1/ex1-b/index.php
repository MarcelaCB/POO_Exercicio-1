<?php 
    include ("circulo_encapsulamento.php");
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
    <h1>B)</h1>

    <?php 
        $c1 = new Circulo_encapsulamento();
        $c1->setCentroX(10);
        $c1->setCentroY(2);
        $c1->setRaio(100);
            
        echo "Circulo: (".$c1->getCentroX().",".$c1->getCentroY().")";
        echo "<br/>Raio: ". $c1->getRaio();
    ?>
    <br>
    <br>
    <a href="../index.php">Exercicio 1: Inicio)</a>
</body>
</html>