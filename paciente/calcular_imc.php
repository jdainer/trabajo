<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; padding-top: 50px; background: #f4f4f4; }
        .resultado { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 400px; text-align: center; }
        .valor-imc { font-size: 32px; font-weight: bold; margin: 15px 0; }
        .estado { padding: 10px; border-radius: 5px; color: white; font-weight: bold; }
        /* Colores según el estado */
        .bajo { background-color: #3498db; }
        .normal { background-color: #27ae60; }
        .sobrepeso { background-color: #f39c12; }
        .obesidad { background-color: #e74c3c; }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $peso = $_POST['peso'];
            $estatura = $_POST['estatura'];

            // Fórmula: Peso / (Estatura * Estatura)
            $imc = $peso / ($estatura * $estatura);
            $imc_formateado = number_format($imc, 1);

            // Determinar categoría
            if ($imc < 18.5) {
                $estado = "Bajo peso";
                $clase = "bajo";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                $estado = "Peso Normal (Saludable)";
                $clase = "normal";
            } elseif ($imc >= 25 && $imc <= 29.9) {
                $estado = "Sobrepeso";
                $clase = "sobrepeso";
            } else {
                $estado = "Obesidad";
                $clase = "obesidad";
            }

            echo "<h2>Paciente: " . htmlspecialchars($nombre) . "</h2>";
            echo "<p>Tu Índice de Masa Corporal es:</p>";
            echo "<div class='valor-imc'>$imc_formateado</div>";
            echo "<div class='estado $clase'>$estado</div>";
            
            echo "<br><br><a href='../index.php' style='color: #888; text-decoration: none;'>← Volver al panel ded control</a>";
        }
        ?>
    </div>
</body>
</html>