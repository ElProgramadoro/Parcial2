<?php
    class usuario{
        private $usuario;
        private $password;
        private $salt;
        private $nombre;

        public function __construct($usuario, $password, $salt, $nombre)
        {
            $this->usuario = $usuario;
            
            $this->password = $password;
            
            $this->salt = $salt;
            
            $this->nombre = $nombre;
        }

        public function valida_usuario(){
        
        $tabla[]=["usuario"=>"jperez", "password"=>"3a20f1446c6f63891362acf981cb1a51734191a1", "salt"=>"914zPl", "nombre"=> "Juan Perez"];
        $tabla[]=["usuario"=>"mcastro", "password"=>"c08e3da344ce47d5fbe18a8e4f2b8ae695e1a625", "salt"=>"247Xl9", "nombre"=> "Maria Castro"];
        $tabla[]=["usuario"=>"lsanchez", "password"=>"9b34dd4fa37d37fcdd2bd2e0433e0ced99f86dd5", "salt"=>"6Uz11G", "nombre"=> "Luis Sanchez"];
        foreach($tabla as $t){
            $pass = sha1($this->password.$t["salt"]);
            if($this->usuario == $t["usuario"] && $pass == $t["password"])
                return $t;
        }
        return [];
        
    }

    }

?>