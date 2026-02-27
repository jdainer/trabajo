<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulador de Crédito - Variedades SDM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header { background-color: #084d6e; color: white; }
        .btn-primary { background-color: #084d6e; border: none; }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="mb-0">Generar Tabla de Amortización</h4>
            </div>
            <div class="card-body">
                <form action="amortizacion.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Cédula del Cliente</label>
                            <input type="text" name="cedula" class="form-control" placeholder="Ej: 1098.123.456" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nombre del Cliente</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ej: Pedro Pérez" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Monto del Crédito (COP)</label>
                            <input type="number" name="monto" class="form-control" step="0.01" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Tasa de Interés Mensual (%)</label>
                            <input type="number" name="tasa" class="form-control" step="0.01" placeholder="Ej: 2" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Plazo (Meses)</label>
                            <input type="number" name="plazo" class="form-control" required>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Generar Tabla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>