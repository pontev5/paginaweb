<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Tu Empresa de Tecnología</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Tu CSS personalizado -->
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Tu Empresa</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">Sobre Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sección de Productos -->
    <section class="products py-5">
        <div class="container">
            <h2 class="text-center">Nuestros Productos</h2>
            <div class="row">
                <!-- Producto 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="path/to/product.jpg" class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Producto</h5>
                            <p class="card-text">Descripción breve del producto.</p>
                            <a href="#" class="btn btn-primary">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más productos aquí -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light text-center py-3">
        <p>&copy; 2024 Tu Empresa de Tecnología</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
