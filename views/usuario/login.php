<div class="container-sm">
    <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <?php if($msg !=""){?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ERROR</strong> <?php echo $msg?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


             <?php }?>   
            <form action="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("validar")?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario" id="exampleInputText1" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="txtPassword" id="exampleInputText1" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>
                <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
                <button type="submit" class="btn btn-success">Entrar</button>
            </form>
        </div>
    </div>
</div>