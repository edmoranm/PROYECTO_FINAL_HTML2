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
        background-image: url(./images/logos/fondo3.jpg);
    }
</style>

<body class="fondo">
    <?php include 'navbar.php'; ?>

    <header>
        <h1> <img src="./images/farmacia.png" alt="" height="100"> Farmacia</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/FARMACIA/ahorro.webp" alt="" height="300">
                    <h4>Farmacia del Ahorro</h4>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/FARMACIA/batres.png" alt="" height="300">
                    <h4>Farmacias Batres</h4>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/FARMACIA/cruz verde.svg" alt="" height="300">
                    <h4>Farmacia Cruz Verde</h4>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/FARMACIA/meykos.jpg" alt="" height="300">
                    <h4>Farmacia Meykos</h4>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/FARMACIA/galeno.jpg" alt="" height="300">
                    <h4>Farmacias Galeno</h4>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/FARMACIA/simi.png" alt="" height="300">
                    <h4>Farmacia Doctor Simi</h4>
                    
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>