<?php 
session_start(); 
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesión Cerrada</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #2c3e50; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; color: white; }
        .msg { text-align: center; border: 2px dashed #7f8c8d; padding: 30px; border-radius: 10px; }
        a { color: #3498db; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="msg">
        <h2>Cerraste Sesión</h2>
        <p>La información ha sido borrada del servidor de forma segura.</p>
        <a href="../index.php">Volver al Panel de Control</a>
    </div>
</body>
</html>
