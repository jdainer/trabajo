<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salario Vendedor</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; background-color: #f4f4f4; }
        .formulario-naranja {
            background-color: #e65c2e; /* Color naranja de la imagen */
            padding: 30px;
            border-radius: 20px;
            width: 450px;
            color: black;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .campo { display: flex; justify-content: space-between; margin-bottom: 15px; align-items: center; }
        label { font-weight: bold; flex: 1; }
        input[type="text"], input[type="number"] { width: 200px; padding: 5px; border: 1px solid #ccc; border-radius: 3px; }
        .boton-container { display: flex; justify-content: flex-end; }
        input[type="submit"] {
            padding: 8px 40px;
            background: linear-gradient(to bottom, #ffffff, #e0e0e0);
            border: 1px solid #999;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="formulario-naranja">
        <form action="calcular_salario.php" method="post">
            <div class="campo">
                <label>Nombre del vendedor:</label>
                <input type="text" name="nombre_vendedor" required>
            </div>
            <div class="campo">
                <label>Cantidad automóviles vendidos:</label>
                <input type="number" name="cantidad_vendida" required min="0">
            </div>
            <div class="campo">
                <label>Precio total automóviles vendidos:</label>
                <input type="number" name="precio_total" required min="0">
            </div>
            <div class="boton-container">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>