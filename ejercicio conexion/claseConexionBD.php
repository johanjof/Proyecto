<?php
    
    class conexion{
        public $con;
        public function conectar(){
            $this->con= mysqli_connect("localhost","root","","registro");
            if(!$this->con){
                echo "no se pudo conectar";
            }
        }
        public function getConnect(){
            return $this->con;
        }
        public function __construct(){
            $this->conectar();
        }
    }
          
?>