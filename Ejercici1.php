<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llançament d'una moneda 1000 cops</title>
</head>
<body>
    <h1>Llançament d'una moneda 1000 cops</h1>
    <?php
        $cares = 0;
        $creus = 0;

        for ($i = 0; $i < 1000; $i++) {
            if (rand(0, 1) == 0) {
                $cares++;
            } else {
                $creus++;
            }
        }

        $total = $cares + $creus;
        $percentatge_cares = ($cares / $total) * 100;
        $percentatge_creus = ($creus / $total) * 100;

        echo "<p>Han sortit <strong>$cares</strong> cares i <strong>$creus</strong> creus.</p>";
        echo "<p>" . number_format($percentatge_cares, 2) . "% cares i " . number_format($percentatge_creus, 2) . "% creus.</p>";
    ?>
</body>
</html>
