<?php
    class seg{
        public static function codificar($p){
            return base64_encode($p);
        }
        public static function decodificar($p){
            return base64_decode($p);
        }
        public static function getToken(){
            if (isset($_SESSION["token"]))
                return $_SESSION["token"];

            $token = sha1(random_bytes(100));
            $_SESSION["token"] = $token;
            return $token;
        }
        public static function validaSession($token){
            #if ($token != $_SESSION["token"])
            if (!isset($_SESSION["token"]) || !hash_equals($token,$_SESSION["token"]))
                return false;

            return true;
        }
        public static function comentarioss()
        {
            
            header("location: index.php?c=" . seg::codificar("contacts") . "&m=" . seg::codificar("crear").var_dump($_POST));
            
            if (!isset($_COOKIE["comentario"])) {
                setcookie("comentario", 1);
            } else {
                setcookie("comentario", $_COOKIE["comentario"] + 1);
                
            }
        }
    }
?>