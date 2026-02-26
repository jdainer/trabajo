<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Notas</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; padding-top: 50px; }
        .card { background: #004d5d; color: white; padding: 25px; border-radius: 15px; width: 350px; box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
        .row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
        label { font-weight: bold; font-size: 14px; }
        input[type="number"] { width: 150px; padding: 5px; border: none; border-radius: 3px; }
        input[type="submit"] { 
            width: 100%; padding: 10px; border: none; border-radius: 5px; 
            background: #e0e0e0; cursor: pointer; font-weight: bold; margin-top: 10px;
        }
        input[type="submit"]:hover { background: #cfcfcf; }
    </style>
</head>
<body>
    <div class="card">
        <form action="calcular.php" method="post">
            <div class="row"><label>Parcial 1:</label> <input type="number" step="0.1" name="p1" required min="0" max="5"></div>
            <div class="row"><label>Parcial 2:</label> <input type="number" step="0.1" name="p2" required min="0" max="5"></div>
            <div class="row"><label>Parcial 3:</label> <input type="number" step="0.1" name="p3" required min="0" max="5"></div>
            <div class="row"><label>Examen final:</label> <input type="number" step="0.1" name="ef" required min="0" max="5"></div>
            <div class="row"><label>Trabajo final:</label> <input type="number" step="0.1" name="tf" required min="0" max="5"></div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>