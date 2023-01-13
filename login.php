<?php
session_start();
//Llama al archivo
include_once("conexion.php");
//Llama a la clase conexion
$conexion = new DBConnection();
//Realiza la conexion
$conectar = $conexion->conectar();
//Llama al arhivo usuarios
include_once("usuarios.php");
//Llamamos a la clase usuario
$CUsuario = new Usuario($conectar);


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

<body class="contact">
    <header class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="my-2 p-3 fs-4">Bienvenid@ al Aula Virtual</h1>
            </div>
        </div>
    </header>
    <div class="container contact mt-5">
        <div class="row">
            <aside class="col-sm-12 col-lg-3 aside d-flex align-items-center justify-content-center">
                <div class="contact-info text-center">
                    <i class="fa-solid fa-rocket fs-1"></i>
                    <h2>Inicia sesión</h2>
                </div>
            </aside>
            <section class="col-sm-12 col-lg-9 data px-5">
                <form method="post" action="login.php" id="form-user" class="row g-3 needs-validation px-5 my-5" autocomplete="off">
                    <div class="contact-form needs-validation ">
                        <div class="form-group p-5 align-content-center">
                            <div class="col-sm-12 px-5">
                                <label class="control-label"><i class="fa-solid fa-user me-2"></i>Usuario:</label>
                                <input type="text" class="form-control area" placeholder="Nombre de usuario" name="nombre" autocomplete="off">
                            </div>
                            <div class="col-sm-12 px-5">
                                <label class="control-label mt-3"><i class="fa-solid fa-envelope me-2"></i>Contraseña:</label>
                                <input type="password" class="form-control area" placeholder="Contraseña" name="pass" autocomplete="off">
                            </div>
                            <div class="col-sm-12 mt-4 text-center">
                                <a href="#">¿Has olvidado la contraseña?</a>
                            </div>
                            <div class="col-sm-12 mt-4 text-center">
                                <input type="hidden" name="enviar" value="form-user">
                                <input type="submit" class="btn btn-warning w-50" name="login" value="Login"></input>
                            </div>
                            <div class="col-sm-12 mt-4 text-center">
                                <p>¿Eres nuevo aquí?<a href="registro.html" class="ms-3">Regístrate</a></p>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST["enviar"])) {
                    $datosUsuario = $CUsuario->comprobarUsuario($_POST['nombre']);

                    if ($datosUsuario[0][1] == $_POST['nombre']) {
                        if ($datosUsuario[0][4] == md5($_POST['pass'])) {
                            $_SESSION['idUsuario'] = $datosUsuario[0][0];
                            echo print_r($_SESSION['idUsuario']);
                            echo "Entramos en el panel";
                            header('Location: index.php');
                        } else {
                            echo "La contraseña no es correcta";
                        }
                    } else {
                        echo "El usuario no es correcto";
                    }
                }
                ?>
            </section>
        </div>
    </div>
    <footer id="sticky-footer" class="flex-shrink-0 py-3">
        <div class="container text-center">
            <h6>Copyright &copy; Aula Virtual</h6>
        </div>
    </footer>
</body>

</html>