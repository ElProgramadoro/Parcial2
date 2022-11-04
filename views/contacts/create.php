<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtNombre_Contacto">
                    <div id="textHelp" class="form-text"><?php echo isset($error[0])?$error[0]:""?></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtCorreo_Contacto">
                    <div id="textHelp" class="form-text"><?php echo isset($error[1])?$error[1]:""?></div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtComentario_Contacto"></textarea>
                    <div id="textHelp" class="form-text"><?php echo isset($error[2])?$error[1]:""?></div>
                </div>
                <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
                <button type="submit" class="btn btn-success">enviar</button>
                <button type="reset" class="btn btn-danger">borrar datos</button>
                <?php if($_POST){
                    #header("location: index.php?c=" . seg::codificar("contacts") . "&m=" . seg::codificar("mostrar").var_dump($_POST));
                $obj=new seg(); $h=$obj->comentarioss(); }?>
            </form>
        </div>
    </div>
</div>