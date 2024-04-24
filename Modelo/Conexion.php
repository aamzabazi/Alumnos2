<?php
    class Conexion{
        public $con;
        public function __construct(){
            $this->con=new mysqli('localhost','root','','Alumnos');
        }
    }

?>