<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
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
                <h5 class="mb-0 fw-bold"><i class="bi bi-box-seam me-2"></i>Lista de Productos</h5>
                <button class="btn btn-primary btn-sm rounded-2">
                    <i class="bi bi-plus-circle me-1"></i> Nuevo Producto
                </button>
            </div>

            <div class="card-body">
                <!-- Buscador rápido -->
                <div class="row mb-3">
                    <div class="col-md-4 ms-auto">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Buscar producto...">
                        </div>
                    </div>
                </div>

                <!-- Tabla de Productos -->
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Producto 1 -->
                            <tr>
                                <td class="fw-bold text-secondary">1</td>
                                <td>
                                    <div class="fw-bold">Laptop HP Pavilion</div>
                                    <small class="text-muted">Cód: PROD-001</small>
                                </td>
                                <td>Tecnología</td>
                                <td>$750.00</td>
                                <td><span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">15 unidades</span></td>
                                <td class="text-center">
                                    <button class="btn btn-outline-primary btn-sm me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger btn-sm" title="Eliminar"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>

                            <!-- Producto 2 -->
                            <tr>
                                <td class="fw-bold text-secondary">2</td>
                                <td>
                                    <div class="fw-bold">Teclado Mecánico RGB</div>
                                    <small class="text-muted">Cód: PROD-002</small>
                                </td>
                                <td>Accesorios</td>
                                <td>$45.99</td>
                                <td><span class="badge bg-warning-subtle text-warning border border-warning-subtle rounded-pill">5 unidades</span></td>
                                <td class="text-center">
                                    <button class="btn btn-outline-primary btn-sm me-1" title="Editar"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger btn-sm" title="Eliminar"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>

                            <!-- Producto 3 -->
                            <tr>
                                <td class="fw-bold text-secondary">3</td>
                                <td>
                                    <div class="fw-bold">Monitor Gamer 24"</div>
                                    <small class="text-muted">Cód: PROD-003</small>
                                </td>
                                <td>Tecnología</td>
                                <td>$180.50</td>
                                <td><span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill">0 unidades</span></td>
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
                <small class="text-muted">Mostrando 3 de 3 productos</small>
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