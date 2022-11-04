<?php
    class productos{
        private $id_producto;
        private $descripcion;
        private $costo_compra;
        private $precio_venta;
        private $cantidad;

        public function __construct($id)
        {
            $this->id = $id;
            #$this->descripcion = $descripcion;
            #$this->costo_compra = $costo_compra;
            #$this->precio_venta = $precio_venta;
            #$this->cantidad = $cantidad;
        }

        public function getId(){
            return $this->id_producto;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }
        public function getCosto(){
            return $this->costo_compra;
        }
        public function getPrecio(){
            return $this->precio_venta;
        }
        public function getCantidad(){
            return $this->cantidad;
        }

        public static function articulos(){
            $articulos[]=["id"=>"1", "descripcion"=>"mesas", "costoCompra"=>"10.00", "precioVenta"=> "70.00", "cantidad"=>"20"];
            $articulos[]=["id"=>"2", "descripcion"=>"sillas", "costoCompra"=>"2.00", "precioVenta"=> "15.00", "cantidad"=>"80"];
            $articulos[]=["id"=>"3", "descripcion"=>"sillones", "costoCompra"=>"40.00", "precioVenta"=> "200.00", "cantidad"=>"20"];
            $articulos[]=["id"=>"4", "descripcion"=>"lamparas", "costoCompra"=>"5.00", "precioVenta"=> "30.00", "cantidad"=>"20"];
            $articulos[]=["id"=>"5", "descripcion"=>"ventiladores", "costoCompra"=>"2.00", "precioVenta"=> "30.00", "cantidad"=>"30"];
            return $articulos;
        }

        public function buscar(){
            $articulos[]=["id"=>"1", "descripcion"=>"mesas", "costoCompra"=>"10.00", "precioVenta"=> "70.00", "cantidad"=>"20"];
            $articulos[]=["id"=>"2", "descripcion"=>"sillas", "costoCompra"=>"2.00", "precioVenta"=> "15.00", "cantidad"=>"80"];
            $articulos[]=["id"=>"3", "descripcion"=>"sillones", "costoCompra"=>"40.00", "precioVenta"=> "200.00", "cantidad"=>"20"];
            $articulos[]=["id"=>"4", "descripcion"=>"lamparas", "costoCompra"=>"5.00", "precioVenta"=> "30.00", "cantidad"=>"20"];
            $articulos[]=["id"=>"5", "descripcion"=>"ventiladores", "costoCompra"=>"2.00", "precioVenta"=> "30.00", "cantidad"=>"30"];
            foreach($articulos as $a){
                if ($this->id == $a["id"]){
                    return $a;
                }
            }return [];
        }
    }

?>