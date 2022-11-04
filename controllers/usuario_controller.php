<?php
    if (session_status()==1)session_start();
?>
<?php
require_once("models/usuario.php");
class usuario_controller
{
    public static function login()
    {
        $msg = isset($_GET["msg"])?$_GET["msg"]:"";
        $titulo = "Login de usuario";
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/usuario/login.php");
        require_once("views/template/footer.php");
    }
    public static function validar()
    {
        if ($_POST) {
            $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $usuario= filter_var($_POST["txtUsuario"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $_SESSION["token"] = $token;
            $_SESSION["Usuario"] = $usuario;
            if (!isset($token) || !seg::validaSession($token)) {

                echo "Acceso restringido";
                exit();
            }
            $password= filter_var($_POST["txtPassword"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $obj = new usuario($usuario, $password, "", "");
            $resultado = $obj->valida_usuario();

            if (count($resultado) > 0) {
                $_SESSION["usuario"] = $resultado["usuario"];
                header("location: index.php?c=" . seg::codificar("contacts") . "&m=" . seg::codificar("crear"));
            }else{
                header("location: index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login")."&msg=Usuario o Password incorrectos!");
                
            }
        }
    }
    public static function cerrar_sesion()
    {
        setcookie("comentario", 0);
        session_destroy();
        header("location: index.php");
    }
}
