<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="shortcut icon" href="img/ico.ico" type="image/x-icon">
    <title>Proyecto</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg container-fluid colorBuap">
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <img src="img/logo.png" width="50" height="50" class="d-inline-block">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Inicio</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="test.php">Test</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container my-4">
        <!-- <img class="img-fluid rounded mx-auto d-block imgHome mb-4" src="img/home.jpg" alt="Imagen principal"> -->

        <!-- Formulario -->
        <div class="row">
            <div class="col-md-3">
                <form method="POST" action="procesar.php">
                <label class="h5 form-label fw-medium">Datos del paciente:</label>
                    <div class="form-floating mb-3">
                        <input type="number" name="peso" class="form-control" id="peso" placeholder="Peso">
                        <label for="peso">Ingresa tu peso</label>
                        <button type="submit" class="btn btn-primary mt-3">Actualizar peso</button>
                    </div>

                    <h5>Información del medicamento</h5>

                    <div class="mb-3">
                        <label for="marca" class="form-label fw-medium">Selecciona por:</label>
                        <select class="form-select" id="marca" name="marca" aria-label="Selecciona la marca">
                            <option value="marca1">Nombre comercial</option>
                            <option value="marca2">Pricipio activo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="marca" class="form-label fw-medium">Selecciona principio activo:</label>
                        <select class="form-select" id="marca" name="marca" aria-label="Selecciona la marca">
                            <option value="marca1">Marca 1</option>
                            <option value="marca2">Marca 2</option>
                            <option value="marca3">Marca 3</option>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label for="forma" class="form-label fw-medium">Forma farmacéutica:</label>
                        <select class="form-select" id="forma" name="forma" aria-label="Selecciona la forma">
                            <option value="" selected>Selecciona...</option>
                            <option value="tabletas">Tabletas</option>
                            <option value="capsulas">Cápsulas</option>
                            <option value="jarabes">Jarabes</option>
                            <option value="inyectables">Inyectables</option>
                            <option value="cremas">Cremas</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="frecuencia" class="form-control" id="frecuencia"
                            placeholder="Frecuencia">
                        <label for="frecuencia">Frecuencia por día (horas)</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Agregar</button>
                </form>
            </div>

            <!-- Tabla de datos -->
            <div class="col-md-9">
            <p class="text-end fw-semibold">Peso del paciente: <p class="text-end">65kg</p></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Principio activo</th>
                            <th>Forma farmaceutica</th>
                            <th>Via de administración</th>
                            <th>Puntuación Danval para dosis</th>
                            <th>Dosis maxima</th>
                            <th>Dosis prescrita</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Paracetamol</td>
                            <td>Tabletas</td>
                            <td>Oral</td>
                            <td>0</td>
                            <td>800 mg</td>
                            <td>600mg</td>
                            <td><img class="img-fluid rounded mx-auto d-block imgHome mb-4" src="img/alert.png" data-bs-toggle="modal" data-bs-target="#exampleModal"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Paracetamol</td>
                            <td>Tabletas</td>
                            <td>Oral</td>
                            <td>0</td>
                            <td>800 mg</td>
                            <td>600mg</td>
                            <td><img class="img-fluid rounded mx-auto d-block imgHome mb-4" src="img/alert.png" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Advertencias</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo labore eveniet quod explicabo vero expedita, recusandae nam molestias, distinctio, facilis dolorum ullam placeat nihil. Sit sunt maxime quas vel inventore.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
    </div>

    <!-- canvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Consideraciones</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, aspernatur deserunt. Nobis veniam, laboriosam distinctio eius, error ut molestiae recusandae doloremque repellendus et nisi eligendi vel! Beatae nam pariatur impedit!
        </div>
    </div>

    <!-- Footer -->
    <div class="container mt-5">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="text-muted">© 2024 Team Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" target="_blank" href="https://twitter.com/CpNole"><i
                            class="fa-brands fa-twitter"></i></a></li>
                <li class="ms-3"><a class="text-muted" target="_blank"
                        href="https://www.facebook.com/orestes.calvariopalafox.7/"><i
                            class="fa-brands fa-facebook"></i></a></li>
                <li class="ms-3"><a class="text-muted" target="_blank"
                        href="https://www.linkedin.com/in/orestes-calvario-palafox-ba22b5207/"><i
                            class="fa-brands fa-linkedin"></i></a></li>
                <li class="ms-3"><a class="text-muted" target="_blank" href="https://www.instagram.com/orestes_1711/"><i
                            class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    
</body>

</html>