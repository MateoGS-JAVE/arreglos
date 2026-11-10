<?php
$numeros = [];
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo Aleatorio</title>
</head>
<body>
    <h2>Arreglo de 50 números aleatorios:</h2>
    <p>
        <?php 
        // Imprimir en un renglón, separando los números con comas
        echo implode(', ', $numeros); 
        ?>
    </p>
</body>
</html>