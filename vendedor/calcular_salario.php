<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f4f4f4; }
        .resultado { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 400px; }
        h2 { color: #e65c2e; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .detalle { margin: 10px 0; font-size: 16px; }
        .total { font-size: 20px; font-weight: bold; color: #2c3e50; background: #ecf0f1; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        if ($_POST) {
            $nombre = $_POST['nombre_vendedor'];
            $cantidad = $_POST['cantidad_vendida'];
            $valor_ventas = $_POST['precio_total'];

            // Reglas de la compañía
            $sueldo_basico = 737000;
            $comision_por_auto = 50000;
            $porcentaje_ventas = 0.05;

            // Cálculos
            $total_comision_autos = $cantidad * $comision_por_auto;
            $total_porcentaje = $valor_ventas * $porcentaje_ventas;
            
            $salario_final = $sueldo_basico + $total_comision_autos + $total_porcentaje;
            ?>

            <h2>Liquidación: <?php echo htmlspecialchars($nombre); ?></h2>
            <div class="detalle">Salario Básico: <b>$<?php echo number_format($sueldo_basico, 0, ',', '.'); ?> COP</b></div>
            <div class="detalle">Comisión por Autos (<?php echo $cantidad; ?>): <b>$<?php echo number_format($total_comision_autos, 0, ',', '.'); ?> COP</b></div>
            <div class="detalle">5% Valor Ventas: <b>$<?php echo number_format($total_porcentaje, 0, ',', '.'); ?> COP</b></div>
            <hr>
            <div class="total">Salario Total: $<?php echo number_format($salario_final, 0, ',', '.'); ?> COP</div>
            
            <br>
            <a href="../index.php" style="color: #e65c2e; text-decoration: none;">← Volver al panel de control</a>
        <?php } ?>
    </div>
</body>
</html>
