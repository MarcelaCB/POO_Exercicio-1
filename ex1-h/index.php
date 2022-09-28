<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>H)</h1>
    <form action="calcular.php" method="POST">
        <label>Centro X: <input type="number" name="x" /></label>
        <label>Centro y: <input type="number" name="y" /></label>
        <label>Raio: <input type="number" name="raio" /></label>
        <button type="submit">Calcular</button>
        <br>
        <br>
        <?php 
            if(isset($_GET['area']) && isset($_GET['perimetro']) ) {
               echo "Circulo: (".$_GET['x'].",".$_GET['y'].")</br>";
               echo "Raio: ".$_GET['raio']."<br/>";
               echo "Área: ".$_GET['area']."<br/>";
               echo "Perímetro: ".$_GET['perimetro'];
            }
        ?>
        <br>
        <br>
        <a href="../index.php">Exercicio 1: Inicio)</a>
    </form>
</body>
</html>