<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOS PEDI</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/logos/icono.png" type="image/x-icon">
</head>


<style>
    .fondo {
        background-image: url(./images/logos/fondo2.jpg);
    }
</style>

<body class="fondo">
    <?php include 'navbar.php'; ?>

    <header>
        <h1> <img src="./images/bebidas.png" alt="" height="100"> Bebidas</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/BEBIDAS/barista.jpg" alt="">
                    <h4>Cafe Barista</h4>
                    <p></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/BEBIDAS/cervezas.png" alt="">
                    <h4>Bebidas Alcoholicas</h4>
                    <p></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/BEBIDAS/images.jpg" alt="">
                    <h4>Licuados Bernar</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/BEBIDAS/star.png" alt="">
                    <h4>Starbucks</h4>
                    <p></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/BEBIDAS/super24.png" alt="">
                    <h4>Super 24</h4>
                    <p></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/BEBIDAS/cafetalito.png" alt="">
                    <h4>El Cafetalito</h4>
                    <p></p>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>