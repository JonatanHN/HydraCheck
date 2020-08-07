<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydraCheck</title>
    <!-- styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/80fa7714d1.js" crossorigin="anonymous"></script>
    <!-- icon -->
    <link rel="icon" href="img/vector/7.svg">
    <meta name="theme-color" content="#2ecc71">
    <meta name="msapplication-navbutton-color" content="#2ecc71">
</head>

<body>
    <header>
        <div class="menu">
            <div class="opcions">
                <a href="javascript:viewmenu()" id="hide">
                    <li class="btn-opcion"><i class="fas fa-bars"></i></li>
                </a>
                <a href="javascript:hidemenu()" class="ocultar" id="show">
                    <li class="btn-opcion"><i class="fas fa-times"></i></li>
                </a>
            </div>
            <img src="img/vector/2.svg" alt="" class="logo">
            <div class="profile">
                <a href="login"><img src="img/png/10.png" alt="" class="loginpro"></a>
            </div>
        </div>
    </header>
    <div class="menuhidden" id="menu-hidden">
        <a href="#">
            <li class="btn-opcion"><i class="fas fa-home"></i></li>
        </a>
        <a href="hydragen/gen">
            <li class="btn-opcion"><i class="fas fa-credit-card"></i></li>
        </a>
        <a href="javascript:themeshow()" class="mostrar" id="mostrar">
            <li class="btn-opcion"><i class="fas fa-adjust"></i></li>
        </a>
        <a href="javascript:themehide()" class="ocultar" id="ocultar">
            <li class="btn-opcion"><i class="fas fa-adjust"></i></li>
        </a>
        <div class="theme" id="theme-opcion">
            <input type="checkbox" name="theme" id="theme">
            <input type="checkbox" name="theme" id="theme">
        </div>
    </div>
    <main class="cc">
        <svg class="good" viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M340.00,-27.13 C110.89,112.98 482.22,180.09 555.01,231.41 L500.00,150.00 L500.00,0.00 Z" style="stroke: none; fill: #2ecc71;"></path>
        </svg>
        <div class="information">
            <img src="img/vector/card1.svg" alt="" class="card1">
            <div class="description" id="app">
                <h1><img src="img/vector/6.svg" alt="" class="title-logo"> {{title}}</h1>
                <br>
                <p>{{infocheck}} <br> {{infocheck2}}</p>
            </div>
        </div>
    </main>
    <!-- <footer class="end">
       <p class="e-1">Todos los derechos reservados por <a href="">hydracheck</a> &copy 2020</p>
    </footer> -->
    <!-- production version, optimized for size and speed -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/vuejs.js"></script>
</body>

</html>
