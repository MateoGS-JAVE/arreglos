<?php
$numeros = [];
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}

$topTres = [];
if (isset($_POST['mostrar_mayores'])) {
    $copia = $numeros;
    rsort($copia); 
    $topTres = array_slice($copia, 0, 3); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos y Mayores</title>
</head>
<body>
    <h2>Arreglo de 50 números aleatorios:</h2>
    <p><?php echo implode(', ', $numeros); ?></p>

    <form method="POST">
        <input type="hidden" name="arreglo_serializado" value="<?php echo htmlspecialchars(serialize($numeros)); ?>">
        <button type="submit" name="mostrar_mayores">Mostrar los 3 números más grandes</button>
    </form>

    <?php if (!empty($topTres)): ?>
        <h3>Los 3 números más grandes son:</h3>
        <p><?php echo implode(', ', $topTres); ?></p>
    <?php endif; ?>
</body>
</html>