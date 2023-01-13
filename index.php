<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba práctica del curso de desarrollo de aplicaciones con tecnologia web">
    <title>Aula Virtual</title>
    <!-- CDN BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- CDN AWESOME ICON -->
    <script src="https://kit.fontawesome.com/690c81679b.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-start">
                <h1 class="ms-2 p-3 fs-3">Aula de Estudio</h1>
            </div>
            <div class="col-lg-6 text-end pe-1 ">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/50px-User_icon_2.svg.png" class="rounded-circle bg-white d-inline" alt="Cinque Terre">
                <h5 class="me-3 p-3 fs-4 d-inline">Usuario</h5>
            </div>
        </div>
    </header>

    <div class='container-fluid'>
        <div class="row">
            <nav class="col-lg-2 dashboard-nav">
                <ul class="nav flex-column ">
                    <li class="nav-item">
                        <a class="active fs-5" aria-current="page" href="#"><i class="fa-solid fa-chalkboard me-2"></i>Aula</a>
                    </li>
                    <li class="nav-item">
                        <a class="fs-5" href="#"><i class="fa-solid fa-file-pen me-2"></i>Apuntes</a>
                    </li>
                    <li class="nav-item">
                        <a class="fs-5" href="#"><i class="fa-solid fa-download me-2"></i>Descargas</a>
                    </li>
                    <li class="nav-item-exit">
                        <a href="#" class="fs-5"><i class="fas fa-sign-out-alt mx-2"></i> Salir </a>
                    </li>
                </ul>
                
                
            </nav>
        
            <div class='col-lg-10 dashboard-content'>
                <div class='p-3'>
                    <h2>Bienvenido al Aula Virutal</h2>
                    <p>Aquí encontrarás los recursos del aula</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
    
    <footer id="sticky-footer" class="flex-shrink-0 py-3">
        <div class="container text-center">
            <h6>Copyright &copy; Aula Virtual</h6>
        </div>
    </footer>
</body>
</html>





