<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de IMC</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background-color: #f4f4f4; }
        .formulario-amarillo {
            background-color: #ffc107; /* Color amarillo de la imagen */
            padding: 30px;
            border-radius: 20px;
            width: 450px;
            color: #333;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .campo { display: flex; justify-content: space-between; margin-bottom: 15px; align-items: center; }
        label { font-weight: bold; flex: 1; }
        input[type="text"], input[type="number"] { width: 200px; padding: 6px; border: 1px solid #ccc; border-radius: 4px; }
        .boton-container { display: flex; justify-content: center; margin-top: 10px; }
        input[type="submit"] {
            padding: 10px 60px;
            background: linear-gradient(to bottom, #ffffff, #e0e0e0);
            border: 1px solid #bbb;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            color: #555;
        }
        input[type="submit"]:hover { background: #eee; }
    </style>
</head>
<body>
    <div class="formulario-amarillo">
        <form action="calcular_imc.php" method="post">
            <div class="campo">
                <label>Nombre del paciente:</label>
                <input type="text" name="nombre" required>
            </div>
            <div class="campo">
                <label>Peso en kilogramos:</label>
                <input type="number" name="peso" step="0.1" required min="1">
            </div>
            <div class="campo">
                <label>Estatura en metros:</label>
                <input type="number" name="estatura" step="0.01" required min="0.5">
            </div>
            <div class="boton-container">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>