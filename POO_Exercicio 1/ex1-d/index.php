<?php 
    include ("circulo_igual.php");
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
    <h1>D)</h1>

    <?php 
        $c1 = new Circulo_igual(10, 2, 100);
        $c2 = new Circulo_igual(10, 2, 100);
         
        echo "É Igual: ".$c1->comparaCirculo($c2);
    ?>
    <br>
    <br>
    <a href="../index.php">Exercicio 1: Inicio)</a>
</body>
</html>