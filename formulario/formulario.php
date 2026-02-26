<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <style>
        /* Estilos generales del cuerpo */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Estilo del contenedor del formulario */
        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        /* Estilo de los campos de texto y el select */
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Para que el padding no afecte el ancho */
        }

        /* Estilo para etiquetas de radio y checkbox */
        label {
            font-size: 14px;
            color: #333;
            cursor: pointer;
        }

        /* Espaciado para los grupos de radio y checkbox */
        .opcion-grupo {
            margin: 10px 0;
        }

        /* Estilo del botón de enviar */
        input[type="submit"] {
            width: 100%;
            background-color: #2ecc71;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: #27ae60;
        }

        br {
            display: none; /* Quitamos los <br> antiguos para usar márgenes de CSS */
        }
    </style>
</head>
<body>

    <form action="recibe.php" name="formulario_contacto" method="post">
        <h2 style="text-align: center; color: #444;">Registro</h2>
        
        <input type="text" placeholder="Nombre:" name="nombre" id="nombre" required>
        <input type="text" placeholder="Edad:" name="edad" id="edad" required>

        <div class="opcion-grupo">
            <label>Sexo:</label><br>
            <input type="radio" name="sexo" id="hombre" value="hombre">
            <label for="hombre">Hombre</label>
            
            <input type="radio" name="sexo" id="mujer" value="mujer">
            <label for="mujer">Mujer</label>
        </div>
<label for="year">Año de nacimiento:</label>
<select name="year" id="year">
    <?php
        // Creamos un ciclo que empiece en 2026 y baje hasta 1950
        for ($i = 2026; $i >= 1950; $i--) {
            echo "<option value='$i'>$i</option>";
        }
    ?>
</select>

        <div class="opcion-grupo">
            <input type="checkbox" name="terminos" value="ok" id="terminos">
            <label for="terminos">Acepto los Términos y Condiciones</label>
        </div>

        <input type="submit" name="btn-enviar" value="Enviar Datos">
    </form>

</body>
</html>