<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

<style>
    .carousel-item img {
        max-height: 1000px;
        object-fit: cover;
    }
    .navbar {
        z-index: 1000;
    }
    .space-below-navbar {
        margin-top: 0px;
    }
    @media (max-width: 412px) {
        .navbar-collapse {
            position: fixed;
            top: 40px;
            left: 0;
            width: 100%;
            overflow-y: auto;
            overflow-x: hidden;
            max-height: calc(50vh - 56px);
        }
    }
</style>

<div class="container-fluid bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">L-GantCode</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Registrate</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="sesion.php">Sesion</a></li>
                                <li><a class="dropdown-item" href="subir2.php">Publicar</a></li>
                                <li><a class="dropdown-item" href="index.php">Comunidad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="indo.php">Administrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="space-below-navbar"></div>

<div id="carouselExampleDark" class="carousel carousel-white slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="./img/6.png" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="text-white">"Elegancia Digital para la Innovación del Futuro"</h2>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="./img/2i.png" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p>.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="proyecto py-5" id="proyecto">
    <div class="container">
        <div class="heading text-center mb-5">
            <h1>EXPANDIRSE ES UNA BUENA OPCION</h1>
            <span>Servicios más Populares</span>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="img/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Scrum master</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="img/img2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Testeo de Sistemas</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="img/img3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Paginas web FullStack</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="img/img4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo de Apps</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="img/img5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CiberSeguridad</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="img/img7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Software Developer</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about py-5" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="img/nosotros.jpg" class="img-fluid" alt="Imagen de nosotros">
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <span>Acerca de nosotros</span>
                    <h2>¿Listo para dar el siguiente paso?</h2>
                    <p>En L-GantCode, nos apasiona la innovación, la creatividad y el servicio al cliente. Nuestra misión es brindar soluciones tecnológicas accesibles para todos y fomentar la sostenibilidad en la industria. Te animamos a que publiques tus proyectos con nosotros.</p>
                    <a href="nosotros.php" class="btn btn-primary">¡CONÓCENOS!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>¡Contáctanos!</h2>
                <form id="contactForm" action="contacto.php" method="POST">
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="contactEmail" name="email" placeholder="L-gantcode23@gmail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="contactMessage" name="message" rows="3" placeholder="Escribe tu mensaje aquí..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="footer bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="logo d-block mb-3">L-Gant<span>Code</span></a>
                <div class="social">
                    <a href="#" class="text-white me-2"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="text-white me-2"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="text-white me-2"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="text-white me-2"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Página</h3>
                <a href="#" class="text-white d-block">Principal</a>
                <a href="#" class="text-white d-block">Nosotros</a>
                <a href="#" class="text-white d-block">Categorías</a>
                <a href="#" class="text-white d-block">Sesión</a>
            </div>
            <div class="col-md-4">
                <h3>Contacto</h3>
                <p>México</p>
                <p>United States</p>
            </div>
        </div>
    </div>
</section>

<div class="copyright bg-dark text-white text-center py-2">
    <p>&#169; Software "2A" - Todos los Derechos Reservados</p>
</div>

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registrarse</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="send.php" method="POST" autocomplete="on">
                    <h2> Bienvenido</h2>
                    <div class="input-group">
                        <div class="input-container">
                            <input type="text" name="name" placeholder="Nombre" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-container">
                            <input type="text" name="lastname" placeholder="Apellido" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" placeholder="Correo" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" placeholder="Contraseña"  required>
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <a href="#">Terminos y Condiciones</a>
                        <input type="submit" name="send" class="btn btn-primary" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
