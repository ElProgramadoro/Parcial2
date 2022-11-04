<?php
ob_start();
require_once("controllers/tienda_controller.php");
require_once("controllers/principal_controller.php");
require_once("controllers/contacts_controller.php");
require_once("controllers/usuario_controller.php");
require_once("utils/seg.php");
if (count($_GET) == 0)
    call_user_func("principal_controller::index");
else {
    $controlador = seg::decodificar($_GET["c"]);
    $metodo = seg::decodificar($_GET["m"]);
    call_user_func($controlador . "_controller::" . $metodo);
}
#principal_controller::index();
if (count($_GET) == 0)
    call_user_func("principal_controller::index");
else {
    $controlador = seg::decodificar($_GET["c"]);
    $metodo = seg::decodificar($_GET["m"]);

    if (isset($_SESSION["token"])&& !isset($_GET["id"])) {
        call_user_func($controlador . "_controller::" . $metodo);
    } elseif ($controlador == "usuario" && $metodo == "validar") {
        call_user_func($controlador . "_controller::" . $metodo);
    } elseif (isset($_SESSION["token"]) && isset($_GET["id"])) {
        call_user_func($controlador . "_controller::" . $metodo); 
    }else {
        call_user_func("principal_controller::index");
    }
}ob_end_flush();
?>