<?php
if (session_status() == 1) session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comentario
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=" . seg::codificar("contacts") . "&m=" . seg::codificar("crear") ?>">Crear comentario</a></li>
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=" . seg::codificar("tienda") . "&m=" . seg::codificar("tienda") ?>">Tienda</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                        <?php
                        if (isset($_COOKIE["comentario"])) echo $_COOKIE["comentario"];
                        ?>
                        Galletas
                    </a>
                </li>
            </ul>
            <form action="<?php echo "index.php?c=" . seg::codificar("tienda") . "&m=" . seg::codificar("validar") ?>" class="d-flex" method="post">
                <input class="form-control me-2" type="text" name="id" placeholder="Texto de buscado" aria-label="Search" >
                <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php
                if (isset($_SESSION["usuario"])) { ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION["usuario"] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="#">Editar perfil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("cerrar_sesion") ?>">Cerrar sesion</a></li>
                            </ul>
                        </li>


                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login") ?>" tabindex="-1">Login</a>
                        </li>
                    <?php }
                    ?>
                    </ul>
        </div>
    </div>
</nav>