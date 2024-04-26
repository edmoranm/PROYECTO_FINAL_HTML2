<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOS PEDI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" href="./images/logos/icono.png" type="image/x-icon">
</head>
<style>
    body {
        background-image: url(./images/logos/fondo.avif);
        font-family: Arial, sans-serif;
    }

    .category {
        text-align: center;
        margin-bottom: 20px;
    }

    .category img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .section {
        text-align: center;
        margin-bottom: 20px;
        color: #fff;
    }

    .section h2 {
        margin-bottom: 20px;
    }

    h2 {
        text-align: center;
        color: #090202;
    }

    .section img {
        max-width: 150px;
        margin-bottom: 10px;
    }

    h1 {
        font-family: "Caveat", cursive;
        font-optical-sizing: auto;
        font-style: normal;
    }
</style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <header>
        <h1>¿Que vas a ordenar? VOS PEDI</h1>
    </header>

    <main class="container">

        <div class="category">
            <div class="row">
                <div class="col-md-4">
                    <a href="restaurante.php">
                        <img src="./images/restaurante.png" class="img-fluid" alt="Restaurantes">
                    </a>
                    <h4>Restaurantes</h4>
                </div>
                <div class="col-md-4">
                    <a href="bebidas.php">
                        <img src="./images/bebidas.png" class="img-fluid" alt="Bebidas">
                    </a>
                    <h4>Bebidas</h4>
                </div>
                <div class="col-md-4">
                    <a href="farmacia.php">
                        <img src="./images/farmacia.png" class="img-fluid" alt="Productos de Farmacia">
                    </a>
                    <h4>Productos de Farmacia</h4>
                </div>
            </div>
        </div>

        <!-- Sección de formas de pago -->
        <div class="section" style="background-color: #007bffaa;">
            <h2>Formas de Pago</h2>
            <img src="./images/pagos.png" alt="Formas de Pago" height="50">
            <img src="./images/efectivo.png" alt="Formas de Pago" height="90">

        </div>

        <!-- Sección de promociones -->
        <div style="background-color: #d8bb389e;">
            <h2>Promociones</h2>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/promociones/promo2.jpg" height="500" width="100" class="d-block w-100" alt="Promoción 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/promociones/promo3.png" height="500" width="100" class="d-block w-100" alt="Promoción 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/promociones/promo.png" height="500" width="100" class="d-block w-100" alt="Promoción 3">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/promociones/promo4.jpg" height="500" width="100" class="d-block w-100" alt="Promoción 4">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/promociones/promo5.jpeg" height="500" width="100" class="d-block w-100" alt="Promoción 5">
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>



    </main>

    <?php include 'footer.php'; ?>

</body>

</html>