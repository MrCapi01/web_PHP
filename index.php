<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <title>Deportville</title>
</head>
<body>
    <script src="./public/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary"><!--Barra de navegacion-->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4"><!--Contenido de la pagina-->
        <header>
            <div class="col-md-12"><!--Aqui tenemos 12 columnas-->
                <div class="card card-body bg-secondary text-light">
                    <div class="row">
                        <div class="col-md-4"><!--Aqui tenemos 4 columnas-->
                            <img src="./public/images/Football.jpg" alt="" width="400px">
                        </div>
                        <div class="col-md-8"><!--Aqui tenemos 8 columnas para completar las 12 en que se divide-->
                            <h1>Deportville</h1>
                            <h3>Conoce nuestro equipo</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                Corrupti ab necessitatibus ipsum et illo ipsa nemo, reprehenderit 
                                voluptatibus quos commodi labore laboriosam sint possimus, 
                                consequatur fugiat accusantium! Consequuntur, quieres un porro?
                            </p>
                            <a href="jugadores.php">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="row py-2">
            <div class="col-md-4">
                <div class="card-bg-light">
                    <div class="car-body">
                        <h1>
                            Habilidades
                        </h1>

                        <div class="py-3">
                            <h1>Velocidad</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;">
                                </div>
                            </div>
                        </div>

                        <div class="py-3">
                            <h1>Progreso</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;">
                                </div>
                            </div>
                        </div>

                        <div class="py-3">
                            <h1>Destreza</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%;">
                                </div>
                            </div>
                        </div>

                        <div class="py-3">
                            <h1>Jogga Bonito</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;">
                                </div>
                            </div>
                        </div>

                        <div class="py-3">
                            <h1>Compañerismo</h1>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 30%;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-bg-light">
                                <div class="card-body">
                                    <h1>Conoce nuestro equipo</h1>
                                    <ul>
                                        <h3>Apoyanos en nuestros partidos</h3>
                                        <h5>Temporada 2022-2023</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                            Eius cumque consequatur aperiam expedita neque molestias 
                                            vitae fugit veritatis eum accusantium excepturi odit earum o
                                            bcaecati maiores, at doloremque facere temporibus incidunt.
                                        </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


</body>
</html>