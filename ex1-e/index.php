<?php 
    include ("circulo_move.php");
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
    <h1>E)</h1>

    <?php 
        $c1 = new Circulo_move(10, 2, 100);

        echo "Circulo: (".$c1->getCentroX().",".$c1->getCentroY().")</br>";

        $c1->move(40,15);

        echo "Circulo: (".$c1->getCentroX().",".$c1->getCentroY().")";
    ?>
    <br>
    <br>
    <a href="../index.php">Exercicio 1: Inicio)</a>
</body>
</html>