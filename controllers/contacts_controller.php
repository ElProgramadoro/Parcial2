<?php
require_once("models/contacts.php");
class contacts_controller
{
    public static function crear()
    {
        $titulo = "Creacion de comentario de contacto";
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/contacts/create.php");
        require_once("views/template/footer.php");
    }
    public static function mostrar()
    {
        #var_dump($_POST);
        #echo "metodo mostrar";
        if ($_POST) {
                   
            if (!isset($_POST["token"])||!seg::validaSession($_POST["token"])){
                echo "Acceso restringido";
                exit();
            }
            empty($_POST["txtNombre_Contacto"]) ? $error[0] = "el nombre de usuario es necesario" : $nombre = $_POST["txtNombre_Contacto"];
            empty($_POST["txtCorreo_Contacto"]) ? $error[1] = "el correo de contacto es necesario" : $correo = $_POST["txtCorreo_Contacto"];
            empty($_POST["txtComentario_Contacto"]) ? $error[2] = "el comentario de contacto es necesario" : $comentario = $_POST["txtComentario_Contacto"];
            $comentario = $_POST["txtComentario_Contacto"];

            if (isset($error)) {
                $titulo = "Mostrar datos de contacto";
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/contacts/create.php");
                require_once("views/template/footer.php");
            } else {
                $nombre = filter_var($nombre, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $correo = filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $comentario = filter_var($comentario, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                
                $contacto = new contacto($nombre, $correo, $comentario);
                $resultados = $contacto->getDatos();
                $titulo = "Mostrar datos de contacto";
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/contacts/show.php");
                require_once("views/template/footer.php");
            }
        }
    }
}
