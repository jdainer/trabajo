<?php
if ($_POST) {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $monto = floatval($_POST['monto']);
    $tasa_porcentaje = floatval($_POST['tasa']);
    $plazo = intval($_POST['plazo']);

    // Convertir tasa a decimal (Ej: 2% -> 0.02)
    $i = $tasa_porcentaje / 100;

    // Fórmula Cuota Fija (Método Francés)
    $numerador = $i * pow((1 + $i), $plazo);
    $denominador = pow((1 + $i), $plazo) - 1;
    $cuota_fija = $monto * ($numerador / $denominador);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Amortización</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .tabla-amortizacion thead { background-color: #084d6e; color: white; vertical-align: middle; }
        .info-cliente { font-weight: bold; margin-bottom: 15px; }
        .small-text { font-size: 0.75rem; display: block; }
    </style>
</head>
<body class="bg-light p-4">
    <div class="container bg-white p-4 shadow-sm rounded">
        <h3>Tabla de amortización</h3>
        <div class="info-cliente">
            Cédula: <?php echo $cedula; ?><br>
            Cliente: <?php echo $nombre; ?>
        </div>

        <table class="table table-bordered tabla-amortizacion text-center">
            <thead>
                <tr>
                    <th>No. Cuota</th>
                    <th>Saldo Anterior</th>
                    <th>Valor Cuota Fija</th>
                    <th>Abono Interés <span class="small-text">(Saldo anterior * tasa) / 100</span></th>
                    <th>Abono Capital <span class="small-text">(Cuota fija - abono interés)</span></th>
                    <th>Nuevo Saldo <span class="small-text">(Saldo anterior - abono capital)</span></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $saldo_anterior = $monto;
                for ($j = 1; $j <= $plazo; $j++) {
                    $abono_interes = $saldo_anterior * $i;
                    $abono_capital = $cuota_fija - $abono_interes;
                    $nuevo_saldo = $saldo_anterior - $abono_capital;
                    
                    // Ajuste para la última cuota por decimales
                    if ($j == $plazo) { $nuevo_saldo = 0; }

                    echo "<tr>
                            <td>$j</td>
                            <td>" . number_format($saldo_anterior, 2, ',', '.') . "</td>
                            <td>" . number_format($cuota_fija, 2, ',', '.') . "</td>
                            <td>" . number_format($abono_interes, 2, ',', '.') . "</td>
                            <td>" . number_format($abono_capital, 2, ',', '.') . "</td>
                            <td>" . number_format($nuevo_saldo, 2, ',', '.') . "</td>
                          </tr>";

                    $saldo_anterior = $nuevo_saldo;
                }
                ?>
            </tbody>
        </table>
        <a href="credito.php" class="btn btn-secondary">Volver</a>
    </div>
</body>
</html>