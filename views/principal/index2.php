<?php
require_once("models/productos.php");
if (session_status() == 1) session_start();
?>

<body>

    <!--este es el carrusel-->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--este es info de la empresa-->

    <div class="container-sm">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="img/top.png" class="img-fluid" alt="...">
                        <h3>Nosotros</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary"><i class="bi bi-eye"> Ver detalle</i></button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="img/top.png" class="img-fluid" alt="...">
                        <h3>Nuestra mision</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary"><i class="bi bi-eye"> Ver detalle</i></button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-body text-dark">
                        <img src="img/top.png" class="img-fluid" alt="...">
                        <h3>Nuestra vision</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary"><i class="bi bi-eye"> Ver detalle</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

            

    <h1 class="text-center">CATALOGO</h1>
    <div class="row">
    <?php
            if(isset($_GET["id"])){
                $obj = new productos($_GET["id"]);
                $producto = $obj->Buscar();
                $n=5;
                foreach ($producto as $cosa) {  
                    if (count($producto) == $n){
                        $n=7;
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/producto<?php echo $producto["id"] ?>.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3><?php echo $producto["id"] ?></h3>
                                <p class="card-text"><?php echo $producto["descripcion"] ?></p>
                                <h4>
                                    <p class="precio"><?php echo $producto["costoCompra"] ?></p>
                                </h4>
                                <hr>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"> ver</i></button>
                                    <!-- <button type="button" class="btn btn-dark">Middle</button> -->
                                    <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"> Comprar</i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } }
            }else{
                foreach (productos::articulos() as $producto) {  ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/producto<?php echo $producto["id"] ?>.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3><?php echo $producto["id"] ?></h3>
                                <p class="card-text"><?php echo $producto["descripcion"] ?></p>
                                <h4>
                                    <p class="precio"><?php echo $producto["costoCompra"] ?></p>
                                </h4>
                                <hr>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-dark"><i class="bi bi-eye"> ver</i></button>
                                    <!-- <button type="button" class="btn btn-dark">Middle</button> -->
                                    <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"> Comprar</i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } 
            }
            ?>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>