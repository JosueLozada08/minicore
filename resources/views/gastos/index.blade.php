<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Gastos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Encabezado -->
        <h1 class="text-center mb-4">Gestión de Gastos</h1>

        <!-- Formulario de Filtrado -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <form method="GET" action="{{ route('gastos.index') }}" class="row g-3">
                    <div class="col-md-5">
                        <label for="fecha_inicio" class="form-label">Fecha Inicio:</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ request('fecha_inicio') }}" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <label for="fecha_fin" class="form-label">Fecha Fin:</label>
                        <input type="date" id="fecha_fin" name="fecha_fin" value="{{ request('fecha_fin') }}" class="form-control">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary w-100">Filtrar</button>
                    </div>
                </form>
                <div class="text-end mt-3">
                    <!-- Botón para Limpiar -->
                    <a href="{{ route('gastos.index') }}" class="btn btn-secondary">Limpiar</a>
                </div>
            </div>
        </div>

        <!-- Resultados -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="text-center">Resultados</h2>

                <!-- Mostrar el Total Calculado -->
                <p class="text-end fs-5"><strong>Total de Gastos en el Rango:</strong> ${{ number_format($totalGastos, 2) }}</p>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Descripción</th>
                                <th>Monto</th>
                                <th>Empleado</th>
                                <th>Departamento</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($gastos as $gasto)
                                <tr>
                                    <td>{{ $gasto->descripcion }}</td>
                                    <td>${{ number_format($gasto->monto, 2) }}</td>
                                    <td>{{ $gasto->empleado->nombre }}</td>
                                    <td>{{ $gasto->empleado->departamento->nombre }}</td>
                                    <td>{{ $gasto->fecha }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No se encontraron gastos en este rango de fechas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
