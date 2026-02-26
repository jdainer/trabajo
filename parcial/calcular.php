<?php
// 1. Verificamos que los datos hayan sido enviados por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Capturamos las notas del formulario (usamos isset para evitar errores)
    $parcial1 = isset($_POST['p1']) ? $_POST['p1'] : 0;
    $parcial2 = isset($_POST['p2']) ? $_POST['p2'] : 0;
    $parcial3 = isset($_POST['p3']) ? $_POST['p3'] : 0;
    $examen_final = isset($_POST['ef']) ? $_POST['ef'] : 0;
    $trabajo_final = isset($_POST['tf']) ? $_POST['tf'] : 0;

    // 3. PASO A PASO DE LA LÓGICA REQUERIDA:

    // A. Calculamos el promedio de los 3 parciales
    $promedio_parciales = ($parcial1 + $parcial2 + $parcial3) / 3;

    // B. Aplicamos las ponderaciones:
    // 35% del promedio de parciales + 35% del examen final + 30% del trabajo final
    $nota_final = ($promedio_parciales * 0.35) + ($examen_final * 0.35) + ($trabajo_final * 0.30);

    // 4. Determinar si aprobó o no (Mínimo 3.0)
    if ($nota_final >= 3.0) {
        $mensaje = "Aprobó";
        $color = "#27ae60"; // Verde
    } else {
        $mensaje = "No aprobó";
        $color = "#e74c3c"; // Rojo
    }

    // 5. Mostramos el resultado con estilo
    echo "
    <div style='font-family: Arial; text-align: center; margin-top: 50px;'>
        <div style='display: inline-block; padding: 20px; border: 2px solid $color; border-radius: 10px;'>
            <h2 style='color: #333;'>Resultado Final</h2>
            <p style='font-size: 20px;'>Su nota definitiva es: <strong>" . number_format($nota_final, 2) . "</strong></p>
            <h1 style='color: $color;'>$mensaje</h1>
            <a href='../index.php' style='text-decoration: none; color: #3498db;'>Volver al panel de control</a>
        </div>
    </div>";
}
?>
