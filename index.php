<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Tarea Rómulo</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f0f2f5; margin: 0; padding: 40px; }
        h1 { text-align: center; color: #1a73e8; margin-bottom: 40px; }
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover { transform: translateY(-10px); }

        .icon { font-size: 50px; margin-bottom: 15px; display: block; }
        
        h3 { color: #333; margin: 10px 0; }
        p { color: #666; font-size: 14px; margin-bottom: 20px; }

        .btn {
            display: inline-block;
            padding: 10px 25px;
            background: #1a73e8;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn:hover { background: #1557b0; }

        /* Colores por tarjeta */
        .c1 { border-top: 5px solid #2ecc71; } /* Formulario */
        .c2 { border-top: 5px solid #3498db; } /* Notas */
        .c3 { border-top: 5px solid #e67e22; } /* Salario */
        .c4 { border-top: 5px solid #f1c40f; } /* IMC */
        .c5 { border-top: 5px solid #9b59b6; } /* Sesiones */
    </style>
</head>
<body>

    <h1>Panel de Proyectos - presentado por jhon arias</h1>

    <div class="grid-container">
        
        <div class="card c1">
            <span class="icon">📝</span>
            <h3>Formulario Base</h3>
            <p>Captura de datos personales (Nombre, Edad, Sexo).</p>
            <a href="formulario/formulario.php" class="btn">Abrir Ejercicio</a>
        </div>

        <div class="card c2">
            <span class="icon">📊</span>
            <h3>Cálculo de Notas</h3>
            <p>Promedio ponderado de parciales (35%, 35%, 30%).</p>
            <a href="parcial/parcial.php" class="btn">Abrir Ejercicio</a>
        </div>

        <div class="card c3">
            <span class="icon">🚗</span>
            <h3>Salario Vendedor</h3>
            <p>Básico de $737.000 + comisiones del 5% y bonos.</p>
            <a href="vendedor/vendedor.php" class="btn">Abrir Ejercicio</a>
        </div>

        <div class="card c4">
            <span class="icon">⚖️</span>
            <h3>Cálculo de IMC</h3>
            <p>Índice de Masa Corporal y estado nutricional.</p>
            <a href="paciente/paciente.php" class="btn">Abrir Ejercicio</a>
        </div>

        <div class="card c5">
            <span class="icon">🔐</span>
            <h3>Sesiones PHP</h3>
            <p>Manejo de variables globales y persistencia.</p>
            <a href="sesion/sesion.php" class="btn">Abrir Ejercicio</a>
        </div>

        <div class="card c5">
            <span class="icon">💱</span>
            <h3>credito amortizacion</h3>
            <p>simulador de credito.</p>
            <a href="credito/credito.php" class="btn">Abrir Ejercicio</a>
        </div>

    </div>

</body>
</html>

