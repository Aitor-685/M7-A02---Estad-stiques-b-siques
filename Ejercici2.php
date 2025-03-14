<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulació de Llançament d'un Dau</title>
</head>
<body>
    <h1>Simulació de Llançament d'un Dau 1000 cops</h1>
    <?php
        $resultats = array_fill(1, 6, 0);

        for ($i = 0; $i < 1000; $i++) {
            $tirada = rand(1, 6);
            $resultats[$tirada]++;
        }

        $total = array_sum($resultats);
    ?>
    <ul>
        <?php foreach ($resultats as $numero => $quantitat): ?>
            <li>El número <strong><?php echo $numero; ?></strong> ha sortit <strong><?php echo $quantitat; ?></strong> vegades (<?php echo number_format(($quantitat / $total) * 100, 2); ?>%).</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
