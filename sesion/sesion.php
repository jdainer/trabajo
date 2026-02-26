<?php 
session_start(); 
$_SESSION['nombre'] = 'jhon arias'; // Aquí puedes cambiar el nombre
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesiones - Inicio</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #2c3e50; margin-bottom: 10px; }
        .status { color: #27ae60; font-weight: bold; margin-bottom: 20px; }
        .btn { background: #3498db; color: white; padding: 12px 25px; text-decoration: none; border-radius: 25px; transition: 0.3s; }
        .btn:hover { background: #2980b9; box-shadow: 0 4px 12px rgba(52,152,219,0.3); }
    </style>
</head>
<body>
    <div class="card">
        <h1>Página de Inicio</h1>
        <p class="status">● Sesión cargada con éxito</p>
        <p>Has iniciado una nueva sesión en el servidor.</p>
        <br>
        <a href="pagina2.php" class="btn">Ir a la página 2</a>
    </div>
</body>
</html>