<?php

// include 'vista/conexion.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="css/login.css">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/80fa7714d1.js" crossorigin="anonymous"></script>
    <!-- title -->
    <title>Registrate o logueate</title>
    <!-- favicon -->
    <link rel="icon" href="img/vector/7.svg">
    <meta name="theme-color" content="#2ecc71">
    <meta name="msapplication-navbutton-color" content="#2ecc71">
</head>

<body>
    <div class="regresar">
        <a href="index" class="ancla"><i class="fas fa-angle-left reg"></i></a>
    </div>
    <div class="register">
        <form action="vista/dashboard" class="register-form" id="form-register" method="POST">
            <div class="agg-user">
                <a onclick="login()" class="new-user"><i class="fas fa-sign-in-alt plus"></i></a>
            </div>
            <img src="img/vector/7.svg" alt="" class="cien">
            <h2 class="text-one">Registrate</h2>
            <input type="text" name="user" class="camps" placeholder="Nombre" required>
            <input type="email" name="email" class="camps" placeholder="Email" required>
            <input type="password" name="pass" class="camps" placeholder="Password" required>
            <div class="tokens">
                <button class="token">
                    <i class="fab fa-google"></i>
                    oogle
                </button>
                <button class="token">
                    <i class="fab fa-facebook-f"></i>
                    acebook
                </button>
            </div>
            <div class="terms-text">
              <p>confirma los terminos.</p>
            </div>
            <i class="fas fa-angle-down mostrar-terms" id="showterms" onclick="show_terms()"></i>
            <div class="terms" id="terms">
                <p class="terms-text">
                    <input type="checkbox" name="" id="" onclick="goodbyeterms()" required> Estas conciente de los terminos y condiciones de hydracheck al dar click en el check o al registrarte.
                </p>
            </div>
            <button class="send" type="submit">
                <i class="fas fa-paper-plane"></i>
                Registrarte
            </button>
        </form>
        <form action="vista/dashboard" class="register-form" id="form-login" method="GET">
            <div class="agg-user">
                <a onclick="register()" class="new-user"><i class="fas fa-user-plus plus"></i></a>
            </div>
            <img src="img/vector/7.svg" alt="" class="cien">
            <h2 class="text-one">Logueate</h2>
            <input type="email" class="camps" placeholder="Email" required>
            <input type="password" class="camps" placeholder="Password" required>
            <div class="tokens">
                <button class="token">
                    <i class="fab fa-google"></i>
                    oogle
                </button>
                <button class="token">
                    <i class="fab fa-facebook-f"></i>
                    acebook
                </button>
            </div>
            <button class="send" type="submit">
                <i class="fas fa-paper-plane"></i>
                Loguearte
            </button>
        </form>

    </div>
    <script src="js/terms.js"></script>
</body>

</html>
