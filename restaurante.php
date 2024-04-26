<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOS PEDI</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <!-- aqui agregamos el nabvar -->
 <link rel="icon" href="./images/logos/icono.png" type="image/x-icon">  
</head>
<?php include 'navbar.php'; ?>
<style>
    .fondo {
        background-image: url(./images/logos/fondo.avif);
    }
</style>

<body class="fondo">

<header>
        <h1> <img src="./images/restaurante.png" alt="" height="100"> Restaurante</h1>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/logos/mac.png" class="card-img-top" alt="Restaurante 1" height="300">
                    <div class="card-body">
                        <h5 class="card-title">MC DONALDS</h5>
                        <p class="card-text">Nos dedicamos a servir productos de calidad y gran sabor a
                            nuestros clientes cada vez que visitan losrestaurantes. Entendemos que
                            nuestros clientes tiene necesidades propias cuando buscan un
                            lugar donde comer o beber fuera de su hogar.</p>
                        <a href="mac.php" class="btn btn-primary">Ver Menú</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/logos/campero.png" class="card-img-top" alt="Restaurante 2" height="300">
                    <div class="card-body">
                        <h5 class="card-title">POLLO CAMPERO</h5>
                        <p class="card-text">En nuestros restaurantes te ofrecemos un tierno, jugoso y crujiente, sin lugar a dudas nuestro pollo frito
                            tradicional es la insignia de Pollo Campero. Marinado y empanizado a la perfección brindando
                            una experiencia completa de sabor en cada mordida.</p>
                        <a href="campero.php" class="btn btn-primary">Ver Menú</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/logos/dominos.png" class="card-img-top" alt="Restaurante 3" height="300">
                    <div class="card-body">
                        <h5 class="card-title">DOMINOS PIZZA</h5>
                        <p class="card-text">Está dedicado a llevar a sus clientes la mejor
                            pizza al mejor precio es por eso que ofrecemos cupones para nuestros productos.
                            Ofrecemos los mejores precios en diferentes combinaciones de pizza.</p>
                        <a href="dominos.php" class="btn btn-primary">Ver Menú</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/logos/panda express.jpg" class="card-img-top" alt="Restaurante 4" height="300">
                    <div class="card-body">
                        <h5 class="card-title">PANDA EXPRESS</h5>
                        <p class="card-text">Combinamos magistralmente lo mejor de ambos mundos para dar una experiencia
                            deliciosa. A continuación, descubre lo qué estamos cocinando.</p>
                        <a href="panda.php" class="btn btn-primary">Ver Menú</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/logos/burger.png" class="card-img-top" alt="Restaurante 5" height="300">
                    <div class="card-body">
                        <h5 class="card-title">BURGER KING</h5>
                        <p class="card-text">En Burger King la casa del #Whopper, servimos con orgullo las mejores
                            hamburguesas y una variedad de auténticos productos preparados al momento.</p>
                        <a href="burger.php" class="btn btn-primary">Ver Menú</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="./images/logos/tacobell.png" class="card-img-top" alt="Restaurante 6" height="300">
                    <div class="card-body">
                        <h5 class="card-title">TACO BELL</h5>
                        <p class="card-text">En Taco Bell Guatemala, creemos que la comida rápida puede ser deliciosa,
                            divertida, accesible y de calidad. Nuestro objetivo es ser el lugar preferido de los
                            guatemaltecos para disfrutar con amigos. </p>
                        <a href="tacobell.php" class="btn btn-primary">Ver Menú</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>

</html>