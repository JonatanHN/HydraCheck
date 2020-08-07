<!doctype html>
<html lang="en">

<?php require 'head.php'; ?>

<body class="dark-edition">
    <?php require 'wrapper.php' ?>
            <?php require 'nav.php'; ?>
                <div class="container-fluid">
                    <div class="row">
                    <!-- your content here -->
                    <div class="col-md-12 paquetes">
                        <div class="paq">
                            <img src="img/vector/1.svg" alt="" class="img-paq">
                            <div class="desc-paq">
                                <span class="title-paq">
                                    Premium Basic
                                </span>
                                <p class="inf-paq">
                                    Precio Accesible,Tus creditos,tus lives, son justos.
                                </p>
                                <button class="comprar">
                                    comprar $20 USD
                                </button>
                            </div>
                        </div>
                        <div class="paq">
                            <img src="img/vector/1.svg" alt="" class="img-paq">
                            <div class="desc-paq">
                                <span class="title-paq">
                                    Premium Avanced
                                </span>
                                <p class="inf-paq">
                                    Precio Accesible,Tus creditos,tus lives, son justos.
                                </p>
                                <button class="comprar">
                                    Comprar $30 USD
                                </button>
                            </div>
                        </div>
                        <div class="paq">
                            <img src="img/vector/1.svg" alt="" class="img-paq">
                            <div class="desc-paq">
                                <span class="title-paq">
                                    Premium Enterprise
                                </span>
                                <p class="inf-paq">
                                    Precio Accesible,Tus creditos,tus lives, son justos.
                                </p>
                                <button class="comprar">
                                    Comprar $10 USD
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>
    <!-- plugin -->
    <?php 

    require 'plugin.php'; 
    require 'scripts.php';

    ?>
</body>

</html>