<?php
include 'config.php';
if(isset($_POST['btnRegistrar'])){

    $conn = connect();
    $nombre = $_POST['nombre'];
    $ap_pat = $_POST['ap_pat'];
    $ap_mat = $_POST['ap_mat'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $conf_contraseña = $_POST['conf_contraseña'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];

    $conn->query("SELECT * FROM 'usuarios'(nombre, ap_pat, ap_mat, usuario, contraseña, conf_contraseña, email, numero) value ('$nombre', '$ap_pat', '$ap_mat', '$usuario', '$contraseña', '$conf_contraseña', '$email', '$numero')");
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tecno live</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://www.facebook.com/profile.php?id=61555688743403" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                TecnoLive
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                    <a class="nav-icon position-relative text-decoration-none" href="registrate.php">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</head>
<body>
    <style>
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 15px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro</h1>
        <form method="POST" onsubmit="handleSubmit(event)">
            <div class="form-group">
                <input type="text" id="booktable" name="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <input type="text" id="booktable" name="ap_pat" class="form-control" placeholder="Apellido paterno" required>
            </div>
            <div class="form-group">
                <input type="text" id="booktable" name="ap_mat" class="form-control" placeholder="Apellido materno" required>
            </div>
            <div class="form-group">
                <input type="text" id="booktable" name="usuario" class="form-control" placeholder="Usuario" required>
            </div>
            <div class="form-group">
                <input type="password" id="booktable" name="contraseña" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <input type="password" id="booktable" name="conf_contraseña" class="form-control" placeholder="Confirmar contraseña" required>
            </div>
            <div class="form-group">
                <input type="email" id="booktable" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="number" id="booktable" name="numero" class="form-control" placeholder="Número de teléfono" required>
            </div>
            <div class="form-group">
                <button class="btn" type="submit">Registrar</button>
            </div>
        </form>
    </div>
  

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            alert('Gracias por su registro');
            window.location.href = 'index.php';
        }
    </script>
</body>
</html>