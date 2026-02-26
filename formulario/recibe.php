<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Formulario</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h2 { color: #2ecc71; margin-bottom: 20px; }
        .dato {
            background: #f9f9f9;
            padding: 10px;
            margin: 10px 0;
            border-left: 5px solid #2ecc71;
            text-align: left;
            border-radius: 3px;
        }
        .dato b { color: #555; }
        .btn-volver {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn-volver:hover { background-color: #2980b9; }
        .debug {
            font-size: 10px;
            color: #ccc;
            margin-top: 20px;
            word-break: break-all;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    # Verificación de datos
    if (!$_POST) {
        header('Location: http://localhost/formularios/');
        exit;
    }

    # Asignación de variables
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'No definido';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : 'No seleccionado';
    $year = isset($_POST['year']) ? $_POST['year'] : 'No definido';
    $terminos = isset($_POST['terminos']) ? "Aceptados" : "No aceptados";
    ?>

    <h2>¡Datos Recibidos!</h2>
    
    <div class="dato"><b>Nombre:</b> <?php echo htmlspecialchars($nombre); ?></div>
    <div class="dato"><b>Sexo:</b> <?php echo ucfirst($sexo); ?></div>
    <div class="dato"><b>Año de Nacimiento:</b> <?php echo $year; ?></div>
    <div class="dato"><b>Términos:</b> <?php echo $terminos; ?></div>

    <p style="margin-top: 20px;">
        <?php echo "Hola, <strong>$nombre</strong>, has sido registrado con éxito."; ?>
    </p>

<a href="../index.php">Volver al Panel de Control</a>
    <div class="debug">
        <strong>Debug (print_r):</strong><br>
        <?php print_r($_POST); ?>
    </div>
</div>

</body>
</html>