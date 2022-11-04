<?php
require_once("utils/seg.php");
require_once("models/productos.php");
    class tienda_controller{
        public static function tienda() {
            $titulo = "PAGINA PRINCIPAL";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/principal/index2.php");
            require_once("views/template/footer.php");
        }
        public static function validar(){
            if ($_POST) {
                $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $_SESSION["token"] = $_POST["token"] ;
                if (!isset($_POST["token"]) || !seg::validaSession($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }
    
                $id= filter_var($_POST["id"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new productos($id);
                $resultado = $obj->Buscar();
                var_dump($resultado);
                
                if (count($resultado) > 0) {
                   
                    header("location: index.php?c=".seg::codificar("tienda")."&m=". seg::codificar("tienda"). "&id=". $id);
                }else{
                    header("location: index.php?c=".seg::codificar("tienda")."&m=". seg::codificar("tienda"));
                }
            }
        }
    }
?>