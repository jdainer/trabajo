<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesiones - Página 2</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #eef2f3; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; border-top: 5px solid #3498db; }
        .user-name { color: #3498db; font-size: 24px; font-weight: bold; }
        .error { color: #e74c3c; font-weight: bold; }
        .logout { display: block; margin-top: 30px; color: #95a5a6; text-decoration: none; font-size: 14px; }
        .logout:hover { color: #e74c3c; }
    </style>
</head>
<body>
    <div class="card">
        <?php if (isset($_SESSION['nombre'])): ?>
            <h1>¡Hola, <span class="user-name"><?php echo $_SESSION['nombre']; ?></span>!</h1>
            <p>El servidor te reconoce mediante la sesión activa.</p>
        <?php else: ?>
            <h1 class="error">Acceso Restringido</h1>
            <p>No has iniciado sesión correctamente.</p>
        <?php endif; ?>
        
        <a href="cerrar.php" class="logout">Terminar y Cerrar Sesión</a>
    </div>
</body>
</html>