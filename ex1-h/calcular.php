<?php 
    include ("circulo_area_perimetro.php");

    $x= $_POST['x'];
    $y= $_POST['y'];
    $raio = $_POST['raio'];

    $circulo = new Circulo_area_perimetro ($x, $y, $raio);

    $area = $circulo->calcularArea();
    $perimetro = $circulo->perimetro();

    header("Location: index.php?x=$x&y=$y&area=$area&perimetro=$perimetro&raio=$raio");
?>