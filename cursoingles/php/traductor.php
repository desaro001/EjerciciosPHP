<?php
    $palabraCastellano = $_GET["palabraCastellano"];
    $palabraIngles = $_GET["palabraIngles"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Curso Inglés</title>
</head>
<body>
    <h1>SUPER CURSO INGLÉS</h1>
    <?php 
    if ($palabraCastellano=="Perro" && $palabraIngles=="Dog"){
        echo("<h2>Correcto</h2>");
    } else if ($palabraCastellano=="Gato" && $palabraIngles=="Cat"){
        echo("<h2>Correcto</h2>");
    } else if ($palabraCastellano=="Patata" && $palabraIngles=="Potatoe"){
        echo("<h2>Correcto</h2>");
    } else {
        echo("<h2>Error</h2>");
    }
    ?>
</body>
</html>