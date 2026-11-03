<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="card shadow-sm border-0">
            <!-- Encabezado de la tarjeta -->
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3">
                <h5 class="mb-0 fw-bold"><i class="bi bi-people-fill me-2"></i>Lista de Clientes</h5>
                <button class="btn btn-primary btn-sm rounded-2">
                    <i class="bi bi-person-plus-fill me-1"></i> Nuevo Cliente
                </button>
            </div>

            <div class="card-body">
                <!-- Buscador rápido -->
                <div class="row mb-3">
                    <div class="col-md-4 ms-auto">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Buscar cliente...">
                        </div>
                    </div>
                </div>

                <!-- Tabla de Clientes -->
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>DNI / RUC</th>
                                <th>Contacto</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Cliente 1 -->
                            <tr>
                                <td class="fw-bold text-secondary">1</td>
                                <td>
                                    <div class="fw-bold">Ariana Bermúdez</div>
                                    <small class="text-muted">ID: CLI-001</small>
                                </td>
                                <td>74582109</td>
                                <td>
                                    <div><i class="bi bi-envelope me-1 text-muted"></i>ariana.bermudez@email.com</div>
                                    <small class="text-muted"><i class="bi bi-telephone me-1"></i>+51 987 654 321</small>
                                </td>
                                <td>Chimbote</td>
                                <td><span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">Activo</span></td>
                                <td class="text-center">
                                    <button class="btn btn-outline-primary btn-sm me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger btn-sm" title="Eliminar"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>

                            <!-- Cliente 2 -->
                            <tr>
                                <td class="fw-bold text-secondary">2</td>
                                <td>
                                    <div class="fw-bold">Carlos Mendoza Ruiz</div>
                                    <small class="text-muted">ID: CLI-002</small>
                                </td>
                                <td>10458796321</td>
                                <td>
                                    <div><i class="bi bi-envelope me-1 text-muted"></i>cmendoza@empresa.pe</div>
                                    <small class="text-muted"><i class="bi bi-telephone me-1"></i>+51 912 345 678</small>
                                </td>
                                <td>Nuevo Chimbote</td>
                                <td><span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">Activo</span></td>
                                <td class="text-center">
                                    <button class="btn btn-outline-primary btn-sm me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger btn-sm" title="Eliminar"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Pie de tarjeta con paginación -->
            <div class="card-footer bg-white d-flex justify-content-between align-items-center py-3">
                <small class="text-muted">Mostrando 2 de 2 clientes</small>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>