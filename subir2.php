<?php
include('backend/conexionimg.php');
$query = "SELECT * FROM imagenes";
$resultado = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-family: 'Arial Black', sans-serif;
            font-size: 1.5rem;
        }
        .form {
            background-color: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form h1, .form h2 {
            margin-bottom: 1rem;
        }
        .form input[type="submit"] {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1.2rem;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card img {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-title {
            font-size: 1.25rem;
            color: #343a40;
        }
        .card-text {
            color: #6c757d;
        }
        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #e9ecef;
            text-align: center;
        }
        .upload-btn {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>

<div class="container-fluid bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="indexpagina.php">L-GantCode</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <!--   <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="indexpagina.php">Principal</a>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index2.php">Sesion</a></li>
                                <li><a class="dropdown-item" href="subir2.php">Publicar</a></li>
                                <li><a class="dropdown-item" href="index.php">Comunidad</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container my-5">
    <div class="text-center mb-4">
        <button type="button" class="btn btn-primary upload-btn" data-bs-toggle="modal" data-bs-target="#uploadModal">
            Subir Imagen
        </button>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-primary text-center">Servicio</h1>
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($resultado)){ ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="backend/imagenes/<?php echo $row['imagen']; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h5>
                            <p class="card-text"><strong><?php echo $row['descripcion']; ?></strong></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Subir Imagen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="backend/subir.php" method="post" enctype="multipart/form-data" class="form">
                    <div class="form-group">
                        <label for="my-input">Seleccione Una Imagen</label>
                        <input id="my-input" class="form-control" type="file" name="imagen">
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input">Nombre Completo</label>
                        <input id="my-input" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group mt-3">
                        <label for="my-input">Descripcion</label>
                        <input id="my-input" class="form-control" type="text" name="descripcion">
                    </div>
                    <?php if(isset($_SESSION['mensaje'])){ ?>
                    <div class="alert alert-<?php echo $_SESSION['tipo']?> alert-dismissible fade show mt-3" role="alert">
                        <strong><?php echo $_SESSION['mensaje']; ?></strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php session_unset(); } ?>
                    <input type="submit" value="Guardar" class="btn btn-primary mt-3" name="Guardar">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
